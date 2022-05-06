<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return redirect(route('home'));
});
Route::get('/home', function() {
    return view('index');
})->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('/about', function() {
    return view('about');
})->name('about');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/profile', function() {
        return view('profile');
    })->name('profile');

    Route::get('/timetable', function() {
        return view('timetable');
    })->name('timetable');

    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
