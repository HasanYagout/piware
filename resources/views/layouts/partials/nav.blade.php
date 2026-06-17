<nav class="w-full z-50 bg-white/20 backdrop-blur-md border-b border-white/40 shadow-lg">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-3 flex items-center justify-between">
        <!-- Logo + Nav Links -->
        <div class="flex items-center space-x-3">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img src="{{ asset('logo.png') }}" alt="Logo" class="w-12 h-12 object-contain drop-shadow-md">
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6 text-sm ml-8">
                <a href="/" class="text-slate-700 hover:text-[#1ca0d8] transition font-medium">{{ __('Home') }}</a>
                <a href="{{route('blog.index')}}" class="text-slate-700 hover:text-[#2bb673] transition font-medium">{{ __('Blogs') }}</a>
                <a href="{{route('projects')}}" class="text-slate-700 hover:text-[#1ca0d8] transition font-medium">{{ __('Projects') }}</a>
                <a href="#clients" class="text-slate-700 hover:text-[#1ca0d8] transition font-medium">{{ __('Clients') }}</a>
                <a href="#contact" class="text-slate-700 hover:text-[#2bb673] transition font-medium">{{ __('Contact') }}</a>
            </div>
        </div>

        <!-- Right side: language switcher + mobile button -->
        <div class="flex items-center space-x-4">
            <div class="flex items-center">
                @if(app()->getLocale() == 'en')
                    <a href="{{ route('language.switch', 'ar') }}"
                       class="px-4 py-2 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] text-white rounded-full text-sm font-semibold shadow-md hover:shadow-lg transition-all">
                        العربية
                    </a>
                @else
                    <a href="{{ route('language.switch', 'en') }}"
                       class="px-4 py-2 bg-gradient-to-r from-[#2bb673] to-[#1ca0d8] text-white rounded-full text-sm font-semibold shadow-md hover:shadow-lg transition-all">
                        English
                    </a>
                @endif
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobileMenuBtn" class="p-2 bg-white/30 backdrop-blur-sm rounded-lg border border-white/40 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu (glassmorphism style) -->
    <div id="mobileMenu" class="hidden md:hidden bg-white/20 backdrop-blur-md border-t border-white/40 shadow-lg">
        <div class="px-6 pt-4 pb-6 flex flex-col space-y-4 text-slate-700">
            <a href="/" class="hover:text-[#1ca0d8] transition font-medium">{{ __('Home') }}</a>
            <a href="{{route('projects')}}" class="hover:text-[#1ca0d8] transition font-medium">{{ __('Projects') }}</a>
            <a href="#clients" class="hover:text-[#1ca0d8] transition font-medium">{{ __('Clients') }}</a>
            <a href="#contact" class="hover:text-[#2bb673] transition font-medium">{{ __('Contact') }}</a>

            <!-- Language Switcher for Mobile (glass button) -->
            <div class="pt-4">
                @if(app()->getLocale() == 'en')
                    <a href="{{ route('language.switch', 'ar') }}"
                       class="block w-full text-center px-4 py-2 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] text-white rounded-full text-sm font-semibold shadow-md">
                        العربية
                    </a>
                @else
                    <a href="{{ route('language.switch', 'en') }}"
                       class="block w-full text-center px-4 py-2 bg-gradient-to-r from-[#2bb673] to-[#1ca0d8] text-white rounded-full text-sm font-semibold shadow-md">
                        English
                    </a>
                @endif
            </div>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('mobileMenuBtn');
        const menu = document.getElementById('mobileMenu');

        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    });
</script>
