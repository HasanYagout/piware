@extends('layouts.app')

@section('content')
    <section class="relative overflow-hidden bg-[#edf2f7] min-h-screen">
        <!-- Gradient shapes (soft, fewer) -->
        <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full blur-3xl opacity-30" style="background:linear-gradient(135deg, rgba(43,182,115,1), rgba(28,160,216,1));"></div>
        <div class="absolute -bottom-48 -right-48 w-[700px] h-[700px] rounded-full blur-3xl opacity-30" style="background:linear-gradient(160deg, rgba(28,160,216,0.4), rgba(43,182,115,1));"></div>
        <div class="absolute top-1/3 left-1/4 w-80 h-80 rounded-full blur-3xl opacity-20" style="background:linear-gradient(90deg, rgba(43,182,115,1), rgba(28,160,216,1));"></div>

        <div class="relative z-10 min-h-screen p-5 pt-24">
            <div class="max-w-7xl mx-auto">
                <!-- Page Header -->
                <div class="text-center mb-12">
                    <h1 class="text-5xl lg:text-6xl font-bold bg-gradient-to-r from-[#2bb673] to-[#1ca0d8] bg-clip-text text-transparent">
                        Our Blog
                    </h1>
                    <p class="text-slate-600 text-lg mt-4 max-w-2xl mx-auto">
                        Insights, stories and updates from our team
                    </p>
                </div>

                <!-- Main Content + Sidebar -->
                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Blog Posts Grid (main) -->
                    <div class="flex-1">
                        @if($posts->count())
                            <div class="grid md:grid-cols-2 gap-6">
                                @foreach($posts as $post)
                                    <div class="group bg-white/30 backdrop-blur-md rounded-3xl border border-white/60 overflow-hidden shadow-lg hover:shadow-2xl transition-all hover:-translate-y-1">
                                        <!-- Featured Image -->
                                        @if($post->featured_image)
                                            <div class="h-56 bg-cover bg-center" style="background-image: url('{{ Storage::url($post->featured_image) }}')"></div>
                                        @else
                                            <div class="h-56 bg-gradient-to-r from-[#2bb673]/30 to-[#1ca0d8]/30 flex items-center justify-center">
                                                <span class="text-slate-500">No image</span>
                                            </div>
                                        @endif

                                        <div class="p-6">
                                            <!-- Category & Date -->
                                            <div class="flex items-center justify-between text-sm text-slate-500 mb-3">
                                                @if($post->category)
                                                    <span class="px-3 py-1 bg-white/40 rounded-full border border-white/50 text-xs font-semibold text-slate-600">
                                                    {{ $post->category }}
                                                </span>
                                                @endif
                                                <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}</span>
                                            </div>

                                            <!-- Title -->
                                            <h2 class="text-xl font-bold text-slate-800 group-hover:text-[#1ca0d8] transition">
                                                <a href="{{ route('blog.show', $post->slug) }}">
                                                    {{ $post->title }}
                                                </a>
                                            </h2>

                                            <!-- Excerpt -->
                                            <p class="text-slate-600 mt-2 line-clamp-3">
                                                {{ $post->excerpt ?: Str::limit(strip_tags($post->content), 120) }}
                                            </p>

                                            <!-- Read more + read time -->
                                            <div class="flex items-center justify-between mt-4">
                                                <a href="{{ route('blog.show', $post->slug) }}" class="text-sm font-medium text-[#2bb673] hover:text-[#1ca0d8] transition inline-flex items-center gap-1">
                                                    Read More →
                                                </a>
                                                <span class="text-xs text-slate-400">
                                                {{ round(str_word_count(strip_tags($post->content)) / 200) ?: 1 }} min read
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Pagination (glass styled) -->
                            <div class="mt-10">
                                {{ $posts->links() }}
                            </div>
                        @else
                            <div class="bg-white/30 shadow-2xl backdrop-blur-md rounded-3xl border border-white/60 p-10 text-center">
                                <p class="text-slate-600">No blog posts published yet. Check back soon!</p>
                            </div>
                        @endif
                    </div>

                    <!-- Sidebar (optional) -->
                    <div class="lg:w-80 space-y-6">
                        <!-- Search Card -->
                        <div class="bg-white/30 backdrop-blur-md rounded-2xl border border-white/60 p-5 shadow-md">
                            <h3 class="font-bold text-lg text-slate-800 mb-3">Search</h3>
                            <form action="{{ route('blog.index') }}" method="GET" class="flex">
                                <input type="text" name="search" placeholder="Search articles..." value="{{ request('search') }}" class="flex-1 px-4 py-2 bg-white/40 rounded-l-xl border border-white/50 focus:outline-none focus:ring-2 focus:ring-[#1ca0d8]">
                                <button type="submit" class="px-4 py-2 bg-gradient-to-r from-[#2bb673] to-[#1ca0d8] text-white rounded-r-xl shadow-md">Go</button>
                            </form>
                        </div>

                        <!-- Categories Card -->
                        @php
                            $categories = App\Models\BlogPost::where('is_published', true)
                                            ->whereNotNull('category')
                                            ->select('category')
                                            ->distinct()
                                            ->pluck('category');
                        @endphp
                        @if($categories->count())
                            <div class="bg-white/30 backdrop-blur-md rounded-2xl border border-white/60 p-5 shadow-md">
                                <h3 class="font-bold text-lg text-slate-800 mb-3">Categories</h3>
                                <ul class="space-y-2">
                                    @foreach($categories as $cat)
                                        <li>
                                            <a href="{{ route('blog.index', ['category' => $cat]) }}" class="text-slate-600 hover:text-[#1ca0d8] transition flex justify-between">
                                                {{ $cat }}
                                                <span class="text-xs bg-white/40 px-2 py-0.5 rounded-full">
                                                {{ App\Models\BlogPost::where('category', $cat)->where('is_published', true)->count() }}
                                            </span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Recent Posts Card -->
                        @php
                            $recent = App\Models\BlogPost::where('is_published', true)
                                        ->latest('published_at')
                                        ->limit(4)
                                        ->get();
                        @endphp
                        @if($recent->count())
                            <div class="bg-white/30 backdrop-blur-md rounded-2xl border border-white/60 p-5 shadow-md">
                                <h3 class="font-bold text-lg text-slate-800 mb-3">Recent Posts</h3>
                                <ul class="space-y-3">
                                    @foreach($recent as $recentPost)
                                        <li>
                                            <a href="{{ route('blog.show', $recentPost->slug) }}" class="text-slate-700 hover:text-[#1ca0d8] transition text-sm block">
                                                {{ $recentPost->title }}
                                                <span class="text-xs text-slate-400 block">{{ $recentPost->published_at->diffForHumans() }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <style>
        /* Custom pagination glass style */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            flex-wrap: wrap;
        }
        .pagination .page-item .page-link {
            background: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 9999px;
            padding: 0.5rem 1rem;
            color: #1e293b;
            transition: all 0.2s;
        }
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #2bb673, #1ca0d8);
            color: white;
            border-color: transparent;
        }
        .pagination .page-item .page-link:hover {
            background: rgba(255, 255, 255, 0.5);
            transform: scale(1.05);
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endpush
