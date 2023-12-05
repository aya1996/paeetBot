
</main>

<!-- Start Footer -->
<footer id="contact">

    <!-- Start Footer-top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!-- Col -->
                <div class="col-md-6 col-sm-12 wow animate__animated animate__fadeIn">
                    <div class="foot-col">
                        <div class="logo-f">
                            <a href="{{route('home')}}">
                                <img src="{{asset('front/images/logo.png')}}" alt="#" />
                            </a>
                        </div>
                        <p>{{$about->description ?? ''}}</p>

                        <div class="links-h">
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-md-3 col-sm-12 wow animate__animated animate__fadeIn">
                    <div class="foot-col">
                        <h3>روابط مختصرة</h3>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">
                                    <span>الرئيسية</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('gallery')}}">
                                    <span> معرض الصور </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('home')}}#testimonails">
                                    <span> آراء العملاء </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Col -->

                <!-- Col -->
                <div class="col-md-3 col-sm-12 wow animate__animated animate__fadeIn">
                    <div class="foot-col">
                        <h3>تواصل معنا</h3>
                        <ul class="info-f">
                            <li>
                                <a href="mailto:info@domainname.com">
                                    الايميل:
                                    <u>info@domainname.com</u>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    الجوال:
                                    <u>976564456</u>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Col -->
            </div>
        </div>
    </div>
    <!-- End Footer-top -->

    <!-- Start Footer-bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row  text-center">

                <!-- Col -->
                <div class="col-md-12 col-sm-12 wow animate__animated animate__fadeIn">
                    <div class="capy-right">
                        <p>&copy; جميع الحقوق محفوظة  - <script>document.write(new Date().getFullYear());</script></p>
                    </div>
                </div>
                <!-- /Col -->
            </div>
        </div>
    </div>
    <!-- End Footer-bottom -->
</footer>
<!-- End Footer -->

<script src="{{asset('front/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('front/js/wow.min.js')}}"></script>
<script src="{{asset('front/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('front/js/slick.min.js')}}"></script>
<script src="{{asset('front/js/java.js')}}"></script>
<script>
    var botmanWidget = {
        frameEndpoint: '/botman/chat' ,
        aboutText: '',
        introMessage: "✋ مرحبا بك في الشات بوت الخاص بنا ",
        placeholderText : 'اكتب رسالتك هنا ...',
        title : 'شات  بوت',
    };
</script>

<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
@include('shared.toastr')

@yield('js')
<script>
    var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});
</script>
</body>

</html>
