@extends('layouts.mainLayout')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">
            <div>
                <h2 class="fw-bold mb-0 text-dark">Catálogo de Productos</h2>
                <p class="text-muted mb-0">Gestión de artículos y precios unitarios</p>
            </div>
            <div class="d-flex gap-2">
                <div class="input-group shadow-sm d-none d-md-flex" style="max-width: 300px;">
                    <span class="input-group-text bg-white border-end-0 text-muted"><i class="fi fi-rr-search"></i></span>
                    <input type="text" class="form-control border-start-0" placeholder="Buscar por nombre o SKU...">
                </div>
                <a href="/productos/create" class="btn btn-primary px-4 shadow-sm d-flex align-items-center">
                    <i class="fi fi-rr-plus me-2"></i> Nuevo Producto
                </a>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive ">
                    <table class="table table-hover align-middle mb-0 ">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 py-3 text-uppercase text-secondary fw-bold"
                                    style="font-size: 0.75rem; width: 80px;">ID</th>
                                <th class="py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.75rem;">Detalle
                                    del Producto</th>
                                <th class="py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.75rem;">Código
                                    SKU</th>
                                <th class="py-3 text-uppercase text-secondary fw-bold text-end"
                                    style="font-size: 0.75rem; width: 180px;">Precio Unitario</th>
                                <th class="py-3 text-uppercase text-center text-secondary fw-bold"
                                    style="font-size: 0.75rem; width: 150px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4">
                                    <span class="text-muted small fw-medium">#0001</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-light rounded-3 p-2 me-3 border d-flex align-items-center justify-content-center"
                                            style="width: 48px; height: 48px;">
                                            <i class="fi fi-rr-box text-primary fs-4"></i>
                                        </div>
                                        <div>
                                            <span class="d-block fw-bold text-dark">Pantalón Jean Slim</span>
                                            <small class="text-muted">Categoría: Ropa Hombre</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge bg-secondary-subtle text-secondary border px-2 fw-normal">
                                        <i class="fi fi-rr-barcode me-1"></i>1212
                                    </span>
                                </td>
                                <td class="text-end pe-3">
                                    <span class="fw-bold text-dark fs-5">$120.000</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#"
                                            class="btn btn-sm btn-outline-warning border-0 p-2 shadow-sm-hover"
                                            title="Editar">
                                            <i class="fi fi-rr-edit fs-5"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-danger border-0 p-2 shadow-sm-hover"
                                            title="Eliminar">
                                            <i class="fi fi-rr-trash fs-5"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white py-3 border-top d-flex justify-content-between align-items-center">
                <span class="text-muted small">Total: 1 producto registrado</span>
                <nav>
                    <ul class="pagination pagination-sm mb-0">
                        <li class="page-item disabled"><a class="page-link border-0" href="#">Anterior</a></li>
                        <li class="page-item active"><a class="page-link border-0 shadow-sm rounded mx-1"
                                href="#">1</a></li>
                        <li class="page-item"><a class="page-link border-0" href="#">Siguiente</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <style>
        .shadow-sm-hover {
            transition: all 0.2s;
        }

        .shadow-sm-hover:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
            transition: all 0.2s ease;
        }
    </style>
@endsection
