<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index(){
        return view('pedidos.index');
    }

    public function create(){
        return view('pedidos.create');
    }

    public function store(){

    }

    public function show($pedido){

    }

    public function edit($producto){

    }

    public function update($producto){

    }

    public function destroy($producto){
        
    }

}