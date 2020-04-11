<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kantin Wikrama</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Font Awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">    
<style>
            :root {
            --jumbotron-padding-y: 3rem;
            }

            .jumbotron {
                padding-top: var(--jumbotron-padding-y);
                padding-bottom: var(--jumbotron-padding-y);
                margin-bottom: 0;
                background-color: #fff;
            }

            @media (min-width: 768px) {
                .jumbotron {
                    padding-top: calc(var(--jumbotron-padding-y) * 2);
                    padding-bottom: calc(var(--jumbotron-padding-y) * 2);
                }
            }

            .jumbotron p:last-child {
                margin-bottom: 0;
            }

            .jumbotron-heading {
                font-weight: 300;
            }

            .jumbotron .container {
                max-width: 40rem;
            }

            footer {
                padding-top: 3rem;
                padding-bottom: 3rem;
            }

            footer p {
                margin-bottom: .25rem;
            }

            .box-shadow {
                box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
            }
            
            /* Carousel base class */
            .carousel {
                margin-bottom: 4rem;
            }

            /* Since positioning the image, we need to help out the caption */
            .carousel-caption {
                bottom: 3rem;
                z-index: 10;
            }

            /* Declare heights because of positioning of img element */
            .carousel-item {
                height: 40rem;
                background-color: #777;
            }
            .carousel-item > img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 45rem;
                filter: blur(1px);
                -webkit-filter: blur(1px);
            }

            .darker { 
              filter: brightness(0%) blur(3px);
            }
        </style>
      

</head>
<body>
    <div id="app">
        <header>
                <div class="navbar navbar-expand-lg navbar-light bg-white navbar-fixed-top">
                    <div class="container d-flex justify-content-between">
                    <a href="{{route('daftarMakanan.index')}}" class="navbar-brand d-flex align-items-center">
                        <strong style="color: #eb8322">Kantin Wikrama</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    @guest
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">  
                       <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        
                    </div>
                    <a href="#" class="mr-3"><i class="fa fa-user fa-md text-dark"></i> <span style="color: #eb8322;">{{ Auth::user()->name }}</span></a>
                    |
                    <a href="{{route('keranjang.index')}}" class="ml-3 mr-3"><i class="fa fa-shopping-cart fa-md text-warning"></i></a>
                    |
                    
                                    <a class="ml-3" style="color: #eb8322;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    @endguest
                    </div>
                </header>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
