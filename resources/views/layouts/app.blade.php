<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        <!--mdl-->
        <link rel="stylesheet" href="/node_modules/material-design-lite/material.min.css">      

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
        
        <!--mdl-->
        <script src="/node_modules/material-design-lite/material.min.js"></script>

    </head>

    <body>

        @section('loginForm')

        @include('template.loginForm')

        @show

        <header>

            @section('navbar')

            @include('template.navbar')

            @show

        </header>

        <main>

            <!--Main layout-->
            <div class="container">
                <div class="row">


                    @yield('content')

                    @section('sidebar')

                    @include('template.sidebar')

                    @show

                </div>
            </div>
            <!--/.Main layout-->

        </main>

        @section('footer')

        @include('template.footer')

        @show

        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/tether.min.js"></script>

        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

        <!-- App JavaScript -->
        <script type="text/javascript" src="js/app.js"></script>

    </body>

</html>
