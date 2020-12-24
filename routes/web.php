<?php

use Illuminate\Support\Facades\Route;

// Se tiene que importar la clase para su uso.
use App\Http\Controllers\PagesController;
use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Support\Facades\DB;
use App\Models\Articulo;

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
Route::get('/index', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
// -----------------------------------------------------------------------

// -----------------------------------------------------------------------
// Pruebas con Eloquent
Route::get('/select', function() {
    /* Consulta General de una tabla.
    $articulos = Articulo::all();
    foreach ($articulos as $result){
        echo $result->name . ' - $' . $result->price . "<br>";
    }
    */
    // Consulta con condicional.
    $articulos = Articulo::where("name", "Nezuko Nendoroid")->get();

    return $articulos;
});

Route::get('/insert', function() {
    $articulos = new Articulo ;

    $articulos->name = "Pantalones";
    $articulos->price = 20.00;

    $articulos->save();
});

Route::get('/update', function() {
    $articulos = Articulo::find(4) ;

    if ($articulos){
        $articulos->name = "Pantalones";
        $articulos->price = 10.00;

        $articulos->save();
    }

    else {
        return "Error";
    }
});

Route::get('/delete', function() {
    $articulos = Articulo::find(3) ;

    if ($articulos){
        $articulos->delete();
    }
    else {
        return "Error";
    }
});

Route::get('/manyInsert', function() {
    Articulo::create(
        ["name" => "Impresora", "price" => 100.00]
    );
});

// -----------------------------------------------------------------------
