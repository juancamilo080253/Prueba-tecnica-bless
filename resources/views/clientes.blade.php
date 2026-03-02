@extends('layouts.mainLayout')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-0 text-dark">Directorio de Clientes</h2>
                <p class="text-muted">Gestiona la información de contacto y ubicación de tus clientes</p>
            </div>
            <a href="#" class="btn btn-primary px-4 shadow-sm">
                <i class="fi fi-rr-user-add me-2"></i> Nuevo Cliente
            </a>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.8rem;">ID
                                </th>
                                <th class="py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.8rem;">Documento
                                </th>
                                <th class="py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.8rem;">Nombre
                                    Completo</th>
                                <th class="py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.8rem;">Dirección
                                </th>
                                <th class="py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.8rem;">Teléfono
                                </th>
                                <th class="py-3 text-uppercase text-center text-secondary fw-bold"
                                    style="font-size: 0.8rem;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 fw-medium text-secondary">#1</td>
                                <td class="text-dark fw-bold">6045781</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center me-2"
                                            style="width: 32px; height: 32px; font-size: 0.8rem;">
                                            JP
                                        </div>
                                        <span class="fw-medium">Juan Perez</span>
                                    </div>
                                </td>
                                <td class="text-secondary">
                                    <i class="fi fi-rr-marker me-1 text-danger-emphasis"></i> Cll 19 45-25 Villa Marina
                                </td>
                                <td>
                                    <span class="badge bg-light text-dark border fw-normal">
                                        <i class="fi fi-rr-phone-call me-1 text-primary"></i> 3014578482
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
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
                <small class="text-muted">Mostrando 1 cliente registrado</small>
            </div>
        </div>
    </div>
@endsection
