@extends('layouts.app')

@section('content')
    <section class="relative overflow-hidden bg-[#edf2f7] min-h-screen">
        <!-- Simplified gradient shapes (fewer, softer) -->
        <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full blur-3xl opacity-40" style="background:linear-gradient(135deg, rgba(43,182,115,0.4), rgba(28,160,216,0.3));"></div>
        <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full blur-3xl opacity-40" style="background:linear-gradient(135deg, rgba(43,182,115,0.4), rgba(28,160,216,0.3));"></div>
        <div class="absolute -bottom-48 -right-48 w-[700px] h-[700px] rounded-full blur-3xl opacity-40" style="background:linear-gradient(160deg, rgba(28,160,216,0.5), rgba(43,182,115,0.4));"></div>
        <div class="absolute -bottom-48 -right-48 w-[700px] h-[700px] rounded-full blur-3xl opacity-40" style="background:linear-gradient(160deg, rgba(28,160,216,0.5), rgba(43,182,115,0.4));"></div>

        <div class="relative z-10 min-h-screen p-5 pt-24">
            <div class="max-w-6xl mx-auto">
                <!-- Back button -->
                <div class="mb-6">
                    <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-4 py-2 bg-white/40 backdrop-blur-sm rounded-full border border-white/50 text-slate-700 shadow-sm hover:shadow-md hover:bg-white/60 transition">
                        ← Back to Home
                    </a>
                </div>

                <!-- Project Card (enhanced visibility) -->
                <div class="bg-white/30 backdrop-blur-[40px] border border-white/70 rounded-[40px] shadow-2xl shadow-slate-300/50 overflow-hidden">
                    <!-- Hero Image (fixed height) -->
                    @if($project->image)
                        <div class="w-full h-80 bg-cover bg-center" style="background-image: url('{{ Storage::url($project->image) }}')"></div>
                    @else
                        <div class="w-full h-80 bg-gradient-to-r from-[#2bb673]/30 to-[#1ca0d8]/30"></div>
                    @endif

                    <div class="p-8 lg:p-12">
                        <h1 class="text-4xl lg:text-5xl font-bold text-slate-800">{{ $project->title }}</h1>

                        <!-- Technologies -->
                        @if($project->technologies)
                            <div class="flex flex-wrap gap-2 mt-4">
                                @foreach($project->technologies as $tech)
                                    <span class="px-3 py-1 text-sm bg-white/40 rounded-full border border-white/50 shadow-sm">{{ $tech }}</span>
                                @endforeach
                            </div>
                        @endif

                        <!-- Description -->
                        <div class="mt-6 prose prose-lg max-w-none text-slate-700">
                            {!! $project->description !!}
                        </div>

                        <!-- Action based on type -->
                        <div class="mt-10">
                            @if($project->type === 'url')
                                <a href="{{ $project->url }}" target="_blank" class="inline-block px-8 py-3 rounded-xl bg-gradient-to-r from-[#2bb673] to-[#1ca0d8] text-white font-semibold shadow-lg hover:shadow-xl transition">
                                    Visit Project Website →
                                </a>
                            @elseif($project->type === 'gallery' && $project->images)
                                <div class="space-y-6">
                                    <h2 class="text-2xl font-bold text-slate-800">Project Gallery</h2>
                                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                                        @foreach($project->images as $index => $item)
                                            <div class="bg-white/20 backdrop-blur-sm rounded-2xl border border-white/60 overflow-hidden cursor-pointer hover:scale-105 transition shadow-md hover:shadow-xl" onclick="openLightbox({{ $index }})">
                                                <img src="{{ Storage::url($item['image']) }}" class="w-full h-56 object-cover" alt="Gallery image">
                                                @if(!empty($item['description']))
                                                    <div class="p-3 text-center text-sm text-slate-700 bg-white/30">{{ $item['description'] }}</div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal with consistent glassmorphism -->
    <div id="lightbox" class="fixed inset-0 bg-black/70 backdrop-blur-md z-50 hidden items-center justify-center p-4" onclick="closeLightbox()">
        <div class="relative max-w-5xl w-full bg-white/20 backdrop-blur-xl rounded-3xl border border-white/60 p-6 shadow-2xl" onclick="event.stopPropagation()">
            <button onclick="closeLightbox()" class="absolute top-4 right-6 text-white text-4xl hover:text-gray-300">&times;</button>
            <img id="lightboxImage" class="w-full h-auto max-h-[70vh] object-contain rounded-2xl shadow-lg">
            <p id="lightboxDescription" class="mt-4 text-center text-white text-lg italic"></p>
            <div class="flex justify-between items-center mt-6 gap-4">
                <button onclick="prevImage()" class="px-5 py-2 bg-white/30 rounded-full text-white hover:bg-white/50 transition shadow-md">← Previous</button>
                <span id="lightboxCounter" class="text-white text-sm bg-black/30 px-3 py-1 rounded-full"></span>
                <button onclick="nextImage()" class="px-5 py-2 bg-white/30 rounded-full text-white hover:bg-white/50 transition shadow-md">Next →</button>
            </div>
        </div>
    </div>

    <script>
        let galleryItems = @json($project->type === 'gallery' ? $project->images : []);
        let currentIndex = 0;

        function openLightbox(index) {
            currentIndex = index;
            updateLightbox();
            document.getElementById('lightbox').classList.remove('hidden');
            document.getElementById('lightbox').style.display = 'flex';
        }

        function updateLightbox() {
            const item = galleryItems[currentIndex];
            document.getElementById('lightboxImage').src = item.image ? '{{ Storage::url('') }}' + item.image : '';
            document.getElementById('lightboxDescription').innerText = item.description || 'No description';
            document.getElementById('lightboxCounter').innerText = `${currentIndex+1} / ${galleryItems.length}`;
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.add('hidden');
        }

        function prevImage() {
            if (galleryItems.length) {
                currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
                updateLightbox();
            }
        }

        function nextImage() {
            if (galleryItems.length) {
                currentIndex = (currentIndex + 1) % galleryItems.length;
                updateLightbox();
            }
        }
    </script>
@endsection
