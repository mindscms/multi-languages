<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/change-language/{locale}',     [LocaleController::class, 'switch'])->name('change.language');


Route::group(['middleware' => 'web'], function (){

    Route::get('/posts',                [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{post}',         [PostController::class, 'show'])->name('posts.show');

});
