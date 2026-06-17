<!-- ============================================ -->
<!-- FOOTER - 3D Animated Icons Edition           -->
<!-- ============================================ -->
<footer class="relative z-10 bg-white/10 backdrop-blur-md border-t border-white/40 shadow-lg overflow-hidden">

    <!-- Decorative Gradient Line at Top -->
    <div class="h-1 w-full bg-gradient-to-r from-transparent via-[#1ca0d8] to-[#2bb673] opacity-60"></div>

    <!-- Decorative Floating Elements -->
    <div class="absolute -top-10 -right-10 w-40 h-40 rounded-full bg-[#1ca0d8]/5 blur-2xl"></div>
    <div class="absolute -bottom-20 -left-20 w-60 h-60 rounded-full bg-[#2bb673]/5 blur-2xl"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 rounded-full bg-[#1ca0d8]/3 blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-12 relative z-10">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <!-- Left: Logo & Description -->
            <div class="space-y-4">
                <div class="relative inline-block group">
                    <!-- 3D Floating Logo Container -->
                    <div class="relative perspective-500">
                        <img src="{{ asset('logo.png') }}" alt="PiWare"
                             class="w-24 h-24 object-contain drop-shadow-md transition-all duration-500
                                    group-hover:scale-110 group-hover:rotate-6
                                    group-hover:shadow-2xl group-hover:shadow-[#1ca0d8]/30
                                    transform-gpu"
                             style="transform-style: preserve-3d;">
                        <!-- 3D Shadow -->
                        <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-20 h-3 bg-[#1ca0d8]/20 blur-xl rounded-full
                                    group-hover:w-28 group-hover:h-4 group-hover:bg-[#1ca0d8]/30 transition-all duration-500">
                        </div>
                    </div>
                    <!-- Glow effect behind logo -->
                    <div class="absolute -inset-6 bg-gradient-to-r from-[#1ca0d8]/20 to-[#2bb673]/20 rounded-full blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <!-- Floating particles -->
                    <div class="absolute -top-2 -right-2 w-3 h-3 rounded-full bg-[#1ca0d8] opacity-0 group-hover:opacity-100 transition-all duration-500 animate-float-particle"></div>
                    <div class="absolute -bottom-1 -left-1 w-2 h-2 rounded-full bg-[#2bb673] opacity-0 group-hover:opacity-100 transition-all duration-700 animate-float-particle-delayed"></div>
                </div>

                <p class="text-sm text-slate-600 leading-relaxed max-w-sm">
                    Building digital products that businesses actually use.
                    Enterprise systems, dashboards, and scalable platforms.
                </p>

                <div class="flex items-center gap-3 pt-2">
                    <span class="relative flex h-3 w-3">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                    </span>
                    <span class="text-xs text-slate-500 font-medium">Available for projects</span>
                    <span class="text-xs text-slate-300">•</span>
                    <span class="text-xs text-[#1ca0d8] font-medium flex items-center gap-1">
                        <span class="inline-block animate-bounce">⚡</span>
                        Ready to build
                    </span>
                </div>
            </div>

            <!-- Right: Quick Links + Contact + Social -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">

                <!-- Quick Links -->
                <div>
                    <h4 class="text-sm font-semibold text-slate-700 uppercase tracking-wider mb-4 flex items-center gap-2">
                        <span class="w-1 h-4 bg-gradient-to-b from-[#1ca0d8] to-[#2bb673] rounded-full"></span>
                        Quick Links
                    </h4>
                    <ul class="space-y-3">
                        <li>
                            <a href="#portfolio" class="text-sm text-slate-600 hover:text-[#1ca0d8] transition-all duration-300 flex items-center gap-2 group">
                                <span class="text-[#1ca0d8] opacity-0 group-hover:opacity-100 transition-all duration-300 transform -translate-x-2 group-hover:translate-x-0">→</span>
                                Portfolio
                                <span class="text-xs text-slate-300 opacity-0 group-hover:opacity-100 transition-opacity">✦</span>
                            </a>
                        </li>
                        <li>
                            <a href="#services" class="text-sm text-slate-600 hover:text-[#2bb673] transition-all duration-300 flex items-center gap-2 group">
                                <span class="text-[#2bb673] opacity-0 group-hover:opacity-100 transition-all duration-300 transform -translate-x-2 group-hover:translate-x-0">→</span>
                                Services
                                <span class="text-xs text-slate-300 opacity-0 group-hover:opacity-100 transition-opacity">✦</span>
                            </a>
                        </li>
                        <li>
                            <a href="#blog" class="text-sm text-slate-600 hover:text-[#1ca0d8] transition-all duration-300 flex items-center gap-2 group">
                                <span class="text-[#1ca0d8] opacity-0 group-hover:opacity-100 transition-all duration-300 transform -translate-x-2 group-hover:translate-x-0">→</span>
                                Blog
                                <span class="text-xs text-slate-300 opacity-0 group-hover:opacity-100 transition-opacity">✦</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="text-sm text-slate-600 hover:text-[#2bb673] transition-all duration-300 flex items-center gap-2 group">
                                <span class="text-[#2bb673] opacity-0 group-hover:opacity-100 transition-all duration-300 transform -translate-x-2 group-hover:translate-x-0">→</span>
                                Contact
                                <span class="text-xs text-slate-300 opacity-0 group-hover:opacity-100 transition-opacity">✦</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact & Social -->
                <div>
                    <h4 class="text-sm font-semibold text-slate-700 uppercase tracking-wider mb-4 flex items-center gap-2">
                        <span class="w-1 h-4 bg-gradient-to-b from-[#2bb673] to-[#1ca0d8] rounded-full"></span>
                        Connect
                    </h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm text-slate-600 group">
                            <span class="text-xl transition-all duration-300 group-hover:scale-125 group-hover:-rotate-12 group-hover:translate-y-[-2px]">📧</span>
                            <a href="mailto:info@piware.tech" class="hover:text-[#1ca0d8] transition-colors duration-300 group-hover:translate-x-1 inline-block">
                                info@piware.tech
                            </a>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 group">
                            <span class="text-xl transition-all duration-300 group-hover:scale-125 group-hover:rotate-12 group-hover:translate-y-[-2px]">📞</span>
                            <a href="tel:+15551234567" class="hover:text-[#2bb673] transition-colors duration-300 group-hover:translate-x-1 inline-block">
                                +1 (555) 123-4567
                            </a>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 group">
                            <span class="text-xl transition-all duration-300 group-hover:scale-125 group-hover:translate-y-[-2px]">📍</span>
                            <span class="group-hover:translate-x-1 inline-block transition-transform duration-300">Tech Valley, California</span>
                        </li>
                    </ul>

                    <!-- 3D Social Icons -->
                    <div class="flex items-center gap-3 mt-6">
                        <!-- Twitter -->
                        <a href="https://x.com/Piware_tech" target="_blank"
                           class="relative p-2.5 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-500
                                  hover:text-white hover:bg-[#1ca0d8] hover:border-[#1ca0d8]
                                  hover:scale-110 hover:-translate-y-1.5 hover:rotate-6
                                  hover:shadow-xl hover:shadow-[#1ca0d8]/30
                                  transition-all duration-300 group transform-gpu"
                           style="transform-style: preserve-3d;"
                           aria-label="Twitter">
                            <i class="fab fa-x-twitter text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-[10px] bg-slate-800 text-white px-2 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Twitter</span>
                            <!-- 3D shine effect -->
                            <span class="absolute inset-0 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                  style="background: linear-gradient(135deg, rgba(255,255,255,0.3) 0%, transparent 50%);"></span>
                        </a>

                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/pi-ware-170370361" target="_blank"
                           class="relative p-2.5 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-500
                                  hover:text-white hover:bg-[#0A66C2] hover:border-[#0A66C2]
                                  hover:scale-110 hover:-translate-y-1.5 hover:-rotate-6
                                  hover:shadow-xl hover:shadow-[#0A66C2]/30
                                  transition-all duration-300 group transform-gpu"
                           style="transform-style: preserve-3d;"
                           aria-label="LinkedIn">
                            <i class="fab fa-linkedin text-lg group-hover:-rotate-12 transition-transform duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-[10px] bg-slate-800 text-white px-2 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">LinkedIn</span>
                            <span class="absolute inset-0 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                  style="background: linear-gradient(135deg, rgba(255,255,255,0.3) 0%, transparent 50%);"></span>
                        </a>

                        <!-- Instagram -->
                        <a href="https://www.instagram.com/piware.tech" target="_blank"
                           class="relative p-2.5 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-500
                                  hover:text-white hover:bg-gradient-to-br hover:from-[#E4405F] hover:via-[#F58529] hover:to-[#FFD700]
                                  hover:border-[#E4405F] hover:scale-110 hover:-translate-y-1.5 hover:rotate-6
                                  hover:shadow-xl hover:shadow-[#E4405F]/30
                                  transition-all duration-300 group transform-gpu"
                           style="transform-style: preserve-3d;"
                           aria-label="Instagram">
                            <i class="fab fa-instagram text-lg group-hover:rotate-12 transition-transform duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-[10px] bg-slate-800 text-white px-2 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Instagram</span>
                            <span class="absolute inset-0 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                  style="background: linear-gradient(135deg, rgba(255,255,255,0.3) 0%, transparent 50%);"></span>
                        </a>

                        <!-- GitHub -->
                        <a href="https://github.com/piware" target="_blank"
                           class="relative p-2.5 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-500
                                  hover:text-white hover:bg-[#333] hover:border-[#333]
                                  hover:scale-110 hover:-translate-y-1.5 hover:-rotate-6
                                  hover:shadow-xl hover:shadow-[#333]/30
                                  transition-all duration-300 group transform-gpu"
                           style="transform-style: preserve-3d;"
                           aria-label="GitHub">
                            <i class="fab fa-github text-lg group-hover:-rotate-12 transition-transform duration-300"></i>
                            <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-[10px] bg-slate-800 text-white px-2 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">GitHub</span>
                            <span class="absolute inset-0 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                  style="background: linear-gradient(135deg, rgba(255,255,255,0.3) 0%, transparent 50%);"></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Divider with 3D floating icons -->
        <div class="relative my-8">
            <div class="border-t border-white/30"></div>
            <div class="absolute left-1/2 -translate-x-1/2 -top-3.5 flex items-center gap-4 bg-white/10 backdrop-blur-sm px-6 py-1.5 rounded-full border border-white/30 shadow-lg">
                <!-- 3D floating decorative icons -->
                <span class="text-sm animate-float-3d" style="animation-delay: 0s;">✦</span>
                <span class="text-sm text-[#1ca0d8] animate-float-3d" style="animation-delay: 0.3s;">◈</span>
                <span class="text-sm text-[#2bb673] animate-float-3d" style="animation-delay: 0.6s;">✦</span>
                <span class="text-sm text-[#F58529] animate-float-3d" style="animation-delay: 0.9s;">◈</span>
                <span class="text-sm animate-float-3d" style="animation-delay: 1.2s;">✦</span>
            </div>
        </div>

        <!-- Copyright with animated gradient -->
        <div class="text-center text-sm">
            <span class="text-slate-500">
                © <span id="year"></span> PiWare.
                <span class="hidden sm:inline">{{ __('All rights reserved.') }}</span>
            </span>
            <span class="text-slate-300 mx-2">•</span>
            <span class="text-xs text-transparent bg-clip-text bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] animate-pulse">
                ✦ Innovating since 2025 ✦
            </span>
        </div>

    </div>
</footer>

<!-- Custom Animations -->
<style>
    /* 3D Perspective */
    .perspective-500 {
        perspective: 500px;
    }

    /* 3D Floating Animation for Divider Icons */
    @keyframes float-3d {
        0%, 100% {
            transform: translateY(0px) rotate(0deg) scale(1);
            opacity: 0.6;
        }
        25% {
            transform: translateY(-6px) rotate(8deg) scale(1.1);
            opacity: 1;
        }
        75% {
            transform: translateY(4px) rotate(-4deg) scale(0.95);
            opacity: 0.8;
        }
    }
    .animate-float-3d {
        animation: float-3d 3s ease-in-out infinite;
        display: inline-block;
    }

    /* Floating Particles */
    @keyframes float-particle {
        0%, 100% {
            transform: translateY(0px) scale(1);
            opacity: 0;
        }
        50% {
            transform: translateY(-10px) scale(1.5);
            opacity: 1;
        }
    }
    .animate-float-particle {
        animation: float-particle 3s ease-in-out infinite;
    }
    .animate-float-particle-delayed {
        animation: float-particle 3s ease-in-out infinite 1.5s;
    }

    /* 3D Hover Effect for Social Icons - Extra depth */
    .transform-gpu {
        transform-style: preserve-3d;
        backface-visibility: hidden;
    }

    /* Floating animation for the entire footer section */
    @keyframes subtle-float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-2px); }
    }
    .footer-float {
        animation: subtle-float 6s ease-in-out infinite;
    }

    /* Glowing pulse for divider */
    @keyframes glow-pulse {
        0%, 100% { box-shadow: 0 0 20px rgba(28,160,216,0.1); }
        50% { box-shadow: 0 0 40px rgba(28,160,216,0.2), 0 0 60px rgba(43,182,115,0.1); }
    }
    .glow-pulse {
        animation: glow-pulse 4s ease-in-out infinite;
    }
</style>
