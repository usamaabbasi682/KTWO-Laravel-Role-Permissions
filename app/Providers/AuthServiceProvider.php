<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\{
    ModelPermit,
    User,
};
use App\Policies\{
    ModelPermitPolicy,
    PermissionPolicy,
    RolePolicy,
    UserPolicy,
};

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        ModelPermit::class => ModelPermitPolicy::class,
        Permission::class => PermissionPolicy::class,
        User::class => UserPolicy::class,
        Role::class => RolePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
