<?php

Route::get('/listar-pedidos', [pedidosController::class, 'index']);
Route::get('/visualizar-pedidos/{id_pedido}',[pedidosController::class, 'show']);
Route::get('/cadastrar-pedidos',[pedidosController::class,'create']);
Route::post('/cadastrar-pedidos',[pedidosController::class,'store']);
