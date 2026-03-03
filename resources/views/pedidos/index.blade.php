@extends('layouts.mainLayout')

@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-0 text-dark">Gestión de Pedidos</h2>
                <p class="text-muted">Registro de ventas y detalles de facturación</p>
            </div>
            <a href="/pedidos/create" class="btn btn-success px-4 shadow-sm fw-bold">
                <i class="fi fi-rr-shopping-cart-add me-2"></i> Nuevo Pedido
            </a>
        </div>

        <div class="card border-0 shadow-sm mb-4 bg-light">
            <div class="card-body py-2 px-4 d-flex gap-3">
                <span class="badge rounded-pill bg-white text-dark border p-2 px-3">Todos</span>
                <span class="badge rounded-pill bg-warning-subtle text-warning border p-2 px-3">Pendientes</span>
                <span class="badge rounded-pill bg-success-subtle text-success border p-2 px-3">Pagados</span>
            </div>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th class="ps-4 py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.8rem;">ID
                                    Pedido</th>
                                <th class="py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.8rem;">Cliente
                                </th>
                                <th class="py-3 text-uppercase text-secondary fw-bold" style="font-size: 0.8rem;">Productos
                                    (Talla/Cant)</th>
                                <th class="py-3 text-uppercase text-secondary fw-bold text-center"
                                    style="font-size: 0.8rem;">Total</th>
                                <th class="py-3 text-uppercase text-secondary fw-bold text-center"
                                    style="font-size: 0.8rem;">Estado</th>
                                <th class="py-3 text-uppercase text-center text-secondary fw-bold"
                                    style="font-size: 0.8rem;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 fw-bold text-primary">#ORD-001</td>
                                <td>
                                    <div class="fw-bold">Juan Perez</div>
                                    <small class="text-muted">Doc: 6045781</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled mb-0" style="font-size: 0.85rem;">
                                        <li><i class="fi fi-rr-check-circle text-success me-1"></i> Pantalón (Talla: M |
                                            Cant: 2)</li>
                                        <li><i class="fi fi-rr-check-circle text-success me-1"></i> Camiseta (Talla: L |
                                            Cant: 1)</li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <span class="fw-bold text-dark fs-5">$320.000</span>
                                </td>
                                <td class="text-center">
                                    <span class="badge rounded-pill bg-success text-white px-3">Pagado</span>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-link text-info p-2" title="Ver Detalle"><i
                                                class="fi fi-rr-eye fs-5"></i></a>
                                        <a href="#" class="btn btn-link text-danger p-2" title="Cancelar"><i
                                                class="fi fi-rr-cross-circle fs-5"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
