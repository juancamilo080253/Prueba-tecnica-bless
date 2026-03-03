@extends('layouts.mainLayout')

@section('content')
    <div class="container-fluid py-4">
        <div class="row align-items-center mb-4">
            <div class="col-md-6">
                <h2 class="fw-bold mb-0 text-dark">Directorio de Clientes</h2>
                <p class="text-muted mb-0">Total: <span class="badge bg-primary-subtle text-primary rounded-pill">128
                        clientes</span></p>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <div class="d-flex justify-content-md-end gap-2">
                    <div class="input-group w-50 shadow-sm d-none d-lg-flex">
                        <span class="input-group-text bg-white border-end-0"><i
                                class="fi fi-rr-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0" placeholder="Buscar cliente...">
                    </div>
                    <a href="/clientes/create" class="btn btn-primary px-4 shadow-sm d-flex align-items-center">
                        <i class="fi fi-rr-user-add me-2"></i> <span class="d-none d-sm-inline">Nuevo Cliente</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="card border-0 shadow-sm overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 py-3 border-0 text-secondary small fw-bold text-uppercase">Cliente / ID</th>
                                <th class="py-3 border-0 text-secondary small fw-bold text-uppercase">Documento</th>
                                <th class="py-3 border-0 text-secondary small fw-bold text-uppercase">Contacto</th>
                                <th class="py-3 border-0 text-center text-secondary small fw-bold text-uppercase">Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody class="border-top-0">
                            <tr>
                                <td class="ps-4 py-3">
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="avatar-circle bg-primary text-white d-flex align-items-center justify-content-center fw-bold me-3 shadow-sm">
                                            JP
                                        </div>
                                        <div>
                                            <div class="fw-bold text-dark mb-0">Juan Perez</div>
                                            <small class="text-muted d-block">
                                                <i class="fi fi-rr-marker me-1"></i>Cll 19 45-25 Villa Marina
                                            </small>
                                            <span class="text-xs text-primary-emphasis fw-medium"
                                                style="font-size: 0.7rem;">ID: #001</span>
                                        </div>
                                    </div>
                                </td>

                                <td class="py-3">
                                    <span class="font-monospace text-dark fw-bold">6045781</span>
                                </td>

                                <td class="py-3">
                                    <a href="tel:3014578482" class="text-decoration-none d-block mb-1">
                                        <span
                                            class="badge bg-info-subtle text-black border border-info-subtle px-2 py-1 fw-medium">
                                            <i class="fi fi-rr-phone-call me-1"></i>3014578482
                                        </span>
                                    </a>
                                    <small class="text-muted d-none d-md-block">Click para llamar</small>
                                </td>

                                <td class="py-3 text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#"
                                            class="btn btn-sm btn-outline-warning rounded-circle border-0 p-2 shadow-sm-hover"
                                            title="Editar">
                                            <i class="fi fi-rr-edit d-flex"></i>
                                        </a>
                                        <a href="#"
                                            class="btn btn-sm btn-outline-danger rounded-circle border-0 p-2 shadow-sm-hover"
                                            title="Eliminar">
                                            <i class="fi fi-rr-trash d-flex"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-top py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">Página 1 de 12</small>
                    <nav>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled"><a class="page-link border-0 rounded-circle me-1"
                                    href="#"><i class="fi fi-rr-angle-small-left"></i></a></li>
                            <li class="page-item active"><a class="page-link border-0 rounded-circle me-1"
                                    href="#">1</a></li>
                            <li class="page-item"><a class="page-link border-0 rounded-circle me-1" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link border-0 rounded-circle" href="#"><i
                                        class="fi fi-rr-angle-small-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <style>
        .avatar-circle {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            font-size: 0.9rem;
        }

        .table-hover tbody tr:hover {
            background-color: rgba(var(--bs-primary-rgb), 0.02);
        }

        .shadow-sm-hover:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
            transition: all 0.2s ease;
        }
    </style>
@endsection
