<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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
Route::get('/cadastrar', [UsuarioController::class, 'cadastrar'])->name('cadastrar.view');
Route::post('/usuario/cadastrar', [UsuarioController::class, 'cadastrarCliente'])->name('cadastrar-cliente');
Route::get('/', [ UsuarioController::class, 'login'])-> name('login');
