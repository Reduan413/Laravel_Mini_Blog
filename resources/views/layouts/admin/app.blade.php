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
    <!-- Uicons -->
    <link rel="stylesheet" href="{{ asset('assets/css/uicons.css') }}" />
    <!-- Icofont -->
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.css') }}" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/adminNav.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <!-- Scripts -->
    <blade vite|(%5B%26%2339%3Bresources%2Fsass%2Fapp.scss%26%2339%3B%2C%20%26%2339%3Bresources%2Fjs%2Fapp.js%26%2339%3B%5D)>
</head>

<body>
    <div id="app">
    </div>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">
                    <a href="{{ route('dashboard') }}" class="{{ request()->path() == 'dashboard' ? 'list-group-item list-group-item-action py-2 ripple active' : 'list-group-item list-group-item-action py-2 ripple' }}" aria-current="true">
                        <i class="fi fi-rr-home me-3"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href={{ route('all_post') }} class="{{ request()->path() == 'dashboard/all-post' ? 'list-group-item list-group-item-action py-2 ripple active' : (request()->path() == 'dashboard/create-post' ? 'list-group-item list-group-item-action py-2 ripple active':  (request()->path() == 'dashboard/post/edit/${id}' ? 'list-group-item list-group-item-action py-2 ripple active': 'list-group-item list-group-item-action py-2 ripple'))}}">
                        <i class="fi fi-sr-blog-text me-3"></i>
                        <span>Post</span>
                    </a>
                    <a href={{ route('all_student') }} class="{{ request()->path() == 'dashboard/all-students' ? 'list-group-item list-group-item-action py-2 ripple active' : (request()->path() == 'dashboard/create-student' ? 'list-group-item list-group-item-action py-2 ripple active':  (request()->path() == 'dashboard/post/edit/${id}' ? 'list-group-item list-group-item-action py-2 ripple active': 'list-group-item list-group-item-action py-2 ripple'))}}">
                        <i class="fi fi-ss-users-alt me-3"></i>
                        <span>All Students</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-line fa-fw me-3"></i>
                        <span>Analytics</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-pie fa-fw me-3"></i>
                        <span>SEO</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-chart-bar fa-fw me-3"></i>
                        <span>Orders</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-globe fa-fw me-3"></i>
                        <span>International</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-building fa-fw me-3"></i>
                        <span>Partners</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-calendar fa-fw me-3"></i>
                        <span>Calendar</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-users fa-fw me-3"></i>
                        <span>Users</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fas fa-money-bill fa-fw me-3"></i>
                        <span>Sales</span>
                    </a>
                </div>
                <div class="dropdown pb-4 ms-3 mt-5">
                    <a href="#" class="d-flex align-items-center  text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        {{-- <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li> --}}
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Sign out</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Sidebar -->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />
                </a>
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 70px">

        @yield('content')

    </main>
    <!--Main layout-->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('wysiwyg-editor', {
            filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}"
            , filebrowserUploadMethod: 'form'
        });

    </script>
    <script>
        // Graph
        var ctx = document.getElementById("myChart");

        var myChart = new Chart(ctx, {
            type: "line"
            , data: {
                labels: [
                    "Sunday"
                    , "Monday"
                    , "Tuesday"
                    , "Wednesday"
                    , "Thursday"
                    , "Friday"
                    , "Saturday"
                , ]
                , datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034]
                    , lineTension: 0
                    , backgroundColor: "transparent"
                    , borderColor: "#007bff"
                    , borderWidth: 4
                    , pointBackgroundColor: "#007bff"
                , }, ]
            , }
            , options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        , }
                    , }, ]
                , }
                , legend: {
                    display: false
                , }
            , }
        , });

    </script>
    <!-- Jquery JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
</body>

</html>
