<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Show;
use App\Models\Contact;

class ContactController extends AdminController
{
    protected $title = 'Contacts';

    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('id', 'ID');
        $grid->column('name', 'Name');
        $grid->column('email', 'Email');
        $grid->column('created_at', 'Created At');
        $grid->column('updated_at', 'Updated At');

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new Contact());

        $form->text('name', 'Name')->rules('required');
        $form->email('email', 'Email')->rules('required');
        $form->password('password', 'Password')->rules('required');

        return $form;
    }

    protected function detail($id)
    {
        $show = new Show(Contact::findOrFail($id));

        $show->field('id', 'ID');
        $show->field('name', 'Name');
        $show->field('email', 'Email');
        $show->field('created_at', 'Created At');
        $show->field('updated_at', 'Updated At');

        return $show;
    }
}
