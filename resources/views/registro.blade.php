
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Registro y Control</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/images/favicon.png">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/libs/select2/{{ asset('assets') }}/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/libs/bootstrap-datepicker/{{ asset('assets') }}/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/libs/quill/dist/quill.snow.css">
    <link href="{{ asset('assets') }}/css/style.min.css" rel="stylesheet">

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    @if (session('info'))
            <script>
                const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
                })

                Toast.fire({
                icon: 'success',
                title: '{{ session('info') }}'
                })
            </script>
    @endif
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
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">

                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{route('inicio')}}">
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
                        <!-- <img src="{{ asset('assets') }}/images/logoxd.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Crear Nuevo -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
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
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-bell font-24"></i>
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
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Event today</h5>
                                                        <span class="mail-desc">Just a reminder that event</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Settings</h5>
                                                        <span class="mail-desc">You can customize this template</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="ms-2">
                                                        <h5 class="mb-0">Pavan kumar</h5>
                                                        <span class="mail-desc">Just see the my admin!</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="{{ asset('assets') }}/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user me-1 ms-1"></i>
                                    {{ auth()->user()->name }}
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet me-1 ms-1"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email me-1 ms-1"></i>
                                    Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings me-1 ms-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <button type="submit" class="dropdown-item">
                                        <i class="fa fa-power-off me-1 ms-1"></i> Cerrar sesion
                                    </button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <div class="ps-4 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded text-white">View Profile</a></div>
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
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('inicio')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Inicio</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Formularios Registro</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="{{ route('registro.index')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Formulario Ingreso
                                        </span></a></li>
                            </ul>
                        </li>


                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('inicio')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Citas</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('inicio')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Contacto</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('registro.create')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Carnet</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('inicio')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Obetivos</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('inicio')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Programas</span></a></li>

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
                        <h4 class="page-title">Formulario de registro</h4>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body wizard-content">
                            <form class="form-horizontal" method="POST"  action="{{ route('registro.store') }}" encrypte="multipart/form-data" id="a">
                                @csrf
                                <div class="card-body">
                                    <h4 style="text-align: center;" class="card-title">Informaci??n Principal</h4>
                                    <br>
                                    <br>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Documento</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="Documento" placeholder="Documento" name="Documento">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nombres</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="name" placeholder="Nombres" name="name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Apellidos</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="Apellidos" placeholder="Apellidos" name="Apellidos">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Fecha de nacimiento</label>
                                        <div class="col-sm-6">
                                            <input type="date" required="" style="text-align: center;" class="form-control" id="Fecha" placeholder="Edad" name="Fecha">
                                        </div>
                                    </div>
                                    <div class="">
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-end control-label col-form-label">Sexo</label>
                                        <div class="col-sm-6">
                                        <select multiple style="text-align: center;" class="form-control" id="Sexo" placeholder="Sexo" name="Sexo">
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                        </select>
                                        </div>
                                    </div>


                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Numero de contacto</label>
                                        <div class="col-sm-6">
                                            <input type="text" required pattern="[0-9]+" style="text-align: center;" class="form-control" id="cono1" placeholder="Numero de contacto" name="Numero">
                                        </div>

                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Observaciones de ingreso</label>
                                        <div class="col-sm-6">
                                            <textarea required="" style="text-align: center;" class="form-control" name="Observaciones" placeholder="Observaciones"></textarea>
                                        </div>
                                    </div>
