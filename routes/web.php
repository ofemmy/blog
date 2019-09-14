<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    use Illuminate\Support\Facades\Route;
    use function foo\func;

    Route::get('/', function () {
    return view('blog');
})->name('home');
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
    Route::get('/posts', function () {
        return view('posts');
    })->name('posts');
