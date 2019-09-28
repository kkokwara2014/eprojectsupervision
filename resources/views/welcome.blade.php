<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <link rel="shortcut icon" type="image/png" href="{{url('admin_assets/dist/img/','projlogo.png')}}" />

        <title>eAProj</title>

        <!-- Bootstrap core CSS -->
        <link href="{{asset('bootstrap3/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
            <div class="container">
                <a class="navbar-brand" href="#">eAProj</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="mt-5">eAProj - electronic Academic Project Supervision</h1>
                    <p class="lead">...academic project SUPERvision made easy!</p>
                </div>
            </div>
            <div class="jumbotron" >
                    {{-- style="background-image: url(/bootstrap3/img/eaproj_image.jpg);
                    background-size: cover;
                    min-height: 200px;" --}}
                    <img src="" alt="" srcset="">
            </div>
        </div>

        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('bootstrap3/vendor/jquery/jquery.slim.min.js')}}"></script>
        <script src="{{asset('bootstrap3/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    </body>

</html>