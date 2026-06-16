<!-- FOOTER (glassmorphism style with logo image) -->
<footer class="relative z-10 bg-white/10 backdrop-blur-md border-t border-white/40 shadow-lg mt-10">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-8 flex flex-col md:flex-row items-center justify-between gap-6">

        <!-- Logo (image) & Copyright (desktop) -->
        <div class="flex items-center gap-4">
            <div class="flex-shrink-0">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="w-10 h-10 object-contain drop-shadow-md">
            </div>
            <div class="text-sm text-slate-500 hidden md:block">
                © <span id="year"></span> {{ __('All rights reserved.') }}
            </div>
        </div>

        <!-- Social Icons (glass style) -->
        <div class="flex items-center gap-3">
            <a href="https://x.com/Piware_tech?t=27z71z6KlpPol9dOMLVqlg&s=08"
               class="p-2 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-600 hover:text-[#1ca0d8] hover:scale-110 transition-all duration-300">
                <i class="fab fa-x-twitter text-xl"></i>
            </a>
            <a href="https://www.linkedin.com/in/pi-ware-170370361?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
               class="p-2 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-600 hover:text-[#2bb673] hover:scale-110 transition-all duration-300">
                <i class="fab fa-linkedin text-xl"></i>
            </a>
            <a href="https://www.instagram.com/piware.tech?igsh=MTVnemg3a203YzJmYg=="
               class="p-2 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-600 hover:text-[#1ca0d8] hover:scale-110 transition-all duration-300">
                <i class="fab fa-instagram text-xl"></i>
            </a>
        </div>

        <!-- Mobile copyright -->
        <div class="text-sm text-slate-500 md:hidden text-center">
            © <span id="year2"></span> {{ __('All rights reserved.') }}
        </div>
    </div>
</footer>

<script>
    // Auto-update copyright year
    document.getElementById('year') && (document.getElementById('year').innerText = new Date().getFullYear());
    document.getElementById('year2') && (document.getElementById('year2').innerText = new Date().getFullYear());
</script>
