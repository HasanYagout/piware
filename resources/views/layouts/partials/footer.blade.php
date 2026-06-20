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
                            <a href="tel:+966559712767" class="hover:text-[#2bb673] transition-colors duration-300 group-hover:translate-x-1 inline-block">
                                +966 559712767
                            </a>
                        </li>
                        <li class="flex items-center gap-3 text-sm text-slate-600 group">
                            <span class="text-xl transition-all duration-300 group-hover:scale-125 group-hover:translate-y-[-2px]">📍</span>
                            <span class="group-hover:translate-x-1 inline-block transition-transform duration-300">Al Balad Al Amin St — Al Jami'ah District Makkah Al Mukarramah Region 24243 - 6910</span>
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
                            <svg class="w-5 h-5 fill-current group-hover:rotate-12 transition-transform duration-300" viewBox="0 0 24 24">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                            <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-[10px] bg-slate-800 text-white px-2 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Twitter</span>
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
                            <svg class="w-5 h-5 fill-current group-hover:-rotate-12 transition-transform duration-300" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
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
                            <svg class="w-5 h-5 fill-current group-hover:rotate-12 transition-transform duration-300" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.948-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                            <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-[10px] bg-slate-800 text-white px-2 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Instagram</span>
                            <span class="absolute inset-0 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                                  style="background: linear-gradient(135deg, rgba(255,255,255,0.3) 0%, transparent 50%);"></span>
                        </a>

                        <!-- Facebook -->
                        <a href="https://www.facebook.com/share/14hzHNJrXoY/" target="_blank"
                           class="relative p-2.5 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-500
              hover:text-white hover:bg-[#1877F2] hover:border-[#1877F2]
              hover:scale-110 hover:-translate-y-1.5 hover:-rotate-6
              hover:shadow-xl hover:shadow-[#1877F2]/30
              transition-all duration-300 group transform-gpu"
                           style="transform-style: preserve-3d;"
                           aria-label="Facebook">
                            <svg class="w-5 h-5 fill-current group-hover:-rotate-12 transition-transform duration-300" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                            <span class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-[10px] bg-slate-800 text-white px-2 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Facebook</span>
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
