<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="" type="{{ asset('image/fontend/img/favicon.ico') }}">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontend/css/slick.css') }}">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('css/fontend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontend/css/responsive.css') }}">

    <title>Odhyyon Website</title>
</head>

<body>

    @include('components.header')
    <!--==================== HEADER ====================-->
    @yield('content')

    <!--==================== FOOTER ====================-->
    @include('components.footer')

    <!--=============== SCROLL UP ===============-->

    <!--=============== SCROLL REVEAL ===============-->
    <script src='{{ asset('js/fontend/js/jquery-3.6.0.min.js') }}'></script>

    <script src="{{ asset('js/fontend/js/bootstrap.min.js') }}"></script>
    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('js/fontend/js/slick.min.js') }}"></script>
    <!--=============== SWIPER JS ===============-->
    <script src="{{ asset('js/fontend/js/swiper-bundle.min.js') }}"></script>

    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('js/fontend/js/main.js') }}"></script>
    <script>
        $('.productslider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            centerMode: true,
            arrows: false,
            centerPadding: '0px',
        });
    </script>
    <script>
        var swiper = new Swiper(".swaipe-banner", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: true,
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            autoplay: true,
            coverflowEffect: {
                rotate: 0,
                stretch: 30,
                depth: 100,
                modifier: 3,
                slideShadows: true,
            },

        });
    </script>
    <script>
        $('.responsive').slick({
            slidesToShow: 3.5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            centerMode: true,
            arrows: true,
            centerPadding: '120px',
            prevArrow: $('.right'),
            nextArrow: $('.left')
        });
    </script>
    <script>
        $('.centerSlider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            centerMode: true,
            arrows: false,
            centerPadding: '0px',
        });
    </script>
    <script>
        $('.event-slider').slick({
            slidesToShow: 1,
            dots: true,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            centerMode: true,
            arrows: false,
            centerPadding: '0px',
        });
    </script>



</body>

</html>
