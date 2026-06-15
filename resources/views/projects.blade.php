@extends('layouts.app')

@section('title', __('Our Projects'))

@section('content')
    <section class="pt-32 pb-20 bg-gradient-to-b from-[#071021] to-[#0d1117]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                {{ __('Our Projects') }}
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                {{ __('Real world projects using modern stacks and design-first approach.') }}
            </p>
        </div>
    </section>

    <section class="py-10 bg-[#0a0e14]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex flex-wrap gap-3 justify-center" id="filterButtons">
                <button class="filter-btn text-white cursor-pointer px-6 py-2 rounded-full bg-gradient-to-r from-[#00e6cc] to-[#0099ff] text-[#0d1117] font-medium" data-filter="all">
                    {{ __('All Projects') }}
                </button>
                <button class="filter-btn text-white cursor-pointer px-6 py-2 rounded-full glass-button font-medium" data-filter="enterprise">
                    {{ __('Enterprise Systems') }}
                </button>
                <button class="filter-btn text-white cursor-pointer px-6 py-2 rounded-full glass-button font-medium" data-filter="ecommerce">
                    {{ __('E-commerce') }}
                </button>
                <button class="filter-btn text-white cursor-pointer px-6 py-2 rounded-full glass-button font-medium" data-filter="education">
                    {{ __('Education') }}
                </button>
                <button class="filter-btn text-white cursor-pointer px-6 py-2 rounded-full glass-button font-medium" data-filter="mobile">
                    {{ __('Mobile Apps') }}
                </button>
                <button class="filter-btn text-white cursor-pointer px-6 py-2 rounded-full glass-button font-medium" data-filter="healthcare">
                    {{ __('Healthcare') }}
                </button>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[#0a0e14]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="mb-16">
                <!--<h2 class="text-3xl font-bold text-white mb-8 text-center">{{ __('Enterprise Systems') }}</h2>-->

                <div class="project-card mb-12 rounded-2xl glass-card overflow-hidden" data-category="enterprise" data-aos="fade-up">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="h-64 lg:h-full">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=80"
                                 alt="{{ __('ERP Dashboard') }}"
                                 class="w-full h-full object-cover">
                        </div>

                        <div class="p-6 md:p-8">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 rounded-full text-xs bg-gradient-to-r from-[#00e6cc] to-[#0099ff] text-white font-medium">
                                    {{ __('Enterprise System') }}
                                </span>
                                <span class="text-sm text-gray-400">• {{ __('Complete ERP Solution') }}</span>
                            </div>

                            <h3 class="text-2xl font-bold text-white mb-4">{{ __('Enterprise Management System (ERP)') }}</h3>

                            <div class="mb-6">
                                <h4 class="text-lg font-semibold text-white mb-3 flex items-center gap-2">
                                    <i class="fas fa-bullseye text-[#00e6cc]"></i>
                                    {{ __('Problem it solves') }}
                                </h4>
                                <p class="text-gray-300">
                                    {{ __('Large organizations struggle with disconnected systems, manual processes, and lack of real-time visibility across departments.') }}
                                </p>
                            </div>

                            <div class="mb-6">
                                <h4 class="text-lg font-semibold text-white mb-3 flex items-center gap-2">
                                    <i class="fas fa-cogs text-[#00e6cc]"></i>
                                    {{ __('Key features') }}
                                </h4>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="p-3 rounded-lg glass-card">
                                        <div class="flex items-center gap-2 mb-1">
                                            <i class="fas fa-user-shield text-[#00e6cc] text-sm"></i>
                                            <h5 class="font-medium text-white text-sm">{{ __('RBAC System') }}</h5>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded-lg glass-card">
                                        <div class="flex items-center gap-2 mb-1">
                                            <i class="fas fa-chart-bar text-[#0099ff] text-sm"></i>
                                            <h5 class="font-medium text-white text-sm">{{ __('Dashboards') }}</h5>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded-lg glass-card">
                                        <div class="flex items-center gap-2 mb-1">
                                            <i class="fas fa-sitemap text-[#00e6cc] text-sm"></i>
                                            <h5 class="font-medium text-white text-sm">{{ __('Multi-Branch') }}</h5>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded-lg glass-card">
                                        <div class="flex items-center gap-2 mb-1">
                                            <i class="fas fa-history text-[#0099ff] text-sm"></i>
                                            <h5 class="font-medium text-white text-sm">{{ __('Audit Logs') }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 pt-6 border-t border-white/10">
                                <h4 class="font-semibold text-white mb-3">{{ __('My Role & Challenges Solved') }}</h4>
                                <p class="text-gray-300 text-sm">
                                    {{ __('Architected scalable database for 50+ modules, implemented real-time data sync, reduced report generation time from 2 hours to 5 minutes.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="project-card mb-12 rounded-2xl glass-card overflow-hidden" data-category="enterprise" data-aos="fade-up" data-aos-delay="100">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="p-6 md:p-8">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 rounded-full text-xs bg-gradient-to-r from-[#00e6cc] to-[#0099ff] text-[#0d1117] font-medium">
                                    {{ __('Support System') }}
                                </span>
                                <span class="text-sm text-gray-400">• {{ __('Complete Customer Support Platform') }}</span>
                            </div>

                            <h3 class="text-2xl font-bold text-white mb-4">{{ __('Ticketing & Support System') }}</h3>

                            <div class="mb-6">
                                <h4 class="text-lg font-semibold text-white mb-3 flex items-center gap-2">
                                    <i class="fas fa-bullseye text-[#00e6cc]"></i>
                                    {{ __('Problem it solves') }}
                                </h4>
                                <p class="text-gray-300">
                                    {{ __('Companies struggle with disorganized customer support, lost tickets, and poor response times.') }}
                                </p>
                            </div>

                            <div class="grid grid-cols-2 gap-3 mb-6">
                                <div class="p-3 rounded-lg glass-card">
                                    <div class="flex items-center gap-2 mb-1">
                                        <i class="fas fa-life-ring text-[#00e6cc] text-sm"></i>
                                        <h5 class="font-medium text-white text-sm">{{ __('Ticket Lifecycle') }}</h5>
                                    </div>
                                </div>
                                <div class="p-3 rounded-lg glass-card">
                                    <div class="flex items-center gap-2 mb-1">
                                        <i class="fas fa-comments text-[#0099ff] text-sm"></i>
                                        <h5 class="font-medium text-white text-sm">{{ __('Internal Chat') }}</h5>
                                    </div>
                                </div>
                                <div class="p-3 rounded-lg glass-card">
                                    <div class="flex items-center gap-2 mb-1">
                                        <i class="fas fa-clock text-[#00e6cc] text-sm"></i>
                                        <h5 class="font-medium text-white text-sm">{{ __('SLA Management') }}</h5>
                                    </div>
                                </div>
                                <div class="p-3 rounded-lg glass-card">
                                    <div class="flex items-center gap-2 mb-1">
                                        <i class="fas fa-filter text-[#0099ff] text-sm"></i>
                                        <h5 class="font-medium text-white text-sm">{{ __('Advanced Filters') }}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <h4 class="font-semibold text-white mb-3">{{ __('Results & Impact') }}</h4>
                                <ul class="space-y-2 text-sm text-gray-300">
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check text-[#00e6cc] mt-1"></i>
                                        <span>{{ __('Reduced resolution time by 65%') }}</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check text-[#00e6cc] mt-1"></i>
                                        <span>{{ __('Increased customer satisfaction to 94%') }}</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <i class="fas fa-check text-[#00e6cc] mt-1"></i>
                                        <span>{{ __('Scaled to 10,000+ tickets monthly') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="h-64 lg:h-full">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=800&q=80"
                                 alt="{{ __('Support Dashboard') }}"
                                 class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="text-3xl font-bold text-white mb-8 text-center">{{ __('Client Projects') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="project-card overflow-hidden rounded-2xl glass-card hover:transform hover:scale-[1.02] transition-all duration-300"
                     data-category="ecommerce"
                     data-aos="zoom-in">
                    <div class="h-48 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&w=1200&q=60"
                             alt="{{ __('E-commerce Platform') }}"
                             class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                        <div class="absolute top-4 left-4 p-2 rounded-lg bg-black/40 flex items-center gap-2 text-white">
                            <svg class="h-6 w-6 text-[#0099ff]" viewBox="0 0 24 24" fill="none">
                                <path d="M3 7h18M3 12h18M3 17h18" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="text-xs text-gray-200">{{ __('E-commerce') }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white">
                            {{ __('E-commerce Platform') }} <span class="text-[#0099ff]">•</span>
                        </h3>
                        <p class="text-gray-400 mt-2">
                            {{ __('Complete online shopping solution with inventory management, secure payment processing, and personalized recommendations.') }}
                        </p>
                        <div class="mt-4 flex flex-wrap items-center gap-2">
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-gray-200 flex items-center gap-2">
                                <img src="https://www.svgrepo.com/show/349363/flutter.svg" alt="Flutter" class="w-5 h-4">
                                <span>{{ __('Flutter') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FF2D20] flex items-center gap-2">
                                <i class="fa-brands fa-laravel"></i>
                                <span>{{ __('Laravel') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#13aa52] flex items-center gap-2">
                                <img src="https://www.svgrepo.com/show/331488/mongodb.svg" class="h-5 w-5"/>
                                <span>{{ __('MongoDB') }}</span>
                            </span>
                        </div>
                        <div class="mt-6 flex justify-between items-center">
                            <a href="#" class="text-[#00e6cc] hover:text-[#0099ff] transition flex items-center gap-2">
                                {{ __('View Details') }}
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <span class="text-xs text-gray-400">{{ __('In progress') }}</span>
                        </div>
                    </div>
                </div>

                <div class="project-card overflow-hidden rounded-2xl glass-card hover:transform hover:scale-[1.02] transition-all duration-300"
                     data-category="education"
                     data-aos="zoom-in" data-aos-delay="100">
                    <div class="h-48 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1588200908342-23b585c03e26?auto=format&fit=crop&w=1200&q=60"
                             alt="{{ __('Alumni Management System') }}"
                             class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                        <div class="absolute top-4 left-4 p-2 rounded-lg bg-black/40 flex items-center gap-2">
                            <svg class="h-6 w-6 text-[#00e6cc]" viewBox="0 0 24 24" fill="none">
                                <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="text-xs text-gray-200">{{ __('Education') }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white">{{ __('Alumni Management System') }}</h3>
                        <p class="text-gray-400 mt-2">
                            {{ __('Network platform for educational institutions to maintain alumni connections, events, and career networking opportunities.') }}
                        </p>
                        <div class="mt-4 flex flex-wrap items-center gap-2">
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FF2D20] flex items-center gap-2">
                                <i class="fa-brands fa-laravel"></i>
                                <span>{{ __('Laravel') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-gray-200 flex items-center gap-2">
                                <img src="https://www.svgrepo.com/show/374118/tailwind.svg" alt="Tailwind" class="w-5 h-5">
                                <span>{{ __('Tailwind') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FFD43B] flex items-center gap-2">
                                <i class="fab fa-js-square"></i>
                                <span>{{ __('JavaScript') }}</span>
                            </span>
                        </div>
                        <div class="mt-6 flex justify-between items-center">
                            <a href="#" class="text-[#00e6cc] hover:text-[#0099ff] transition flex items-center gap-2">
                                {{ __('View Details') }}
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <span class="text-xs text-gray-400">{{ __('Completed') }}</span>
                        </div>
                    </div>
                </div>

                <div class="project-card overflow-hidden rounded-2xl glass-card hover:transform hover:scale-[1.02] transition-all duration-300"
                     data-category="education"
                     data-aos="zoom-in" data-aos-delay="200">
                    <div class="h-48 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=1200&q=60"
                             alt="{{ __('Student Fingerprint System') }}"
                             class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                        <div class="absolute top-4 left-4 p-2 rounded-lg bg-black/40 flex items-center gap-2">
                            <svg class="h-6 w-6 text-[#0099ff]" viewBox="0 0 24 24" fill="none">
                                <path d="M12 11a4 4 0 100-8 4 4 0 000 8zM6 21v-2a6 6 0 0112 0v2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                            <span class="text-xs text-gray-200">{{ __('Security') }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white">{{ __('Student Fingerprint System') }}</h3>
                        <p class="text-gray-400 mt-2">
                            {{ __('Biometric attendance tracking system for educational institutions with real-time reporting and analytics.') }}
                        </p>
                        <div class="mt-4 flex flex-wrap items-center gap-2">
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#339933] flex items-center gap-2">
                                <i class="fab fa-node-js"></i>
                                <span>{{ __('Node.js') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FF2D20] flex items-center gap-2">
                                <i class="fa-brands fa-laravel"></i>
                                <span>{{ __('Laravel') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FFC0CB] flex items-center gap-2">
                                <img src="https://www.svgrepo.com/show/303229/microsoft-sql-server-logo.svg" class="h-5 w-5" />
                                <span>{{ __('SQL Server') }}</span>
                            </span>
                        </div>
                        <div class="mt-6 flex justify-between items-center">
                            <a href="#" class="text-[#00e6cc] hover:text-[#0099ff] transition flex items-center gap-2">
                                {{ __('View Details') }}
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <span class="text-xs text-gray-400">{{ __('Completed') }}</span>
                        </div>
                    </div>
                </div>

                <div class="project-card overflow-hidden rounded-2xl glass-card hover:transform hover:scale-[1.02] transition-all duration-300"
                     data-category="healthcare"
                     data-aos="zoom-in" data-aos-delay="300">
                    <div class="h-48 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=1200&q=60"
                             alt="{{ __('Hospital Management System') }}"
                             class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                        <div class="absolute top-4 left-4 p-2 rounded-lg bg-black/40 flex items-center gap-2">
                            <svg class="h-6 w-6 text-[#0099ff]" viewBox="0 0 24 24" fill="none">
                                <path d="M19 14l-7 7m0 0l-7-7m7 7V3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="text-xs text-gray-200">{{ __('Healthcare') }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white">{{ __('Hospital Management System') }}</h3>
                        <p class="text-gray-400 mt-2">
                            {{ __('Comprehensive healthcare management solution for patient records, appointment scheduling, and billing.') }}
                        </p>
                        <div class="mt-4 flex flex-wrap items-center gap-2">
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FF2D20] flex items-center gap-2">
                                <i class="fa-brands fa-laravel"></i>
                                <span>{{ __('Laravel') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#61DAFB] flex items-center gap-2">
                                <i class="fab fa-vuejs"></i>
                                <span>{{ __('Vue.js') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FFD43B] flex items-center gap-2">
                                <i class="fas fa-database"></i>
                                <span>{{ __('MySQL') }}</span>
                            </span>
                        </div>
                        <div class="mt-6 flex justify-between items-center">
                            <a href="#" class="text-[#00e6cc] hover:text-[#0099ff] transition flex items-center gap-2">
                                {{ __('View Details') }}
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <span class="text-xs text-gray-400">{{ __('Completed') }}</span>
                        </div>
                    </div>
                </div>

                <div class="project-card overflow-hidden rounded-2xl glass-card hover:transform hover:scale-[1.02] transition-all duration-300"
                     data-category="mobile"
                     data-aos="zoom-in" data-aos-delay="400">
                    <div class="h-48 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=1200&q=60"
                             alt="{{ __('Food Delivery App') }}"
                             class="w-full h-full object-cover transition-transform duration-700 hover:scale-110">
                        <div class="absolute top-4 left-4 p-2 rounded-lg bg-black/40 flex items-center gap-2">
                            <svg class="h-6 w-6 text-[#00e6cc]" viewBox="0 0 24 24" fill="none">
                                <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="text-xs text-gray-200">{{ __('Food & Delivery') }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white">{{ __('Food Delivery App') }}</h3>
                        <p class="text-gray-400 mt-2">
                            {{ __('Mobile app for food ordering and delivery with real-time tracking, reviews, and payment integration.') }}
                        </p>
                        <div class="mt-4 flex flex-wrap items-center gap-2">
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-gray-200 flex items-center gap-2">
                                <img src="https://www.svgrepo.com/show/349363/flutter.svg" alt="Flutter" class="w-5 h-4">
                                <span>{{ __('Flutter') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FF2D20] flex items-center gap-2">
                                <i class="fa-brands fa-laravel"></i>
                                <span>{{ __('Laravel') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FF9900] flex items-center gap-2">
                                <i class="fab fa-aws"></i>
                                <span>{{ __('AWS') }}</span>
                            </span>
                        </div>
                        <div class="mt-6 flex justify-between items-center">
                            <a href="#" class="text-[#00e6cc] hover:text-[#0099ff] transition flex items-center gap-2">
                                {{ __('View Details') }}
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <span class="text-xs text-gray-400">{{ __('Live') }}</span>
                        </div>
                    </div>
                </div>

                <div class="project-card overflow-hidden rounded-2xl glass-card hover:transform hover:scale-[1.02] transition-all duration-300"
                     data-category="enterprise"
                     data-aos="zoom-in" data-aos-delay="500">
                    <div class="h-48 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1332&auto=format&fit=crop"
                             alt="{{ __('Recruitment Platform') }}"
                             class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4 p-2 rounded-lg bg-black/40 flex items-center gap-2">
                            <svg class="h-6 w-6 text-[#00e6cc]" viewBox="0 0 24 24" fill="none">
                                <path d="M12 14l9-5-9-5-9 5 9 5z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="text-xs text-gray-200">{{ __('HR Tech') }}</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-white">{{ __('Recruitment & Training Platform') }}</h3>
                        <p class="text-gray-400 mt-2">
                            {{ __('End-to-end HR solution for job postings, candidate management, training programs, and performance tracking.') }}
                        </p>
                        <div class="mt-4 flex flex-wrap items-center gap-2">
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FF2D20] flex items-center gap-2">
                                <i class="fa-brands fa-laravel"></i>
                                <span>{{ __('Laravel') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-gray-200 flex items-center gap-2">
                                <img src="https://www.svgrepo.com/show/374118/tailwind.svg" alt="Tailwind" class="w-5 h-4">
                                <span>{{ __('Tailwind') }}</span>
                            </span>
                            <span class="tech-tag px-3 py-1 rounded-full text-xs text-[#FFD43B] flex items-center gap-2">
                                <i class="fas fa-database"></i>
                                <span>{{ __('PostgreSQL') }}</span>
                            </span>
                        </div>
                        <div class="mt-6 flex justify-between items-center">
                            <a href="#" class="text-[#00e6cc] hover:text-[#0099ff] transition flex items-center gap-2">
                                {{ __('View Details') }}
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <span class="text-xs text-gray-400">{{ __('Completed') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-20 pt-20 border-t border-white/10">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold bg-gradient-to-r from-[#00e6cc] to-[#0099ff] bg-clip-text text-transparent">
                        {{ __('Project Statistics') }}
                    </h2>
                    <p class="text-gray-400 mt-3 max-w-2xl mx-auto">
                        {{ __('Our journey in numbers across various industries and technologies.') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center" data-aos="fade-up">
                        <div class="text-4xl font-bold text-white mb-2">{{ __('50+') }}</div>
                        <div class="text-gray-400">{{ __('Projects Completed') }}</div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-4xl font-bold text-white mb-2">{{ __('15+') }}</div>
                        <div class="text-gray-400">{{ __('Happy Clients') }}</div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-4xl font-bold text-white mb-2">{{ __('30+') }}</div>
                        <div class="text-gray-400">{{ __('Technologies Used') }}</div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-4xl font-bold text-white mb-2">{{ __('98%') }}</div>
                        <div class="text-gray-400">{{ __('Client Satisfaction') }}</div>
                    </div>
                </div>
            </div>

            <div class="mt-20 pt-20 border-t border-white/10">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-bold text-white mb-6">
                        {{ __('Have a project in mind?') }}
                    </h2>
                    <p class="text-gray-300 mb-8">
                        {{ __("Let's build something amazing together. Share your ideas and we'll bring them to life with cutting-edge technology.") }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="" class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#00e6cc] to-[#0099ff] text-[#0d1117] font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                            <i class="fas fa-comment-dots mr-2"></i>
                            {{ __('Discuss Your Project') }}
                        </a>
                        <a href="tel:+1234567890" class="px-8 py-4 rounded-xl glass-button font-semibold hover:bg-white/10 transition-colors">
                            <i class="fas fa-phone mr-2"></i>
                            {{ __('Call for Quote') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-r from-[#07101a] via-[#0a1c2f] to-[#07101a]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <h2 class="text-3xl font-bold text-white mb-12 text-center">{{ __('Additional Systems We Build') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 rounded-xl glass-card hover:transform hover:scale-[1.02] transition-all duration-300">
                    <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-purple-500 to-pink-500 flex items-center justify-center mb-4">
                        <i class="fas fa-boxes text-xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">{{ __('Inventory Management') }}</h3>
                    <p class="text-gray-400 mb-4">{{ __('Real-time stock control, automated alerts, and multi-location tracking for retail and warehouses.') }}</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 rounded-full text-xs bg-purple-500/20 text-purple-300">{{ __('Stock Control') }}</span>
                        <span class="px-2 py-1 rounded-full text-xs bg-pink-500/20 text-pink-300">{{ __('Alerts') }}</span>
                        <span class="px-2 py-1 rounded-full text-xs bg-blue-500/20 text-blue-300">{{ __('Reporting') }}</span>
                    </div>
                </div>

                <div class="p-6 rounded-xl glass-card hover:transform hover:scale-[1.02] transition-all duration-300">
                    <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-500 flex items-center justify-center mb-4">
                        <i class="fas fa-file-invoice-dollar text-xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">{{ __('Billing & Invoicing') }}</h3>
                    <p class="text-gray-400 mb-4">{{ __('Automated invoicing, payment tracking, tax calculation, and financial reporting.') }}</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 rounded-full text-xs bg-cyan-500/20 text-cyan-300">{{ __('Invoices') }}</span>
                        <span class="px-2 py-1 rounded-full text-xs bg-blue-500/20 text-blue-300">{{ __('Payments') }}</span>
                        <span class="px-2 py-1 rounded-full text-xs bg-green-500/20 text-green-300">{{ __('Tax') }}</span>
                    </div>
                </div>

                <div class="p-6 rounded-xl glass-card hover:transform hover:scale-[1.02] transition-all duration-300">
                    <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-green-500 to-emerald-500 flex items-center justify-center mb-4">
                        <i class="fas fa-chart-pie text-xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">{{ __('Advanced Reporting') }}</h3>
                    <p class="text-gray-400 mb-4">{{ __('Interactive dashboards, custom reports, data visualization, and export capabilities.') }}</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 rounded-full text-xs bg-green-500/20 text-green-300">{{ __('ApexCharts') }}</span>
                        <span class="px-2 py-1 rounded-full text-xs bg-emerald-500/20 text-emerald-300">{{ __('Excel Export') }}</span>
                        <span class="px-2 py-1 rounded-full text-xs bg-yellow-500/20 text-yellow-300">{{ __('Filters') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
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

            // Project Filter Functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectCards = document.querySelectorAll('.project-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => {
                        btn.classList.remove('bg-gradient-to-r', 'from-[#00e6cc]', 'to-[#0099ff]', 'text-[#0d1117]');
                        btn.classList.add('glass-button');
                    });

                    // Add active class to clicked button
                    this.classList.add('bg-gradient-to-r', 'from-[#00e6cc]', 'to-[#0099ff]', 'text-[#0d1117]');
                    this.classList.remove('glass-button');

                    // Get filter value
                    const filterValue = this.getAttribute('data-filter');

                    // Filter projects
                    projectCards.forEach(card => {
                        const category = card.getAttribute('data-category');

                        if (filterValue === 'all' || category === filterValue) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 10);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });
        });
    </script>
@endsection