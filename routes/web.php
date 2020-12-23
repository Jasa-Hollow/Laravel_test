<?php

use Illuminate\Support\Facades\Route;

// Se tiene que importar la clase para su uso.
use App\Http\Controllers\PagesController;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// -----------------------------------------------------------------------
// Rutas básicas de un sitio web.
Route::get('/', [PagesController::class, 'index']);
Route::get('/index', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
// -----------------------------------------------------------------------
