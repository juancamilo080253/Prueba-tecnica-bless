@extends('layouts.mainLayout')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0 text-dark">Reporte de Ventas</h2>
            <p class="text-muted">Análisis detallado de ingresos y movimiento de inventario</p>
        </div>
        <button onclick="window.print()" class="btn btn-outline-secondary shadow-sm">
            <i class="fi fi-rr-print me-2"></i> Imprimir Reporte
        </button>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-primary text-white">
                <div class="card-body p-4">
                    <h6 class="text-white-50">Total Vendido</h6>
                    <h2 class="fw-bold mb-0">$ 4.580.000</h2>
                    <i class="fi fi-rr-stats position-absolute end-0 bottom-0 m-3 fs-1 opacity-25"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-white border-start border-primary border-4">
                <div class="card-body p-4">
                    <h6 class="text-muted">Pedidos Realizados</h6>
                    <h2 class="fw-bold mb-0 text-dark">124</h2>
                    <i class="fi fi-rr-shopping-bag position-absolute end-0 bottom-0 m-3 fs-1 text-primary opacity-25"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm bg-white border-start border-success border-4">
                <div class="card-body p-4">
                    <h6 class="text-muted">Promedio por Venta</h6>
                    <h2 class="fw-bold mb-0 text-dark">$ 36.935</h2>
                    <i class="fi fi-rr-coins position-absolute end-0 bottom-0 m-3 fs-1 text-success opacity-25"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form action="#" method="GET" class="row g-3 align-items-end">
                <div class="col-md-3">
                    <label class="form-label fw-bold text-secondary small text-uppercase">Producto</label>
                    <select class="form-select" name="producto_id">
                        <option value="">Todos los productos</option>
                        <option value="1">Pantalón Jean Slim</option>
                        <option value="2">Camiseta Básica</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold text-secondary small text-uppercase">Desde</label>
                    <input type="date" class="form-control" name="fecha_inicio">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold text-secondary small text-uppercase">Hasta</label>
                    <input type="date" class="form-control" name="fecha_fin">
                </div>
                <div class="col-md-3 d-grid">
                    <button type="submit" class="btn btn-primary fw-bold">
                        <i class="fi fi-rr-search me-2"></i> Filtrar Reporte
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th class="ps-4 py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.75rem;">Fecha</th>
                            <th class="py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.75rem;">Producto</th>
                            <th class="py-3 text-uppercase text-secondary fw-bold text-center" style="font-size: 0.75rem;">Cant.</th>
                            <th class="py-3 text-uppercase text-secondary fw-bold text-end" style="font-size: 0.75rem;">Precio Unit.</th>
                            <th class="pe-4 py-3 text-uppercase text-secondary fw-bold text-end" style="font-size: 0.75rem;">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="ps-4 text-secondary">02/03/2026</td>
                            <td>
                                <span class="fw-bold text-dark d-block">Pantalón Jean Slim</span>
                                <span class="badge bg-secondary-subtle text-secondary small">Talla: M</span>
                            </td>
                            <td class="text-center">2</td>
                            <td class="text-end text-muted">$ 120.000</td>
                            <td class="pe-4 text-end fw-bold text-primary">$ 240.000</td>
                        </tr>
                        <tr>
                            <td class="ps-4 text-secondary">01/03/2026</td>
                            <td>
                                <span class="fw-bold text-dark d-block">Camiseta Básica</span>
                                <span class="badge bg-secondary-subtle text-secondary small">Talla: L</span>
                            </td>
                            <td class="text-center">3</td>
                            <td class="text-end text-muted">$ 45.000</td>
                            <td class="pe-4 text-end fw-bold text-primary">$ 135.000</td>
                        </tr>
                    </tbody>
                    <tfoot class="bg-light fw-bold border-top">
                        <tr>
                            <td colspan="4" class="text-end py-3 text-secondary">TOTAL DEL PERIODO:</td>
                            <td class="pe-4 text-end py-3 text-success fs-5">$ 375.000</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection