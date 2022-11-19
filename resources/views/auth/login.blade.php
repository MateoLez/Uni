<!DOCTYPE html>
<html lang="en">

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
    <title>Iniciar Sesion</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="bg-primary" style="color: #3e5569 !important;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg" style="margin-top: 20em">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4"><img src="{{ asset('assets') }}/images/logoxd2.png" class="center-block" alt=""></h3></div>
                                <div class="card-body">
                                    <h1></h1>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <label for="inputEmail">Correo</label>
                                            <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                                        </div>
                                        <div class="form-floating mb-3">
                                            <label for="inputPassword">Contraseña</label>
                                            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" />

                                        </div>

                                        <button class="btn btn-primary" type="submit">Iniciar Sesion</button>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <footer>

        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
