<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Show;
use App\Models\SiteUser;

class SiteUserController extends AdminController
{
    protected $title = 'Site Users';

    protected function grid()
    {
        $grid = new Grid(new SiteUser());

        $grid->column('id', 'ID');
        $grid->column('name', 'Name');
        $grid->column('email', 'Email');
        $grid->column('created_at', 'Created At');
        $grid->column('updated_at', 'Updated At');

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new SiteUser());

        $form->text('name', 'Name')->rules('required');
        $form->email('email', 'Email')->rules('required');
        $form->password('password', 'Password')->rules('required');

        return $form;
    }

    protected function detail($id)
    {
        $show = new Show(SiteUser::findOrFail($id));

        $show->field('id', 'ID');
        $show->field('name', 'Name');
        $show->field('email', 'Email');
        $show->field('created_at', 'Created At');
        $show->field('updated_at', 'Updated At');

        return $show;
    }
}
