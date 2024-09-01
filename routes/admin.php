<?php

use App\Admin\Controllers\SiteUserController;

Route::middleware(['web', 'admin'])->prefix('admin')->group(function () {
    Route::resource('site-users', SiteUserController::class);
});
// routes/web.php

use App\Admin\Controllers\ContactController;

Route::middleware(['web', 'admin'])->prefix('admin')->group(function () {
    Route::resource('contacts', ContactController::class);
});

use App\Admin\Controllers\BooksController;

Route::middleware(['web', 'admin'])->prefix('admin')->group(function () {
    Route::resource('books', BooksController::class);
});


use App\Admin\Controllers\AdminsController;

Route::middleware(['web', 'admin'])->prefix('admin')->group(function () {
    Route::resource('admins', AdminsController::class);
});
