<?php

namespace App\Providers;

use App\Policies\CategoryPolicy;
use App\Policies\MenuPolicy;
use App\Policies\ProductPolicy;
use App\Policies\SettingPolicy;
use App\Policies\SliderPolicy;
use App\Policies\UserPolicy;
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

        Gate::define('list_product', [ProductPolicy::class, 'view']);
        Gate::define('add_product', [ProductPolicy::class, 'create']);
        Gate::define('edit_product', [ProductPolicy::class, 'update']);
        Gate::define('delete_product', [ProductPolicy::class, 'delete']);

        Gate::define('list_slider', [SliderPolicy::class, 'view']);
        Gate::define('add_slider', [SliderPolicy::class, 'create']);
        Gate::define('edit_slider', [SliderPolicy::class, 'update']);
        Gate::define('delete_slider', [SliderPolicy::class, 'delete']);

        Gate::define('list_setting', [SettingPolicy::class, 'view']);
        Gate::define('add_setting', [SettingPolicy::class, 'create']);
        Gate::define('edit_setting', [SettingPolicy::class, 'update']);
        Gate::define('delete_setting', [SettingPolicy::class, 'delete']);

        Gate::define('list_user', [UserPolicy::class, 'view']);
        Gate::define('add_user', [UserPolicy::class, 'create']);
        Gate::define('edit_user', [UserPolicy::class, 'update']);
        Gate::define('delete_user', [UserPolicy::class, 'delete']);
    }
}
