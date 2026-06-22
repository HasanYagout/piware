<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ session('dir', 'ltr') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- Change these lines to use CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js" defer></script>
    <!-- Change this line to use CDN -->
    <script src="https://unpkg.com/aos@next/dist/aos.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
@include('layouts.partials.nav')
<!-- Display Success Message -->
@if(session('success'))
    <div class="p-4 rounded-xl bg-green-500/20 border border-green-500/50 text-green-700 flex items-center gap-3">
        <span class="text-2xl">✅</span>
        <div>
            <p class="font-semibold">Message Sent Successfully!</p>
            <p class="text-sm text-green-600">{{ session('success') }}</p>
        </div>
    </div>
@endif

<!-- Display Validation Errors -->
@if($errors->any())
    <div class="p-4 rounded-xl bg-red-500/20 border border-red-500/50 text-red-700">
        <div class="flex items-start gap-3">
            <span class="text-2xl">⚠️</span>
            <div>
                <p class="font-semibold mb-1">Please fix the following errors:</p>
                <ul class="text-sm list-disc list-inside space-y-1">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endif
@yield('content')

@include('layouts.partials.footer')

<script>
    // Initialize AOS FIRST before other scripts
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                disable: 'mobile' // Disable on mobile if needed
            });
        } else {
            console.error('AOS is not loaded');
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

    // Refresh AOS on window resize
    window.addEventListener('resize', function() {
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
    });
</script>

@yield('js')
</body>
</html>
