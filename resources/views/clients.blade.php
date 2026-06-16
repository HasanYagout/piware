@extends('layouts.app')

@section('title', 'Our Clients')

@section('content')
    <!-- Hero Section -->
    <section class="pt-32 pb-20 relative overflow-hidden bg-gradient-to-b from-[#071021] to-[#0d1117]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                Our <span class="bg-gradient-to-r from-[#00e6cc] to-[#0099ff] bg-clip-text text-transparent">Clients</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Trusted by innovative companies who value excellence and quality
            </p>
        </div>
    </section>

    <!-- Client Logos Infinite Carousel -->
    <section class="py-20 bg-[#0a0e14] overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-16">
                <div class="flex items-center justify-center mb-6">
                    <div class="w-24 h-px bg-gradient-to-r from-transparent via-[#00e6cc] to-transparent"></div>
                    <h2 class="text-2xl font-bold text-white mx-6">Trusted By</h2>
                    <div class="w-24 h-px bg-gradient-to-r from-transparent via-[#00e6cc] to-transparent"></div>
                </div>
            </div>

            <!-- Carousel Container -->
            <div class="relative">
                <!-- Gradient overlays -->
                <div class="absolute left-0 top-0 bottom-0 w-32 bg-gradient-to-r from-[#0a0e14] to-transparent z-10"></div>
                <div class="absolute right-0 top-0 bottom-0 w-32 bg-gradient-to-l from-[#0a0e14] to-transparent z-10"></div>

                <!-- Infinite Carousel Wrapper -->
                <div class="carousel-container">
                    <!-- First Set -->
                    <div class="carousel-track">
                        @php
                            $logos = [
                                ['image' => 'liu.png', 'name' => 'LIU Yemen'],
                                ['image' => 'mehrah.jpg', 'name' => 'Mehrah'],
                                ['image' => 'blueline.png', 'name' => 'BlueLine'],
                                ['image' => 'matraf.png', 'name' => 'Matraf'],
                                ['image' => 'madinah.jpg', 'name' => 'Madinah'],
                            ];
                        @endphp

                        @foreach($logos as $logo)
                            <div class="carousel-slide">
                                <div class="flex-shrink-0 w-56 h-36 rounded-xl bg-gradient-to-br from-white/5 to-transparent border border-white/10 flex items-center justify-center p-4 backdrop-blur-sm group hover:border-[#00e6cc]/30 transition-all duration-300">
                                    <div class="relative w-full h-full flex items-center justify-center">
                                        <img src="{{ asset($logo['image']) }}"
                                             alt="{{ $logo['name'] }} Logo"
                                             class="h-20 w-auto object-contain opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Duplicate set for seamless loop -->
                        @foreach($logos as $logo)
                            <div class="carousel-slide">
                                <div class="flex-shrink-0 w-56 h-36 rounded-xl bg-gradient-to-br from-white/5 to-transparent border border-white/10 flex items-center justify-center p-4 backdrop-blur-sm group hover:border-[#00e6cc]/30 transition-all duration-300">
                                    <div class="relative w-full h-full flex items-center justify-center">
                                        <img src="{{ asset($logo['image']) }}"
                                             alt="{{ $logo['name'] }} Logo"
                                             class="h-20 w-auto object-contain opacity-80 group-hover:opacity-100 group-hover:scale-105 transition-all duration-300">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-20 bg-gradient-to-b from-[#0a0e14] to-[#071021]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-16">
                <div class="flex items-center justify-center mb-6">
                    <div class="w-24 h-px bg-gradient-to-r from-transparent via-[#0099ff] to-transparent"></div>
                    <h2 class="text-2xl font-bold text-white mx-6">Client Testimonials</h2>
                    <div class="w-24 h-px bg-gradient-to-r from-transparent via-[#0099ff] to-transparent"></div>
                </div>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    Hear what our clients have to say about working with us
                </p>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $testimonials = [
                        [
                            'name' => 'LIU Yemen',
                            'role' => 'University Administration',
                            'quote' => 'The student management system transformed our administrative workflow. Professional, efficient, and reliable.',
                            'rating' => 5,
                            'project' => 'Student Management System'
                        ],
                        [
                            'name' => 'Mehrah',
                            'role' => 'Retail Management',
                            'quote' => 'Our inventory management has never been more efficient. The team delivered exactly what we needed.',
                            'rating' => 5,
                            'project' => 'Inventory System'
                        ],
                        [
                            'name' => 'BlueLine',
                            'role' => 'Transportation Company',
                            'quote' => 'The booking platform exceeded our expectations. User-friendly and highly scalable solution.',
                            'rating' => 5,
                            'project' => 'Booking Platform'
                        ],
                        [
                            'name' => 'Matraf',
                            'role' => 'Construction Firm',
                            'quote' => 'Professional team that understands business needs. Their project management tool is exceptional.',
                            'rating' => 5,
                            'project' => 'Project Management'
                        ],
                        [
                            'name' => 'Madinah',
                            'role' => 'Restaurant Chain',
                            'quote' => 'Our online ordering system boosted sales by 40%. Excellent support and maintenance.',
                            'rating' => 5,
                            'project' => 'Ordering System'
                        ],
                        [
                            'name' => 'LIU Yemen',
                            'role' => 'IT Department',
                            'quote' => 'The team was responsive and delivered high-quality work on time. A pleasure to work with.',
                            'rating' => 5,
                            'project' => 'Website Redesign'
                        ],
                    ];
                @endphp

                @foreach($testimonials as $testimonial)
                    <div class="testimonial-card" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="relative h-full rounded-2xl bg-gradient-to-b from-white/5 to-transparent border border-white/10 p-8 hover:border-[#00e6cc]/30 transition-all duration-300 group">
                            <!-- Quote Icon -->
                            <div class="absolute top-6 right-6 text-3xl text-[#00e6cc]/20">
                                <i class="fas fa-quote-right"></i>
                            </div>

                            <!-- Rating -->
                            <div class="flex text-[#00e6cc] mb-6">
                                @for($i = 0; $i < $testimonial['rating']; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>

                            <!-- Testimonial Text -->
                            <p class="text-gray-300 mb-8 text-lg italic leading-relaxed">
                                "{{ $testimonial['quote'] }}"
                            </p>

                            <!-- Client Info -->
                            <div class="mt-auto pt-6 border-t border-white/10">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <h4 class="text-xl font-bold text-white">{{ $testimonial['name'] }}</h4>
                                        <p class="text-gray-400 text-sm">{{ $testimonial['role'] }}</p>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-[#0099ff] text-sm font-medium">{{ $testimonial['project'] }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Statistics -->
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">50+</div>
                    <div class="text-gray-400">Projects</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">100%</div>
                    <div class="text-gray-400">Satisfaction</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">25+</div>
                    <div class="text-gray-400">Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">5+</div>
                    <div class="text-gray-400">Years</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-[#0a0e14]">
        <div class="max-w-4xl mx-auto px-6 lg:px-12 text-center">
            <div class="relative">
                <div class="relative p-12 rounded-3xl bg-gradient-to-br from-white/5 to-transparent border border-white/10">
                    <h2 class="text-3xl font-bold text-white mb-6">
                        Ready to Work Together?
                    </h2>
                    <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                        Join our growing list of satisfied clients and experience exceptional service
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="" class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#00e6cc] to-[#0099ff] text-[#0d1117] font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                            <i class="fas fa-calendar-check mr-2"></i>
                            Get in Touch
                        </a>
                        <a href="" class="px-8 py-4 rounded-xl bg-gradient-to-r from-white/5 to-white/10 font-semibold text-white hover:bg-white/10 transition-all">
                            <i class="fas fa-briefcase mr-2"></i>
                            View Our Work
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')

@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 100
                });
            }

            // Pause animation on carousel hover
            const carouselTrack = document.querySelector('.carousel-track');
            if (carouselTrack) {
                carouselTrack.addEventListener('mouseenter', function() {
                    this.style.animationPlayState = 'paused';
                });

                carouselTrack.addEventListener('mouseleave', function() {
                    this.style.animationPlayState = 'running';
                });
            }

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const href = this.getAttribute('href');
                    if (href === '#') return;

                    const targetElement = document.querySelector(href);
                    if (targetElement) {
                        targetElement.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
    </script>
@endpush
