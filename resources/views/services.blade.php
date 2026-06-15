@extends('layouts.app')

@section('title', __('Services'))

@section('content')
    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-gradient-to-b from-[#071021] to-[#0d1117]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                {{ __('Our Services') }}
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                {{ __('End-to-end digital solutions tailored to your business goals.') }}
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 bg-[#0a0e14]"> <!-- Changed to darker background -->
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Web Development -->
                <div id="web" class="p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 shadow-xl hover:shadow-2xl transition-shadow" data-aos="zoom-in">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-[#00e6cc] to-[#0099ff] flex items-center justify-center mr-4">
                            <i class="fas fa-code text-xl text-[#0d1117]"></i>
                        </div>
                        <div>
                            <div class="text-sm text-[#00e6cc] font-medium">{{__('Web Development')}}</div>
                            <h3 class="text-xl font-semibold text-white">{{__('Custom Web Applications')}}</h3>
                        </div>
                    </div>
                    <p class="text-gray-400 mt-2 mb-4">{{__('Scalable and secure websites and web apps using modern technologies.')}}</p>
                    <ul class="mt-4 space-y-2 text-sm text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Responsive Design') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('E-commerce Solutions') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('API Development') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Progressive Web Apps') }}
                        </li>
                    </ul>
                </div>

                <!-- Mobile Apps -->
                <div id="mobile" class="p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 shadow-xl hover:shadow-2xl transition-shadow" data-aos="zoom-in" data-aos-delay="100">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-[#00e6cc] to-[#0099ff] flex items-center justify-center mr-4">
                            <i class="fas fa-mobile-alt text-xl text-[#0d1117]"></i>
                        </div>
                        <div>
                            <div class="text-sm text-[#00e6cc] font-medium">{{ __('Mobile Solutions') }}</div>
                            <h3 class="text-xl font-semibold text-white">{{ __('Cross-Platform Mobile Apps') }}</h3>
                        </div>
                    </div>
                    <p class="text-gray-400 mt-2 mb-4">{{ __('Modern apps for iOS and Android built with Flutter and Firebase.') }}</p>
                    <ul class="mt-4 space-y-2 text-sm text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Native & Hybrid Apps') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Push Notifications') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('App Store Deployment') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Offline Functionality') }}
                        </li>
                    </ul>
                </div>

                <!-- Data & Analytics -->
                <div id="data" class="p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 shadow-xl hover:shadow-2xl transition-shadow" data-aos="zoom-in" data-aos-delay="200">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-[#00e6cc] to-[#0099ff] flex items-center justify-center mr-4">
                            <i class="fas fa-chart-line text-xl text-[#0d1117]"></i>
                        </div>
                        <div>
                            <div class="text-sm text-[#00e6cc] font-medium">{{ __('Data & AI') }}</div>
                            <h3 class="text-xl font-semibold text-white">{{ __('Analytics & Automation') }}</h3>
                        </div>
                    </div>
                    <p class="text-gray-400 mt-2 mb-4">{{ __('Smart dashboards, reporting, and predictive models for informed decisions.') }}</p>
                    <ul class="mt-4 space-y-2 text-sm text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Business Intelligence') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Machine Learning Models') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Process Automation') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Data Visualization') }}
                        </li>
                    </ul>
                </div>

                <!-- Network Services -->
                <div id="network" class="p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 shadow-xl hover:shadow-2xl transition-shadow" data-aos="zoom-in" data-aos-delay="300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-[#00e6cc] to-[#0099ff] flex items-center justify-center mr-4">
                            <i class="fas fa-network-wired text-xl text-[#0d1117]"></i>
                        </div>
                        <div>
                            <div class="text-sm text-[#00e6cc] font-medium">{{ __('Network Services') }}</div>
                            <h3 class="text-xl font-semibold text-white">{{ __('Infrastructure & Security') }}</h3>
                        </div>
                    </div>
                    <p class="text-gray-400 mt-2 mb-4">{{ __('LAN/WAN setup, secure VPNs, firewall configuration, and performance optimization.') }}</p>
                    <ul class="mt-4 space-y-2 text-sm text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Network Setup & Configuration') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Security Audits') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Cloud Infrastructure') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Disaster Recovery') }}
                        </li>
                    </ul>
                </div>

                <!-- IT Consulting -->
                <div class="p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 shadow-xl hover:shadow-2xl transition-shadow" data-aos="zoom-in" data-aos-delay="400">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-[#00e6cc] to-[#0099ff] flex items-center justify-center mr-4">
                            <i class="fas fa-lightbulb text-xl text-[#0d1117]"></i>
                        </div>
                        <div>
                            <div class="text-sm text-[#00e6cc] font-medium">{{ __('IT Consultation') }}</div>
                            <h3 class="text-xl font-semibold text-white">{{ __('Tech Advisory & IT Solutions') }}</h3>
                        </div>
                    </div>
                    <p class="text-gray-400 mt-2 mb-4">{{ __('Strategic IT guidance, cloud migration, software audits, and vendor selection.') }}</p>
                    <ul class="mt-4 space-y-2 text-sm text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Technology Strategy') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Digital Transformation') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Vendor Management') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Cost Optimization') }}
                        </li>
                    </ul>
                </div>

                <!-- Hardware & Software Implementation -->
                <div class="p-6 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 shadow-xl hover:shadow-2xl transition-shadow" data-aos="zoom-in" data-aos-delay="500">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-lg bg-gradient-to-r from-[#00e6cc] to-[#0099ff] flex items-center justify-center mr-4">
                            <i class="fas fa-server text-xl text-[#0d1117]"></i>
                        </div>
                        <div>
                            <div class="text-sm text-[#00e6cc] font-medium">{{ __('Hardware & Software') }}</div>
                            <h3 class="text-xl font-semibold text-white">{{ __('Deployment & Integration') }}</h3>
                        </div>
                    </div>
                    <p class="text-gray-400 mt-2 mb-4">{{ __('Installation and configuration of servers, workstations, and enterprise software tools.') }}</p>
                    <ul class="mt-4 space-y-2 text-sm text-gray-300">
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('System Installation') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Software Integration') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Technical Support') }}
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-check text-[#00e6cc] mr-2"></i>
                            {{ __('Maintenance & Updates') }}
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Process Section -->
            <div class="mt-20 pt-20 border-t border-white/10">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold bg-gradient-to-r from-[#00e6cc] to-[#0099ff] bg-clip-text text-transparent">
                        {{ __('Our Process') }}
                    </h2>
                    <p class="text-gray-400 mt-3 max-w-2xl mx-auto">
                        {{ __('A structured approach to ensure project success.') }}
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    @php
                        $processSteps = [
                            ['icon' => 'fas fa-lightbulb', 'title' => __('Discovery'), 'desc' => __('Understand requirements and goals'), 'color' => 'from-blue-500 to-cyan-500'],
                            ['icon' => 'fas fa-pencil-ruler', 'title' => __('Design'), 'desc' => __('Create wireframes and prototypes'), 'color' => 'from-cyan-500 to-emerald-500'],
                            ['icon' => 'fas fa-code', 'title' => __('Development'), 'desc' => __('Build and test the solution'), 'color' => 'from-emerald-500 to-green-500'],
                            ['icon' => 'fas fa-rocket', 'title' => __('Launch'), 'desc' => __('Deploy and provide support'), 'color' => 'from-green-500 to-teal-500']
                        ];
                    @endphp

                    @foreach($processSteps as $index => $step)
                        <div class="text-center" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                            <div class="relative mb-6">

                                <div class="w-20 h-20 rounded-full bg-gradient-to-r {{ $step['color'] }} flex items-center justify-center mx-auto">
                                    <i class="{{ $step['icon'] }} text-2xl text-[#0d1117]"></i>
                                </div>
                                @if($index < 3)
                                    <div class="hidden md:block absolute top-10 left-full w-full h-0.5 bg-gradient-to-r from-white/20 to-transparent -ml-8"></div>
                                @endif
                            </div>
                            <div class="text-sm text-gray-400 mb-2">Step {{ $index + 1 }}</div>
                            <h4 class="text-lg font-semibold text-white mb-2">{{ $step['title'] }}</h4>
                            <p class="text-gray-400 text-sm">{{ $step['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Tech Stack Section -->
            <div class="mt-20 pt-20 border-t border-white/10">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold bg-gradient-to-r from-[#00e6cc] to-[#0099ff] bg-clip-text text-transparent">
                        {{ __('Technologies We Use') }}
                    </h2>
                    <p class="text-gray-400 mt-3 max-w-2xl mx-auto">
                        {{ __('Modern tools and frameworks for cutting-edge solutions.') }}
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                    @php
                        $technologies = [
                            ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel', 'color' => '#FF2D20'],
                            ['name' => 'React', 'icon' => 'fa-brands fa-react', 'color' => '#61DAFB'],
                            ['name' => 'Node.js', 'icon' => 'fa-brands fa-node-js', 'color' => '#339933'],
                            ['name' => 'Python', 'icon' => 'fa-brands fa-python', 'color' => '#3776AB'],
                            ['name' => 'Flutter', 'icon' => '', 'img' => 'https://www.svgrepo.com/show/349363/flutter.svg'],
                            ['name' => 'Firebase', 'icon' => '', 'img' => 'https://www.svgrepo.com/show/373595/firebase.svg'],
                            ['name' => 'Docker', 'icon' => 'fa-brands fa-docker', 'color' => '#2496ED'],
                            ['name' => 'AWS', 'icon' => 'fa-brands fa-aws', 'color' => '#FF9900'],
                            ['name' => 'Tailwind', 'icon' => '', 'img' => 'https://www.svgrepo.com/show/374118/tailwind.svg'],
                            ['name' => 'MySQL', 'icon' => 'fa-solid fa-database', 'color' => '#4479A1'],
                            ['name' => 'MongoDB', 'icon' => '', 'img' => 'https://www.svgrepo.com/show/331488/mongodb.svg'],
                            ['name' => 'Git', 'icon' => 'fa-brands fa-git-alt', 'color' => '#F05032'],
                        ];
                    @endphp

                    @foreach($technologies as $tech)
                        <div class="p-4 rounded-xl bg-white/5 border border-white/10 text-center hover:bg-white/10 transition-colors">
                            @if(isset($tech['icon']) && !empty($tech['icon']))
                                <i class="{{ $tech['icon'] }} text-4xl mb-3" style="color: {{ $tech['color'] }}"></i>
                            @elseif(isset($tech['img']))
                                <img src="{{ $tech['img'] }}" alt="{{ $tech['name'] }}" class="w-12 h-12 mx-auto mb-3">
                            @endif
                            <div class="text-sm text-gray-300">{{ $tech['name'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 bg-gradient-to-r from-[#07101a] via-[#0a1c2f] to-[#07101a]">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%239C92AC" fill-opacity="0.05"%3E%3Cpath d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
        </div>

        <div class="max-w-4xl mx-auto px-6 lg:px-12 text-center relative z-10">
            <div class="p-8 md:p-12 rounded-2xl bg-white/5 backdrop-blur-xl border border-white/10 shadow-xl">
                <h2 class="text-3xl font-bold text-white mb-6">
                    {{ __('Ready to transform your business?') }}
                </h2>
                <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                    {{ __('Let\'s discuss how our services can help you achieve your goals. Get a free consultation today.') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="" class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#00e6cc] to-[#0099ff] text-[#0d1117] font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                        <i class="fas fa-calendar-check mr-2"></i>
                        {{ __('Schedule a Call') }}
                    </a>
                    <a href="tel:+1234567890" class="px-8 py-4 rounded-xl bg-white/5 border border-white/20 text-white font-semibold hover:bg-white/10 transition-colors">
                        <i class="fas fa-phone mr-2"></i>
                        {{ __('Call Now') }}
                    </a>
                </div>
                <p class="text-gray-400 text-sm mt-6">
                    {{ __('Response within 24 hours • No commitment required') }}
                </p>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        /* Additional custom styles for services page */
        .process-step {
            position: relative;
        }

        .process-step::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -20px;
            width: 40px;
            height: 2px;
            background: linear-gradient(90deg, rgba(0,230,204,0.3), rgba(0,153,255,0.3));
            display: none;
        }

        @media (min-width: 768px) {
            .process-step:not(:last-child)::after {
                display: block;
            }
        }
    </style>
@endpush
