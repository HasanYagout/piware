@extends('layouts.app')

@section('title', __('Our Team'))

@section('content')
    <section class="pt-32 pb-20 relative overflow-hidden bg-gradient-to-b from-[#071021] to-[#0d1117]">
        <div class="absolute inset-0 overflow-hidden">
            <div class="particle" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
            <div class="particle" style="top: 60%; left: 80%; animation-delay: 1s;"></div>
            <div class="particle" style="top: 40%; left: 40%; animation-delay: 2s;"></div>
            <div class="particle" style="top: 80%; left: 20%; animation-delay: 3s;"></div>
            <div class="particle" style="top: 30%; left: 70%; animation-delay: 4s;"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-12 text-center relative z-10">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                {{ __('Meet') }} <span class="bg-gradient-to-r from-[#00e6cc] to-[#0099ff] bg-clip-text text-transparent">{{ __('Our Team') }}</span>
            </h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto mb-10">
                {{ __('A passionate collective of innovators, engineers, and visionaries dedicated to building the future') }}
            </p>

            <div class="flex flex-wrap justify-center gap-8 mt-12">
                <div class="text-center" data-aos="fade-up">
                    <div class="text-3xl font-bold text-white mb-2">{{ __('15+') }}</div>
                    <div class="text-gray-400">{{ __('Team Members') }}</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-3xl font-bold text-white mb-2">{{ __('8+') }}</div>
                    <div class="text-gray-400">{{ __('Years Experience') }}</div>
                </div>
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-3xl font-bold text-white mb-2">{{ __('50+') }}</div>
                    <div class="text-gray-400">{{ __('Projects Delivered') }}</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[#0a0e14]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">{{ __('The Minds Behind Innovation') }}</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    {{ __('Each team member brings unique expertise and creativity to solve complex challenges') }}
                </p>
            </div>

            <div class="mb-20">
                <div class="flex items-center justify-center mb-12">
                    <div class="w-32 h-px bg-gradient-to-r from-transparent via-[#00e6cc] to-transparent"></div>
                    <h3 class="text-2xl font-bold text-white mx-6">{{ __('Leadership') }}</h3>
                    <div class="w-32 h-px bg-gradient-to-r from-transparent via-[#00e6cc] to-transparent"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                    <div class="team-card" data-aos="fade-up">
                        <div class="relative">
                            <div class="w-64 h-64 mx-auto mb-8 rounded-full relative">
                                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#00e6cc] to-[#0099ff] animate-spin-slow"></div>
                                <div class="absolute inset-1 rounded-full bg-[#0a0e14]"></div>
                                <img src="{{ asset('yousef.jpg') }}"
                                     alt="{{ __('Yousef Mansoor') }}"
                                     class="absolute inset-1 rounded-full object-cover object-top w-[calc(100%-0.5rem)] h-[calc(100%-0.5rem)]">

                                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#00e6cc]/20 to-[#0099ff]/20 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <div class="flex gap-4">
                                        <a href="#" class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center hover:bg-[#00e6cc] transition">
                                            <i class="fab fa-linkedin-in text-white text-lg"></i>
                                        </a>
                                        <a href="#" class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center hover:bg-[#00e6cc] transition">
                                            <i class="fab fa-twitter text-white text-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h4 class="text-2xl font-bold text-white mb-3">{{ __('Yousef Mansoor') }}</h4>
                                <div class="text-[#00e6cc] text-lg font-medium mb-4">{{ __('CEO & Founder') }}</div>
                                <p class="text-gray-300 text-base mb-6 leading-relaxed">
                                    {{ __('Visionary leader with 5+ years of experience in tech innovation and business strategy') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="team-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="relative">
                            <div class="w-64 h-64 mx-auto mb-8 rounded-full relative">
                                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#0099ff] to-[#00e6cc] animate-spin-slow"></div>
                                <div class="absolute inset-3 rounded-full bg-[#0a0e14]"></div>
                                <img src="{{ asset('hasan.jpeg') }}"
                                     alt="{{ __('Hasan Yagout') }}"
                                     class="absolute inset-1 rounded-full object-cover w-[calc(100%-0.5rem)] h-[calc(100%-0.5rem)]">

                                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#0099ff]/20 to-[#00e6cc]/20 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <div class="flex gap-4">
                                        <a href="#" class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center hover:bg-[#0099ff] transition">
                                            <i class="fab fa-linkedin-in text-white text-lg"></i>
                                        </a>
                                        <a href="#" class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center hover:bg-[#0099ff] transition">
                                            <i class="fab fa-github text-white text-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h4 class="text-2xl font-bold text-white mb-3">{{ __('Hasan Yagout') }}</h4>
                                <div class="text-[#0099ff] text-lg font-medium mb-4">{{ __('Co-founder & Lead Developer') }}</div>
                                <p class="text-gray-300 text-base mb-6 leading-relaxed">
                                    {{ __('Back-end specialist with expertise in Laravel and scalable architecture design') }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="team-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="relative">
                            <div class="w-64 h-64 mx-auto mb-8 rounded-full relative">
                                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#00e6cc] to-[#0099ff] animate-spin-slow"></div>
                                <div class="absolute inset-3 rounded-full bg-[#0a0e14]"></div>
                                <img src="{{ asset('ibrahim.jpeg') }}"
                                     alt="{{ __('Ibrahim Alqutary') }}"
                                     class="absolute inset-1 rounded-full object-cover object-top w-[calc(100%-0.5rem)] h-[calc(100%-0.5rem)]">

                                <div class="absolute inset-0 rounded-full bg-gradient-to-r from-[#00e6cc]/20 to-[#0099ff]/20 opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <div class="flex gap-4">
                                        <a href="#" class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center hover:bg-[#00e6cc] transition">
                                            <i class="fab fa-linkedin-in text-white text-lg"></i>
                                        </a>
                                        <a href="#" class="w-12 h-12 rounded-full bg-white/10 backdrop-blur-sm flex items-center justify-center hover:bg-[#00e6cc] transition">
                                            <i class="fas fa-envelope text-white text-lg"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <h4 class="text-2xl font-bold text-white mb-3">{{ __('Ibrahim Alqutary') }}</h4>
                                <div class="text-[#00e6cc] text-lg font-medium mb-4">{{ __('Co-founder & Project Manager') }}</div>
                                <p class="text-gray-300 text-base mb-6 leading-relaxed">
                                    {{ __('Expert in agile methodologies and cross-team coordination for project success') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-20">
                <div class="flex items-center justify-center mb-12">
                    <div class="w-32 h-px bg-gradient-to-r from-transparent via-[#0099ff] to-transparent"></div>
                    <h3 class="text-2xl font-bold text-white mx-6">{{ __('The Core Team') }}</h3>
                    <div class="w-32 h-px bg-gradient-to-r from-transparent via-[#0099ff] to-transparent"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    @php
                        $teamMembers = [
                            [
                                'name' => __('Yosif Busharah'),
                                'role' => __('Biomedical Engineer'),
                                'image' => 'busharah.jpeg',
                            ],
                             [
                                'name' => __('Abdallah Yagout'),
                                'role' => __('Flutter Lead Developer'),
                                'image' => 'abdallah.jpeg',
                            ],
                            [
                                'name' => __('Mohammed Alarasi'),
                                'role' => __('Medical Advisor'),
                                'image' => 'arasi.jpeg',
                            ],
                            [
                                'name' => __('Alargam Alhumaidi'),
                                'role' => __('Medical Content Specialist'),
                                'image' => 'arqam.jpeg',

                            ],
                            [
                                'name' => __('Yosif Yagout'),
                                'role' => __('Social Media Manager'),
                                'image' => 'yosif.jpeg',
                            ]
                        ];
                    @endphp

                    @foreach($teamMembers as $index => $member)
                        <div class="team-member-card" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                            <div class="relative h-full rounded-2xl overflow-hidden group bg-gradient-to-b from-white/5 to-transparent border border-white/10 hover:border-[#0099ff]/30 transition-all duration-300">
                                <div class="p-8 h-full flex flex-col items-center text-center">
                                    <div class="relative mb-8">
                                        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-white/10 group-hover:border-[#0099ff]/30 transition-all duration-300">
                                            <img src="{{ asset($member['image']) }}"
                                                 alt="{{ $member['name'] }}"
                                                 class="absolute inset-1 rounded-full object-cover object-top w-[calc(100%-0.5rem)] h-[calc(100%-0.5rem)]">
                                        </div>
                                        <div class="absolute -inset-4 rounded-full bg-gradient-to-r from-[#00e6cc]/10 to-[#0099ff]/10 opacity-0 group-hover:opacity-100 blur-xl transition-opacity duration-500"></div>
                                    </div>

                                    <h4 class="text-xl font-bold text-white mb-3">{{ $member['name'] }}</h4>
                                    <div class="text-[#00e6cc] font-medium mb-6">{{ $member['role'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 relative overflow-hidden bg-gradient-to-b from-[#0a0e14] to-[#071021]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">{{ __('Our Culture & Values') }}</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">
                    {{ __('The principles that guide our team and drive our success') }}
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="value-card" data-aos="fade-up">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-[#00e6cc] to-[#0099ff] flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-lightbulb text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white text-center mb-4">{{ __('Innovation First') }}</h3>
                    <p class="text-gray-300 text-center">
                        {{ __('We constantly push boundaries and embrace new technologies to deliver cutting-edge solutions.') }}
                    </p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-[#0099ff] to-[#00e6cc] flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white text-center mb-4">{{ __('Collaborative Spirit') }}</h3>
                    <p class="text-gray-300 text-center">
                        {{ __('Great ideas come from teamwork. We believe in open communication and collective problem-solving.') }}
                    </p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-[#00e6cc] to-[#0099ff] flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-gem text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white text-center mb-4">{{ __('Quality Excellence') }}</h3>
                    <p class="text-gray-300 text-center">
                        {{ __("We don't compromise on quality. Every line of code and every design element reflects our commitment.") }}
                    </p>
                </div>

                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-[#0099ff] to-[#00e6cc] flex items-center justify-center mb-6 mx-auto">
                        <i class="fas fa-rocket text-2xl text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold text-white text-center mb-4">{{ __('Continuous Growth') }}</h3>
                    <p class="text-gray-300 text-center">
                        {{ __("We invest in our team's development and encourage learning new skills and technologies.") }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[#0a0e14]">
        <div class="max-w-4xl mx-auto px-6 lg:px-12 text-center">
            <div class="relative">
                <div class="absolute -top-10 -left-10 w-20 h-20 rounded-full bg-gradient-to-r from-[#00e6cc]/10 to-[#0099ff]/10 animate-float"></div>
                <div class="absolute -bottom-10 -right-10 w-24 h-24 rounded-full bg-gradient-to-r from-[#0099ff]/10 to-[#00e6cc]/10 animate-float-slow"></div>

                <div class="relative p-12 rounded-3xl bg-gradient-to-br from-white/5 to-transparent border border-white/10">
                    <h2 class="text-3xl font-bold text-white mb-6">
                        {{ __('Want to Join Our Team?') }}
                    </h2>
                    <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                        {{ __("We're always looking for passionate individuals who want to make an impact. Let's build the future together.") }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="" class="px-8 py-4 rounded-xl bg-gradient-to-r from-[#00e6cc] to-[#0099ff] text-[#0d1117] font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                            <i class="fas fa-briefcase mr-2"></i>
                            {{ __('View Open Positions') }}
                        </a>
                        <a href="" class="px-8 py-4 rounded-xl bg-gradient-to-r from-white/5 to-white/10 font-semibold text-white hover:bg-white/10 transition-all">
                            <i class="fas fa-paper-plane mr-2"></i>
                            {{ __('Send Your CV') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        /* Particle animation */
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: linear-gradient(45deg, #00e6cc, #0099ff);
            border-radius: 50%;
            animation: float-particles 20s infinite linear;
        }

        @keyframes float-particles {
            0% {
                transform: translateY(0) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(100px);
                opacity: 0;
            }
        }

        /* Team card effects */
        .team-card {
            position: relative;
            padding: 2.5rem;
            border-radius: 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 230, 204, 0.1);
            border-color: rgba(0, 230, 204, 0.3);
        }

        /* Animated gradient border */
        .animate-spin-slow {
            animation: spin 8s linear infinite;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /* Glass button */
        .glass-button {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }

        .glass-button:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(0, 230, 204, 0.3);
        }

        /* Value card hover effect */
        .value-card {
            padding: 2.5rem 2rem;
            border-radius: 1rem;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(0, 230, 204, 0.2);
            box-shadow: 0 10px 30px rgba(0, 230, 204, 0.1);
        }

        /* Team member card tilt effect */
        .team-member-card {
            perspective: 1000px;
        }

        .team-member-card > div {
            transform-style: preserve-3d;
            transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .team-member-card:hover > div {
            transform: rotateY(10deg) rotateX(5deg) translateY(-10px);
        }

        /* Floating animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        @keyframes float-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        .animate-float { animation: float 6s ease-in-out infinite; }
        .animate-float-slow { animation: float-slow 8s ease-in-out infinite; }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #0a0e14;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #00e6cc, #0099ff);
            border-radius: 5px;
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 1000,
                    once: true,
                    offset: 100
                });
            }

            // Team card tilt effect
            const teamCards = document.querySelectorAll('.team-member-card');

            teamCards.forEach(card => {
                card.addEventListener('mousemove', function(e) {
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    const rotateY = (x - centerX) / 25;
                    const rotateX = (centerY - y) / 25;

                    this.querySelector('div').style.transform =
                        `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
                });

                card.addEventListener('mouseleave', function() {
                    this.querySelector('div').style.transform =
                        'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
                });
            });

            // Particle system
            function createParticles() {
                const particleContainer = document.querySelector('.absolute.inset-0.overflow-hidden');
                if (!particleContainer) return;

                // Remove existing particles
                const existingParticles = particleContainer.querySelectorAll('.particle');
                existingParticles.forEach(p => p.remove());

                // Create new particles
                for (let i = 0; i < 15; i++) {
                    const particle = document.createElement('div');
                    particle.classList.add('particle');

                    // Random position
                    const left = Math.random() * 100;
                    const top = Math.random() * 100;
                    const size = Math.random() * 4 + 2;
                    const delay = Math.random() * 5;
                    const duration = Math.random() * 10 + 15;

                    particle.style.left = `${left}%`;
                    particle.style.top = `${top}%`;
                    particle.style.width = `${size}px`;
                    particle.style.height = `${size}px`;
                    particle.style.animationDelay = `${delay}s`;
                    particle.style.animationDuration = `${duration}s`;

                    // Use only your main colors
                    const colors = [
                        'linear-gradient(45deg, #00e6cc, #0099ff)',
                        'linear-gradient(45deg, #0099ff, #00e6cc)'
                    ];
                    particle.style.background = colors[Math.floor(Math.random() * colors.length)];

                    particleContainer.appendChild(particle);
                }
            }

            // Initialize particles
            createParticles();

            // Regenerate particles every 30 seconds
            setInterval(createParticles, 30000);

            // Add scroll animation for team members
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-in');
                    }
                });
            }, observerOptions);

            // Observe team cards
            document.querySelectorAll('.team-card, .value-card, .team-member-card').forEach(card => {
                observer.observe(card);
            });
        });
    </script>
@endpush