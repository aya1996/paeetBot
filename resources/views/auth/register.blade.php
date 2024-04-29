@extends('site.includes.master')


@section('content')

<section class="breadcrumb">
    <div class="img-overlay">
        <img src="{{asset('front/images/slider2.jpg')}}" alt="#" />
    </div>
    <div class="m-5"></div>
    <div class="container m-5">
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
                            <span> تسجيل حساب جديد </span>
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
                                <h1>انشاء <span>حساب</span></h1>
                            </div>

                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf
                                 <div class="form-group">
                                    <label>الرقم المدني</label>
                                    <input type="number" class="form-control" name="national_id"  required autofocus>
                                </div>
                                <div class="form-group">
                                    <label>الاسم</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>البريد الإلكتروني</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>كلمة السر</label>
                                    <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>تأكيد كلمة السر</label>
                                    <input type="password" id="password-confirm" class="form-control" name="password_confirmation"  name="re-password" required />

                                </div>
                                <div class="form-group">
                                    <label>الصورة</label>
                                    <input type="file" name="image" accept="image/*" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-form" type="submit">
                                        <span>انشاء حساب</span>
                                    </button>
                                    <a href="{{route('login')}}" class="btn btn-border btn-form" type="submit">
                                        <span>تسجيل الدخول</span>
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
