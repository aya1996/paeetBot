<!DOCTYPE html>
<html>

<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="utf-8">
    <meta name="author" content="Arboon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0D3558">
    <title>PaaetBot</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/logo.png')}}" />
    <link href="{{asset('front/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('front/css/mobile.css')}}" rel="stylesheet" type="text/css" />
  
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">


    @yield('css')
</head>

<body>

    <!-- Start Header -->
    <header class="sticky">

        <!-- Start Header-top -->
        <div class="header-top">
            <div class="container">
                <div class="row">

                    <!-- Col -->
                    <div class="col-md-12">

                        <div class="head-top">
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('front/images/logo.png')}}" />
                                </a>
                            </div>

                            <div class="nav-head">
                                <ul>
                                    <li>
                                        <a href="{{route('home')}}" class="current-menu-item">
                                            <span>الرئيسية</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('gallery')}}" class="current-menu-item">
                                            <span> معرض الصور</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('home')}}#testimonails" class="current-menu-item">
                                            <span> آراء الطلاب </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}" class="current-menu-item">
                                            <span>من نحن</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}" class="current-menu-item">
                                            <span>تواصل معنا</span>
                                        </a>
                                    </li>
                                    @if(auth()->check())
                                    <li>
                                        <a href="{{route('profile')}}" class="current-menu-item">
                                            <span> الملف الشخصي </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <span>تسجيل الخروج</span>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </a>
                                    </li>

                                    @else

                                        <div class="btn-group">
                                            <a href="{{route('login')}}" class="btn btn-border">
                                                <span>تسجيل الدخول</span>
                                            </a>
                                        </div>
                                    @endif
                                </ul>

                                <div class="menu-right">
                                    <div class="item res-menu">
                                        <div class="mobile-nav-toggler">
                                            <span class="icon flaticon-menu">
                                                <i class="fal fa-bars"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </div>
        <!-- End Header-top -->
    </header>
    <!-- End Header-->

    <a id="button"></a>
    <main class="main-content">
