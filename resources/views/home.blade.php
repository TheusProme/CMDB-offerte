@extends('includes/layout')

@section('content')

<header class="masthead">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 py-5">
                <h1 class="mb-4">Welkom bij EpicIT: CMDB/Offerte</h1>
                <h2 class="m-0">Voel u vrij om rond te kijken bij onze <a href="{{route('products.index')}}">Producten</a>, <a href="/ondersteuning">Ondersteuning</a>, of onze <a href="/diensten">Diensten</a> voor gebruik bij uw project, <a href="/gidsen">Gidsen</a> voor uw eerste project</h2>
            </div>
            <div class="col-lg-5">
                <div class="py-5 px-4 masthead-cards">
                    <div class="d-flex">
                        <a href="{{route('products.index')}}" class="w-50 pr-3 pb-4">
                            <div class="card border-0 border-bottom-red shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fas fa-cart-plus fa-4x my-2"></i>
                                    </div>
                                    Pruducten
                                </div>
                            </div>
                        </a>
                        <a href="/ondersteuning" class="w-50 pl-3 pb-4">
                            <div class="card border-0 border-bottom-blue shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fas fa-phone fa-4x my-2"></i>
                                    </div>
                                    Ondersteuning
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex">
                        <a href="/diensten" class="w-50 pr-3">
                            <div class="card border-0 border-bottom-yellow shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fas fa-tools fa-4x  my-2"></i>
                                    </div>
                                    Diensten
                                </div>
                            </div>
                        </a>
                        <a href="/gidsen" class="w-50 pl-3">
                            <div class="card border-0 border-bottom-green shadow-lg shadow-hover">
                                <div class="card-body text-center">
                                    <div class="text-center">
                                        <i class="fas fa-laptop-code fa-4x my-2"></i>
                                    </div>
                                    Gidsen
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="shape"></div>
                </div>
            </div>
        </div>
    </div>
    <svg style="pointer-events: none" class="wave" width="100%" height="50px" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 75">
        <defs>
            <style>
                .a {
                    fill: none;
                }

                .b {
                    clip-path: url(#a);
                }

                .c,
                .d {
                    fill: #f9f9fc;
                }

                .d {
                    opacity: 0.5;
                    isolation: isolate;
                }
            </style>
            <clipPath id="a">
                <rect class="a" width="1920" height="75"></rect>
            </clipPath>
        </defs>
        <title>wave</title>
        <g class="b">
            <path class="c" d="M1963,327H-105V65A2647.49,2647.49,0,0,1,431,19c217.7,3.5,239.6,30.8,470,36,297.3,6.7,367.5-36.2,642-28a2511.41,2511.41,0,0,1,420,48"></path>
        </g>
        <g class="b">
            <path class="d" d="M-127,404H1963V44c-140.1-28-343.3-46.7-566,22-75.5,23.3-118.5,45.9-162,64-48.6,20.2-404.7,128-784,0C355.2,97.7,341.6,78.3,235,50,86.6,10.6-41.8,6.9-127,10"></path>
        </g>
        <g class="b">
            <path class="d" d="M1979,462-155,446V106C251.8,20.2,576.6,15.9,805,30c167.4,10.3,322.3,32.9,680,56,207,13.4,378,20.3,494,24"></path>
        </g>
        <g class="b">
            <path class="d" d="M1998,484H-243V100c445.8,26.8,794.2-4.1,1035-39,141-20.4,231.1-40.1,378-45,349.6-11.6,636.7,73.8,828,150"></path>
        </g>
    </svg>
</header>

<!-- Producten -->
<div class="container mt-5">
<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Producten</h3>
    <div class="row d-flex justify-content-center g-1">
        @foreach($products as $product)
        <div class="col-xs-12 col-md-6 bootstrap snippets bootdeys">
            <div class="product-content product-wrap clearfix">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="product-image">
                            <a href="{{route('products.show', ['product' => $product])}}">
                                <img src="https://via.placeholder.com/194x228/87CEFA" alt="194x228" class="img-responsive">
                            </a>
                            <span class="tag2 hot">
                                HOT
                            </span>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <a href="{{route('products.show', ['product' => $product])}}">
                            <div class="product-deatil">
                                <h5 class="name">
                                    <a href="#">
                                        {{$product->name}} <span>Category</span>
                                    </a>
                                </h5>
                                <p class="price-container">
                                    <span>€{{$product->price}}</span>
                                </p>
                                <span class="tag1"></span>
                            </div>
                            <div class="description">
                                <p>{{$product->description}}</p>
                            </div>
                            <div class="product-info smart-form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <a href="{{route('addToCart', ['id' => $product->id])}}" class="btn btn-success">Add to cart</a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <div class="rating">
                                            <label for="stars-rating-5"><i class="fa fa-star"></i></label>
                                            <label for="stars-rating-4"><i class="fa fa-star"></i></label>
                                            <label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
                                            <label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
                                            <label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Pages -->
<div class="page-content container note-has-grid">
<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Pages</h3>
@foreach($pages as $page)
    <div class="col-md-4 single-note-item all-category note-important" style="">
        <div class="card card-body">
            <span class="side-stick"></span>
            <h5 class="note-title text-truncate w-75 mb-0" data-noteheading="Go for lunch"><i class="fas fa-paperclip"></i> {{$page->name}}</h5>
            <p class="note-date font-12 text-muted">{{$page->updated_at}}</p>
            <div class="note-content">
                <p class="note-inner-content text-muted">{{$page->description}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- About Us -->
<div class="container mt-5">
<h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About Us</h3>
</div>
<div class="container bootstrap snippets bootdey">
    <div class="col-sm-4">
        <!-- Begin user profile -->
        <div class="box-info text-center user-profile-2">
            <div class="header-cover">
                <img src="{{asset('img/map.jpg')}}" alt="User cover">
            </div>
            <div class="user-profile-inner">
                <h4 class="white">Tony Elia Mokhtar</h4>
                <img src="{{asset('img/pp3.jpg')}}" class="img-circle profile-avatar" alt="User avatar">
                <h5>Leader / Developer</h5>

                <!-- User button -->
                <div class="user-button">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-user"></i> Add as friend</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <!-- Begin user profile -->
        <div class="box-info text-center user-profile-2">
            <div class="header-cover">
                <img src="{{asset('img/map.jpg')}}" alt="User cover">
            </div>
            <div class="user-profile-inner">
                <h4 class="white">Theus de Zeeuw</h4>
                <img src="{{asset('img/pp2.jpg')}}" class="img-circle profile-avatar" alt="User avatar">
                <h5>Developer / Styling</h5>

                <!-- User button -->
                <div class="user-button">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-user"></i> Add as friend</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <!-- Begin user profile -->
        <div class="box-info text-center user-profile-2">
            <div class="header-cover">
                <img src="{{asset('img/map.jpg')}}" alt="User cover">
            </div>
            <div class="user-profile-inner">
                <h4 class="white">Wilco Hansen</h4>
                <img src="{{asset('img/pp1.jpg')}}" class="img-circle profile-avatar" alt="User avatar">
                <h5>Developer / Contact</h5>

                <!-- User button -->
                <div class="user-button">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-user"></i> Add as friend</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ContactFrom (Footer) -->
<section id="footer">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Map</h5>
                <iframe width="350" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=mollenburgseweg%2082&t=k&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Products</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Shoppingcart</a></li>
                    <hr style="margin: 20px 0px 0px 0px;">
                    @if(Auth::check())
                    <p style="color: grey;">Ingelogd als: {{ Auth::user()->name }}</p>
                    <li><a class="" href="{{route('profile.show', ['id' => Auth::user()->id])}}">
                            <i class="fa fa-angle-double-right"></i>User Profile
                        </a></li>
                    <li><a class="" href="{{route('logout')}}"><i class="fa fa-angle-double-right"></i>Logout</a></li>
                    @else
                    <li><a class="" href="{{route('login') }}">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            Login
                        </a></li>
                    @endif
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <h5>Contactfrom</h5>
                <form action="/send-mail" method="GET">
                    <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                    <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
                    <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
                    <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
                    <button class="w3-button w3-black w3-section" type="submit">
                        <i class="fa fa-paper-plane"></i> SEND MESSAGE
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-facebook-square"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-twitter-square"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fab fa-google-plus-square"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
            </hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="">EpicIT Davinci</a></p>
            </div>
            </hr>
        </div>
    </div>
</section>
@stop