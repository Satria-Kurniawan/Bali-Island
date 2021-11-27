<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.1.0/') }}/dist/css/adminlte.min.css">

    {{-- CSS ku --}}
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE-3.1.0/') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE-3.1.0/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE-3.1.0/') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('AdminLTE-3.1.0/') }}/dist/js/demo.js"></script>

    {{-- <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet"/> --}}

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Permanent Marker' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>

</head>

<body style="font-family: Signika">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-white border-bottom fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <i class="fas fa-bars text-blue"></i>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar1">
                <ul class="navbar-nav mr-auto pt-2 pb-2" style="margin-left: 95px">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/satria.kurniawan.3726"><i
                                class="fab fa-facebook-square mr-3 fa-2x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/saatryaaa__/"><i
                                class="fab fab fa-instagram mr-3 fa-2x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#"><i class="fab fa-twitter mr-3 fa-2x"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('https://www.youtube.com/channel/UCbiUHVvVu4owlYtJGBxo8bA') }}"><i
                                class="fab fa-youtube mr-3 fa-2x"></i></a>
                    </li>
                    <li class="nav-item mt-1" style="font-family: Permanent Marker">
                        <a href="{{ route('welcome') }}" class="text-blue">
                            <h5>BALI&nbsp</h5>
                        </a>
                    </li>
                    <li class="nav-item mt-1" style="font-family: Permanent Marker">
                        <a href="{{ route('welcome') }}" class="text-pink">
                            <h5>ISLAND</h5>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto" style="margin-right: 80px">
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        @if (Auth::user()->role == 'admin')
                        <a href="{{ url('/postingan') }}" class="nav-link text-pink">Manage</a>
                        @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-blue pr-0">Log in<i
                                class="pl-1 fas fa-sign-in-alt"></i></a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link text-pink">Register<i
                                class="pl-1 fas fa-user-plus"></i></a>
                    </li>
                    @endif
                    @endauth
                    @endif
                </ul>
            </div>
        </nav>


        {{-- <div class="container-fluid text-white border-b mb-0 text-center bg-image p-3">
            <h1>Bali Island</h1>
            <p>Selamat datang di website objek wisata Bali</p>
        </div> --}}
        <nav class="navbar navbar-expand-sm navbar-white border-bottom nav-position">
            {{-- <!-- Brand -->
            <a class="navbar-brand" href="#">Bali Island</a> --}}

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                data-target="#collapsibleNavbar2">
                {{-- <span class="navbar-toggler-icon"></span> --}}
                <i class="fas fa-bars text-pink"></i>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar2">
                <ul class="navbar-nav ml-auto nav-tabs" style="margin-right: 95px">
                    <li class="nav-item">
                        <a class="nav-link text-blue {{ Route::is('welcome') ? 'active' : '' }}"
                            href="{{ route('welcome') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-pink {{ Route::is('galeri') ? 'active' : '' }}"
                            href="{{ route('galeri') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-blue {{ Route::is('kontak') ? 'active' : '' }}"
                            href="{{ route('kontak') }}">Contact</a>
                    </li>
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link dropdown-toggle text-pink" href="#" id="navbardrop" data-toggle="dropdown">
                            Info
                        </a>
                        <div class="dropdown-menu bg-primary border-0">
                            <a class="dropdown-item {{ Route::is('overview') ? 'active' : '' }} text-white"
                                href="{{ route('overview') }}">Overview</a>
                            <a class="dropdown-item {{ Route::is('aboutMe') ? 'active' : '' }} text-white"
                                href="{{ route('aboutMe') }}">About Me</a>
                            <a class="dropdown-item"
                                href="{{ url('https://yaarestaurant.azurewebsites.net') }} text-white">
                                Restaurant
                            </a>
                        </div>
                    </li>
                    <script>
                        $(function () {
                            $('.dropdown').hover(function () {
                                    $(this).addClass('show');
                                },
                                function () {
                                    $(this).removeClass('show');
                                });
                        });

                    </script>
                    <li class="nav-item">
                        <form class="form-inline" action="{{ url('/pencarian') }}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." name="kueri">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <section>
        @yield('content')
    </section>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                @yield('bottom-content')
            </div>
            <div class="col-sm-4">
                <div class="card-transparent">
                    <div class="card-header">
                        <h5>ABOUT ME</h5>
                    </div>
                    <div class="card-body">
                        {{-- <audio controls>
                            <source src="{{ asset('storage/audios/Maroon_5_ft_Wiz_Khalifa_-_Payphone.mp3') }}"
                        type="audio/mpeg">
                        <source
                            src="{{ asset('storage/audios/The Fault In Our Stars - Charli XCX - Boom Clap (320 kbps).mp3') }}"
                            type="audio/mpeg">
                        </audio> --}}
                        <a href="{{ route('aboutMe') }}">Lihat selengkapnya</a>
                    </div>
                </div>
                <div class="card-transparent">
                    <div class="card-header">
                        <h5>SOSIAL MEDIA</h5>
                    </div>
                    <div class="card-body">
                        <a href="https://www.facebook.com/satria.kurniawan.3726"><i
                                class="fab fa-facebook-square mr-3 fa-4x"></i></a>
                        <a href="https://www.instagram.com/saatryaaa__/"><i
                                class="fab fab fa-instagram mr-3 fa-4x"></i></a>
                        <a href="#"><i class="fab fa-twitter mr-3 fa-4x"></i></a>
                        <a href="{{ url('https://www.youtube.com/channel/UCbiUHVvVu4owlYtJGBxo8bA') }}"><i
                                class="fab fa-youtube fa-4x"></i></a>
                    </div>
                </div>
                <div class="card-transparent">
                    <div class="card-header">
                        <h5>TRENDING</h5>
                    </div>
                    <div class="card-body">
                        <p>
                            @foreach ($post_1 as $item)
                            {{ $item->title }}
                            @endforeach
                        </p>
                        <p>
                            @foreach ($post_2 as $item)
                            {{ $item->title }}
                            @endforeach
                        </p>
                        <p>
                            @foreach ($post_3 as $item)
                            {{ $item->title }}
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            @yield('pagination-content')
        </div>
    </div>
    <div class="container-fluid bg-light">
        <div class="row p-3">
            <div class="col-3">
                <img src="{{ url("../storage/images/Brand-Logo.png") }}" style="height: 150px">
            </div>
            <div class="col-3">
                <ul style="list-style-type: none" class="ml-0">
                    <h5>CUSTOMER SUPPORT</h5>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Support</a></li>
                </ul>
            </div>
            <div class="col-3">
                <ul style="list-style-type: none" class="ml-0">
                    <h5>LEGAL</h5>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy</a></li>
                </ul>
            </div>
            <div class="col-3">
                <ul style="list-style-type: none" class="ml-0">
                    <h5>PROFIL</h5>
                    <li><a href="{{ route('aboutMe') }}">About Me</a></li>
                    <li><a href="{{ route('kontak') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
