<?php

Route::apiResource('pedidos','api\pedidosController');

Route::get('/listar-pedidos', [pedidosController::class, 'index']);
Route::get('/visualizar-pedidos/{id_pedido}',[pedidosController::class, 'show']);
Route::get('/cadastrar-pedido',[pedidosController::class,'create']);