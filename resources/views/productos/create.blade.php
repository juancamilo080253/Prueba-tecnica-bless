@extends('layouts.mainLayout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="bg-primary-subtle text-primary rounded-3 p-2 me-3">
                            <i class="fi fi-rr-box fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Información del Producto</h4>
                    </div>
                </div>
                
                <div class="card-body p-4">
                    <form action="#" method="POST" class="row g-4">
                        @csrf
                        
                        <div class="col-md-12">
                            <label for="productId" class="form-label fw-bold text-secondary small text-uppercase">ID Producto</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light text-muted border-end-0">
                                    <i class="fi fi-rr-key"></i>
                                </span>
                                <input type="text" class="form-control bg-light border-start-0" id="productId" value="Generado automáticamente" disabled>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="nombre" class="form-label fw-bold text-secondary small text-uppercase">Nombre del Producto</label>
                            <input type="text" class="form-control shadow-none" id="nombre" name="nombre" placeholder="Ej: Pantalón Jean Slim Fit">
                        </div>

                        <div class="col-md-6">
                            <label for="codigo" class="form-label fw-bold text-secondary small text-uppercase">Código / SKU</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white text-muted border-end-0">
                                    <i class="fi fi-rr-barcode"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 shadow-none" id="codigo" name="codigo" placeholder="12345">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="precio" class="form-label fw-bold text-secondary small text-uppercase">Precio de Venta</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white text-muted border-end-0">$</span>
                                <input type="number" class="form-control border-start-0 shadow-none" id="precio" name="precio" placeholder="0.00">
                            </div>
                        </div>

                        <div class="col-12 mt-5 border-top pt-4 d-flex justify-content-end gap-2">
                            <a href="/productos" class="btn btn-light px-4 fw-bold text-secondary">
                                <i class="fi fi-rr-cross-small me-1"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary px-5 fw-bold shadow-sm">
                                <i class="fi fi-rr-disk me-1"></i> Guardar Producto
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <p class="text-center text-muted mt-4 small">
                <i class="fi fi-rr-info me-1"></i> Los campos marcados son obligatorios para el inventario.
            </p>
        </div>
    </div>
</div>
@endsection