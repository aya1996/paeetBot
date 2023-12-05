@extends('site.includes.master')


@section('content')

<section class="breadcrumb">
    <div class="img-overlay">
        <img src="{{asset('front/images/slider.jpg')}}" alt="#" />
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
                            <span> الملف الشخصي </span>
                        </li>
                        <li>
                            <span>| {{auth()->user()->name}} </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="profile-page body-inner">
        <div class="container">
            <div class="row">
                <!-- Col -->
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="myInfo">
                            <br>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="img-profile">
                                        <div class="profile-pic">
                                            <img src="{{asset(auth()->user()->image)}}" id="output" width="200" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs-content-profile">
                                <form action="{{route('profile-update',auth()->id())}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-profile">
                                        <div class="form-group">
                                            <label>الإسم </label>
                                            <input type="text" value="{{auth()->user()->name}}" name="name" class="form-control" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>البريد الإليكتروني</label>
                                            <input type="text" value="{{auth()->user()->email}}" placeholder="البريد الإليكتروني" class="form-control" name="email"/>
                                        </div>
                                        <div class="form-group">
                                            <label> (اختياري) الرقم السري</label>
                                            <input type="password" name="password" placeholder="الرقم السري" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>الصورة</label>
                                            <input type="file" name="image" accept="image/*" class="form-control" />
                                            <span style="color:red">اختياري ......</span>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-form" type="submit">
                                                <span>تعديل المعلومات الشخصية</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Col -->
            </div>
        </div>
    </section>


@endsection
