@extends('layouts.mainLayout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="bg-success-subtle text-success rounded-3 p-2 me-3">
                            <i class="fi fi-rr-user-add fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-0">Registro de Nuevo Cliente</h4>
                    </div>
                </div>
                
                <div class="card-body p-4">
                    <form action="#" method="POST" class="row g-4">
                        @csrf
                        
                        <div class="col-md-4">
                            <label for="clientId" class="form-label fw-bold text-secondary small text-uppercase">ID Sistema</label>
                            <input type="text" class="form-control bg-light" id="clientId" value="AUTO" disabled>
                        </div>
                        <div class="col-md-8">
                            <label for="documento" class="form-label fw-bold text-secondary small text-uppercase">Número de Documento</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white text-muted border-end-0">
                                    <i class="fi fi-rr-id-badge"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 shadow-none" id="documento" name="documento" placeholder="Ej: 1090123456">
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="nombre" class="form-label fw-bold text-secondary small text-uppercase">Nombre Completo</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white text-muted border-end-0">
                                    <i class="fi fi-rr-text-field"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 shadow-none" id="nombre" name="nombre" placeholder="Nombre y Apellidos">
                            </div>
                        </div>

                        <div class="col-md-7">
                            <label for="direccion" class="form-label fw-bold text-secondary small text-uppercase">Dirección de Residencia</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white text-muted border-end-0">
                                    <i class="fi fi-rr-map-marker"></i>
                                </span>
                                <input type="text" class="form-control border-start-0 shadow-none" id="direccion" name="direccion" placeholder="Calle, Carrera, Barrio...">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label for="telefono" class="form-label fw-bold text-secondary small text-uppercase">Teléfono de Contacto</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white text-muted border-end-0">
                                    <i class="fi fi-rr-phone-call"></i>
                                </span>
                                <input type="tel" class="form-control border-start-0 shadow-none" id="telefono" name="telefono" placeholder="300 123 4567">
                            </div>
                        </div>

                        <div class="col-12 mt-5 border-top pt-4 d-flex justify-content-end gap-2">
                            <a href="/clientes" class="btn btn-light px-4 fw-bold text-secondary">
                                <i class="fi fi-rr-arrow-left me-1"></i> Regresar
                            </a>
                            <button type="submit" class="btn btn-success px-5 fw-bold shadow-sm">
                                <i class="fi fi-rr-disk me-1"></i> Guardar Cliente
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            
            <p class="text-center text-muted mt-4 small">
                <i class="fi fi-rr-shield-check me-1"></i> Los datos personales están protegidos por la ley de Habeas Data.
            </p>
        </div>
    </div>
</div>
@endsection