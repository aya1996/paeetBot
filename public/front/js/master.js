function include(file) {

    var script = document.createElement('script');
    script.src = file;
    script.type = 'text/javascript';
    script.defer = true;

    document.getElementsByTagName('body').item(0).appendChild(script);

}

/* Include Many js files */
include('js/jquery-1.11.0.min.js');
include('js/bootstrap.min.js');
include('js/owl.carousel.min.js');
include('js/wow.min.js');
include('js/jquery.fancybox.js');
include('js/jquery.nice-select.min.js');
include('js/slick.min.js');
include('js/java.js');