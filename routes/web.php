<?php

use Illuminate\Support\Facades\Route;

// Se tiene que importar la clase para su uso.
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Structure
| Route::get('/', [PagesController::class, 'index']);
| 
| Route::resource('posts',  EjemploController::class);
|
*/

// -----------------------------------------------------------------------
// Rutas básicas de un sitio web.
Route::get('/', [PagesController::class, 'index']);
Route::get('/home', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
// Rutas para el CRUD
Route::get('/post/', [PostsController::class, 'index']);
Route::get('/post/index', [PostsController::class, 'index']);

Route::get('/post/create', [PostsController::class, 'create']);
Route::get('/post/update', [PostsController::class, 'update']);
Route::get('/post/delete', [PostsController::class, 'destroy']);
// -----------------------------------------------------------------------
