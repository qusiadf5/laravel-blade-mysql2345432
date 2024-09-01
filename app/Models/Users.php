<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'UserController';
        // تعريف العلاقة العكسية من جانب المستخدم، إذا لزم الأمر
        public function admins()
        {
            return $this->hasMany(Admin::class, 'email', 'email');
        }
}
