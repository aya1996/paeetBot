@extends('site.includes.master')


@section('content')

<section class="breadcrumb">
    <div class="img-overlay">
        <img src="{{asset('front/images/slider2.jpg')}}" alt="#" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-bread">
                    <ul>
                        <li>
                            <a href="{{route('home')}}">
                                الرئيسية
                            </a>
                        </li>
                        <li>
                            <span> تسجيل  الدخول</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start About-page -->
 <!-- Start Req-page -->
 <section class="req-page body-inner">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="req-block">
                            <div class="title title-center">
                                <h1>تسجيل <span>دخول</span></h1>
                            </div>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>البريد الإلكتروني</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>كلمة السر</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <button class="btn btn-form" type="submit">
                                        <span>تسجيل الدخول </span>
                                    </button>
                                    <a href="{{route('register')}}" class="btn btn-border btn-form" type="submit">
                                        <span>انشاء حساب</span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
        <!-- End Req-page -->


@endsection
