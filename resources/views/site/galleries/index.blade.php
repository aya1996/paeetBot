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
                            <span>  معرض الصور </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@if ($galleries->count() > 0)
        <section class="products-h">
            <div class="container">
                <div class="row">
                    <!-- Col -->
                    <div class="col-md-12">
                        <div class="title">
                            <h3>معرض الصور</h3>
                        </div>

                        <div class="tab-inner">
                            <div class="products-slider owl-carousel owl-theme">
                                @foreach ($galleries as $item)
                                        <div class="item">
                                            <a href="{{asset($item->image)}}" class="pro-block" data-fancybox="gallaryPhoto">
                                                <div class="img-block">
                                                    <img src="{{asset($item->image)}}" alt="#" />
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- /Col -->
                </div>
            </div>
        </section>
@endif

@endsection
