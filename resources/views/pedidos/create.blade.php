@extends('layouts.mainLayout')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-white py-3">
                    <h5 class="fw-bold mb-0">Detalle del Pedido</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3 mb-4 bg-light p-3 rounded-3">
                        <div class="col-md-5">
                            <label class="form-label small fw-bold text-secondary text-uppercase">Seleccionar Producto</label>
                            <select class="form-select border-0 shadow-sm" id="selector-producto">
                                <option value="">Buscar producto...</option>
                                <option value="1" data-precio="120000">Pantalón Jean Slim ($120.000)</option>
                                <option value="2" data-precio="45000">Camiseta Básica ($45.000)</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label small fw-bold text-secondary text-uppercase">Talla</label>
                            <select class="form-select border-0 shadow-sm" id="selector-talla">
                                <option value="S">S</option>
                                <option value="M" selected>M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label class="form-label small fw-bold text-secondary text-uppercase">Cant.</label>
                            <input type="number" class="form-control border-0 shadow-sm" id="selector-cantidad" value="1" min="1">
                        </div>
                        <div class="col-md-2 d-grid">
                            <label class="form-label d-none d-md-block">&nbsp;</label>
                            <button type="button" class="btn btn-primary shadow-sm" onclick="agregarProducto()">
                                <i class="fi fi-rr-plus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle" id="tabla-pedido">
                            <thead class="bg-light text-secondary small fw-bold">
                                <tr>
                                    <th>PRODUCTO / TALLA</th>
                                    <th class="text-end">PRECIO</th>
                                    <th class="text-center" style="width: 100px;">CANT.</th>
                                    <th class="text-end">SUBTOTAL</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="fw-bold mb-3">Información del Cliente</h6>
                    <div class="mb-3">
                        <label class="form-label small text-muted">Vincular Cliente</label>
                        <select class="form-select bg-light border-0" required>
                            <option value="">Seleccionar cliente...</option>
                            <option>Juan Perez (1090...)</option>
                            <option>Maria Lopez (1115...)</option>
                        </select>
                    </div>
                    <div class="mb-0">
                        <label class="form-label small text-muted">Fecha de Venta</label>
                        <input type="text" class="form-control bg-light border-0" value="{{ date('d/m/Y') }}" disabled>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm bg-dark text-white">
                <div class="card-body p-4">
                    <h6 class="text-white-50 mb-4">Resumen de Pago</h6>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span id="resumen-subtotal">$ 0</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>IVA (19%)</span>
                        <span id="resumen-iva">$ 0</span>
                    </div>
                    <hr class="opacity-10">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fs-5">Total a Pagar</span>
                        <span class="fs-4 fw-bold text-info" id="resumen-total">$ 0</span>
                    </div>
                    <button class="btn btn-info w-100 fw-bold py-3 shadow-sm">
                        <i class="fi fi-rr-check-circle me-2"></i> CONFIRMAR PEDIDO
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function agregarProducto() {
        const select = document.getElementById('selector-producto');
        const productoNombre = select.options[select.selectedIndex].text;
        const precio = parseFloat(select.options[select.selectedIndex].getAttribute('data-precio'));
        const talla = document.getElementById('selector-talla').value;
        const cantidad = parseInt(document.getElementById('selector-cantidad').value);

        if (!precio) return alert("Selecciona un producto");

        const subtotal = precio * cantidad;
        const tabla = document.getElementById('tabla-pedido').getElementsByTagName('tbody')[0];
        
        const nuevaFila = tabla.insertRow();
        nuevaFila.innerHTML = `
            <td>
                <span class="fw-bold d-block text-dark">${productoNombre.split(' ($')[0]}</span>
                <span class="badge bg-secondary-subtle text-secondary">Talla: ${talla}</span>
            </td>
            <td class="text-end text-muted">$ ${precio.toLocaleString()}</td>
            <td class="text-center fw-bold">${cantidad}</td>
            <td class="text-end fw-bold text-dark">$ ${subtotal.toLocaleString()}</td>
            <td class="text-center">
                <button type="button" class="btn btn-link text-danger p-0" onclick="eliminarFila(this, ${subtotal})">
                    <i class="fi fi-rr-trash"></i>
                </button>
            </td>
        `;

        actualizarTotales(subtotal);
    }

    let acumuladoTotal = 0;

    function actualizarTotales(monto) {
        acumuladoTotal += monto;
        const iva = acumuladoTotal * 0.19;
        const total = acumuladoTotal + iva;

        document.getElementById('resumen-subtotal').innerText = `$ ${acumuladoTotal.toLocaleString()}`;
        document.getElementById('resumen-iva').innerText = `$ ${iva.toLocaleString()}`;
        document.getElementById('resumen-total').innerText = `$ ${total.toLocaleString()}`;
    }

    function eliminarFila(btn, monto) {
        btn.closest('tr').remove();
        actualizarTotales(-monto);
    }
</script>

<style>
    .bg-dark { background-color: #1a1d21 !important; }
    .text-info { color: #0dcaf0 !important; }
</style>
@endsection