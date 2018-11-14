<?php
/**
 * Note: 权限
 * User: Liu
 * Date: 2018/4/20
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleAccess extends Model
{
    public $table = 'role_access';

    public $timestamps = false;

    public $fillable = [
        'name',
        'route'
    ];

}