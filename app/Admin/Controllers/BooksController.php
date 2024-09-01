<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Show;
use App\Models\Books;

class BooksController extends AdminController
{
    protected $title = 'Books';

    protected function grid()
    {
        $grid = new Grid(new Books());

        $grid->column('id', 'ID');
        $grid->column('title', 'Title');
        $grid->column('author', 'Author');
        $grid->column('category', 'Category');
        $grid->column('cover_image', 'Cover Image')->image();
        $grid->column('file', 'File')->display(function ($file) {
            return "<a href='/storage/$file' target='_blank'>Download</a>";
        });
        $grid->column('created_at', 'Created At');
        $grid->column('updated_at', 'Updated At');

        return $grid;
    }

    protected function form()
    {
        $form = new Form(new Books());

        $form->text('title', 'Title')->rules('required');
        $form->text('author', 'Author')->rules('required');
        $form->text('category', 'Category')->rules('required');
        $form->image('cover_image', 'Cover Image')->rules('required')->move('uploads/covers');
        $form->file('file', 'File')->rules('required')->move('uploads/files');        
        $form->text('section', 'Section')->rules('required');
        $form->text('language', 'Language')->rules('required');
        $form->number('pages', 'Pages')->rules('required');
        $form->text('file_size', 'File Size')->rules('required');
        $form->text('file_type', 'File Type')->rules('required');
        $form->date('publication_date', 'Publication Date')->rules('required');
        $form->textarea('description', 'Description')->rules('required');

        return $form;
    }

    protected function detail($id)
    {
        $show = new Show(Books::findOrFail($id));

        $show->field('id', 'ID');
        $show->field('title', 'Title');
        $show->field('author', 'Author');
        $show->field('category', 'Category');
        $show->field('cover_image', 'Cover Image')->image();
        $show->field('file', 'File')->as(function ($file) {
            return "<a href='$file' target='_blank'>Download</a>";
        })->unescape();
        $show->field('section', 'Section');
        $show->field('language', 'Language');
        $show->field('pages', 'Pages');
        $show->field('file_size', 'File Size');
        $show->field('file_type', 'File Type');
        $show->field('publication_date', 'Publication Date');
        $show->field('description', 'Description');
        $show->field('created_at', 'Created At');
        $show->field('updated_at', 'Updated At');

        return $show;
    }
}
