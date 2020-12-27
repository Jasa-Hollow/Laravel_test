<?php

use Illuminate\Support\Facades\Route;

// -----------------------------------------------------------------------
// Se tiene que importar la clase para su uso.
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
// -----------------------------------------------------------------------

use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\DB;
use App\Models\Video;

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

/* -----------------------------------------------------------------------
|
|   Se ha realizado un cambio, en el que Laravel automáticamente detecta las rutas
|   por medio del "resource" al crear el controlador.
|
|   Se puede verificar por la terminal con el comando "php artisan route:list".
*/

Route::resource('/post', PostsController::class);

// -----------------------------------------------------------------------
