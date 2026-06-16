@extends('layouts.app')

@section('content')

    <section class="relative overflow-hidden bg-[#1a3047]">

        <!-- Background Blobs -->
        <div class="absolute -left-52 -top-20 w-[750px] h-[750px] rounded-full blur-3xl"
             style="background:linear-gradient(135deg, rgba(28,160,216,.55), rgba(43,182,115,.44));"></div>

        <div class="absolute -right-52 bottom-0 w-[700px] h-[700px] rounded-full blur-3xl"
             style="background:linear-gradient(135deg, rgba(43,182,115,.40), rgba(28,160,216,.35));"></div>

        <div class="absolute -right-52 bottom-0 w-[700px] h-[700px] rounded-full blur-3xl"
             style="background:linear-gradient(135deg, rgba(43,182,115,.40), rgba(28,160,216,.35));"></div>
        <div class="absolute -left-52 bottom-0 w-[750px] h-[750px] rounded-full blur-3xl"
             style="background:linear-gradient(135deg, rgba(28,160,216,.55), rgba(43,182,115,.44));"></div>
        <div class="relative z-10 min-h-screen p-5">

            <div class="bg-white/10 backdrop-blur-[40px] border border-white/40 rounded-[40px]">

                <div class="px-8 lg:px-20 pt-16 pb-24">

                    <!-- ================= HERO ================= -->
                    <div class="max-w-5xl">

                        <div class="inline-flex items-center gap-2  border border-white/50 backdrop-blur-xl rounded-full px-4 py-2">
                            <span class="w-2 h-2 rounded-full bg-green-500"></span>
                            <span class="text-sm ">
                            Software Development • ERP • Web Applications
                        </span>
                        </div>

                        <h1 class="mt-8 text-6xl text-white lg:text-8xl font-bold leading-[0.95] ">
                            Building
                            <span class="block bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">
                            Digital Products
                        </span>
                            That Businesses Actually Use
                        </h1>

                        <p class="mt-8 max-w-3xl text-xl text-gray-200 leading-relaxed">
                            We design and develop enterprise systems, dashboards, portals, and scalable platforms
                            that help organizations automate operations and grow efficiently.
                        </p>

                        <div class="flex flex-wrap gap-4 mt-10">
                            <a href="#contact"
                               class="px-8 py-4 rounded-2xl text-white font-semibold border-2 shadow-lg hover:scale-105 transition">
                                Start a Project
                            </a>

                            <a href="#projects"
                               class="px-8 py-4 rounded-2xl bg-[#1ca0d8] backdrop-blur-xl hover:scale-105 transition">
                                View Projects
                            </a>
                        </div>

                    </div>

                    <!-- ================= SERVICES ================= -->
                    <div id="services" class="mt-28">

                        <h2 class="text-4xl font-bold ">Our Services</h2>
                        <p class="mt-3 text-slate-600">We deliver complete digital solutions for modern businesses.</p>

                        <div class="grid lg:grid-cols-3 gap-6 mt-10">

                            <div class="p-8 rounded-3xl bg-white/30 backdrop-blur-xl border border-white/40 hover:-translate-y-2 transition shadow-md">
                                <div class="text-4xl mb-4">🧠</div>
                                <h3 class="text-xl font-semibold">Custom Software</h3>
                                <p class="mt-2 text-slate-600">
                                    Tailored systems built around your business workflow and needs.
                                </p>
                            </div>

                            <div class="p-8 rounded-3xl bg-white/30 backdrop-blur-xl border border-white/40 hover:-translate-y-2 transition shadow-md">
                                <div class="text-4xl mb-4">🏢</div>
                                <h3 class="text-xl font-semibold">ERP & CRM</h3>
                                <p class="mt-2 text-slate-600">
                                    Manage operations, HR, finance, and customers in one system.
                                </p>
                            </div>

                            <div class="p-8 rounded-3xl bg-white/30 backdrop-blur-xl border border-white/40 hover:-translate-y-2 transition shadow-md">
                                <div class="text-4xl mb-4">⚡</div>
                                <h3 class="text-xl font-semibold">System Optimization</h3>
                                <p class="mt-2 text-slate-600">
                                    Improve speed, scalability, and performance of your platform.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- ================= PROJECTS ================= -->
                    <div id="projects" class="mt-28">

                        <h2 class="text-4xl font-bold ">Featured Projects</h2>
                        <p class="mt-3 text-slate-600">Some of our recent work and platforms.</p>

                        <div class="grid lg:grid-cols-3 gap-6 mt-10">

                            <!-- CARD 1 -->
                            <div class="rounded-3xl overflow-hidden bg-white/30 backdrop-blur-xl border border-white/40
                    shadow-[0_10px_30px_rgba(0,0,0,0.08)]
                    hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]
                    hover:-translate-y-2 transition-all duration-300">

                                <div class="p-6 border-t-4 border-[#0f5b54]">
                                    <h3 class="text-xl font-semibold">ERP Management System</h3>
                                    <p class="text-slate-600 mt-2 text-sm">
                                        Full enterprise system for operations and reporting.
                                    </p>
                                </div>

                            </div>

                            <!-- CARD 2 -->
                            <div class="rounded-3xl overflow-hidden bg-white/30 backdrop-blur-xl border border-white/40
                    shadow-[0_10px_30px_rgba(0,0,0,0.08)]
                    hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]
                    hover:-translate-y-2 transition-all duration-300">

                                <div class="p-6 border-t-4 border-[#2bb673]">
                                    <h3 class="text-xl font-semibold">Job Portal Platform</h3>
                                    <p class="text-slate-600 mt-2 text-sm">
                                        Recruitment platform connecting companies and candidates.
                                    </p>
                                </div>

                            </div>

                            <!-- CARD 3 -->
                            <div class="rounded-3xl overflow-hidden bg-white/30 backdrop-blur-xl border border-white/40
                    shadow-[0_10px_30px_rgba(0,0,0,0.08)]
                    hover:shadow-[0_20px_50px_rgba(0,0,0,0.15)]
                    hover:-translate-y-2 transition-all duration-300">

                                <div class="p-6 border-t-4 border-[#1ca0d8]">
                                    <h3 class="text-xl font-semibold">Community Platform</h3>
                                    <p class="text-slate-600 mt-2 text-sm">
                                        Engagement system for automotive communities.
                                    </p>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- ================= CONTACT ================= -->
                    <div id="contact" class="mt-28">

                        <div class="grid lg:grid-cols-2 gap-12 items-start">

                            <div>
                                <h2 class="text-4xl font-bold ">Let’s Build Something</h2>
                                <p class="mt-4 text-slate-600 leading-relaxed">
                                    Have an idea or project? We help businesses turn ideas into scalable systems.
                                </p>

                                <div class="mt-6  space-y-2">
                                    <div>📧 contact@piware.dev</div>
                                    <div>📞 +967 XXX XXX XXX</div>
                                    <div>🌍 Remote / Enterprise Projects</div>
                                </div>
                            </div>

                            <div class="p-8 rounded-3xl bg-white/30 backdrop-blur-xl border border-white/40">

                                <form class="space-y-4">

                                    <input type="text" placeholder="Your Name"
                                           class="w-full p-4 rounded-xl bg-white/40 border border-white/50 outline-none">

                                    <input type="email" placeholder="Your Email"
                                           class="w-full p-4 rounded-xl bg-white/40 border border-white/50 outline-none">

                                    <textarea placeholder="Your Message"
                                              class="w-full p-4 h-32 rounded-xl bg-white/40 border border-white/50 outline-none"></textarea>

                                    <button class="w-full py-4 rounded-xl text-white font-semibold
                                    bg-gradient-to-r from-[#1ca0d8] to-[#2bb673]
                                    hover:scale-[1.02] transition">
                                        Send Message
                                    </button>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>

@endsection
