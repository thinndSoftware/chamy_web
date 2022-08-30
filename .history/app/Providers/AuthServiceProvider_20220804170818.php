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

        Gate::define('list_menu', [MenuPolicy::class, 'view']);
        Gate::define('add_menu', [MenuPolicy::class, 'create']);
        Gate::define('edit_menu', [MenuPolicy::class, 'update']);
        Gate::define('delete_menu', [MenuPolicy::class, 'delete']);




    }
}
