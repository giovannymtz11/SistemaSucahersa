<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SistemaSucahersa')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="logo-image">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars"></i>
                    </span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('usuarios') }}">Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Categorias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inventario</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Sucursales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Proveedores</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Bajas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Reportes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href=" {{ route('logout') }}">Cerrar sesion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="wrapper" style="padding-top: 100px;">
        @yield('content')
    </div>
    @stack('css')

    <style>
        .logo-image {
            width: 200px;
            height: auto;
        }

        footer {
            margin-top: 50px;
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        @media (min-width: 992px) {
            .wrapper {
                padding-top: 120px;
                /* Aumenta el padding superior en pantallas grandes */
            }
        }

        @media (max-width: 991px) {
            .wrapper {
                padding-top: 140px;
                /* Aumenta el padding superior en pantallas medianas */
            }
        }

        @media (max-width: 767px) {
            .wrapper {
                padding-top: 160px;
                /* Aumenta el padding superior en pantallas pequeñas */
            }
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
            /* Asegúrate de que el borde no sea transparente */
        }

        .navbar-toggler-icon {
            color: #000;
            /* Cambia esto si es necesario para asegurarte de que el ícono sea visible */
        }
    </style>

    @stack('js')

    <footer>
        <br>
        &copy;2024 Sucahersa. Todos los derechos reservados.
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
