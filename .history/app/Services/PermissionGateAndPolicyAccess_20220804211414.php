<?php
    namespace App\Services;

use Illuminate\Auth\Access\Gate;

    class PermissionGateAndPolicyAccess{
        public function setGateAndPolicyAccsess()
        {
            $this->defineGateCategory();
        }
        public function defineGateCategory()
        {
        Gate::define('list_category', [CategoryPolicy::class, 'view']);
        Gate::define('add_category', [CategoryPolicy::class, 'create']);
        Gate::define('edit_category', [CategoryPolicy::class, 'update']);
        Gate::define('delete_category', [CategoryPolicy::class, 'delete']);
        }
    }
