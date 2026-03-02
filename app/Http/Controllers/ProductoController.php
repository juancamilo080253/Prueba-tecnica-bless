<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
       return view('productos');
    }

    public function create(){
        return "Aqui se mostrara el formulario para un producto";
    }

    public function store(){
        return "se procesara el formulario para crear un post";
    }

    public function show($producto){
        return "Aqui se mostrara el producto $producto";
    }

    public function edit($producto){
        return "Aqui se mostrara el formulario para editar el producto: $producto";
    }

    public function update($producto){
        return "Aqui se procesara el formulario para editar el producto: $producto";
    }

    public function destroy($producto){
        return "Aqui se eliminara el producto: $producto";
    }
}
