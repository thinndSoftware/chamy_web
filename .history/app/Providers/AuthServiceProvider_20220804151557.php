<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('list_category',function($user){
           return  $user->checkPermissionAccess(config('permissions.access.list-category'));
        });
        Gate::define('add_category',function($user){
           return  $user->checkPermissionAccess(config('permissions.access.add-category'));
        });
        Gate::define('edit_category',function($user){
           return  $user->checkPermissionAccess(config('permissions.access.edit-category'));
        });
        Gate::define('delete_category',function($user){
           return  $user->checkPermissionAccess(config('permissions.access.delete-category'));
        });
        Gate::define('list_menu', function ($user) {
            return  $user->checkPermissionAccess(config('permissions.access.list-menu'));
        });
        Gate::define('list_menu', function ($user) {
            return  $user->checkPermissionAccess(config('permissions.access.list-menu'));
        });
    }
}
