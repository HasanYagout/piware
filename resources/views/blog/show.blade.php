@extends('layouts.app')

@section('content')
    <section class="relative bg-[#edf2f7]">
        <div class="relative overflow-hidden">

            <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full blur-3xl" style="background:linear-gradient(135deg, rgba(28,160,216,0.5), rgba(43,182,115,0.4));"></div>
            <div class="absolute -top-20 -right-20 w-[450px] h-[450px] rounded-full blur-3xl" style="background:linear-gradient(225deg, rgba(28,160,216,0.45), rgba(43,182,115,0.35));"></div>
            <div class="absolute top-1/3 -left-24 w-[300px] h-[300px] rounded-full blur-3xl" style="background:linear-gradient(135deg, rgba(43,182,115,0.5), rgba(28,160,216,0.4));"></div>
            <div class="absolute top-1/2 -right-28 w-[500px] h-[500px] rounded-full blur-3xl" style="background:linear-gradient(200deg, rgba(28,160,216,0.5), rgba(43,182,115,0.3));"></div>
            <div class="absolute -bottom-32 -left-20 w-[550px] h-[550px] rounded-full blur-3xl" style="background:linear-gradient(45deg, rgba(43,182,115,0.5), rgba(28,160,216,0.4));"></div>
            <div class="absolute -bottom-48 -right-48 w-[700px] h-[700px] rounded-full blur-3xl" style="background:linear-gradient(160deg, rgba(28,160,216,0.6), rgba(43,182,115,0.5));"></div>
            <div class="absolute top-10 left-1/3 w-[200px] h-[200px] rounded-full blur-3xl" style="background:linear-gradient(90deg, rgba(28,160,216,0.4), rgba(43,182,115,0.3));"></div>
            <div class="absolute bottom-20 left-2/3 w-[350px] h-[350px] rounded-full blur-3xl" style="background:linear-gradient(270deg, rgba(43,182,115,0.45), rgba(28,160,216,0.35));"></div>

            <div class="relative z-10 min-h-screen py-10">
                <div class="max-w-5xl mx-auto bg-white/20 backdrop-blur-[40px] border border-white/60 shadow-2xl shadow-slate-300/50 rounded-[40px] p-8 lg:p-16">

                    <!-- Back Button -->
                    <a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 text-sm text-slate-600 hover:text-[#1ca0d8] transition-colors mb-8 group">
                        <span class="group-hover:-translate-x-1 transition-transform">←</span> Back to Blog
                    </a>

                    <!-- Blog Header -->
                    <div class="mb-12" data-aos="fade-up">
                        <div class="flex flex-wrap items-center gap-3 mb-4">
                            <span class="text-sm text-[#1ca0d8] font-semibold bg-[#1ca0d8]/10 px-4 py-1 rounded-full">{{ $post->category }}</span>
                            <span class="text-sm text-slate-500">•</span>
                            <span class="text-sm text-slate-500">{{ $post->formatted_date }}</span>
                            <span class="text-sm text-slate-500">•</span>
                            <span class="text-sm text-slate-500">{{ $post->reading_time }}</span>
                        </div>
                        <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-[1.1] text-slate-800">{{ $post->title }}</h1>
                        @if($post->excerpt)
                            <p class="mt-6 text-xl text-slate-600 leading-relaxed max-w-3xl">{{ $post->excerpt }}</p>
                        @endif
                        <div class="flex items-center gap-4 mt-8">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] flex items-center justify-center text-white text-xl font-bold">PW</div>
                                <div>
                                    <p class="font-semibold text-slate-800">PiWare Team</p>
                                    <p class="text-sm text-slate-500">Development Team</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Image -->
                    @if($post->featured_image)
                        <div class="mb-12 rounded-3xl overflow-hidden border border-white/50">

                            <img src="{{ Storage::url($post->featured_image) }}" alt="{{ $post->title }}" class="w-full">
                        </div>
                    @else
                        <div class="mb-12 rounded-3xl overflow-hidden bg-gradient-to-r from-[#1ca0d8]/10 to-[#2bb673]/10 border border-white/50 p-12 text-center">
                            <div class="text-7xl mb-4">🖐️</div>
                            <p class="text-slate-500 text-sm">Featured image placeholder</p>
                        </div>
                    @endif

                    <!-- Dynamic Sections -->
                    <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        @foreach($post->sections as $section)
                            @switch($section['type'])
                                @case('heading')
                                    <h2 class="text-2xl font-bold text-slate-800 mt-8">{{ $section['title'] ?? '' }}</h2>
                                    @break

                                @case('paragraph')
                                    <div class="text-slate-600 leading-relaxed">{!! $section['content'] !!}</div>
                                    @break

                                @case('list')
                                    <ul class="list-disc pl-6 text-slate-600 space-y-2">
                                        @foreach(explode("\n", $section['items'] ?? '') as $item)
                                            @if(trim($item))
                                                <li>{!! $item !!}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    @break

                                @case('numbered_list')
                                    <ol class="list-decimal pl-6 text-slate-600 space-y-2">
                                        @foreach(explode("\n", $section['items'] ?? '') as $item)
                                            @if(trim($item))
                                                <li>{!! $item !!}</li>
                                            @endif
                                        @endforeach
                                    </ol>
                                    @break

                                @case('quote')
                                    <blockquote class="border-l-4 border-[#1ca0d8] pl-6 my-8 text-slate-700 italic">
                                        {!! $section['content'] !!}
                                        @if($section['author'] ?? '')
                                            <footer class="text-sm text-slate-500 mt-2 not-italic">— {{ $section['author'] }}</footer>
                                        @endif
                                    </blockquote>
                                    @break

                                @case('image')
                                    <div class="my-6 rounded-2xl overflow-hidden border border-white/50">
                                        <img src="{{ Storage::url($section['image']) }}" alt="{{ $section['title'] ?? '' }}" class="w-full">
                                    </div>
                                    @break

                                @case('stats')
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 my-6">
                                        @foreach($section['stats'] ?? [] as $stat)
                                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50 text-center">
                                                <div class="text-3xl font-bold bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">{{ $stat['value'] }}</div>
                                                <p class="text-sm text-slate-600 mt-1">{{ $stat['label'] }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    @break

                                @case('feature_cards')
                                @case('grid_3_cards')
                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 my-6">
                                        @foreach($section['cards'] ?? [] as $card)
                                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50">
                                                <div class="text-2xl mb-2">{{ $card['icon'] ?? '📌' }}</div>
                                                <h4 class="font-bold text-slate-800">{{ $card['title'] }}</h4>
                                                <p class="text-sm text-slate-600">{{ $card['description'] }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    @break

                                @case('step_list')
                                    <div class="space-y-6 my-6">
                                        @foreach($section['steps'] ?? [] as $i => $step)
                                            <div class="flex gap-4 items-start">
                                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] flex items-center justify-center text-white font-bold shrink-0 mt-1">{{ $i+1 }}</div>
                                                <div>
                                                    <h4 class="font-bold text-slate-800">{{ $step['title'] }}</h4>
                                                    <p class="text-slate-600">{{ $step['description'] }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    @break

                                @case('tech_chips')
                                    <div class="flex flex-wrap gap-3 my-4">
                                        @foreach(explode(',', $section['tech_items'] ?? '') as $tech)
                                            @if(trim($tech))
                                                <span class="px-4 py-2 bg-white/40 rounded-full border border-white/50 text-sm font-medium text-slate-700">{{ trim($tech) }}</span>
                                            @endif
                                        @endforeach
                                    </div>
                                    @break

                                @case('two_column_cards')
                                    <div class="grid md:grid-cols-2 gap-4 my-6">
                                        @foreach($section['cards'] ?? [] as $card)
                                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50">
                                                <div class="text-2xl mb-2">{{ $card['icon'] ?? '📌' }}</div>
                                                <h4 class="font-bold text-slate-800">{{ $card['title'] }}</h4>
                                                <p class="text-sm text-slate-600">{{ $card['description'] }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                    @break

                                @default
                                    <!-- fallback: treat as raw HTML if needed -->
                                    <div>{!! $section['content'] ?? '' !!}</div>
                            @endswitch
                        @endforeach
                    </div>

                    <!-- Tags & Share Icons -->
                    <div class="mt-8 pt-8 border-t border-white/30">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <!-- Tags (left) -->
                            @if($post->tags)
                                <div class="flex flex-wrap gap-3">
                                    @foreach(explode(',', $post->tags) as $tag)
                                        <span class="px-4 py-2 bg-white/30 rounded-full border border-white/50 text-sm text-slate-600">#{{ trim($tag) }}</span>
                                    @endforeach
                                </div>
                            @endif

                            <!-- Social Icons (right) -->
                            <div class="flex gap-3">
                                {{-- X (Twitter) --}}
                                <a href="#" class="p-3 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-[#000000] hover:text-[#1ca0d8] hover:scale-110 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                    </svg>
                                </a>

                                {{-- LinkedIn --}}
                                <a href="#" class="p-3 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-[#0A66C2] hover:text-[#0A66C2] hover:scale-110 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                </a>

                                {{-- Facebook --}}
                                <a href="#" class="p-3 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-[#1877F2] hover:text-[#1877F2] hover:scale-110 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                    </svg>
                                </a>

                                {{-- Instagram --}}
                                <a href="#" class="p-3 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-[#E4405F] hover:text-[#E4405F] hover:scale-110 transition-all duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
