{{-- resources/views/blog/index.blade.php --}}

@extends('layouts.app')

@section('content')

    <section class="relative bg-[#edf2f7]">

        <div class="relative overflow-hidden">

            <!-- Gradient Shapes -->
            <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full blur-3xl" style="background:linear-gradient(135deg, rgba(28,160,216,0.5), rgba(43,182,115,0.4));"></div>
            <div class="absolute -top-20 -right-20 w-[450px] h-[450px] rounded-full blur-3xl" style="background:linear-gradient(225deg, rgba(28,160,216,0.45), rgba(43,182,115,0.35));"></div>
            <div class="absolute -bottom-48 -right-48 w-[700px] h-[700px] rounded-full blur-3xl" style="background:linear-gradient(160deg, rgba(28,160,216,0.6), rgba(43,182,115,0.5));"></div>

            <div class="relative z-10 min-h-screen py-10">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

                    <!-- Blog Header -->
                    <div class="max-w-3xl mx-auto text-center mb-16" data-aos="fade-up" data-aos-duration="800">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">Insights</span>
                        <h1 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">
                            Our Blog
                        </h1>
                        <p class="text-slate-600 mt-4 text-lg">Tips, trends, and deep dives into web development</p>
                    </div>

                    <!-- Categories Filter -->
                    @if($categories->isNotEmpty())
                        <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <a href="{{ route('blog.index') }}"
                               class="px-5 py-2 rounded-full bg-white/30 backdrop-blur-sm border border-white/50 text-sm font-medium text-slate-700 hover:text-[#1ca0d8] hover:bg-white/50 transition-all {{ !request()->routeIs('blog.category') ? 'bg-white/50 text-[#1ca0d8]' : '' }}">
                                All Posts
                            </a>
                            @foreach($categories as $cat)
                                <a href="{{ route('blog.category', $cat) }}"
                                   class="px-5 py-2 rounded-full bg-white/30 backdrop-blur-sm border border-white/50 text-sm font-medium text-slate-700 hover:text-[#1ca0d8] hover:bg-white/50 transition-all {{ request()->route('category') == $cat ? 'bg-white/50 text-[#1ca0d8]' : '' }}">
                                    {{ $cat }}
                                </a>
                            @endforeach
                        </div>
                    @endif

                    <!-- Blog Grid -->
                    @if($posts->isNotEmpty())
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                            @foreach($posts as $index => $post)
                                <a href="{{ route('blog.show', $post->slug) }}"
                                   data-aos="fade-up"
                                   data-aos-duration="800"
                                   data-aos-delay="{{ $index * 100 }}">
                                    <div class="group bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 overflow-hidden hover:bg-white/20 transition-all shadow-xl hover:shadow-2xl h-full flex flex-col">

                                        @if($post->featured_image)
                                            <div class="aspect-video overflow-hidden bg-gradient-to-br from-[#1ca0d8]/10 to-[#2bb673]/10">
                                                <img src="{{ asset('storage/' . $post->featured_image) }}"
                                                     alt="{{ $post->title }}"
                                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                            </div>
                                        @else
                                            <div class="aspect-video bg-gradient-to-br from-[#1ca0d8]/10 to-[#2bb673]/10 flex items-center justify-center text-6xl">
                                                📝
                                            </div>
                                        @endif

                                        <div class="p-6 flex flex-col flex-1">
                                            <div class="flex items-center gap-3 text-xs text-slate-500 mb-3">
                                                <span class="text-[#1ca0d8] font-semibold">{{ $post->category ?? 'Uncategorized' }}</span>
                                                <span>•</span>
                                                <span>{{ $post->formatted_date }}</span>
                                                <span>•</span>
                                                <span>{{ $post->reading_time }}</span>
                                            </div>
                                            <h3 class="text-xl font-bold text-slate-800 group-hover:text-[#1ca0d8] transition-colors line-clamp-2">
                                                {{ $post->title }}
                                            </h3>
                                            <p class="text-slate-600 mt-2 text-sm line-clamp-3 flex-1">
                                                {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 120) }}
                                            </p>
                                            <div class="mt-4 pt-4 border-t border-white/30 flex items-center justify-between">
                                        <span class="text-sm text-[#1ca0d8] font-medium group-hover:translate-x-1 transition-transform inline-block">
                                            Read More →
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="mt-12">
                            {{ $posts->links() }}
                        </div>
                    @else
                        <div class="text-center py-20">
                            <div class="text-6xl mb-4">📝</div>
                            <h3 class="text-2xl font-bold text-slate-700">No posts yet</h3>
                            <p class="text-slate-500 mt-2">Check back soon for new content!</p>
                        </div>
                    @endif

                </div>
            </div>

        </div>

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic',
            });
        });
    </script>

    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

@endsection
