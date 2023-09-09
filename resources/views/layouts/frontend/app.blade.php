<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Uicons -->
    <link rel="stylesheet" href="{{ asset('assets/css/uicons.css') }}" />
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <!-- Scripts -->
    <blade vite|(%5B%26%2339%3Bresources%2Fsass%2Fapp.scss%26%2339%3B%2C%20%26%2339%3Bresources%2Fjs%2Fapp.js%26%2339%3B%5D)>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <div class="container">
                <div>
                    <a class="navbar-brand navbar-logo" href="/">Twa</a>
                    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-facebook text-white"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <div class="hori-selector">
                            <div class="left"></div>
                            <div class="right"></div>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i>Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('allStudent') }}"><i class="far fa-address-book"></i>All Student</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>İletişim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Kullanıcı Girişi</a>
                        </li>

                    </ul>
                </div>
            </div>

        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('wysiwyg-editor', {
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}"
            , filebrowserUploadMethod: 'form'
        });

    </script>
    <!-- Jquery JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/navbar.js') }}"></script>
</body>

</html>
