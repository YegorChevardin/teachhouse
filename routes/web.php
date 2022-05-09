<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MeetingSignInController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostSingleController;

Route::get('/', function () {
    return redirect(route('home'));
});
Route::get('/home', function() {
    return view('index');
})->name('home');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::post('/signin', [MeetingSignInController::class, 'signin'])->name('signin');

Route::post('/rate', [ContactController::class, 'rate'])->name('rate');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/profile', function() {
        return view('profile');
    })->name('profile');

    Route::get('/blog', [PostController::class, 'getPosts'])->name('blog');

    Route::get('/postsingle/{id?}', [PostSingleController::class, 'show'])->name('postsingle');

    Route::get('/timetable', function() {
        return view('timetable');
    })->name('timetable');

    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