<br>
                                    <h4 style="text-align: center;">Informaci??n complementaria</h4>
                                    <br>
                                    <br>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Lugar de nacimiento</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="lname" placeholder="Lugar de nacimiento" name="Lugar">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Nombre del pap??</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="fname" placeholder="Nombre del pap??" name="Papa">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Nombre de la mam??</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="lname" placeholder="Nombre de la mam??" name="Mama">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Nombre del colegio</label>
                                        <div class="col-sm-6">
                                            <input type="text"  style="text-align: center;" class="form-control" id="cono1" placeholder="Nombre del colegio" name="Colegio">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Direcci??n de residencia</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="lname" placeholder="Direcci??n de residencia" name="Direccion">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-end control-label col-form-label">Correo</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="email1" placeholder="Correo" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Eps</label>
                                        <div class="col-sm-6">
                                            <input type="text" style="text-align: center;" class="form-control" id="cono1" placeholder="Eps" name="Eps">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Acudiente</label>
                                        <div class="col-sm-6">
                                            <input type="text" style="text-align: center;" class="form-control" id="cono1" placeholder="Acudiente" name="Acudiente">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Curso</label>
                                        <div class="col-sm-6">
                                            <input type="text" style="text-align: center;" class="form-control" id="lname" placeholder="Curso" name="Curso">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Numero de Celular</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="fname" placeholder="Numero de Celular" name="Numero2">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Numero de emergencia</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="lname" placeholder="Numero de emergencia" name="Emergencia">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Jornada</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="lname" placeholder="Jornada" name="Jornada">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email1" class="col-sm-3 text-end control-label col-form-label">Tipo de sangre</label>
                                        <div class="col-sm-6">
                                            <input type="text" required="" style="text-align: center;" class="form-control" id="email1" placeholder="Tipo de sangre" name="Sangre">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cono1" class="col-sm-3 text-end control-label col-form-label">Programa</label>
                                        <div class="col-sm-6">
                                            <input type="text" style="text-align: center;" class="form-control" id="cono1" placeholder="Programa" name="Programa">
                                        </div>
                                    </div>

                                </div>
                                <div class="border-top">
                                    <div class="col text-center">
                                        <input type="submit" class="btn btn-dark"  value="Agregar" >
                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </form>

                        </div>
                    </div>

                    <h4 style="text-align: center;">Recuerde buscar Documento, Nombre o Apellido</h4>
                    <br>

                    <div class="border-end">
                        <div class="col ">
                            <a href="excel.php" type="submit" class="btn btn-success" id="registro">Descargar XLS</a>
                        </div>
                        <br>
                        <br>
                    </div>
                    <div class="input-group">
                        <input type="search" name="buscar" id="buscar" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    </div>
                    <br>
                    <br>
                    <div class="col-md-12 mx-auto">

                        <div id="datos" class="card">
                            <table class="table table-hover">

                                <thead>
                                    <tr>
                                        <th>Documento</th>
                                        <th>Nombres</th>

                                        <th>Numero Contacto</th>
                                        <th>Observaciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->Documento }}</td>
                                        <td>{{ $user->name }}{{ $user->Apellidos }}</td>
                                        <td>{{ $user->Numero }}</td>
                                        <td>{{ $user->Observaciones }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                <footer class="footer text-center">
                    Todos los derechos reservados a Uniminuto. Creado y desarrollado por : <a href="https://www.uniminuto.edu">Uniminuto</a>.
                </footer>


                <script src="{{ asset('assets') }}/libs/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap tether Core JavaScript -->
                <script src="{{ asset('assets') }}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                <!-- slimscrollbar scrollbar JavaScript -->
                <script src="{{ asset('assets') }}/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
                <script src="{{ asset('assets') }}/extra-libs/sparkline/sparkline.js"></script>
                <!--Wave Effects -->
                <script src="{{ asset('assets') }}//js/waves.js"></script>
                <!--Menu sidebar -->
                <script src="{{ asset('assets') }}//js/sidebarmenu.js"></script>
                <!--Custom JavaScript -->
                <script src="{{ asset('assets') }}//js/custom.min.js"></script>
                <!-- This Page JS -->
                <script src="{{ asset('assets') }}/libs/inputmask/dist//min/jquery.inputmask.bundle.min.js"></script>
                <script src="{{ asset('assets') }}//js/pages/mask/mask.init.js"></script>
                <script src="{{ asset('assets') }}/libs/select2/dist/js/select2.full.min.js"></script>
                <script src="{{ asset('assets') }}/libs/select2/dist/js/select2.min.js"></script>
                <script src="{{ asset('assets') }}/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
                <script src="{{ asset('assets') }}/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
                <script src="{{ asset('assets') }}/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
                <script src="{{ asset('assets') }}/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
                <script src="{{ asset('assets') }}/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
                <script src="{{ asset('assets') }}/libs/quill/dist/quill.min.js"></script>
                <script src="{{ asset('assets') }}/js/buscar.js"></script>
                <script src="{{ asset('assets') }}/js/registropersonal.js"></script>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

                <script>
                    //***********************************//
                    // For select 2
                    //***********************************//
                    $(".select2").select2();

                    /*colorpicker*/
                    $('.demo').each(function() {
                        //
                        // Dear reader, it's actually very easy to initialize MiniColors. For example:
                        //
                        //  $(selector).minicolors();
                        //
                        // The way I've done it below is just for the demo, so don't get confused
                        // by it. Also, data- attributes aren't supported at this time...they're
                        // only used for this demo.
                        //
                        $(this).minicolors({
                            control: $(this).attr('data-control') || 'hue',
                            position: $(this).attr('data-position') || 'bottom left',

                            change: function(value, opacity) {
                                if (!value) return;
                                if (opacity) value += ', ' + opacity;
                                if (typeof console === 'object') {
                                    console.log(value);
                                }
                            },
                            theme: 'bootstrap'
                        });

                    });
                    /*datwpicker*/
                    jQuery('.mydatepicker').datepicker();
                    jQuery('#datepicker-autoclose').datepicker({
                        autoclose: true,
                        todayHighlight: true
                    });
                    var quill = new Quill('#editor', {
                        theme: 'snow'
                    });
                </script>
</body>

</html>
