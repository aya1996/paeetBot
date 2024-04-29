@extends('site.includes.master')


@section('content')

        @if($sliders->count() > 0)
            <section class="slider-h" id="banner">
                <div class="home-slider owl-carousel owl-theme">
                    @foreach ($sliders as $slider)
                    <div class="item">
                        <div class="slider-block">
                            <div class="img-overlay">
                                <img src="{{asset($slider->image ?? '')}}" alt="#" />
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-slider">
                                            <h1>{{$slider->title}}</h1>
                                            <p>{{$slider->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
        @endif


        <section class="about-page body-inner" id="abouts">
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

        @if ($testimonails->count() > 0)
            <section class="test-h" id="testimonails">
                <div class="container">
                    <div class="row">
                        <!-- Col -->
                        <div class="col-md-12">
                            <div class="title">
                                <h3>أراء الطلاب</h3>
                            </div>

                            <div class="owl-carousel owl-theme test-slider">
                                @foreach ($testimonails as $testimonail)
                                    <div class="item">
                                        <div class="test-block">
                                            <div class="comment-test">
                                                <p>{{$testimonail->description}}</p>
                                            </div>
                                            <div class="user-test">
                                                <div class="img">
                                                    <img src="{{asset($testimonail->image)}}" alt="#" loading="lazy" />
                                                </div>
                                                <div class="name-user">
                                                    <span>{{$testimonail->job_title}}</span>
                                                    <h5>{{$testimonail->name}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endforeach
                            </div>
                        </div>
                        <!-- /Col -->
                    </div>
                    <div class="text-center justify-content-center">
                    <h3>رأيك يهمنا</h3>
                    <button type="button" class="btn btn-success text-center" data-toggle="modal" data-target="#modal-lg">أرسل رأيك  </button>
                    </div>
                </div>
            </section>
        @endif
        {{--  modal add   --}}
  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">أرسل رأيك </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('testimonails.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>الإسم</label>
                                    <input type="text"  name="name" class="form-control" placeholder="الإسم" value="{{old('name')}}" required></input>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>العنوان</label>
                                    <input type="text"  name="job_title" class="form-control" placeholder=" العنوان" value="{{old('job_title')}}" required></input>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>الوصف</label>
                                    <textarea  rows="4" name="description" class="form-control" placeholder="الوصف" required>{{old('description')}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>الصورة</label>
                                    <input type="file" class="form-control" name="image" accept="image/*" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">إغلاق</button>
                    <button type="submit" class="btn btn-primary">إرسال</button>
                </div>
            </div>
        </form>
    </div>
  </div>
  {{--  modal add   --}}
@endsection
