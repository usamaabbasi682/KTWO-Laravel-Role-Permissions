<?php

namespace App\Policies;

use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PermissionPolicy
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
    public function view(User $user, Permission $permission): bool
    {
        if ((Permission::where('name','view-permission')->exists() && $user->hasPermissionTo('view-permission')) || $user->hasRole('admin')) {
            return true;
        } else { return false; }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if ((Permission::where('name','create-permission')->exists() && $user->hasPermissionTo('create-permission')) || $user->hasRole('admin')) {
            return true;
        } else { return false; }
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Permission $permission): bool
    {
        if ((Permission::where('name','update-permission')->exists() && $user->hasPermissionTo('update-permission')) || $user->hasRole('admin')) {
            return true;
        } else { return false; }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Permission $permission): bool
    {
        if ((Permission::where('name','delete-permission')->exists() && $user->hasPermissionTo('delete-permission')) || $user->hasRole('admin')) {
            return true;
        } else { return false; }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Permission $permission): bool
    {
        // return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Permission $permission): bool
    {
        // return false;
    }
}
