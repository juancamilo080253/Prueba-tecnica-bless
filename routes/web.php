<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/productos', function(){
    return view('productos');
});

Route::get('/cursos/{id}',function($id){
    return "Bienvenido al curso: $id";
});

Route::get('/clientes', function () {
    return view('clientes');
});

Route::get('/inventario', function () {
    return view('inventario');
});

Route::get('/pedidos',function(){
    return view('pedidos');
});