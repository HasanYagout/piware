@extends('layouts.app')

@section('content')

    <section class="relative overflow-hidden bg-[#edf2f7]">
        <!-- Spacer to prevent navbar overlap -->
        <div class="h-20 lg:h-24"></div>

        <!-- Scattered Gradient Shapes (unchanged) -->
        <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full blur-3xl" style="background:linear-gradient(135deg, rgba(28,160,216,0.5), rgba(43,182,115,0.4));"></div>
        <div class="absolute -top-20 -right-20 w-[450px] h-[450px] rounded-full blur-3xl" style="background:linear-gradient(225deg, rgba(28,160,216,0.45), rgba(43,182,115,0.35));"></div>
        <div class="absolute top-1/3 -left-24 w-[300px] h-[300px] rounded-full blur-3xl" style="background:linear-gradient(135deg, rgba(43,182,115,0.5), rgba(28,160,216,0.4));"></div>
        <div class="absolute top-1/2 -right-28 w-[500px] h-[500px] rounded-full blur-3xl" style="background:linear-gradient(200deg, rgba(28,160,216,0.5), rgba(43,182,115,0.3));"></div>
        <div class="absolute -bottom-32 -left-20 w-[550px] h-[550px] rounded-full blur-3xl" style="background:linear-gradient(45deg, rgba(43,182,115,0.5), rgba(28,160,216,0.4));"></div>
        <div class="absolute -bottom-48 -right-48 w-[700px] h-[700px] rounded-full blur-3xl" style="background:linear-gradient(160deg, rgba(28,160,216,0.6), rgba(43,182,115,0.5));"></div>
        <div class="absolute top-10 left-1/3 w-[200px] h-[200px] rounded-full blur-3xl" style="background:linear-gradient(90deg, rgba(28,160,216,0.4), rgba(43,182,115,0.3));"></div>
        <div class="absolute bottom-20 left-2/3 w-[350px] h-[350px] rounded-full blur-3xl" style="background:linear-gradient(270deg, rgba(43,182,115,0.45), rgba(28,160,216,0.35));"></div>

        <!-- Main Glass Container with enhanced shadow and border -->
        <div class="relative z-10 min-h-screen p-5">
            <div class="min-h-[95vh] bg-white/20 backdrop-blur-[40px] border border-white/60 rounded-[40px] shadow-2xl shadow-slate-300/50">
                <!-- ↑ Added shadow-2xl + border-white/60 ↑ -->

                <!-- Hero Section -->
                <div class="px-8 lg:px-20 pt-12 lg:pt-20 pb-20">
                    <div class="max-w-5xl">
                        <div class="inline-flex items-center gap-2 bg-transparent border border-white/50 backdrop-blur-xl rounded-full px-4 py-2 shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                            <span class="text-sm text-slate-700">Software Development • ERP • Web Applications</span>
                        </div>
                        <h1 class="mt-8 text-6xl lg:text-8xl font-bold leading-[0.95]">
                            Building
                            <span class="block bg-gradient-to-r h-27 from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">Digital Products</span>
                            That Businesses Actually Use
                        </h1>
                        <p class="mt-8 max-w-3xl text-xl text-slate-600 leading-relaxed">
                            We design and develop business systems, enterprise applications, portals, dashboards,
                            and digital platforms that help organizations streamline operations and scale efficiently.
                        </p>
                        <div class="flex flex-wrap gap-4 mt-12">
                            <a href="#contact" class="px-8 py-4 rounded-2xl text-white bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] shadow-lg hover:shadow-xl transition-shadow">Start a Project</a>
                            <a href="#portfolio" class="px-8 py-4 rounded-2xl bg-white/30 border border-white/50 backdrop-blur-xl shadow-md hover:shadow-lg transition-shadow">View Our Work</a>
                        </div>
                    </div>
                </div>

                <!-- PROJECTS SECTION -->
                <div id="portfolio" class="px-8 lg:px-20 py-20 border-t border-white/30">
                    <div class="text-center mb-16">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">Portfolio</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">Featured Projects</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto mt-4">Real solutions we’ve built for real businesses</p>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($projects as $project)
                            <!-- Project Card with shadow and border -->
                            <a href="{{$project->type=='gallery'?route('project.view',['slug'=>$project->slug]):$project->url}}">
                            <div class="group bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 overflow-hidden hover:bg-white/20 transition-all shadow-xl hover:shadow-2xl">


                                <div class="p-6 relative before:content-[''] before:absolute before:inset-x-0 before:top-0 before:h-1 before:bg-gradient-to-r before:from-[#1ca0d8] before:to-[#2bb673] before:rounded-t-lg">
                                    <h3 class="text-2xl font-bold">{{$project->title}}</h3>
                                    <p class="text-slate-600 mt-2">{!! $project->description !!}</p>
                                    <div class="flex flex-wrap gap-2 mt-4">
                                        @foreach($project->technologies as $technology)
                                        <span class="text-xs bg-white/30 px-3 py-1 rounded-full border border-white/30">{{$technology}}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            </a>
                        @endforeach

                    </div>
                </div>

                <!-- SERVICES SECTION -->
                <div id="services" class="px-8 lg:px-20 py-20 border-t border-white/30">
                    <div class="text-center mb-16">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">What we do</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">Our Services</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto mt-4">End‑to‑end development for modern businesses</p>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Service cards with shadow + border -->
                        <div class="p-8 rounded-3xl bg-white/10 backdrop-blur-md border border-white/50 text-center shadow-lg hover:shadow-xl transition-all">
                            <div class="text-5xl mb-4">💻</div>
                            <h3 class="font-bold text-xl">Custom Web Apps</h3>
                            <p class="text-slate-600 mt-2">Tailored portals, dashboards, and internal tools.</p>
                        </div>
                        <div class="p-8 rounded-3xl bg-white/10 backdrop-blur-md border border-white/50 text-center shadow-lg hover:shadow-xl transition-all">
                            <div class="text-5xl mb-4">⚙️</div>
                            <h3 class="font-bold text-xl">ERP & Business Systems</h3>
                            <p class="text-slate-600 mt-2">Integrate finance, HR, inventory, CRM.</p>
                        </div>
                        <div class="p-8 rounded-3xl bg-white/10 backdrop-blur-md border border-white/50 text-center shadow-lg hover:shadow-xl transition-all">
                            <div class="text-5xl mb-4">📱</div>
                            <h3 class="font-bold text-xl">Mobile Apps</h3>
                            <p class="text-slate-600 mt-2">iOS/Android with modern cross‑platform stacks.</p>
                        </div>
                        <div class="p-8 rounded-3xl bg-white/10 backdrop-blur-md border border-white/50 text-center shadow-lg hover:shadow-xl transition-all">
                            <div class="text-5xl mb-4">☁️</div>
                            <h3 class="font-bold text-xl">Cloud & DevOps</h3>
                            <p class="text-slate-600 mt-2">Scalable AWS/Azure deployments, CI/CD pipelines.</p>
                        </div>
                    </div>
                </div>

                <!-- CLIENTS SECTION -->
                <div class="px-8 lg:px-20 py-20 border-t border-white/30">
                    <div class="text-center mb-16">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">Trusted by</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">Our Clients</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto mt-4">Companies that grow with us</p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-12 opacity-70">
                        <!-- Client logos with shadow and border -->
                        <div class="text-3xl font-semibold text-slate-500 bg-white/20 backdrop-blur-sm px-6 py-3 rounded-2xl border border-white/40 shadow-md">TechCorp</div>
                        <div class="text-3xl font-semibold text-slate-500 bg-white/20 backdrop-blur-sm px-6 py-3 rounded-2xl border border-white/40 shadow-md">GreenLeaf</div>
                        <div class="text-3xl font-semibold text-slate-500 bg-white/20 backdrop-blur-sm px-6 py-3 rounded-2xl border border-white/40 shadow-md">FinScale</div>
                        <div class="text-3xl font-semibold text-slate-500 bg-white/20 backdrop-blur-sm px-6 py-3 rounded-2xl border border-white/40 shadow-md">MediChain</div>
                        <div class="text-3xl font-semibold text-slate-500 bg-white/20 backdrop-blur-sm px-6 py-3 rounded-2xl border border-white/40 shadow-md">LogiNext</div>
                    </div>
                    <!-- Testimonial with shadow and border -->
                    <div class="mt-16 max-w-3xl mx-auto text-center bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/50 shadow-xl">
                        <svg class="w-10 h-10 text-slate-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">...</svg>
                        <p class="text-lg italic text-slate-700">“Their team rebuilt our entire ERP – user adoption skyrocketed. True glassmorphism design too!”</p>
                        <p class="font-semibold mt-4">— Sarah Chen, COO at FinScale</p>
                    </div>
                </div>

                <!-- BLOG SECTION -->
                <div id="blog" class="px-8 lg:px-20 py-20 border-t border-white/30">
                    <div class="text-center mb-16">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">Insights</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">Latest from our blog</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto mt-4">Tips, trends, and deep dives into web development</p>
                    </div>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Blog cards with shadow and border -->
                        <div class="bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 overflow-hidden shadow-lg hover:shadow-xl transition-all">
                            <div class="p-6">
                                <div class="text-sm text-[#1ca0d8] font-semibold">Technology</div>
                                <h3 class="text-xl font-bold mt-2">Why Glassmorphism is taking over UI design</h3>
                                <p class="text-slate-600 mt-2">Explore the trend that blends transparency, blur, and vibrant backgrounds.</p>
                                <div class="mt-4 flex items-center gap-2 text-sm text-slate-500">
                                    <span>June 15, 2026</span> • <span>5 min read</span>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card 2 -->
                        <div class="bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 overflow-hidden shadow-lg hover:shadow-xl transition-all">
                            <div class="p-6">
                                <div class="text-sm text-[#2bb673] font-semibold">Development</div>
                                <h3 class="text-xl font-bold mt-2">Scaling Laravel apps with Redis queues</h3>
                                <p class="text-slate-600 mt-2">Improve performance and handle background jobs efficiently.</p>
                                <div class="mt-4 flex items-center gap-2 text-sm text-slate-500">
                                    <span>June 10, 2026</span> • <span>8 min read</span>
                                </div>
                            </div>
                        </div>
                        <!-- Blog Card 3 -->
                        <div class="bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 overflow-hidden shadow-lg hover:shadow-xl transition-all">
                            <div class="p-6">
                                <div class="text-sm text-[#1ca0d8] font-semibold">Strategy</div>
                                <h3 class="text-xl font-bold mt-2">ERP vs best‑of‑breed: what's right for you?</h3>
                                <p class="text-slate-600 mt-2">A guide to choosing the right business software ecosystem.</p>
                                <div class="mt-4 flex items-center gap-2 text-sm text-slate-500">
                                    <span>June 5, 2026</span> • <span>6 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12">
                        <a href="#" class="inline-block px-8 py-3 rounded-full bg-white/30 border border-white/50 backdrop-blur-xl shadow-md hover:shadow-lg transition-all">View all posts →</a>
                    </div>
                </div>

                <!-- CONTACT SECTION -->
                <!-- ========== CONTACT SECTION (fixed borders) ========== -->
                <div id="contact" class="px-8 lg:px-20 py-20 border-t border-white/30">
                    <div class="text-center mb-16">
                        <span class="text-sm uppercase tracking-wider text-slate-600 bg-white/30 px-4 py-1 rounded-full">Get in touch</span>
                        <h2 class="text-4xl lg:text-5xl font-bold mt-4 bg-gradient-to-r h-14 from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">Let's work together</h2>
                        <p class="text-slate-600 max-w-2xl mx-auto mt-4">Have a project in mind? We’d love to hear from you.</p>
                    </div>
                    <div class="max-w-5xl mx-auto grid lg:grid-cols-2 gap-12">
                        <!-- Contact Form with visible borders -->
                        <div class="bg-white/10  backdrop-blur-md rounded-3xl border border-white/50 p-8 shadow-xl">

                            <form action="#" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-slate-700">Full name</label>
                                    <input type="text" name="name"
                                           class="w-full mt-1 px-4 py-3 rounded-xl
                                  bg-white/40
                                  border border-gray-300
                                  focus:border-[#1ca0d8] focus:ring-2 focus:ring-[#1ca0d8]/50
                                  shadow-sm">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-slate-700">Email address</label>
                                    <input type="email" name="email"
                                           class="w-full mt-1 px-4 py-3 rounded-xl
                                  bg-white/40
                                  border border-gray-300
                                  focus:border-[#1ca0d8] focus:ring-2 focus:ring-[#1ca0d8]/50
                                  shadow-sm">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-sm font-medium text-slate-700">Project type</label>
                                    <select name="type"
                                            class="w-full mt-1 px-4 py-3 rounded-xl
                                   bg-white/40
                                   border border-gray-300
                                   focus:border-[#1ca0d8] focus:ring-2 focus:ring-[#1ca0d8]/50">
                                        <option>Web Application</option>
                                        <option>ERP System</option>
                                        <option>Mobile App</option>
                                        <option>Cloud / DevOps</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                <div class="mb-6">
                                    <label class="block text-sm font-medium text-slate-700">Message</label>
                                    <textarea rows="4" name="message"
                                              class="w-full mt-1 px-4 py-3 rounded-xl
                                     bg-white/40
                                     border border-gray-300
                                     focus:border-[#1ca0d8] focus:ring-2 focus:ring-[#1ca0d8]/50
                                     shadow-sm"></textarea>
                                </div>
                                <button type="submit"
                                        class="w-full py-3 rounded-xl text-white
                               bg-gradient-to-r from-[#1ca0d8] to-[#2bb673]
                               font-semibold shadow-md hover:shadow-lg transition-all">
                                    Send Message
                                </button>
                            </form>
                        </div>
                        <!-- Contact Info Cards (unchanged) -->
                        <div class="space-y-6">
                            <div class="bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 p-8 shadow-xl">

                                <h3 class="text-2xl font-bold">Let’s talk</h3>
                                <p class="text-slate-600 mt-2">We typically reply within 24 hours.</p>
                                <ul class="mt-6 space-y-4">
                                    <li class="flex items-center gap-3">📧 hello@digitalproducts.dev</li>
                                    <li class="flex items-center gap-3">📞 +1 (555) 123-4567</li>
                                    <li class="flex items-center gap-3">📍 123 Innovation Drive, Tech Valley, CA</li>
                                </ul>
                            </div>
                            <div class="bg-white/10 backdrop-blur-md rounded-3xl border border-white/50 p-8 shadow-xl">

                                <h3 class="text-xl font-bold">Follow us</h3>
                                <div class="flex gap-4 mt-4 text-2xl">
                                    <a href="#" class="hover:text-[#1ca0d8] transition-colors">🐦</a>
                                    <a href="#" class="hover:text-[#1ca0d8] transition-colors">💼</a>
                                    <a href="#" class="hover:text-[#1ca0d8] transition-colors">📘</a>
                                    <a href="#" class="hover:text-[#1ca0d8] transition-colors">📷</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- end glass container -->
        </div> <!-- end relative container -->
    </section>

@endsection
