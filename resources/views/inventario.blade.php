@extends('layouts.mainLayout')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-0 text-dark">Control de Inventario</h2>
                <p class="text-muted">Monitoreo de existencias y tallas disponibles</p>
            </div>
            <button class="btn btn-outline-primary shadow-sm px-3">
                <i class="fi fi-rr-download me-2"></i> Exportar Reporte
            </button>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.8rem;">
                                    Producto</th>
                                <th class="py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.8rem;">Talla</th>
                                <th class="py-3 text-uppercase text-secondary fw-bold text-center"
                                    style="font-size: 0.8rem;">Stock Disponible</th>
                                <th class="py-3 text-uppercase text-secondary fw-bold text-center"
                                    style="font-size: 0.8rem;">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light p-2 rounded me-3">
                                            <i class="fi fi-rr-box text-primary fs-4"></i>
                                        </div>
                                        <div>
                                            <span class="d-block fw-bold text-dark">Pantalón Jean Slim</span>
                                            <small class="text-muted">SKU: 1212-S</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary border px-3">S</span></td>
                                <td class="text-center fw-bold">5</td>
                                <td class="text-center">
                                    <span class="badge rounded-pill bg-danger-subtle text-danger px-3">Crítico</span>
                                </td>
                            </tr>

                            <tr>
                                <td class="ps-4">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light p-2 rounded me-3">
                                            <i class="fi fi-rr-box text-primary fs-4"></i>
                                        </div>
                                        <div>
                                            <span class="d-block fw-bold text-dark">Camiseta Básica</span>
                                            <small class="text-muted">SKU: 3045-M</small>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-secondary-subtle text-secondary border px-3">M</span></td>
                                <td class="text-center fw-bold">42</td>
                                <td class="text-center">
                                    <span class="badge rounded-pill bg-success-subtle text-success px-3">Disponible</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white py-3 border-top-0 d-flex justify-content-between align-items-center">
                <small class="text-muted">Total de referencias: 2</small>
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
