<?php

namespace App\Policies;

use Spatie\Permission\Models\Permission;
use Illuminate\Auth\Access\Response;
use App\Models\ModelPermit;
use App\Models\User;

class ModelPermitPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ModelPermit $modelPermit): bool
    {
        if ((Permission::where('name','view-model')->exists() && $user->hasPermissionTo('view-model')) || $user->hasRole('admin')) {
            return true;
        } else { return false; }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ((Permission::where('name','create-model')->exists() && $user->hasPermissionTo('create-model')) || $user->hasRole('admin')) {
            return true;
        } else { return false; }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ModelPermit $modelPermit): bool
    {
        if ((Permission::where('name','update-model')->exists() && $user->hasPermissionTo('update-model')) || $user->hasRole('admin')) {
            return true;
        } else { return false; }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ModelPermit $modelPermit): bool
    {
        if ((Permission::where('name','delete-model')->exists() && $user->hasPermissionTo('delete-model')) || $user->hasRole('admin')) {
            return true;
        } else { return false; }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ModelPermit $modelPermit): bool
    {
        // return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ModelPermit $modelPermit): bool
    {
        // return false;
    }
}
