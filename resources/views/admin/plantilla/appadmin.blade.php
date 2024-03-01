{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> --}}
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="img/ico" href='images/favicon.png'>
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="css/font-awesome.css"> --}}

    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    {{-- <link rel="stylesheet" href="css/responsive.css"> --}}
    <link rel="stylesheet" href="/css/dashboard.css">
    {{-- <script src="js/jquery-3.1.1.js"></script> --}}
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    {{-- <script src="js/hitgoalz.js"></script> --}}
    <script src="/js/dashboard.js"></script>

</head>

<body>
    <!--===============================================
                      NAVBAR
===============================================-->


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="hamburger">
            <div class="cta">
                <div class="toggle-btn type14"></div>
            </div>
        </div>

        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" alt="logo" style="width:140px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/notification.png" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/sms.png" alt=""></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="images/user.png" alt=""></a>
            </li>
        </ul>
    </nav>


    <section class="side-bar-warp">
        <div class="sidebar-menu small-side-bar flowHide">
            <nav class="">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/productos">
                            <span class="sidebar-icon"><img src="images/dashboard.png" alt=""></span>
                            <span class="fadeInRight animated nav-link-name name-hide tax-show">Producto</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="empleados">
                            <span class="sidebar-icon"><img src="images/create-quest.png" alt=""></span>
                            <span class="fadeInRight animated nav-link-name name-hide tax-show">Empleado</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categoria">
                            <span class="sidebar-icon"><img src="images/create-quest.png" alt=""></span>
                            <span class="fadeInRight animated nav-link-name name-hide tax-show">Categoria</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cliente">
                            <span class="sidebar-icon"><img src="images/manage-quests.png" alt=""></span>
                            <span class="fadeInRight animated nav-link-name name-hide tax-show">Cliente</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pedido">
                            <span class="sidebar-icon"><img src="images/leaderboards.png" alt=""></span>
                            <span class="fadeInRight animated nav-link-name name-hide tax-show">Pedidos</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="detalle_orden">
                            <span class="sidebar-icon"><img src="images/leaderboards.png" alt=""></span>
                            <span class="fadeInRight animated nav-link-name name-hide tax-show">Detalles de la orden </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="sidebar-icon"><img src="images/log-out.png" alt=""></span>
                            <span class="fadeInRight animated nav-link-name name-hide tax-show">Log Out</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


    </section>


    {{-- CONTENIDO --}}

    <main>
        @yield('contenido')
    </main>


</body>

</html>
