<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CMDB-Offerte | Home</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{URL::asset('../css/nav.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/homepage.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/productscards.css')}}"> 
    <link rel="stylesheet" href="{{URL::asset('../css/productshow.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/shoppingcart.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/mobileversion.css')}}">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> 
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"></link>
    
    @routes

</head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg navbar-color">
    <div class="container">
        <span class="navbar-brand mb-0 h1"><img src="{{asset('img/logo-epic-white.svg')}}" alt=""></span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products.index')}}">Products</a>
                </li>
            </ul>
            <li class="nav-item form-inline"><a class="nav-link navbar-login" href="{{route('shoppingCart')}}">Shoppingcart</a>
            <span class="badge badge-pill badge-warning">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
            </li>
            <li class="nav-item form-inline">
                @if(Auth::check())
                    <div class="dropdown">
                        <a class="dropdown-toggle navbar-login" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                            <a class="dropdown-item" href="{{route('profile.show', ['id' => Auth::user()->id])}}">
                                User Profile
                            </a>
                            <a class="dropdown-item" href="{{route('orders')}}">
                                My orders
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        </div>
                    </div>
                @else
                    <a class="nav-link navbar-login" href="{{route('login') }}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        Login
                    </a>
                @endif
            </li>
        </div>
    </div>
</nav>
@if(session()->has('message'))
    <div class="alert alert-warning">
        {{ session()->get('message') }}
    </div>
@endif
    @yield('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" ></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{URL::asset('../js/nav.js')}}" integrity="" crossorigin="anonymous"></script>

</body>

</html>
