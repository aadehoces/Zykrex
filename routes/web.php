<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;

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
    return view('inicio');
});
Route::get('/inicio', function () {
    return view('inicio');
});
Route::get('/sobremesa', [Pagecontroller::class, 'getSobremesa'])->name('sobremesa');
Route::get('/portatil', [Pagecontroller::class, 'getPortatil'])->name('portatil');

Route::get('/movil', [Pagecontroller::class, 'getMovil'])->name('movil');
//productos
Route::get('/productos/show', [Pagecontroller::class, 'getProdutos'])->name('productos');

Route::post('/productos/show', [Productoscontroller::class, 'create'])->name('productos.create');


Route::delete('productos/{id}',[ProductosController::class, 'delete'])->name('productos.delete');

Route::put('productos/{id}',[ProductosController::class, 'update'])->name('productos.update');

//usuarios
Route::get('/usuarios', [Pagecontroller::class, 'getUsuarios'])->name('usuarios');

Route::post('/usuarios', [Usuarioscontroller::class, 'create'])->name('usuarios.create');

Route::put('usuario/{id}',[UsuariosController::class, 'update'])->name('usuarios.update');

Route::delete('usuario/{id}',[UsuariosController::class, 'delete'])->name('usuario.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
