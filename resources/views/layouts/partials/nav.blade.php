<nav class="w-full z-50 bg-gradient-to-r from-[#1ca0d8]/10 via-white/20 to-[#2bb673]/10 backdrop-blur-md border-b border-white/40 shadow-lg sticky top-0 transition-all duration-300 overflow-hidden">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Floating gradient orbs -->
        <div class="absolute -top-20 -left-20 w-64 h-64 bg-[#1ca0d8]/10 rounded-full blur-3xl animate-float-slow"></div>
        <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-[#2bb673]/10 rounded-full blur-3xl animate-float-slow" style="animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-[#1ca0d8]/5 rounded-full blur-3xl animate-float-slow" style="animation-delay: 4s;"></div>

        <!-- Floating dots pattern -->
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-2 left-1/4 w-1 h-1 bg-[#1ca0d8] rounded-full animate-ping" style="animation-delay: 0s;"></div>
            <div class="absolute top-1/3 right-1/4 w-1.5 h-1.5 bg-[#2bb673] rounded-full animate-ping" style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-1 h-1 bg-[#1ca0d8] rounded-full animate-ping" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 right-1/3 w-1.5 h-1.5 bg-[#2bb673] rounded-full animate-ping" style="animation-delay: 1.5s;"></div>
            <div class="absolute bottom-2 right-1/4 w-1 h-1 bg-[#1ca0d8] rounded-full animate-ping" style="animation-delay: 2s;"></div>
            <div class="absolute top-1/4 right-1/6 w-1 h-1 bg-[#1ca0d8] rounded-full animate-ping" style="animation-delay: 0.8s;"></div>
            <div class="absolute bottom-1/3 left-1/6 w-1.5 h-1.5 bg-[#2bb673] rounded-full animate-ping" style="animation-delay: 1.8s;"></div>
        </div>

        <!-- Floating particles (slow drifting) -->
        <div class="absolute inset-0 opacity-15">
            <div class="absolute top-[10%] left-[15%] w-2 h-2 bg-[#1ca0d8] rounded-full animate-float-particle" style="animation-delay: 0s;"></div>
            <div class="absolute top-[30%] right-[20%] w-1.5 h-1.5 bg-[#2bb673] rounded-full animate-float-particle" style="animation-delay: 1.5s;"></div>
            <div class="absolute bottom-[25%] left-[25%] w-2.5 h-2.5 bg-[#1ca0d8] rounded-full animate-float-particle" style="animation-delay: 3s;"></div>
            <div class="absolute bottom-[40%] right-[15%] w-2 h-2 bg-[#2bb673] rounded-full animate-float-particle" style="animation-delay: 4.5s;"></div>
            <div class="absolute top-[55%] left-[10%] w-1.5 h-1.5 bg-[#1ca0d8] rounded-full animate-float-particle" style="animation-delay: 2.5s;"></div>
            <div class="absolute top-[15%] right-[35%] w-2 h-2 bg-[#2bb673] rounded-full animate-float-particle" style="animation-delay: 5s;"></div>
        </div>

        <!-- Animated lines -->
        <svg class="absolute inset-0 w-full h-full opacity-10" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#1ca0d8"/>
                    <stop offset="50%" stop-color="#2bb673"/>
                    <stop offset="100%" stop-color="#1ca0d8"/>
                </linearGradient>
                <linearGradient id="lineGradientVertical" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#1ca0d8"/>
                    <stop offset="50%" stop-color="#2bb673"/>
                    <stop offset="100%" stop-color="#1ca0d8"/>
                </linearGradient>
            </defs>
            <!-- Horizontal lines -->
            <line x1="10%" y1="20%" x2="30%" y2="20%" stroke="url(#lineGradient)" stroke-width="0.5" class="animate-dash"/>
            <line x1="60%" y1="80%" x2="90%" y2="80%" stroke="url(#lineGradient)" stroke-width="0.5" class="animate-dash" style="animation-delay: 1s;"/>
            <line x1="5%" y1="60%" x2="15%" y2="60%" stroke="url(#lineGradient)" stroke-width="0.5" class="animate-dash" style="animation-delay: 2s;"/>
            <line x1="75%" y1="15%" x2="95%" y2="15%" stroke="url(#lineGradient)" stroke-width="0.5" class="animate-dash" style="animation-delay: 0.5s;"/>
            <!-- Vertical lines -->
            <line x1="25%" y1="10%" x2="25%" y2="30%" stroke="url(#lineGradientVertical)" stroke-width="0.5" class="animate-dash" style="animation-delay: 1.5s;"/>
            <line x1="85%" y1="60%" x2="85%" y2="90%" stroke="url(#lineGradientVertical)" stroke-width="0.5" class="animate-dash" style="animation-delay: 2.5s;"/>
            <!-- Diagonal lines -->
            <line x1="45%" y1="10%" x2="55%" y2="30%" stroke="url(#lineGradient)" stroke-width="0.5" class="animate-dash" style="animation-delay: 3s;"/>
            <line x1="40%" y1="70%" x2="60%" y2="90%" stroke="url(#lineGradient)" stroke-width="0.5" class="animate-dash" style="animation-delay: 0.8s;"/>
            <!-- Curved path -->
            <path d="M 20% 85% Q 40% 60%, 60% 85% T 80% 85%" stroke="url(#lineGradient)" stroke-width="0.5" fill="none" class="animate-dash" style="animation-delay: 1.8s;"/>
        </svg>

        <!-- Subtle grid pattern -->
        <div class="absolute inset-0 opacity-[0.03]" style="background-image:
            linear-gradient(rgba(28, 160, 216, 0.3) 1px, transparent 1px),
            linear-gradient(90deg, rgba(28, 160, 216, 0.3) 1px, transparent 1px);
            background-size: 40px 40px;">
        </div>

        <!-- Animated shimmer overlay -->
        <div class="absolute inset-0 opacity-5 animate-shimmer" style="background: linear-gradient(105deg, transparent 40%, rgba(255,255,255,0.3) 50%, transparent 60%); background-size: 200% 100%;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-3 flex items-center justify-between relative z-10">
        <!-- Logo + Nav Links -->
        <div class="flex items-center space-x-3">
            <!-- Logo with glow -->
            <div class="flex-shrink-0 transition-transform duration-300 hover:scale-105 relative">
                <a href="/" class="block">
                    <img src="{{ asset('logo.png') }}" alt="Logo" class="w-12 h-12 object-contain drop-shadow-md relative z-10">
                    <!-- Glow ring behind logo -->
                    <span class="absolute inset-0 rounded-full bg-[#1ca0d8]/20 blur-xl animate-pulse"></span>
                    <span class="absolute inset-[-4px] rounded-full border border-[#1ca0d8]/10 animate-spin-slow"></span>
                </a>
            </div>

            <!-- Animated Divider -->
            <div class="hidden md:block h-8 w-px bg-gradient-to-b from-transparent via-[#1ca0d8]/40 to-transparent animate-pulse"></div>

            <!-- Desktop Menu with icons -->
            <div class="hidden md:flex items-center space-x-6 text-sm ml-8">
                <a href="/" class="relative text-slate-700 hover:text-[#1ca0d8] transition font-medium group">
                    <span class="flex items-center gap-2">
                        {{ __('Home') }}
                    </span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{route('about-us')}}" class="relative text-slate-700 hover:text-[#1ca0d8] transition font-medium group">
                    <span class="flex items-center gap-2">
                        {{ __('About Us') }}
                    </span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{route('projects')}}" class="relative text-slate-700 hover:text-[#1ca0d8] transition font-medium group">
                    <span class="flex items-center gap-2">
                        {{ __('Projects') }}
                    </span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{route('blog.index')}}" class="relative text-slate-700 hover:text-[#2bb673] transition font-medium group">
                    <span class="flex items-center gap-2">
                        {{ __('Blogs') }}
                    </span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-gradient-to-r from-[#2bb673] to-[#1ca0d8] transition-all duration-300 group-hover:w-full"></span>
                </a>
            </div>
        </div>

        <!-- Right side: language switcher + mobile button -->
        <div class="flex items-center space-x-4">
            <!-- Animated Language Switcher -->
            <div class="flex items-center relative">
                <!-- Subtle glow behind button -->
                <div class="absolute -inset-1 bg-gradient-to-r from-[#1ca0d8]/20 to-[#2bb673]/20 rounded-full blur-xl animate-pulse"></div>

                @if(app()->getLocale() == 'en')
                    <a href="{{ route('language.switch', 'ar') }}"
                       class="relative px-4 py-2 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] text-white rounded-full text-sm font-semibold shadow-md hover:shadow-lg transition-all hover:scale-105 active:scale-95 overflow-hidden group">
                        <span class="relative z-10 flex items-center gap-2">
                            <svg class="w-4 h-4 group-hover:animate-spin transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                            العربية
                        </span>
                        <span class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-700 bg-gradient-to-r from-transparent via-white/20 to-transparent"></span>
                    </a>
                @else
                    <a href="{{ route('language.switch', 'en') }}"
                       class="relative px-4 py-2 bg-gradient-to-r from-[#2bb673] to-[#1ca0d8] text-white rounded-full text-sm font-semibold shadow-md hover:shadow-lg transition-all hover:scale-105 active:scale-95 overflow-hidden group">
                        <span class="relative z-10 flex items-center gap-2">
                            <svg class="w-4 h-4 group-hover:animate-spin transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                            </svg>
                            English
                        </span>
                        <span class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-700 bg-gradient-to-r from-transparent via-white/20 to-transparent"></span>
                    </a>
                @endif
            </div>

            <!-- Animated Mobile menu button -->
            <div class="md:hidden">
                <button id="mobileMenuBtn" class="p-2 bg-white/30 backdrop-blur-sm rounded-lg border border-white/40 focus:outline-none hover:bg-white/50 transition-all hover:scale-105 active:scale-95 group relative overflow-hidden">
                    <span class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-700 bg-gradient-to-r from-transparent via-white/30 to-transparent"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700 transition-transform duration-300 relative z-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-white/20 backdrop-blur-md border-t border-white/40 shadow-lg relative overflow-hidden">
        <!-- Mobile menu background orbs -->
        <div class="absolute -top-10 -right-10 w-40 h-40 bg-[#1ca0d8]/5 rounded-full blur-2xl animate-float-slow" style="animation-delay: 0.5s;"></div>
        <div class="absolute -bottom-10 -left-10 w-40 h-40 bg-[#2bb673]/5 rounded-full blur-2xl animate-float-slow" style="animation-delay: 2.5s;"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-60 h-60 bg-[#1ca0d8]/3 rounded-full blur-2xl animate-float-slow" style="animation-delay: 4s;"></div>

        <div class="px-6 pt-4 pb-6 flex flex-col space-y-4 text-slate-700 relative z-10">
            <a href="/" class="flex items-center gap-3 hover:text-[#1ca0d8] transition font-medium hover:translate-x-2 duration-300 group">
                {{ __('Home') }}
            </a>
            <a href="{{route('about-us')}}" class="flex items-center gap-3 hover:text-[#1ca0d8] transition font-medium hover:translate-x-2 duration-300 group">
                {{ __('About Us') }}
            </a>
            <a href="{{route('projects')}}" class="flex items-center gap-3 hover:text-[#1ca0d8] transition font-medium hover:translate-x-2 duration-300 group">
                {{ __('Projects') }}
            </a>
            <a href="{{route('blog.index')}}" class="flex items-center gap-3 hover:text-[#2bb673] transition font-medium hover:translate-x-2 duration-300 group">
                {{ __('Blogs') }}
            </a>

            <!-- Animated Divider -->
            <div class="flex items-center justify-center gap-2 my-2">
                <span class="w-1.5 h-1.5 bg-[#1ca0d8] rounded-full animate-bounce" style="animation-delay: 0s;"></span>
                <span class="w-1.5 h-1.5 bg-[#2bb673] rounded-full animate-bounce" style="animation-delay: 0.15s;"></span>
                <span class="w-1.5 h-1.5 bg-[#1ca0d8] rounded-full animate-bounce" style="animation-delay: 0.3s;"></span>
                <span class="w-1.5 h-1.5 bg-[#2bb673] rounded-full animate-bounce" style="animation-delay: 0.45s;"></span>
            </div>

            <!-- Language Switcher for Mobile -->
            <div class="pt-2 relative">
                <div class="absolute -inset-0.5 bg-gradient-to-r from-[#1ca0d8]/20 to-[#2bb673]/20 rounded-full blur-md"></div>
                @if(app()->getLocale() == 'en')
                    <a href="{{ route('language.switch', 'ar') }}"
                       class="relative flex items-center justify-center gap-2 w-full px-4 py-2.5 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] text-white rounded-full text-sm font-semibold shadow-md hover:shadow-lg transition-all hover:scale-105 active:scale-95 group overflow-hidden">
                        <span class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-700 bg-gradient-to-r from-transparent via-white/20 to-transparent"></span>
                        <svg class="w-4 h-4 group-hover:animate-spin relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                        </svg>
                        <span class="relative z-10">العربية</span>
                    </a>
                @else
                    <a href="{{ route('language.switch', 'en') }}"
                       class="relative flex items-center justify-center gap-2 w-full px-4 py-2.5 bg-gradient-to-r from-[#2bb673] to-[#1ca0d8] text-white rounded-full text-sm font-semibold shadow-md hover:shadow-lg transition-all hover:scale-105 active:scale-95 group overflow-hidden">
                        <span class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-700 bg-gradient-to-r from-transparent via-white/20 to-transparent"></span>
                        <svg class="w-4 h-4 group-hover:animate-spin relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/>
                        </svg>
                        <span class="relative z-10">English</span>
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>

<style>
    /* Custom Animations */
    @keyframes float-slow {
        0%, 100% { transform: translateY(0px) scale(1); }
        50% { transform: translateY(-20px) scale(1.05); }
    }

    @keyframes float-particle {
        0%, 100% { transform: translate(0, 0) scale(1); opacity: 0.3; }
        25% { transform: translate(20px, -30px) scale(1.2); opacity: 0.8; }
        50% { transform: translate(-10px, -50px) scale(0.8); opacity: 0.5; }
        75% { transform: translate(15px, -20px) scale(1.5); opacity: 0.9; }
    }

    @keyframes dash {
        0% { stroke-dashoffset: 100; stroke-dasharray: 100; opacity: 0; }
        50% { opacity: 1; }
        100% { stroke-dashoffset: 0; stroke-dasharray: 100; opacity: 0; }
    }

    @keyframes spin-slow {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }

    .animate-float-slow {
        animation: float-slow 8s ease-in-out infinite;
    }

    .animate-float-particle {
        animation: float-particle 12s ease-in-out infinite;
    }

    .animate-dash {
        animation: dash 4s ease-in-out infinite;
        stroke-dasharray: 100;
        stroke-dashoffset: 100;
    }

    .animate-spin-slow {
        animation: spin-slow 10s linear infinite;
    }

    .animate-shimmer {
        animation: shimmer 6s ease-in-out infinite;
    }

    @media (prefers-reduced-motion: reduce) {
        .animate-float-slow,
        .animate-float-particle,
        .animate-dash,
        .animate-bounce,
        .animate-pulse,
        .animate-ping,
        .animate-spin,
        .animate-spin-slow,
        .animate-shimmer {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
        }
    }

    html {
        scroll-behavior: smooth;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('mobileMenu');
        const icon = btn.querySelector('svg');

        if (btn && menu) {
            btn.addEventListener('click', () => {
                const isHidden = menu.classList.toggle('hidden');

                if (isHidden) {
                    icon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    `;
                } else {
                    icon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    `;
                }
            });
        }

        document.addEventListener('click', (e) => {
            if (!menu.classList.contains('hidden') &&
                !menu.contains(e.target) &&
                !btn.contains(e.target)) {
                menu.classList.add('hidden');
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                `;
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && !menu.classList.contains('hidden')) {
                menu.classList.add('hidden');
                icon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                `;
            }
        });
    });
</script>
