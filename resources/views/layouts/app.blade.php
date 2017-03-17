<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]) !!}
            ;
        </script>

    </head>

    <body>

        <header>

            <!--Navbar-->
            <nav class="navbar navbar-toggleable-md navbar-dark bg-primary">
                <div class="container">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('/') }}" >
                        <strong>{{ config('app.name', 'Laravel') }}</strong>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav1">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">Pricing</a>
                            </li>
                            <li class="nav-item dropdown btn-group">
                                <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item">Action</a>
                                    <a class="dropdown-item">Another action</a>
                                    <a class="dropdown-item">Something else here</a>
                                </div>
                            </li>
                        </ul>

                        <form class="form-inline waves-effect waves-light">
                            <input class="form-control" type="text" placeholder="Search">
                        </form>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                            @else
                            <li class="nav-item dropdown btn-group">
                                <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            <!--/.Navbar-->

        </header>

        <main>

            @yield('content')

        </main>

        <!--Footer-->
        <footer class="page-footer center-on-small-only bg-primary">

            <!--Footer Links-->
            <div class="container-fluid">
                <div class="row">

                    <!--First column-->
                    <div class="col-md-3 offset-lg-1 hidden-lg-down">
                        <h5 class="title">ABOUT MATERIAL DESIGN</h5>
                        <p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

                        <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
                    </div>
                    <!--/.First column-->

                    <hr class="hidden-md-up">

                    <!--Second column-->
                    <div class="col-lg-2 col-md-4 offset-lg-1">
                        <h5 class="title">First column</h5>
                        <ul>
                            <li><a href="#!">Link 1</a></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <!--/.Second column-->

                    <hr class="hidden-md-up">

                    <!--Third column-->
                    <div class="col-lg-2 col-md-4">
                        <h5 class="title">Second column</h5>
                        <ul>
                            <li><a href="#!">Link 1</a></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <!--/.Third column-->

                    <hr class="hidden-md-up">

                    <!--Fourth column-->
                    <div class="col-lg-2 col-md-4">
                        <h5 class="title">Third column</h5>
                        <ul>
                            <li><a href="#!">Link 1</a></li>
                            <li><a href="#!">Link 2</a></li>
                            <li><a href="#!">Link 3</a></li>
                            <li><a href="#!">Link 4</a></li>
                        </ul>
                    </div>
                    <!--/.Fourth column-->

                </div>
            </div>
            <!--/.Footer Links-->

            <hr>

            <!--Call to action-->
            <div class="call-to-action">
                <h4>Material Design for Bootstrap</h4>
                <ul>
                    <li>
                        <h5>Get our UI KIT for free</h5></li>
                    <li><a target="_blank" href="http://mdbootstrap.com/getting-started/" class="btn btn-info">Sign up!</a></li>
                    <li><a target="_blank" href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-default">Learn more</a></li>
                </ul>
            </div>
            <!--/.Call to action-->

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

    </body>

</html>
