<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ session('dir', 'ltr') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
@include('layouts.partials.nav')

<!-- MAIN CONTENT -->
@yield('content')

@include('layouts.partials.footer')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                disable: 'mobile'
            });
        }

        // Handle splash screen
        window.addEventListener('load', function () {
            setTimeout(function () {
                const splashScreen = document.getElementById('splash-screen');
                if (splashScreen) {
                    splashScreen.style.opacity = '0';
                    setTimeout(function () {
                        splashScreen.style.display = 'none';
                    }, 500);
                }
            }, 2000);
        });

        // Swiper initialization
        if (typeof Swiper !== 'undefined' && document.querySelector('.mySwiper')) {
            new Swiper('.mySwiper', {
                loop: true,
                slidesPerView: 4,
                spaceBetween: 0,
                speed: 3000,
                autoplay: {
                    delay: 0,
                    disableOnInteraction: false,
                },
                freeMode: true,
                freeModeMomentum: false,
                grabCursor: true,
                breakpoints: {
                    768: {
                        slidesPerView: 3,
                    }
                }
            });
        }
    });

    window.addEventListener('resize', function() {
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
    });
</script>

@yield('js')
</body>
</html>
