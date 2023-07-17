<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rayan Lounge - @yield('title')</title>
    <link rel="icon" href="images/Rayan Logo W.png" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- CSS Files
    ================================================== -->
    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="/frontend/css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb" />
    <link href="/frontend/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/frontend/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/frontend/css/coloring.css" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link href="/frontend/css/colors/scheme-01.css" rel="stylesheet" type="text/css" id="colors" />

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body class="dark-scheme">
    <div id="app">

        <div id="wrapper">
            <div id="preloader">
                <div class="preloader1"></div>
            </div>

            <!-- header begin -->
            @include('layouts.inc.frontend.navbar')
            <!-- header close -->

            <!-- content begin -->
            <main >
                @yield('content')
            </main>
            <!-- content close -->

            <!-- back to to open -->
            <a href="#" id="back-to-top"></a>
            <!-- back to to close -->
                   
            <!-- footer begin -->

            @include('layouts.inc.frontend.footer')
            <!-- footer close -->


        </div>
    </div>
            

        <!-- Javascript Files
    ================================================== -->
    <script src="frontend/js/jquery.min.js"></script>
    <script src="frontend/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/js/plugins.min.js"></script>
    <script src="frontend/js/designesia.js"></script>

    @yield('scripts')
</body>
</html>
