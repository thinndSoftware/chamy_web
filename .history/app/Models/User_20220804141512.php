<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_role','user_id','role_id');
    }
    public function checkPermissionAccess($permissionCheck)
    {
        //use login có quyền add sửa danh mục và xem menu
        // B1 lấy tất cả các quyền  của user đang login vào hệ thống
        // B2 So sanh giá trị đua vào router hiện tại xem có tồn tại trong các quyền mà mình lấy được hay không
        $roles = auth()->user()->roles;
        foreach ($roles as $role) {
            $permission = $role->permissions;
            dd($permission->contains('key_code', $permissionCheck);
            if($permission->contains('key_code', $permissionCheck)){
                return true;
            }
        }
        return false;
    }
}
