<?php


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

use App\Http\Controllers\VistasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VistasController::class, 'login'])->name('login');
Route::get('/categorias', [VistasController::class, 'listacategorias'])->name('listacategorias');
Route::get('/perfilusuarios', [VistasController::class, 'perfilusuarios'])->name('perfilusuarios');
Route::get('/datos-fundacion', [VistasController::class, 'datosFundacion'])->name('datosfundacion');
Route::get('/lista-fundaciones', [VistasController::class, 'listaFundaciones'])->name('listafundaciones');
Route::get('/datos-fundacion', [VistasController::class, 'datosfundacion'])->name('datosfundacion');
Route::get('/donacionesuser', [VistasController::class, 'donacionesuser'])->name('donacionesuser');
Route::get('/index', [VistasController::class, 'index'])->name('home');
Route::get('/register', [VistasController::class, 'register'])->name('register');


