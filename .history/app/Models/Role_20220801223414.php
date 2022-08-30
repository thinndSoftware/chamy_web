<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function rolesChildrent()
    {
        return $this->hasMany(Role::class,'parent_id')
    }
}
