<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Show;
use App\Models\Admin;

class AdminsController extends AdminController
{
    protected $title = 'Admins';

    protected function grid()
    {
        $grid = new Grid(new Admin());
    
        $grid->column('id', 'ID');
        $grid->column('email', 'Email');
    
        // عرض اسم المستخدم بناءً على العلاقة مع User
        $grid->column('user.name', 'Name')
             ->display(function () {
                 return $this->user ? $this->user->name : 'N/A';
             });
    
        // عرض تواريخ الإنشاء والتحديث بتنسيق مناسب
        $grid->column('user.created_at', 'User Created At')
             ->display(function () {
                 return $this->user ? $this->user->created_at->format('Y-m-d H:i:s') : 'N/A';
             });
    
        $grid->column('user.updated_at', 'User Updated At')
             ->display(function () {
                 return $this->user ? $this->user->updated_at->format('Y-m-d H:i:s') : 'N/A';
             });
    
        $grid->column('created_at', 'Created At')
             ->display(function () {
                 return $this->created_at->format('Y-m-d H:i:s');
             });
    
        $grid->column('updated_at', 'Updated At')
             ->display(function () {
                 return $this->updated_at->format('Y-m-d H:i:s');
             });
    
        return $grid;
    }
    

    protected function form()
    {
        $form = new Form(new Admin());

        $form->email('email', 'Email')->rules('required|exists:users,email'); // التحقق من وجود الإيميل في جدول users

        return $form;
    }

    protected function detail($id)
{
    $show = new Show(Admin::findOrFail($id));

    $show->field('id', 'ID');
    $show->field('email', 'Email');

    // عرض اسم المستخدم بناءً على العلاقة مع User
    $show->field('user.name', 'Name')
         ->as(function () {
             return $this->user ? $this->user->name : 'N/A';
         });

    // عرض تواريخ الإنشاء والتحديث بتنسيق مناسب
    $show->field('user.created_at', 'User Created At')
         ->as(function () {
             return $this->user ? $this->user->created_at->format('Y-m-d H:i:s') : 'N/A';
         });

    $show->field('user.updated_at', 'User Updated At')
         ->as(function () {
             return $this->user ? $this->user->updated_at->format('Y-m-d H:i:s') : 'N/A';
         });

    return $show;
}

}
