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
use App\Http\Controllers\NearController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


//////////////////////////////////////////////////////////////////////////////////
//Vistas normales
Route::get('/', [VistasController::class, 'login'])->name('login');
Route::get('/categorias', [VistasController::class, 'listacategorias'])->name('listacategorias');
Route::get('/perfilusuarios', [VistasController::class, 'perfilusuarios'])->name('perfilusuarios');
Route::get('/datos-fundacion', [VistasController::class, 'datosFundacion'])->name('datosfundacion');
Route::get('/lista-fundaciones', [VistasController::class, 'listaFundaciones'])->name('listafundaciones');
Route::get('/datos-fundacion', [VistasController::class, 'datosfundacion'])->name('datosfundacion');
Route::get('/donacionesuser', [VistasController::class, 'donacionesuser'])->name('donacionesuser');
Route::get('/index', [VistasController::class, 'index'])->name('home');
Route::get('/register', [VistasController::class, 'register'])->name('register');

///////////////////////////////////////////////////////////////////////////////////////////////////
//Chain Wallet CCr
Route::get('/wallet/{accountId}', [NearController::class, 'getWalletData'])->name('wallet.data');
Route::get('/donations/{username}', [NearController::class, 'showDonations'])->name('donations');
Route::post('/donate', [NearController::class, 'donate']);
Route::get('/donations', [NearController::class, 'showDonations'])->name('donations');


