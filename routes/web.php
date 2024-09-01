<?php
require __DIR__.'/admin.php';

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/library', function () {
    return view('library');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/all_video', function () {
    return view('all_video');
});
Route::get('/center_fatwas', function () {
    return view('center_fatwas');
});
Route::get('/download', function () {
    return view('download');
});
Route::get('/fatwas', function () {
    return view('fatwas');
});
Route::get('/fatwas', function () {
    return view('fatwas');
});
Route::get('/posts', function () {
    return view('post');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/post_book', function () {
    return view('post_book');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

use App\Http\Controllers\Auth\SocialiteController;

Route::get('auth/google', [SocialiteController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [SocialiteController::class, 'handleGoogleCallback']);

Route::get('auth/discord', [SocialiteController::class, 'redirectToDiscord']);
Route::get('auth/discord/callback', [SocialiteController::class, 'handleDiscordCallback']);

use Illuminate\Support\Facades\Auth;

// المسار للملف الشخصي
Route::get('/profile', function () {
    if (Auth::check()) {
        return view('profile'); // تأكد من أن 'profile' هو اسم عرض Blade الخاص بك
    } else {
        return redirect('/login'); // توجيه غير المسجلين إلى صفحة تسجيل الدخول
    }
});


Route::post('/login', function () {
    if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
        return redirect('/profile');
    }
    return back()->withErrors(['email' => 'Invalid credentials']);
});

Route::get('/profile', function () {
    if (Auth::check()) {
        return view('profile'); // تأكد من أن 'profile' هو اسم عرض Blade الخاص بك
    } else {
        return redirect('/login'); // توجيه غير المسجلين إلى صفحة تسجيل الدخول
    }
})->name('profile'); // قم بتسمية المسار بـ 'profile'

use App\Http\Controllers\ProfileController;


// routes/web.php

use App\Http\Controllers\ContactController;

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
use App\Http\Controllers\BookController;
Route::post('/books', [BookController::class, 'store'])->name('books.store');

Route::get('/post-book', [PostBookController::class, 'index'])->name('post_book');
// في ملف routes/web.php
Route::post('/profile/update_photo', [ProfileController::class, 'updatePhoto'])->name('profile.update_photo');
