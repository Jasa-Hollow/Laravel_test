<?php

use Illuminate\Support\Facades\Route;

// Se tiene que importar la clase para su uso.
use App\Http\Controllers\PagesController;
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

// -----------------------------------------------------------------------
// Rutas para la interacción con la BD de MySQL
Route::get('/insert', function () {
    DB::insert('insert into articulos (id, name, price) values (?, ?, ?)', [1, 'Jarrón', 15.2]);
});

Route::get('/select', function () {
    //Se almacena una consulta en un array.
    $resultados = DB::select('select * from articulos where id = ?', [1]);

    foreach ($resultados as $articulo){
        echo $articulo->name . $articulo->price;
    }
});

Route::get('/update', function () {
    DB::update('update articulos set name = "Vaso" where id = ?', [1]);
});

Route::get('/delete', function () {
    DB::delete('delete from articulos where id = ?', [1]);
});

// -----------------------------------------------------------------------
