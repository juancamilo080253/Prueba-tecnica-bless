<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ReporteVentaController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::resource('/productos', ProductoController::class);

Route::resource('/clientes', ClienteController::class);

Route::get('/inventario', function () {
    return view('inventario');
});

Route::resource('/pedidos', PedidosController::class);

Route::get('/reporte_ventas', ReporteVentaController::class);
