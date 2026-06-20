@extends('layouts.app')

@section('content')

    <section class="relative overflow-hidden min-h-screen bg-[#edf2f7]">

        <div class="absolute -top-32 -left-32 h-[600px] w-[600px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(135deg, rgba(28,160,216,0.5), rgba(43,182,115,0.4));">
        </div>
        <div class="absolute -top-20 -right-20 h-[450px] w-[450px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(225deg, rgba(28,160,216,0.45), rgba(43,182,115,0.35));">
        </div>
        <div class="absolute top-1/3 -left-24 h-[300px] w-[300px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(135deg, rgba(43,182,115,0.5), rgba(28,160,216,0.4));">
        </div>
        <div class="absolute top-1/2 -right-28 h-[500px] w-[500px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(200deg, rgba(28,160,216,0.5), rgba(43,182,115,0.3));">
        </div>
        <div class="absolute -bottom-32 -left-20 h-[550px] w-[550px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(45deg, rgba(43,182,115,0.5), rgba(28,160,216,0.4));">
        </div>
        <div class="absolute -bottom-48 -right-48 h-[700px] w-[700px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(160deg, rgba(28,160,216,0.6), rgba(43,182,115,0.5));">
        </div>
        <div class="absolute top-10 left-1/3 h-[200px] w-[200px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(90deg, rgba(28,160,216,0.4), rgba(43,182,115,0.3));">
        </div>
        <div class="absolute bottom-20 left-2/3 h-[350px] w-[350px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(270deg, rgba(43,182,115,0.45), rgba(28,160,216,0.35));">
        </div>
        <!-- Main Glass Container -->
        <div class="relative z-10 min-h-screen">
            <div class="min-h-[95vh] bg-white/20 backdrop-blur-[40px] border border-white/60 shadow-2xl shadow-slate-300/50">
                <!-- ==================== HERO SECTION ==================== -->
                <div class="px-8 lg:px-20 pt-12 lg:pt-20 pb-20">
                    <div class="flex flex-col lg:flex-row lg:items-center gap-12">

                        <!-- Left: Text Content -->
                        <div class="flex-1" data-aos="fade-right" data-aos-duration="1000">
                            <div class="inline-flex items-center gap-2 bg-transparent border border-white/50 backdrop-blur-xl rounded-full px-4 py-2 shadow-sm">
                                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                <span class="text-sm text-slate-700">Software Development • ERP • Web Applications</span>
                            </div>
                            <h1 class="mt-8 text-4xl lg:text-5xl xl:text-6xl font-bold leading-[1.2]">
                                Building
                                <span class="block bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent pb-1">
        Digital Products
    </span>
                                That Businesses Actually Use
                            </h1>
                            <p class="mt-8 max-w-3xl text-xl text-slate-600 leading-relaxed">
                                We design and develop business systems, enterprise applications, portals, dashboards,
                                and digital platforms that help organizations streamline operations and scale efficiently.
                            </p>
                            <div class="flex flex-wrap gap-4 mt-12">
                                <a href="#contact" class="px-8 py-4 rounded-2xl text-white bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] shadow-lg hover:shadow-xl transition-shadow">Start a Project</a>
                                <a href="#portfolio" class="px-8 py-4 rounded-2xl bg-white/30 border border-white/50 backdrop-blur-xl shadow-md hover:shadow-lg transition-shadow">View Our Work</a>
                            </div>
                        </div>
                        <!-- Right Side: Rotating Halo with Icons -->
                        <div class="flex-1 flex justify-center lg:justify-end items-center" data-aos="fade-left" data-aos-delay="400">
                            <div class="rotating-halo w-full max-w-[600px] aspect-square relative mx-auto lg:mx-0">
                                <!-- Rotating Halo Ring (visible on all screens) -->
                                <div class="rotating-halo-ring hidden md:flex absolute inset-0 justify-center items-center">
                                    <div class="rotating-halo-inner w-full h-full rounded-full"></div>
                                </div>

                                <!-- Scattered Floating Icons with Glassmorphism -->
                                <div class="floating-icons-container absolute inset-0 pointer-events-none">
                                    <!-- Python -->
                                    <div class="floating-icon-item absolute p-2 md:p-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg transition-transform hover:scale-110 animate-float" style="top: 5%; left: 15%;">
                                        <img src="https://www.svgrepo.com/show/452091/python.svg" alt="Python" class="w-8 h-8 md:w-12 md:h-12">
                                    </div>

                                    <!-- React -->
                                    <div class="floating-icon-item absolute p-2 md:p-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg transition-transform hover:scale-110 animate-float-slow" style="top: 25%; left: 10%;">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="w-8 h-8 md:w-12 md:h-12" style="filter: brightness(0) saturate(100%) invert(47%) sepia(81%) saturate(1450%) hue-rotate(183deg) brightness(103%) contrast(97%);">
                                    </div>

                                    <!-- Node.js -->
                                    <div class="floating-icon-item absolute p-2 md:p-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg transition-transform hover:scale-110 animate-float-faster" style="bottom: 20%; left: 5%;">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original-wordmark.svg" alt="Node.js" class="w-8 h-8 md:w-12 md:h-12" style="filter: brightness(0) saturate(100%) invert(67%) sepia(13%) saturate(1808%) hue-rotate(75deg) brightness(91%) contrast(85%);">
                                    </div>

                                    <!-- Laravel -->
                                    <div class="floating-icon-item absolute p-2 md:p-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg transition-transform hover:scale-110 animate-float" style="top: 50%; left: 30%;">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="w-8 h-8 md:w-12 md:h-12" style="filter: brightness(0) saturate(100%) invert(24%) sepia(88%) saturate(5495%) hue-rotate(349deg) brightness(93%) contrast(89%);">
                                    </div>

                                    <!-- Firebase -->
                                    <div class="floating-icon-item absolute p-2 md:p-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg transition-transform hover:scale-110 animate-float-slow" style="bottom: 5%; right: 20%;">
                                        <img src="https://www.svgrepo.com/show/373595/firebase.svg" alt="Firebase" class="w-8 h-8 md:w-12 md:h-12">
                                    </div>

                                    <!-- Flutter -->
                                    <div class="floating-icon-item absolute p-2 md:p-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg transition-transform hover:scale-110 animate-float-faster" style="top: 10%; right: 25%;">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/flutter/flutter-original.svg" alt="Flutter" class="w-8 h-8 md:w-12 md:h-12" style="filter: brightness(0) saturate(100%) invert(47%) sepia(91%) saturate(5378%) hue-rotate(191deg) brightness(98%) contrast(94%);">
                                    </div>

                                    <!-- GitHub -->
                                    <div class="floating-icon-item absolute p-2 md:p-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg transition-transform hover:scale-110 animate-float" style="bottom: 15%; left: 50%;">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub" class="w-8 h-8 md:w-12 md:h-12">
                                    </div>

                                    <!-- Docker -->
                                    <div class="floating-icon-item absolute p-2 md:p-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg transition-transform hover:scale-110 animate-float-slow" style="top: 35%; left: 40%;">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker" class="w-8 h-8 md:w-12 md:h-12" style="filter: brightness(0) saturate(100%) invert(47%) sepia(95%) saturate(2623%) hue-rotate(185deg) brightness(97%) contrast(94%);">
                                    </div>

                                    <!-- Tailwind CSS -->
                                    <div class="floating-icon-item absolute p-2 md:p-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg transition-transform hover:scale-110 animate-float-slow" style="top: 30%; left: 70%;">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original.svg" alt="Tailwind" class="w-8 h-8 md:w-12 md:h-12" style="filter: brightness(0) saturate(100%) invert(62%) sepia(96%) saturate(473%) hue-rotate(161deg) brightness(96%) contrast(87%);">
                                    </div>

                                    <!-- TypeScript -->
                                    <div class="floating-icon-item absolute p-2 md:p-4 rounded-full bg-white/10 backdrop-blur-md border border-white/20 shadow-lg transition-transform hover:scale-110 animate-float-faster" style="bottom: 30%; right: 5%;">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript" class="w-8 h-8 md:w-12 md:h-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ==================== PROJECTS SECTION ==================== -->
                <div id="portfolio" class="px-8 lg:px-20 py-20 border-t border-white/30">
                    <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">Portfolio</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent leading-tight">Featured Projects</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto mt-4">Real solutions we've built for real businesses</p>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($projects as $index => $project)
                            <a href="{{$project->type=='gallery'?route('project.view',['slug'=>$project->slug]):$project->url}}"
                               data-aos="fade-up"
                               data-aos-duration="800"
                               data-aos-delay="{{ $index * 100 }}">
                                <div class="group bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 overflow-hidden hover:bg-white/20 transition-all shadow-xl hover:shadow-2xl">
                                    <div class="p-6 relative before:content-[''] before:absolute before:inset-x-0 before:top-0 before:h-1 before:bg-gradient-to-r before:from-[#1ca0d8] before:to-[#2bb673] before:rounded-t-lg">
                                        <h3 class="text-2xl font-bold">{{$project->title}}</h3>
                                        <p class="text-slate-600 mt-2">{{ Str::limit(strip_tags($project->description), 120) }}</p>
                                        <div class="flex flex-wrap gap-2 mt-4">
                                            @foreach($project->technologies as $technology)
                                                <span class="text-xs bg-white/30 px-3 py-1 rounded-full border border-white/30">{{$technology}}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>

                <!-- ==================== SERVICES SECTION ==================== -->
                <div id="services" class="px-8 lg:px-20 py-20 border-t border-white/30">
                    <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">What we do</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text leading-tight text-transparent">Our Services</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto mt-4">End‑to‑end development for modern businesses</p>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @php
                            $services = [
                                ['icon' => '💻', 'title' => 'Software Development'],
                                ['icon' => '🌐', 'title' => 'Web Applications'],
                                ['icon' => '📱', 'title' => 'Mobile Applications'],
                                ['icon' => '☁️', 'title' => 'Infrastructure Solutions'],
                                ['icon' => '🔒', 'title' => 'Cybersecurity'],
                                ['icon' => '🛠️', 'title' => 'Managed Services'],
                                ['icon' => '🔄', 'title' => 'Digital Transformation'],
                                ['icon' => '⚡', 'title' => 'Systems Integration'],
                            ];
                        @endphp
                        @foreach($services as $index => $service)
                            <div
                                class="group p-8 rounded-3xl bg-white/10 backdrop-blur-md border border-white/50 text-center shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-500"
                                data-aos="flip-up"
                                data-aos-duration="800"
                                data-aos-delay="{{ $index * 100 }}">

                                <div class="text-5xl mb-5 group-hover:scale-110 transition-transform duration-300">
                                    {{ $service['icon'] }}
                                </div>

                                <h3 class="font-bold text-xl text-slate-800">
                                    {{ $service['title'] }}
                                </h3>

                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- ==================== CLIENTS SECTION ==================== -->
                <div class="px-8 lg:px-20 py-20 border-t border-white/30 overflow-hidden">
                    <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">Trusted by</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">Our Clients</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto mt-4">Companies that grow with us</p>
                    </div>

                    <div class="relative mx-auto  px-4 sm:px-6 lg:px-8" data-aos="fade-up" data-aos-duration="800">
                        <!-- Carousel Wrapper -->
                        <div class="carousel-wrapper relative overflow-hidden py-8 sm:py-12">
                            <!-- Swiper Container -->
                            <div class="swiper clientSwiper overflow-hidden">
                                <div class="swiper-wrapper">
                                    @foreach($clients as $index => $client)
                                        <div class="swiper-slide !flex items-center justify-center px-2 sm:px-4">
                                            <div class="client-card w-full flex items-center justify-center transition-all duration-500 hover:scale-110 cursor-pointer">
                                                <img src="{{ asset('storage/' . $client['image']) }}"
                                                     alt="{{ $client['name'] }}"
                                                     class="w-32 h-20 sm:w-40 sm:h-24 md:w-48 md:h-28 lg:w-56 lg:h-32 xl:w-64 xl:h-36 object-contain transition-all duration-500 drop-shadow-lg hover:drop-shadow-2xl"
                                                     loading="lazy">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Custom Navigation Buttons -->
                            <button class="client-swiper-button-prev absolute left-0 sm:left-2 top-1/2 -translate-y-1/2 z-20 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-white/80 backdrop-blur-md border border-white/30 shadow-lg flex items-center justify-center hover:bg-white transition-all duration-300 hover:scale-110 focus:outline-none">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            <button class="client-swiper-button-next absolute right-0 sm:right-2 top-1/2 -translate-y-1/2 z-20 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-white/80 backdrop-blur-md border border-white/30 shadow-lg flex items-center justify-center hover:bg-white transition-all duration-300 hover:scale-110 focus:outline-none">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>

                            <!-- Pagination Dots -->
                            <div class="client-swiper-pagination flex justify-center gap-2 mt-6 sm:mt-8"></div>
                        </div>
                    </div>

                    <!-- Testimonial -->
                    <div class="mt-16 max-w-3xl mx-auto text-center bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/50 shadow-xl"
                         data-aos="fade-up"
                         data-aos-duration="800"
                         data-aos-delay="300">
                        <svg class="w-10 h-10 text-slate-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                        </svg>
                        <p class="text-lg italic text-slate-700">"Their team rebuilt our entire ERP – user adoption skyrocketed. True glassmorphism design too!"</p>
                        <p class="font-semibold mt-4">— Sarah Chen, COO at FinScale</p>
                    </div>
                </div>

                <!-- ==================== BLOG SECTION ==================== -->
                <div id="blog" class="px-8 lg:px-20 py-20 border-t border-white/30">
                    <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">Insights</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] leading-tight bg-clip-text text-transparent">Latest from our blog</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto mt-4">Tips, trends, and deep dives into web development</p>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($blogs as $index => $blog)
                            <div class="bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 overflow-hidden shadow-lg hover:shadow-xl transition-all"
                                 data-aos="fade-up"
                                 data-aos-duration="800"
                                 data-aos-delay="{{ $index * 150 }}">
                                <a href="{{route('blog.show',['slug'=>$blog->slug])}}">
                                    <div class="p-6">
                                        <div class="text-sm font-semibold" style="color: {{ $blog->category_color ?? '#1ca0d8' }}">
                                            {{ __($blog->category) }}
                                        </div>
                                        <h3 class="text-xl font-bold mt-2">{{ __($blog->title) }}</h3>
                                        <p class="text-slate-600 mt-2">{{ __($blog->description) }}</p>
                                        <div class="mt-4 flex items-center gap-2 text-sm text-slate-500">
                                            <span>{{ $blog->formatted_date}}</span>
                                            • <span>{{ $blog->reading_time ?? '3 min read' }}</span>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endforeach
                    </div>
                    <div class="text-center mt-12" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                        <a href="#" class="inline-block px-8 py-3 rounded-full bg-white/30 border border-white/50 backdrop-blur-xl shadow-md hover:shadow-lg transition-all">View all posts →</a>
                    </div>
                </div>

                <!-- ==================== CONTACT SECTION ==================== -->
                <div id="contact" class="scroll-mt-32 px-8 lg:px-20 py-20 border-t border-white/30">
                    <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">Get in touch</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r h-14 from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">Let's work together</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto mt-4">Have a project in mind? We'd love to hear from you.</p>
                    </div>
                    <div class="max-w-5xl mx-auto grid lg:grid-cols-2 gap-12">

                        <!-- Contact Form -->
                        <div class="bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 p-8 shadow-xl"
                             data-aos="fade-right"
                             data-aos-duration="800">

                            @if(session('success'))
                                <div class="mb-6 p-4 rounded-xl bg-green-500/20 border border-green-500/50 text-green-700 flex items-center gap-3">
                                    <span class="text-2xl">✅</span>
                                    <div>
                                        <p class="font-semibold">Message Sent Successfully!</p>
                                        <p class="text-sm text-green-600">{{ session('success') }}</p>
                                    </div>
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="mb-6 p-4 rounded-xl bg-red-500/20 border border-red-500/50 text-red-700">
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

                            <form action="{{route('contact.store')}}" method="POST" id="contactForm">
                                @csrf
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-slate-700">Full name</label>
                                    <input type="text" name="name" value="{{ old('name') }}"
                                           class="w-full mt-1 px-4 py-3 rounded-xl
                                                  bg-white/40
                                                  border @error('name') border-red-500 @else border-gray-300 @enderror
                                                  focus:border-[#1ca0d8] focus:ring-2 focus:ring-[#1ca0d8]/50
                                                  shadow-sm">
                                    @error('name')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-slate-700">Email address</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                           class="w-full mt-1 px-4 py-3 rounded-xl
                                                  bg-white/40
                                                  border @error('email') border-red-500 @else border-gray-300 @enderror
                                                  focus:border-[#1ca0d8] focus:ring-2 focus:ring-[#1ca0d8]/50
                                                  shadow-sm">
                                    @error('email')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-slate-700">Project type</label>
                                    <select name="type"
                                            class="w-full mt-1 px-4 py-3 rounded-xl
                                                   bg-white/40
                                                   border @error('type') border-red-500 @else border-gray-300 @enderror
                                                   focus:border-[#1ca0d8] focus:ring-2 focus:ring-[#1ca0d8]/50">
                                        <option value="">Select project type...</option>
                                        <option value="Web Application" {{ old('type') == 'Web Application' ? 'selected' : '' }}>Web Application</option>
                                        <option value="ERP System" {{ old('type') == 'ERP System' ? 'selected' : '' }}>ERP System</option>
                                        <option value="Mobile App" {{ old('type') == 'Mobile App' ? 'selected' : '' }}>Mobile App</option>
                                        <option value="Cloud / DevOps" {{ old('type') == 'Cloud / DevOps' ? 'selected' : '' }}>Cloud / DevOps</option>
                                        <option value="Other" {{ old('type') == 'Other' ? 'selected' : '' }}>Other</option>
                                    </select>
                                    @error('type')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-6">
                                    <label class="block text-sm font-medium text-slate-700">Message</label>
                                    <textarea rows="4" name="message"
                                              class="w-full mt-1 px-4 py-3 rounded-xl
                                                     bg-white/40
                                                     border @error('message') border-red-500 @else border-gray-300 @enderror
                                                     focus:border-[#1ca0d8] focus:ring-2 focus:ring-[#1ca0d8]/50
                                                     shadow-sm">{{ old('message') }}</textarea>
                                    @error('message')
                                    <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <button type="submit" id="submitBtn"
                                        class="w-full cursor-pointer py-3 rounded-xl text-white
                                               bg-gradient-to-r from-[#1ca0d8] to-[#2bb673]
                                               font-semibold shadow-md hover:shadow-lg transition-all
                                               disabled:opacity-50 disabled:cursor-not-allowed">
                                    <span id="btnText">Send Message</span>
                                    <span id="btnSpinner" class="hidden">
                                        <svg class="inline-block w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        Sending...
                                    </span>
                                </button>
                            </form>
                        </div>

                        <!-- Contact Info -->
                        <div class="space-y-6" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                            <div class="bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 p-8 shadow-xl">
                                <h3 class="text-2xl font-bold">Let's talk</h3>
                                <p class="text-slate-600 mt-2">We typically reply within 24 hours.</p>
                                <ul class="mt-6 space-y-4">
                                    <li class="flex items-center gap-3 hover:translate-x-1 transition-transform">
                                        <span class="text-xl">📧</span>
                                        <a href="mailto:info@piware.tech" class="hover:text-[#1ca0d8] transition-colors">info@piware.tech</a>
                                    </li>
                                    <li class="flex items-center gap-3 hover:translate-x-1 transition-transform">
                                        <span class="text-xl">📞</span>
                                        <a href="tel:+15551234567" class="hover:text-[#1ca0d8] transition-colors">+966 559712767</a>
                                    </li>
                                    <li class="flex items-center gap-3 hover:translate-x-1 transition-transform">
                                        <span class="text-xl">📍</span>
                                        <span>Al Balad Al Amin St — Al Jami'ah District Makkah Al Mukarramah Region 24243 - 6910</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 p-8 shadow-xl">
                                <h3 class="text-xl font-bold">Follow us</h3>
                                <div class="flex gap-4 mt-4">
                                    <!-- Twitter/X -->
                                    <a href="https://x.com/Piware_tech" target="_blank"
                                       class="text-slate-600 hover:text-[#1ca0d8] transition-all hover:scale-110 hover:-translate-y-1 inline-block"
                                       aria-label="Twitter">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                        </svg>
                                    </a>

                                    <!-- LinkedIn -->
                                    <a href="https://www.linkedin.com/in/pi-ware-170370361" target="_blank"
                                       class="text-slate-600 hover:text-[#0A66C2] transition-all hover:scale-110 hover:-translate-y-1 inline-block"
                                       aria-label="LinkedIn">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </a>

                                    <!-- Facebook -->
                                    <a href="https://www.facebook.com/share/14hzHNJrXoY/" target="_blank"
                                       class="text-slate-600 hover:text-[#1877F2] transition-all hover:scale-110 hover:-translate-y-1 inline-block"
                                       aria-label="Facebook">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="https://www.instagram.com/piware.tech" target="_blank"
                                       class="text-slate-600 hover:text-[#E4405F] transition-all hover:scale-110 hover:-translate-y-1 inline-block"
                                       aria-label="Instagram">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- end glass container -->
        </div> <!-- end relative container -->
    </section>

    <!-- ==================== AOS INITIALIZATION ==================== -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic',
            });

            // Contact Form Loading State
            const form = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const btnSpinner = document.getElementById('btnSpinner');

            if (form) {
                form.addEventListener('submit', function() {
                    submitBtn.disabled = true;
                    btnText.classList.add('hidden');
                    btnSpinner.classList.remove('hidden');
                });
            }
        });
    </script>

    <!-- ==================== SWIPER JS ==================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Swiper
            const swiper = new Swiper('.clientSwiper', {
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true,
                },
                slidesPerView: 2,
                spaceBetween: 20,
                breakpoints: {
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    640: {
                        slidesPerView: 3,
                        spaceBetween: 25,
                    },
                    768: {
                        slidesPerView: 4,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 5,
                        spaceBetween: 20,
                    },
                    1280: {
                        slidesPerView: 6,
                        spaceBetween: 20,
                    },
                },
                navigation: {
                    nextEl: '.client-swiper-button-next',
                    prevEl: '.client-swiper-button-prev',
                },
                pagination: {
                    el: '.client-swiper-pagination',
                    clickable: true,
                    dynamicBullets: true,
                },
                speed: 800,
                loop: true,
                grabCursor: true,
                touchRatio: 1.5,
                touchAngle: 30,
            });
        });
    </script>

    <!-- ==================== CUSTOM ANIMATIONS ==================== -->
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes pulse-slow {
            0%, 100% { transform: scale(1); opacity: 0.6; }
            50% { transform: scale(1.2); opacity: 1; }
        }
        .animate-pulse-slow {
            animation: pulse-slow 3s ease-in-out infinite;
        }
        .animation-delay-200 { animation-delay: 0.2s; }
        .animation-delay-500 { animation-delay: 0.5s; }

        /* AOS Custom Easing */
        [data-aos] {
            pointer-events: none;
        }
        [data-aos].aos-animate {
            pointer-events: auto;
        }

        /* Swiper Custom Styles */
        .clientSwiper .swiper-pagination-bullet {
            background: #cbd5e1;
            opacity: 1;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .clientSwiper .swiper-pagination-bullet-active {
            background: linear-gradient(to right, #1ca0d8, #2bb673);
            width: 24px;
            border-radius: 4px;
        }

        .client-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .client-card:hover {
            transform: scale(1.1);
        }

        /* Responsive image sizes */
        .client-card img {
            width: 100%;
            height: auto;
            max-width: 180px;
            max-height: 100px;
        }

        @media (max-width: 480px) {
            .client-card img {
                max-width: 80px;
                max-height: 50px;
            }
        }

        @media (min-width: 481px) and (max-width: 640px) {
            .client-card img {
                max-width: 120px;
                max-height: 70px;
            }
        }

        @media (min-width: 641px) and (max-width: 768px) {
            .client-card img {
                max-width: 140px;
                max-height: 80px;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            .client-card img {
                max-width: 160px;
                max-height: 90px;
            }
        }

        @media (min-width: 1025px) {
            .client-card img {
                max-width: 180px;
                max-height: 100px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the fixed navigation element (adjust selector to match your nav)
            const nav = document.querySelector('nav.fixed, header.fixed, .navbar-fixed');
            const navHeight = nav ? nav.offsetHeight : 80; // fallback to 80px

            // Handle all anchor links that start with #
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return; // ignore empty anchor

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        e.preventDefault(); // stop default jump

                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navHeight;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });

                        // Update URL hash without causing a jump
                        history.pushState(null, null, targetId);
                    }
                });
            });
        });
    </script>
@endsection
