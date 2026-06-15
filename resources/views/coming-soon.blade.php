@extends('layouts.app')

@section('title', 'Piware Endless Technology - Coming Soon')

@section('content')
    <div class="flex items-center justify-center p-4 min-h-screen bg-gray-950">
        <!-- Animated Orbs -->
        <div class="orb absolute rounded-full blur-[60px] z-[-1] w-[300px] h-[300px] bg-blue-500/40 top-[10%] left-[10%] animate-move-orb"></div>
        <div class="orb absolute rounded-full blur-[60px] z-[-1] w-[400px] h-[400px] bg-green-500/40 bottom-[5%] right-[10%] animate-move-orb-alt"></div>

        <div class="bg-gray-900/70 backdrop-blur-xl border border-gray-700/50 rounded-2xl p-8 md:p-12 w-full max-w-3xl relative overflow-hidden shadow-xl">

            <!-- Animated logos in background -->
            <img src="{{ asset('logo.png') }}" class="background-logo-animated logo-1" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="background-logo-animated logo-2" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="background-logo-animated logo-3" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="background-logo-animated logo-4" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="background-logo-animated logo-5" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="background-logo-animated logo-6" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="background-logo-animated logo-7" alt="Piware logo animated">

            <!-- Content Section -->
            <div class="relative z-10 text-center">
                <div class="mx-auto mb-10 w-56 h-20 flex items-center justify-center text-white font-bold text-xl tracking-wide">
                    <div class="rounded-xl flex items-center justify-center text-white font-bold text-xl tracking-wide">
                        <img src="{{ asset('logo.png') }}" alt="Piware Logo" class="w-full max-w-[180px]">
                    </div>
                </div>

                <h2 class="text-xl text-white md:text-2xl my-6 font-light mb-2">Endless Technology</h2>

                <!-- Code styled block -->
                <div class="mx-auto mb-6 text-left font-mono bg-gray-900 p-4 rounded-lg border border-gray-700 w-full max-w-full overflow-x-auto">
                    <div class="flex flex-nowrap sm:flex-nowrap">
                        <!-- Line numbers -->
                        <div class="text-right pr-4 select-none text-gray-500 shrink-0">
                            <div class="text-xs sm:text-sm md:text-base">1</div>
                            <div class="text-xs sm:text-sm md:text-base">2</div>
                        </div>

                        <!-- Code lines -->
                        <div class="overflow-hidden typing-container flex-grow min-w-0">
                            <div class="text-blue-400 line-1 text-[10px] xs:text-xs sm:text-sm md:text-base">
                                # We are preparing something amazing for you.
                            </div>
                            <div class="text-green-400 line-2 text-[10px] xs:text-xs sm:text-sm md:text-base">
                                # Stay tuned for something big! ❤️
                            </div>
                        </div>


                    </div>
                </div>


                <!-- Coming Soon text -->
                <p class="text-white  text-3xl mb-8">🚀 Coming Soon...</p>

                <!-- Social Media Links -->
                <div class="flex justify-center gap-6 text-gray-400">
                    <a href="https://x.com/Piware_tech?t=27z71z6KlpPol9dOMLVqlg&s=08" target="_blank" class="hover:text-blue-400 transition-colors">
                        <i class="fab fa-x-twitter text-2xl"></i>
                    </a>
                    <a href="https://www.facebook.com/share/1F8gChSDzb/" target="_blank" class="hover:text-blue-600 transition-colors">
                        <i class="fab fa-facebook text-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/piware.tech?igsh=MTVnemg3a203YzJmYg==" target="_blank" class="hover:text-pink-500 transition-colors">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/pi-ware-170370361?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="hover:text-blue-500 transition-colors">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
