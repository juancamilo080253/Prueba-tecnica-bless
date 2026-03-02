@extends('layouts.mainLayout')

@section('content')
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5 g-4 justify-content-center">

            <div class="col">
                <div class="card h-100 border-0 shadow-sm position-relative hover-lift">
                    <div class="p-3 d-flex justify-content-center bg-white rounded-top">
                        <img src="https://cdn-icons-png.flaticon.com/512/1044/1044967.png"
                            style="width: 80px; height: 80px; object-fit: contain;" alt="Productos">
                    </div>
                    <div class="card-body border-top bg-light py-2 text-center">
                        <h6 class="card-title mb-0">
                            <a href="/productos" class="text-decoration-none fw-bold text-dark stretched-link">Productos</a>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm position-relative hover-lift">
                    <div class="p-3 d-flex justify-content-center bg-white rounded-top">
                        <img src="https://cdn-icons-png.freepik.com/512/17627/17627790.png"
                            style="width: 80px; height: 80px; object-fit: contain;" alt="Clientes">
                    </div>
                    <div class="card-body border-top bg-light py-2 text-center">
                        <h6 class="card-title mb-0">
                            <a href="/clientes" class="text-decoration-none fw-bold text-dark stretched-link">Clientes</a>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm position-relative hover-lift">
                    <div class="p-3 d-flex justify-content-center bg-white rounded-top">
                        <img src="https://cdn-icons-png.flaticon.com/512/10986/10986551.png"
                            style="width: 80px; height: 80px; object-fit: contain;" alt="Inventario">
                    </div>
                    <div class="card-body border-top bg-light py-2 text-center">
                        <h6 class="card-title mb-0">
                            <a href="/inventario"
                                class="text-decoration-none fw-bold text-dark stretched-link">Inventario</a>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm position-relative hover-lift">
                    <div class="p-3 d-flex justify-content-center bg-white rounded-top">
                        <img src="https://cdn-icons-png.flaticon.com/512/6632/6632848.png"
                            style="width: 80px; height: 80px; object-fit: contain;" alt="Pedidos">
                    </div>
                    <div class="card-body border-top bg-light py-2 text-center">
                        <h6 class="card-title mb-0">
                            <a href="/pedidos" class="text-decoration-none fw-bold text-dark stretched-link">Pedidos</a>
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border-0 shadow-sm position-relative hover-lift">
                    <div class="p-3 d-flex justify-content-center bg-white rounded-top">
                        <img src="https://cdn-icons-png.flaticon.com/512/17627/17627664.png"
                            style="width: 80px; height: 80px; object-fit: contain;" alt="Reporte">
                    </div>
                    <div class="card-body border-top bg-light py-2 text-center">
                        <h6 class="card-title mb-0">
                            <a href="#" class="text-decoration-none fw-bold text-dark stretched-link">Reporte
                                Ventas</a>
                        </h6>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <style>
        .hover-lift {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }
    </style>
@endsection
