<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SysQ - Sistema para Colas</title>
    <!-- CSS files -->

    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material-gradient.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owner.css') }}">

</head>

<body class="grey lighten-3 font-nunito">
    <!-- Header -->
    <header>
        <nav class="white container-fluid">
            <div class="nav-wrapper">
                <a href="" class="brand-logo font-audiowide right deep-purple-text text-darken-2">SysQ</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col s12 center-align">
                    <h4>Seleccione el servicio para la atención.</h4>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 animated bounceIn">
                    <a href="" class="btn-app white black-text">
                        <i class="fas fa-address-card"></i>
                        <span style="font-size:30px;">CAJA GENERAL</span>
                    </a>
                </div>
                <div class="col s12 m6 animated bounceIn">
                    <a href="" class="btn-app white black-text">
                        <i class="fas fa-user-check"></i>
                        <span style="font-size:30px;">ATENCIÓN AL CLIENTE</span>
                    </a>
                </div>
                <div class="col s12 m6 animated bounceIn">
                    <a href="" class="btn-app white black-text">
                        <i class="fas fa-credit-card"></i>
                        <span style="font-size:30px;">CRÉDITOS</span>
                    </a>
                </div>
                <div class="col s12 m6 animated bounceIn">
                    <a href="" class="btn-app white black-text">
                        <i class="icon-work"></i>
                        <span style="font-size:30px;">GERENTE</span>
                    </a>
                </div>
            </div>
        </div>
    </main>


    <!-- JavaScript files -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>
    <script src="{{ asset('js/owner.js') }}"></script>
</body>

</html>