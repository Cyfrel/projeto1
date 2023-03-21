<?php

use Illuminate\Support\Facades\Route;
use \App\Http\controllers\pedidosController;

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

//Route::get('/', [\App\Http\controllers\pedidosController::class, 'index']);

Route::get('/listar-pedidos', [pedidosController::class, 'index']);
Route::get('/visualizar-pedidos/{id_pedido}',[pedidosController::class, 'show']);
Route::get('/cadastrar-pedidos',[pedidosController::class,'create']);
Route::post('/cadastrar-pedidos',[pedidosController::class,'store']);

