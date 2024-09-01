<?php

// تضمين autoloader الخاص بـ Composer
require __DIR__.'/../vendor/autoload.php';

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

// إنشاء دور جديد
$role = Role::create(['name' => 'admin']);

// إنشاء صلاحية جديدة
$permission = Permission::create(['name' => 'edit articles']);

// إعطاء الصلاحية للدور
$role->givePermissionTo($permission);

// تعيين الدور لمستخدم
$user = User::find(1);
$user->assignRole('admin');

echo "Role and permission setup completed.";
