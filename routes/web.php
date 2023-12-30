<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControlle;
use App\Http\Controllers\PostController;
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
    return view('home');
});

Route::post('/register', [UserControlle::class, 'register']);
Route::post('/logout', [UserControlle::class, 'logout']);
Route::post('/login', [UserControlle::class, 'login']);

Route::post('/create-post', [PostController::class, 'createPost']);