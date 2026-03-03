<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        return view('clientes.index');
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(){

    }

    public function show($cliente){
        return view('clientes.show');
    }

    public function edit($cliente){
        return view('clientes.edit');
    }

    public function update($cliente){

    }

    public function delete($cliente){

    }
}
