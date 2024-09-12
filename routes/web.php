<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelContoller;
use App\Http\Controllers\UserController;
use App\Models\UserModel;
use Illuminate\Support\Facades\Route;
use Monolog\Level;

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

route::get('/level', [LevelContoller::class, 'index']);
route::get('/kategori', [KategoriController::class, 'index']);
route::get('/user', [UserController::class, 'index']);
