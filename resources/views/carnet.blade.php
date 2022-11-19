<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Fundacion Buenos Aires</title>
    <!-- Favicon icon -->
    <link rel="icon" type="../image/png" sizes="16x16" href="{{ asset('assets') }}/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{ asset('assets') }}/libs/flot/css/float-chart.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{ asset('assets') }}/css/style.min.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<body>

    <style>
        html {
            height: 100%;
        }

        body {
            overflow: hidden;
            background: #bcdee7 url("../img/bg.jpg") no-repeat center center fixed;
            background-size: cover;
            position: fixed;
            padding: 0px;
            margin: 0px;
            width: 100%;
            height: 100%;
            font: normal 14px/1.618em "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        body:before {
            content: "";
            height: 0px;
            padding: 0px;
            border: 130em solid #313440;
            position: absolute;
            left: 50%;
            top: 100%;
            z-index: 2;
            display: block;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
            animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
        }

        h1,
        h2 {
            font-weight: 500;
            margin: 0px 0px 5px 0px;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 16px;
        }

        p {
            margin: 0px;
        }

        .profile-card {
            background: #FFB300;
            width: 56px;
            height: 65px;
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 2;
            /* overflow: hidden; */
            opacity: 0;
            margin-top: 70px;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-border-radius: 50%;
            border-radius: 50%;
            -webkit-box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16), 0px 3px 6px rgba(0, 0, 0, 0.23);
            -webkit-animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
            animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards;
        }

        .profile-card header {
            width: 179px;
            height: 280px;
            padding: 40px 20px 30px 20px;
            display: inline-block;
            float: left;
            border-right: 2px dashed #EEEEEE;
            background: #FFFFFF;
            color: #000000;
            margin-top: 50px;
            opacity: 0;
            text-align: center;
            -webkit-animation: moveIn 1s 3.1s ease forwards;
            animation: moveIn 1s 3.1s ease forwards;
        }

        .profile-card header h1 {
            color: #FF5722;
        }

        .profile-card header a {
            display: inline-block;
            text-align: center;
            position: relative;
            margin: 25px 30px;
        }

        .profile-card header a:after {
            position: absolute;
            content: "";
            bottom: 3px;
            right: 3px;
            width: 20px;
            height: 20px;
            border: 4px solid #FFFFFF;
            -webkit-transform: scale(0);
            transform: scale(0);
            background: -webkit-linear-gradient(top, #2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
            background: linear-gradient(#2196F3 0%, #2196F3 50%, #FFC107 50%, #FFC107 100%);
            -webkit-border-radius: 50%;
            border-radius: 50%;
            -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
            -webkit-animation: scaleIn 0.3s 3.5s ease forwards;
            animation: scaleIn 0.3s 3.5s ease forwards;
        }

        .profile-card header a>img {
            width: 120px;
            max-width: 100%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            -webkit-transition: -webkit-box-shadow 0.3s ease;
            transition: box-shadow 0.3s ease;
            -webkit-box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
            box-shadow: 0px 0px 0px 8px rgba(0, 0, 0, 0.06);
        }

        .profile-card header a:hover>img {
            -webkit-box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 0px 12px rgba(0, 0, 0, 0.1);
        }

        .profile-card .profile-bio {
            width: 175px;
            height: 180px;
            display: inline-block;
            float: right;
            padding: 50px 20px 30px 20px;
            background: #FFFFFF;
            color: #333333;
            margin-top: 50px;
            text-align: center;
            opacity: 0;
            -webkit-animation: moveIn 1s 3.1s ease forwards;
            animation: moveIn 1s 3.1s ease forwards;
        }

        .profile-social-links {
            width: 218px;
            display: inline-block;
            float: right;
            margin: 0px;
            padding: 15px 20px;
            background: #FFFFFF;
            margin-top: 50px;
            text-align: center;
            opacity: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-animation: moveIn 1s 3.1s ease forwards;
            animation: moveIn 1s 3.1s ease forwards;
        }

        .profile-social-links li {
            list-style: none;
            margin: -5px 0px 0px 0px;
            padding: 0px;
            float: left;
            width: 25%;
            text-align: center;
        }

        .profile-social-links li a {
            display: inline-block;
            color: red;
            width: 24px;
            height: 24px;
            padding: 6px;
            position: relative;
            overflow: hidden !important;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }

        .profile-social-links li a i {
            position: relative;
            z-index: 1;
        }

        .profile-social-links li a img,
        .profile-social-links li a svg {
            width: 24px;
        }

        @-webkit-keyframes init {
            0% {
                width: 0px;
                height: 0px;
            }

            100% {
                width: 56px;
                height: 56px;
                margin-top: 0px;
                opacity: 1;
            }
        }

        @keyframes init {
            0% {
                width: 0px;
                height: 0px;
            }

            100% {
                width: 56px;
                height: 56px;
                margin-top: 0px;
                opacity: 1;
            }
        }

        @-webkit-keyframes puff {
            0% {
                top: 100%;
                height: 0px;
                padding: 0px;
            }

            100% {
                top: 50%;
                height: 100%;
                padding: 0px 100%;
            }
        }

        @keyframes puff {
            0% {
                top: 100%;
                height: 0px;
                padding: 0px;
            }

            100% {
                top: 50%;
                height: 100%;
                padding: 0px 100%;
            }
        }

        @-webkit-keyframes borderRadius {
            0% {
                -webkit-border-radius: 50%;
            }

            100% {
                -webkit-border-radius: 0px;
            }
        }

        @keyframes borderRadius {
            0% {
                -webkit-border-radius: 50%;
            }

            100% {
                border-radius: 0px;
            }
        }

        @-webkit-keyframes moveDown {
            0% {
                top: 50%;
            }

            50% {
                top: 40%;
            }

            100% {
                top: 100%;
            }
        }

        @keyframes moveDown {
            0% {
                top: 50%;
            }

            50% {
                top: 40%;
            }

            100% {
                top: 100%;
            }
        }

        @-webkit-keyframes moveUp {
            0% {
                background: #FFB300;
                top: 100%;
            }

            50% {
                top: 40%;
            }

            100% {
                top: 50%;
                background: #E0E0E0;
            }
        }

        @keyframes moveUp {
            0% {
                background: #FFB300;
                top: 100%;
            }

            50% {
                top: 40%;
            }

            100% {
                top: 50%;
                background: #E0E0E0;
            }
        }

        @-webkit-keyframes materia {
            0% {
                background: #E0E0E0;
            }

            50% {
                -webkit-border-radius: 4px;
            }

            100% {
                width: 440px;
                height: 280px;
                background: #FFFFFF;
                -webkit-border-radius: 4px;
            }
        }

        @keyframes materia {
            0% {
                background: #E0E0E0;
            }

            50% {
                border-radius: 4px;
            }

            100% {
                width: 440px;
                height: 280px;
                background: #FFFFFF;
                border-radius: 4px;
            }
        }

        @-webkit-keyframes moveIn {
            0% {
                margin-top: 50px;
                opacity: 0;
            }

            100% {
                opacity: 1;
                margin-top: -20px;
            }
        }

        @keyframes moveIn {
            0% {
                margin-top: 50px;
                opacity: 0;
            }

            100% {
                opacity: 1;
                margin-top: -20px;
            }
        }

        @-webkit-keyframes scaleIn {
            0% {
                -webkit-transform: scale(0);
            }

            100% {
                -webkit-transform: scale(1);
            }
        }

        @keyframes scaleIn {
            0% {
                transform: scale(0);
            }

            100% {
                transform: scale(1);
            }
        }

        @-webkit-keyframes ripple {
            0% {
                transform: scale3d(0, 0, 0);
            }

            50%,
            100% {
                -webkit-transform: scale3d(1, 1, 1);
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes ripple {
            0% {
                transform: scale3d(0, 0, 0);
            }

            50%,
            100% {
                transform: scale3d(1, 1, 1);
            }

            100% {
                opacity: 0;
            }
        }

        @media screen and (min-aspect-ratio: 4/3) {
            body {
                background-size: cover;
            }

            body:before {
                width: 0px;
            }

            @ -webkit-keyframes puff {
                0% {
                    top: 100%;
                    width: 0px;
                    padding-bottom: 0px;
                }

                100% {
                    top: 50%;
                    width: 100%;
                    padding-bottom: 100%;
                }
            }

            @keyframes puff {
                0% {
                    top: 100%;
                    width: 0px;
                    padding-bottom: 0px;
                }

                100% {
                    top: 50%;
                    width: 100%;
                    padding-bottom: 100%;
                }
            }
        }

        @media screen and (min-height: 480px) {
            .profile-card header {
                width: auto;
                height: auto;
                padding: 30px 20px;
                display: block;
                float: none;
                border-right: none;
            }

            .profile-card .profile-bio {
                width: auto;
                height: auto;
                padding: 15px 20px 30px 20px;
                display: block;
                float: none;
            }

            .profile-social-links {
                width: 100%;
                display: block;
                float: none;
            }

            @ -webkit-keyframes materia {
                0% {
                    background: #E0E0E0;
                }

                50% {
                    -webkit-border-radius: 4px;
                }

                100% {
                    width: 280px;
                    height: 440px;
                    background: #FFFFFF;
                    -webkit-border-radius: 4px;
                }
            }

            @keyframes materia {
                0% {
                    background: #E0E0E0;
                }

                50% {
                    border-radius: 4px;
                }

                100% {
                    width: 280px;
                    height: 440px;
                    background: #FFFFFF;
                    border-radius: 4px;
                }
            }
        }
    </style>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">

                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{ route('inicio') }}">
                        <!-- Logo icon -->
                        <b class="logo-icon ps-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('assets') }}/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{ asset('assets') }}/images/logoxd.png" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logoxd.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Crear Nuevo -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-md-block">Crear Nuevo <i class="fa fa-angle-down"></i></span>

                                <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>

                        <li>

                        </li>

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown"
                                aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i
                                                            class="ti-calendar"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i
                                                            class="ti-settings"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i
                                                            class="ti-user"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i
                                                            class="fa fa-link"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Luanch Admin</h5>
                                                        <span class="mail-desc">Just see the my new admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </ul>
                        </li>

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{ asset('assets') }}/images/users/1.jpg" alt="user"
                                    class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    {{ auth()->user()->name }}
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="ti-wallet me-1 ms-1"></i>
                                        My Balance</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="ti-email me-1 ms-1"></i>
                                        Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="ti-settings me-1 ms-1"></i> Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <button type="submit" class="dropdown-item">
                                            <i class="fa fa-power-off me-1 ms-1"></i> Cerrar sesion
                                        </button>
                                    </form>
                                    <div class="dropdown-divider"></div>
                                    <div class="ps-4 p-10"><a href="javascript:void(0)"
                                            class="btn btn-sm btn-success btn-rounded text-white">View Profile</a>
                                    </div>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->



        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('inicio') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Inicio</span></a></li>




                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span
                                    class="hide-menu">Formulario Registro</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('registro.index') }}"
                                        class="sidebar-link"><i class="mdi mdi-alert-octagon"></i><span
                                            class="hide-menu"> Formulario Ingreso
                                        </span></a></li>
                            </ul>
                        </li>


                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('inicio') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Citas</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('inicio') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Contacto</span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('registro.create') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Carnet</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('inicio') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Obetivos</span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('inicio') }}" aria-expanded="false"><i
                                    class="mdi mdi-view-dashboard"></i><span class="hide-menu">Programas</span></a>
                        </li>



                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ms-auto text-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <section id="container-slider">


                    <div class="contenedor p-0">
                        <section class="tarjeta" id="tarjeta">
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <aside class="profile-card">
                                <header>
                                    <!-- here’s the avatar -->
                                    <a href="#">
                                        <img src="{{ asset('assets') }}/images/imgqr/logos/silueta.png"
                                            class="hoverZoomLink">
                                    </a>

                                    <!-- the username -->
                                    <h1>
                                        {{ $user->name }} {{ $user->Apellidos }}
                                    </h1>

                                    <!-- and role or location -->
                                    <h2>
                                        ID:{{ $user->id }}
                                    </h2>

                                    <h2>
                                        Curso: {{ $user->Curso }}
                                    </h2>

                                    <h1>
                                        Acudiente: {{ $user->Acudiente }}
                                    </h1>

                                    <h2>
                                        {{ $user->Emergencia }}
                                    </h2>

                                    <br>

                                        <img src="{{ Storage::url($user->name) }}" alt="chair" width="40%" style="display:block;
                                        margin:auto;">


                                </header>




                                <!-- bit of a bio; who are you? -->
                                {{-- <div class="profile-bio">

                  <p>
                    It takes monumental improvement for us to change how we live our lives. Design is the way we access that improvement.
                  </p>

                </div> --}}

                                {{-- @php
                    use SimpleSoftwareIO\QrCode\Facades\QrCode;



     QrCode::format('png')->size(700)->color(255, 0, 0)->generate('Desarrollo libre Andres');

                @endphp --}}

                                {{-- <br><br><br><br><br><br><br><br> --}}

                            </aside>
                        </section>
                    </div>
                    {{-- <script>
                        document.querySelector('#tarjeta').addEventListener('click', () =>
                            document.querySelector('#tarjeta').classList.toggle('active'));
                    </script> --}}


                </section>
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->

            <footer class="footer text-center">
                Todos los derechos reservados a <a href="https://www.uniminuto.edu">Uniminuto</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets') }}/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('assets') }}/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets') }}/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets') }}/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets') }}/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('assets') }}/libs/flot/excanvas.js"></script>
    <script src="{{ asset('assets') }}/libs/flot/jquery.flot.js"></script>
    <script src="{{ asset('assets') }}/libs/flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('assets') }}/libs/flot/jquery.flot.time.js"></script>
    <script src="{{ asset('assets') }}/libs/flot/jquery.flot.stack.js"></script>
    <script src="{{ asset('assets') }}/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="{{ asset('assets') }}/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/chart/chart-page-init.js"></script>
    <script src="{{ asset('assets') }}/js/carrosuel.js"></script>
    <script src="{{ asset('assets') }}/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ asset('assets') }}/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('assets') }}/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('assets') }}/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('assets') }}/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="{{ asset('assets') }}/libs/flot/excanvas.js"></script>
    <script src="{{ asset('assets') }}/libs/flot/jquery.flot.js"></script>
    <script src="{{ asset('assets') }}/libs/flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('assets') }}/libs/flot/jquery.flot.time.js"></script>
    <script src="{{ asset('assets') }}/libs/flot/jquery.flot.stack.js"></script>
    <script src="{{ asset('assets') }}/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="{{ asset('assets') }}/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/chart/chart-page-init.js"></script>
    <script src="{{ asset('assets') }}/js/carrosuel.js"></script>

</body>

</html>
