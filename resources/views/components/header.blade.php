<nav class="navbar navbar-expand-md bg-white border-bottom shadow-sm py-3 mb-4">
    <div class="container">
        <a href="/" class="navbar-brand d-flex align-items-center fw-bold text-primary fs-4">
            <div class="bg-primary text-white rounded-3 p-1 me-2 d-flex align-items-center justify-content-center"
                style="width: 35px; height: 35px;">
                <i class="fi fi-rr-shop"></i>
            </div>
            <span>MiTienda<span class="text-dark">Admin</span></span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
            aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('/') ? 'active fw-bold text-primary' : 'text-secondary' }}"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('productos*') ? 'active fw-bold text-primary' : 'text-secondary' }}"
                        href="/productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('clientes*') ? 'active fw-bold text-primary' : 'text-secondary' }}"
                        href="/clientes">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('inventario*') ? 'active fw-bold text-primary' : 'text-secondary' }}"
                        href="/inventario">Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 {{ request()->is('pedidos*') ? 'active fw-bold text-primary' : 'text-secondary' }}"
                        href="/pedidos">Pedidos</a>
                </li>
            </ul>

            <div class="d-flex align-items-center gap-2">
                <a href="/login" class="btn btn-link text-decoration-none text-secondary fw-medium">Ingresar</a>
                <a href="/register" class="btn btn-primary px-4 rounded-pill shadow-sm fw-bold">Registro</a>
            </div>
        </div>
    </div>
</nav>
