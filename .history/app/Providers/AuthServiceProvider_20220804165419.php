<?php

namespace App\Providers;

use App\Policies\CategoryPolicy;
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

        Gate::define('list_category',[CategoryPolicy::class,'view']);
        Gate::define('add_category',[CategoryPolicy::class, 'create']);
        Gate::define('edit_category',[CategoryPolicy::class, 'update']);
        Gate::define('delete_category',[CategoryPolicy::class, 'delete']);

        Gate::define('add_category',function($user){
           return  $user->checkPermissionAccess('category_add');
        });
        Gate::define('edit_category',function($user){
           return  $user->checkPermissionAccess('category_edit');
        });
        Gate::define('delete_category',function($user){
           return  $user->checkPermissionAccess('category_delete');
        });

        Gate::define('list_menu', function ($user) {
            return  $user->checkPermissionAccess(config('permissions.access.list-menu'));
        });

    }
}
