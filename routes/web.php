<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PostController;
use app\Http\Controllers\ImageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'John Feri Jr. Ramadhan',
        'email' => 'johnferijr@gmail.com'
    ]);
});

Route::get('/page1', function () {
    return view('page1');
});

Route::get('/page2', function () {
    return view('page2');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts', [ImageController::class, 'index']);