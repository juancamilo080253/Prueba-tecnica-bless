@extends('layouts.mainLayout')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-0">Gestión de Productos</h2>
                <p class="text-secondary">Administra el inventario de tu tienda</p>
            </div>
            <a href="#" class="btn btn-primary px-4 shadow-sm">
                <i class="fi fi-rr-plus me-2"></i> Nuevo Producto
            </a>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 py-3 text-uppercase fs-xs fw-bold text-secondary"
                                    style="font-size: 0.8rem;">ID</th>
                                <th class="py-3 text-uppercase fs-xs fw-bold text-secondary" style="font-size: 0.8rem;">
                                    Producto</th>
                                <th class="py-3 text-uppercase fs-xs fw-bold text-secondary" style="font-size: 0.8rem;">
                                    Código</th>
                                <th class="py-3 text-uppercase fs-xs fw-bold text-secondary" style="font-size: 0.8rem;">
                                    Precio</th>
                                <th class="py-3 text-uppercase text-center fs-xs fw-bold text-secondary"
                                    style="font-size: 0.8rem;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 fw-medium text-secondary">#1</td>
                                <td>
                                    <span class="fw-bold text-dark">Pantalón</span>
                                </td>
                                <td><code class="text-primary fw-bold">1212</code></td>
                                <td>
                                    <span class="badge rounded-pill bg-success-subtle text-success fw-bold">
                                        $120.000
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="#" class="btn btn-link text-warning p-2" title="Editar">
                                            <i class="fi fi-rr-edit fs-5"></i>
                                        </a>
                                        <a href="#" class="btn btn-link text-danger p-2" title="Eliminar">
                                            <i class="fi fi-rr-trash fs-5"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white py-3 border-top-0">
                <small class="text-secondary">Mostrando 1 de 1 resultados</small>
            </div>
        </div>
    </div>
@endsection
