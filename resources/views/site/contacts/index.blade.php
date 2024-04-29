@extends('site.includes.master')


@section('content')

    <section class="breadcrumb">
        <div class="img-overlay">
            <img src="{{asset('front/images/slider2.jpg')}}" alt="#" />
        </div>
        <div class="m-5"></div>
        <div class="container m-5">
            <div class="row ">
                <div class="col-md-12">
                    <div class="text-bread">
                        <ul>
                            <li>
                                <a href="{{route('home')}}">
                                    الرئيسية
                                </a>
                            </li>
                            <li>
                                <span>اتصل بنا</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-page body-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form register  animate__animated animate__fadeInUp">
                        <div class="contact">
                            <h5>أرسل لنا</h5>
                            <form action="{{route('contact-store')}}" method="POST">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" placeholder="الاسم" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-sm-12">
                                        <div class="form-group">
                                            <input type="email" placeholder="البريدالإلكتروني" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="tel" placeholder="رقم الهاتف" name="phone" class="form-control" dir="rtl" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea placeholder="الرساله" name="msg" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-form">
                                                <span>إرسال</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27814.42204120186!2d47.9643142297399!3d29.376064050715662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9c83ce455983%3A0xc3ebaef5af09b90e!2sKuwait%20City%2C%20Kuwait!5e0!3m2!1sen!2seg!4v1680472177790!5m2!1sen!2seg"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
