<?php

use App\Http\Controllers\AlbumAdminController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [AlbumController::class, "index"])->name("home");
Route::get('admin/album', [AlbumAdminController::class, "index"])->name("album-admin.index");
Route::get('admin/album/create', [AlbumAdminController::class, "create"])->name("album-admin.create");
Route::post('admin/album', [AlbumAdminController::class, "store"])->name("album-admin.store");
Route::get('/login', [AuthController::class, "login"])->name("auth.login");
Route::get('/authenticate', [AuthController::class, "authenticate"])->name("auth.authenticate");
Route::get('/register', [AuthController::class, "create"])->name("auth.create");
Route::post('/register', [RegisterController::class, "store"])->name("register.create");
