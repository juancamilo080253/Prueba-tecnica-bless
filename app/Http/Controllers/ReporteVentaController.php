<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReporteVentaController extends Controller
{
    public function __invoke()
    {
        return view('reporte_venta.index');
    }
}
