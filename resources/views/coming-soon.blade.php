@extends('layouts.app')

@section('title', 'Piware Endless Technology - Coming Soon')

@section('content')
    <div class="flex items-center justify-center p-4 min-h-screen bg-gray-950">
        <!-- Animated Orbs -->
        <div class="orb absolute rounded-full blur-[60px] z-[-1] w-[300px] h-[300px] bg-blue-500/40 top-[10%] left-[10%] animate-move-orb"></div>
        <div class="orb absolute rounded-full blur-[60px] z-[-1] w-[400px] h-[400px] bg-green-500/40 bottom-[5%] right-[10%] animate-move-orb-alt"></div>

        <div class="bg-gray-900/70 backdrop-blur-xl border border-gray-700/50 rounded-2xl p-8 md:p-12 w-full max-w-3xl relative overflow-hidden shadow-xl"  >
            <!-- Animated logos in background -->
            <img src="{{ asset('logo.png') }}" class="absolute z-[-1] opacity-10 animate-floating top-[10%] left-[5%] w-10" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="absolute z-[-1] opacity-10 animate-floating-delayed top-[40%] right-[15%] w-6" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="absolute z-[-1] opacity-10 animate-floating bottom-[20%] left-[25%] w-12" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="absolute z-[-1] opacity-10 animate-floating-delayed top-[60%] left-1/2 w-9" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="absolute z-[-1] opacity-10 animate-floating bottom-[10%] right-[40%] w-14" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="absolute z-[-1] opacity-10 animate-floating-delayed top-[25%] left-[70%] w-8" alt="Piware logo animated">
            <img src="{{ asset('logo.png') }}" class="absolute z-[-1] opacity-10 animate-floating bottom-1/2 left-[10%] w-11" alt="Piware logo animated">

            <!-- Content Section -->
            <div class="relative z-10 text-center">
                <div class="mx-auto mb-10 w-56 h-20 flex items-center justify-center text-white font-bold text-xl tracking-wide">
                    <div class="rounded-xl flex items-center justify-center text-white font-bold text-xl tracking-wide">
                        <img src="{{ asset('logo.png') }}" alt="Piware Logo" class="w-full max-w-[180px]">
                    </div>
                </div>

                <h2 class="text-xl md:text-2xl my-6 font-light mb-2">Endless Technology</h2>

                <!-- Code styled block -->
                <div class="mx-auto mb-6 text-left font-mono bg-gray-900 p-4 rounded-lg border border-gray-700 max-w-full">
                    <div class="flex">
                        <div class="text-right pr-4 select-none text-gray-500">
                            <div>1</div>
                            <div>2</div>
                        </div>
                        <div class="overflow-hidden typing-container">
                            <div class="text-blue-400 typing-container line-1"># We are preparing something amazing for you.</div>
                            <div class="text-green-400 typing-container line-2"># Stay tuned for something big! ❤️</div>
                        </div>
                    </div>
                </div>

                <!-- Coming Soon text -->
                <p class="text-white text-3xl mb-8">🚀 Coming Soon...</p>

                <!-- Social Media Links -->
                <div class="flex justify-center gap-6 text-gray-400">
                    <a href="https://twitter.com/yourhandle" target="_blank" class="hover:text-blue-400 transition-colors">
                        <i class="fab fa-x-twitter text-2xl"></i>
                    </a>
                    <a href="https://facebook.com/yourhandle" target="_blank" class="hover:text-blue-600 transition-colors">
                        <i class="fab fa-facebook text-2xl"></i>
                    </a>
                    <a href="https://instagram.com/yourhandle" target="_blank" class="hover:text-pink-500 transition-colors">
                        <i class="fab fa-instagram text-2xl"></i>
                    </a>
                    <a href="https://linkedin.com/in/yourhandle" target="_blank" class="hover:text-blue-500 transition-colors">
                        <i class="fab fa-linkedin text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
