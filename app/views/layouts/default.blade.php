<!doctype html>
<html ng-app>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/assets/stylesheets/app.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="/bower_components/bootstrap/assets/js/html5shiv.js"></script>
        <script src="/bower_components/bootstrap/assets/js/respond.min.js"></script>
        <![endif]-->
        <script src="/bower_components/jquery/jquery.min.js"></script>
        <script src="/bower_components/angular/angular.min.js"></script>
    </head>

    <body>

        @include('partials.menu')

        <div class="container">
            <div class="content">

                @if (Session::has('message'))
                    <div class="flash alert">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                @endif

                @yield('main')
            </div>
        </div>

        <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    </body>
</html>