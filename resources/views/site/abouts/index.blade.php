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
                            <span> من نحن </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start About-page -->
<section class="about-page body-inner">
    <div class="container">
        <div class="row">
            <!-- Col -->
            <div class="col-md-6 col-sm-12">
                <div class="text-about">
                    <h3>من نحن</h3>
                    <p>{{$about->description ?? ''}}</p>
                </div>
            </div>
            <!-- /Col -->

            <!-- Col -->
            <div class="col-md-6 col-sm-12">
                <div class="img-about">
                    <img src="{{asset($about->image ?? '')}}" alt="#" />
                </div>
            </div>
            <!-- /Col -->
        </div>
    </div>
</section>
<!-- End About-page -->


@endsection
