<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    @yield('css')

</head>
<body>
        <header class="line">
                   <div><p id="sitename" class="didot">TOP & TENDANCE</p></div>
                    {{-- <p id="connectuser">CONNECT USER</p> --}}
    {{-- <div id="app"> --}}
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container"> --}}
                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div>
                        <nav class="centrage">
                                           <ul>
                                               <li><a id = "con" href="/login">CONNEXION</a></li>
                                               &nbsp;<li><a id = "cat" href="/catalog" >CATALOGUE</a></li>
                                               &nbsp;<li><a id = "pan" href="/panier">PANIER</a></li>
                                           </ul>
                                       </nav>
                </div>

                <div  class="connectuser" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul id="" class="confont">
                        <!-- Authentication Links -->
                        @guest
                            <li  class="nav-item">
                                {{-- <a align="center" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> --}}
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> --}}
                                </li>
                            @endif
                        @else
                        <div class="confont">
                            {{-- <li > --}}
                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} <span class="caret"></span>
                                </a>
                                <div id="online">{{ Auth::user()->getConnectedPeople() }}<div>
                                <button id="online" onclick="clcik()">Click</button>
                                <script type="text/javascript">
                                var req = new XMLHttpRequest();
                                req.open("GET", "http://localhost:8000/home", true);
                                req.onreadystatechange = function () {
                                if (req.readyState != 4 || req.status != 200) return;
                                document.getElementById('online')=req.responseText;
                                };
                                </script>
                            </div>        

                                <div class="logout" aria-labelledby="navbarDropdown">
                                    <a class="logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            {{-- </li> --}}
                        @endguest
                    </ul>
                </div>
            {{-- </div> --}}
        {{-- </nav> --}}
    </header>


        <main class="py-4">
            @yield('content')
        </main>
        <footer class="bas">
                <div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <!-- Add font awesome icons -->
                <a href="#" class="fa fa-facebook" target="_blank"></a>
                <a href="#" class="fa fa-twitter" target="_blank"></a>
                </div>
                @include('cookieConsent::index')
        </footer>
    {{-- </div> --}}
</body>
</html>