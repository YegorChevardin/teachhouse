<?php

use App\Http\Controllers\TimetableController;
use App\Http\Controllers\UserChangeInfo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MeetingSignInController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostSingleController;
use \App\Http\Controllers\DeleteController;
use \App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect(route('home'));
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');
Route::post('/rate', [ContactController::class, 'rate'])->name('rate');

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

    Route::get('/timetable', [TimetableController::class, 'index'])->name('timetable');

    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

    Route::post('/userdelete', [DeleteController::class, 'userDelete'])->name('userdelete');

    Route::post('/changeimg', [UserChangeInfo::class, 'changeimg'])->name('changeimg');
    Route::post('/changename', [UserChangeInfo::class, 'changeName'])->name('changename');
    Route::post('/changeemail', [UserChangeInfo::class, 'changeEmail'])->name('changeemail');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
