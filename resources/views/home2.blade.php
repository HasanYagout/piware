







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Piware | Innovative IT Solutions</title>
    <!-- Google Fonts & Tailwind CDN for utility-first styling (lightweight) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome 6 (free icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* -------------------------------
           GLOBAL THEME : MINIMALIST + PROFESSIONAL
           Using declared root color palette
        ------------------------------- */
        :root {
            --color-primary-blue: #1ca0d8;
            --color-primary-green: #2bb673;
            --color-accent-blue: #1d8cc2;
            --color-shadow-teal: #0f5b54;
            --color-circuit-white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f9fafc;
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, sans-serif;
            scroll-behavior: smooth;
            color: #1e293b;
        }

        /* custom inter font fallback */
        @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap');

        /* Smooth link behavior */
        html {
            scroll-padding-top: 80px;
        }

        /* glass card minimal style */
        .glass-card {
            background: rgba(255, 255, 255, 0.96);
            border: 1px solid rgba(0, 0, 0, 0.04);
            box-shadow: 0 8px 20px -6px rgba(0, 0, 0, 0.02), 0 2px 4px -2px rgba(0, 0, 0, 0.02);
            transition: all 0.25s ease;
        }
        .glass-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 30px -12px rgba(0, 0, 0, 0.08);
            border-color: rgba(28, 160, 216, 0.2);
        }

        /* subtle gradient text helper */
        .gradient-text {
            background: linear-gradient(135deg, var(--color-primary-blue), var(--color-primary-green));
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }

        /* button primary */
        .btn-primary {
            background: linear-gradient(105deg, var(--color-primary-blue), var(--color-accent-blue));
            color: white;
            font-weight: 500;
            padding: 0.75rem 1.75rem;
            border-radius: 40px;
            transition: all 0.2s;
            box-shadow: 0 2px 6px rgba(28, 160, 216, 0.2);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px -8px rgba(28, 160, 216, 0.4);
            background: linear-gradient(105deg, #1d8cc2, #2bb673);
        }

        .btn-outline {
            border: 1.5px solid var(--color-primary-blue);
            background: transparent;
            color: var(--color-primary-blue);
            border-radius: 40px;
            padding: 0.7rem 1.7rem;
            font-weight: 500;
            transition: all 0.2s;
        }
        .btn-outline:hover {
            background: var(--color-primary-blue);
            color: white;
            border-color: var(--color-primary-blue);
        }

        /* rotating minimal halo (clean geometric accent) */
        .rotating-orb {
            width: 380px;
            height: 380px;
            background: radial-gradient(circle, rgba(28,160,216,0.03) 0%, rgba(43,182,115,0.02) 100%);
            border-radius: 50%;
            position: relative;
        }
        .rotating-orb::after {
            content: '';
            position: absolute;
            inset: 20px;
            border-radius: 50%;
            border: 1px dashed rgba(28,160,216,0.3);
            animation: spin 20s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .floating-icon {
            position: absolute;
            background: white;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 24px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.02), 0 2px 4px rgba(0,0,0,0.02);
            color: #1e293b;
            transition: all 0.2s;
            border: 1px solid #eef2ff;
        }
        .floating-icon i, .floating-icon img {
            font-size: 1.8rem;
        }

        /* smooth typewriter */
        #typewriter {
            font-size: 1.25rem;
            font-weight: 500;
            color: var(--color-primary-blue);
        }

        /* Clients marquee (smooth infinite scroll) */
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-100%); }
        }
        .animate-marquee {
            animation: marquee 26s linear infinite;
            display: flex;
            width: max-content;
        }

        .client-item {
            flex: 0 0 auto;
            width: 160px;
            margin: 0 20px;
            opacity: 0.8;
            transition: opacity 0.2s;
        }
        .client-item:hover {
            opacity: 1;
        }

        /* team image circle */
        .team-img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid white;
            box-shadow: 0 6px 14px rgba(0,0,0,0.02);
        }
    </style>
</head>
<body class="antialiased">

<!-- minimal navigation (sticky, clean) -->
<nav class="fixed top-0 left-0 w-full bg-white/80 backdrop-blur-md z-50 border-b border-gray-100 shadow-sm transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 py-4 flex justify-between items-center">
        <div class="text-2xl font-bold tracking-tight">
            <span class="text-[#1ca0d8]">pi</span><span class="text-[#2bb673]">ware</span>
        </div>
        <div class="hidden md:flex space-x-8 text-gray-700 font-medium">
            <a href="#home" class="hover:text-[#1ca0d8] transition">Home</a>
            <a href="#services" class="hover:text-[#1ca0d8] transition">Services</a>
            <a href="#projects" class="hover:text-[#1ca0d8] transition">Projects</a>
            <a href="#team" class="hover:text-[#1ca0d8] transition">Team</a>
            <a href="#contact" class="hover:text-[#1ca0d8] transition">Contact</a>
        </div>
        <a href="#contact" class="hidden md:inline-block px-5 py-2 rounded-full bg-[#1ca0d8] text-white text-sm font-medium shadow-sm hover:bg-[#1d8cc2] transition">Get in touch</a>
        <button class="md:hidden text-gray-700 text-2xl">☰</button>
    </div>
</nav>

<!-- HERO SECTION with new color palette and minimal design -->
<section id="home" class="pt-32 pb-20 md:pt-40 md:pb-28 bg-white overflow-hidden relative">
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
        <div class="absolute top-20 right-10 w-72 h-72 rounded-full bg-[#1ca0d8]/5 blur-3xl"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 rounded-full bg-[#2bb673]/5 blur-3xl"></div>
    </div>
    <div class="max-w-7xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <!-- Left content -->
        <div data-aos="fade-up" data-aos-duration="700">
            <div class="inline-flex items-center gap-2 bg-gray-50 rounded-full px-4 py-1.5 text-sm text-gray-600 border border-gray-100 mb-6">
                <span class="w-2 h-2 rounded-full bg-[#2bb673]"></span> <span>Trusted since 2020</span>
            </div>
            <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-gray-900 leading-tight">
                Innovative <span class="gradient-text">IT Solutions</span><br>for modern business
            </h1>
            <div class="mt-4 flex items-center gap-2 text-gray-600 text-lg">
                <span id="typewriter" class="font-medium"></span><span class="border-r-2 border-[#1ca0d8] h-6 ml-1 animate-pulse"></span>
            </div>
            <p class="mt-6 text-gray-500 text-lg max-w-xl leading-relaxed">
                We design future-ready platforms, accelerate growth with world-class engineering, and deliver measurable impact.
            </p>
            <div class="mt-8 flex flex-wrap gap-4">
                <a href="#services" class="btn-primary inline-flex items-center gap-2">Explore services <i class="fas fa-arrow-right text-sm"></i></a>
                <a href="#contact" class="btn-outline">Start a project</a>
            </div>
            <div class="mt-10 flex items-center gap-6 text-sm text-gray-400">
                <div class="flex items-center gap-1"><i class="fas fa-check-circle text-[#2bb673]"></i> 50+ delivered projects</div>
                <div class="flex items-center gap-1"><i class="fas fa-users text-[#1ca0d8]"></i> 15+ experts</div>
            </div>
        </div>

        <!-- Right side: minimal rotating orb + clean icons -->
        <div class="relative flex justify-center" data-aos="fade-left" data-aos-duration="800">
            <div class="rotating-orb relative flex items-center justify-center">
                <!-- floating icons soft reimagined -->
                <div class="absolute top-[5%] left-[10%] floating-icon"><i class="fab fa-python text-[#1ca0d8] text-2xl"></i></div>
                <div class="absolute top-[30%] right-[2%] floating-icon"><i class="fab fa-react text-2xl text-[#1ca0d8]"></i></div>
                <div class="absolute bottom-[20%] left-[5%] floating-icon"><i class="fab fa-laravel text-2xl text-[#2bb673]"></i></div>
                <div class="absolute bottom-[35%] right-[15%] floating-icon"><i class="fab fa-node-js text-2xl text-[#2bb673]"></i></div>
                <div class="absolute top-[45%] left-[25%] floating-icon"><i class="fab fa-github text-2xl"></i></div>
                <div class="absolute top-[15%] right-[30%] floating-icon"><i class="fas fa-cloud text-[#1ca0d8] text-2xl"></i></div>
                <div class="absolute bottom-[10%] right-[35%] floating-icon"><i class="fas fa-database text-[#2bb673] text-xl"></i></div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION - minimalist cards -->
<section id="services" class="py-24 bg-gray-50/40">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-sm uppercase tracking-wider text-[#1ca0d8] font-semibold">what we deliver</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Core expertise & services</h2>
            <p class="text-gray-500 mt-4">End-to-end digital solutions — from software engineering to infrastructure modernization.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            <!-- service 1 -->
            <div class="glass-card rounded-2xl p-7 bg-white" data-aos="fade-up" data-aos-delay="50">
                <div class="w-12 h-12 rounded-xl bg-[#1ca0d8]/10 flex items-center justify-center mb-5"><i class="fas fa-code text-2xl text-[#1ca0d8]"></i></div>
                <h3 class="text-xl font-semibold text-gray-800">Web Development</h3>
                <p class="text-gray-500 mt-2 leading-relaxed">Scalable, secure web apps with modern stacks (React, Laravel, Node).</p>
            </div>
            <div class="glass-card rounded-2xl p-7 bg-white" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 rounded-xl bg-[#2bb673]/10 flex items-center justify-center mb-5"><i class="fas fa-mobile-alt text-2xl text-[#2bb673]"></i></div>
                <h3 class="text-xl font-semibold text-gray-800">Cross-platform Mobile</h3>
                <p class="text-gray-500 mt-2">iOS & Android apps (Flutter, Firebase) with seamless UX.</p>
            </div>
            <div class="glass-card rounded-2xl p-7 bg-white" data-aos="fade-up" data-aos-delay="150">
                <div class="w-12 h-12 rounded-xl bg-[#1ca0d8]/10 flex items-center justify-center mb-5"><i class="fas fa-chart-line text-2xl text-[#1ca0d8]"></i></div>
                <h3 class="text-xl font-semibold text-gray-800">Data & AI</h3>
                <p class="text-gray-500 mt-2">Analytics dashboards, predictive models, data automation.</p>
            </div>
            <div class="glass-card rounded-2xl p-7 bg-white" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 rounded-xl bg-[#2bb673]/10 flex items-center justify-center mb-5"><i class="fas fa-network-wired text-2xl text-[#2bb673]"></i></div>
                <h3 class="text-xl font-semibold text-gray-800">Infrastructure & Security</h3>
                <p class="text-gray-500 mt-2">LAN/WAN, VPNs, firewall & performance optimization.</p>
            </div>
            <div class="glass-card rounded-2xl p-7 bg-white" data-aos="fade-up" data-aos-delay="250">
                <div class="w-12 h-12 rounded-xl bg-[#1ca0d8]/10 flex items-center justify-center mb-5"><i class="fas fa-headset text-2xl text-[#1ca0d8]"></i></div>
                <h3 class="text-xl font-semibold text-gray-800">IT Consultation</h3>
                <p class="text-gray-500 mt-2">Cloud migration, software audits, strategic IT guidance.</p>
            </div>
            <div class="glass-card rounded-2xl p-7 bg-white" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 rounded-xl bg-[#2bb673]/10 flex items-center justify-center mb-5"><i class="fas fa-microchip text-2xl text-[#2bb673]"></i></div>
                <h3 class="text-xl font-semibold text-gray-800">Deployment & Integration</h3>
                <p class="text-gray-500 mt-2">Hardware/software installation & enterprise tool integration.</p>
            </div>
        </div>
        <div class="text-center mt-12">
            <a href="#contact" class="inline-flex items-center gap-2 text-[#1ca0d8] font-medium border-b border-[#1ca0d8]/30 hover:border-[#1ca0d8] transition">Request a custom solution <i class="fas fa-arrow-right text-sm"></i></a>
        </div>
    </div>
</section>

<!-- PROJECTS section, minimal, elegant -->
<section id="projects" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-sm uppercase tracking-wider text-[#2bb673] font-semibold">case studies</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Selected projects</h2>
            <p class="text-gray-500">Modern stacks, design-first approach, real business impact.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="group rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition">
                <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?auto=format&fit=crop&w=800&h=500&q=60" alt="ecommerce" class="h-52 w-full object-cover group-hover:scale-105 transition duration-500">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">E‑commerce Platform</h3>
                    <p class="text-gray-500 mt-2 text-sm">Scalable online store with realtime inventory & payment gateway.</p>
                    <div class="flex gap-2 mt-4 text-xs text-gray-500"><span class="bg-gray-100 px-3 py-1 rounded-full">Laravel</span><span class="bg-gray-100 px-3 py-1 rounded-full">React</span><span class="bg-gray-100 px-3 py-1 rounded-full">MongoDB</span></div>
                </div>
            </div>
            <!-- Project 2 -->
            <div class="group rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1588200908342-23b585c03e26?auto=format&fit=crop&w=800&h=500&q=60" alt="alumni" class="h-52 w-full object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Alumni Management System</h3>
                    <p class="text-gray-500 text-sm">Engagement network for universities — events, mentoring, directories.</p>
                    <div class="flex gap-2 mt-4"><span class="bg-gray-100 px-3 py-1 rounded-full text-xs">Tailwind</span><span class="bg-gray-100 px-3 py-1 rounded-full text-xs">Laravel</span></div>
                </div>
            </div>
            <!-- Project 3 -->
            <div class="group rounded-2xl bg-white border border-gray-100 overflow-hidden shadow-sm">
                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?auto=format&fit=crop&w=800&h=500&q=60" alt="fingerprint" class="h-52 w-full object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800">Biometric Attendance</h3>
                    <p class="text-gray-500 text-sm">Student fingerprint system with real-time analytics and C# backend.</p>
                    <div class="flex gap-2 mt-4"><span class="bg-gray-100 px-3 py-1 rounded-full text-xs">Node.js</span><span class="bg-gray-100 px-3 py-1 rounded-full text-xs">SQL Server</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM section — cofounders & extended team (clean cards) -->
<section id="team" class="py-24 bg-gray-50/30">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <div class="text-center max-w-2xl mx-auto mb-14">
            <span class="text-sm text-[#1ca0d8] font-semibold tracking-wide">leadership</span>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Co-founders</h2>
            <p class="text-gray-500">Visionaries behind piware’s engineering excellence.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-20">
            <!-- Yousef -->
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-gray-100">
                <div class="mx-auto w-28 h-28 rounded-full overflow-hidden bg-gray-100"><img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Yousef" class="w-full h-full object-cover"></div>
                <h4 class="font-semibold text-xl mt-4 text-gray-800">Yousef Mansoor</h4>
                <p class="text-[#1ca0d8] text-sm">CEO & Founder</p>
                <p class="text-gray-500 text-sm mt-2">Strategic leader with 5+ years scaling tech ventures.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-gray-100">
                <div class="mx-auto w-28 h-28 rounded-full overflow-hidden bg-gray-100"><img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Hasan" class="w-full h-full object-cover"></div>
                <h4 class="font-semibold text-xl mt-4">Hasan Yagout</h4>
                <p class="text-[#2bb673] text-sm">Co-founder & Lead Developer</p>
                <p class="text-gray-500 text-sm mt-2">Back-end expert, Laravel & cloud architecture.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-gray-100">
                <div class="mx-auto w-28 h-28 rounded-full overflow-hidden"><img src="https://randomuser.me/api/portraits/men/67.jpg" alt="Ibrahim" class="w-full h-full object-cover"></div>
                <h4 class="font-semibold text-xl mt-4">Ibrahim Alqutary</h4>
                <p class="text-[#1ca0d8] text-sm">Co-founder & PM</p>
                <p class="text-gray-500 text-sm mt-2">Agile delivery & cross-functional coordination.</p>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-gray-100">
                <div class="mx-auto w-28 h-28 rounded-full overflow-hidden"><img src="https://randomuser.me/api/portraits/men/91.jpg" alt="Abdallah" class="w-full h-full object-cover"></div>
                <h4 class="font-semibold text-xl mt-4">Abdallah Yagout</h4>
                <p class="text-[#2bb673] text-sm">Project Manager</p>
                <p class="text-gray-500 text-sm mt-2">Full-stack, React & Node specialist.</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <h3 class="text-2xl font-semibold text-gray-800 mb-8">Meet the broader team</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <div class="text-center"><div class="w-20 h-20 rounded-full bg-gray-200 mx-auto mb-2 overflow-hidden"><img src="https://randomuser.me/api/portraits/men/22.jpg" class="object-cover w-full h-full"></div><p class="font-medium">Mohammed Almudawi</p><p class="text-xs text-gray-500">Lead Developer</p></div>
                <div class="text-center"><div class="w-20 h-20 rounded-full bg-gray-200 mx-auto mb-2"><img src="https://randomuser.me/api/portraits/men/52.jpg" class="object-cover w-full h-full rounded-full"></div><p class="font-medium">Alargam Alhumaidi</p><p class="text-xs text-gray-500">Medical Content</p></div>
                <div class="text-center"><div class="w-20 h-20 rounded-full bg-gray-200 mx-auto mb-2"><img src="https://randomuser.me/api/portraits/men/74.jpg" class="object-cover w-full h-full rounded-full"></div><p class="font-medium">Yousef Bashara</p><p class="text-xs text-gray-500">Biomedical Engineer</p></div>
                <div class="text-center"><div class="w-20 h-20 rounded-full bg-gray-200 mx-auto mb-2"><img src="https://randomuser.me/api/portraits/men/36.jpg" class="object-cover w-full h-full rounded-full"></div><p class="font-medium">Ameer Eshaq</p><p class="text-xs text-gray-500">Org Development</p></div>
                <div class="text-center"><div class="w-20 h-20 rounded-full bg-gray-200 mx-auto mb-2"><img src="https://randomuser.me/api/portraits/men/12.jpg" class="object-cover w-full h-full rounded-full"></div><p class="font-medium">Mohammed Alarasi</p><p class="text-xs text-gray-500">Medical Advisor</p></div>
            </div>
        </div>
    </div>
</section>

<!-- TRUSTED BY CLIENTS - continuous marquee, minimal -->
<section class="py-14 bg-white border-y border-gray-100">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
        <p class="text-center text-sm uppercase tracking-wider text-gray-400 font-medium mb-8">Trusted by forward-thinking companies</p>
        <div class="overflow-hidden relative">
            <div class="flex animate-marquee w-max">
                <div class="client-item flex items-center justify-center"><img src="https://placehold.co/120x50?text=LIU+Yemen" class="max-h-8 opacity-70 grayscale hover:grayscale-0 transition"></div>
                <div class="client-item"><img src="https://placehold.co/120x50?text=BlueLine" class="max-h-8 opacity-70"></div>
                <div class="client-item"><img src="https://placehold.co/120x50?text=Matraf" class="max-h-8 opacity-70"></div>
                <div class="client-item"><img src="https://placehold.co/120x50?text=Madinah" class="max-h-8 opacity-70"></div>
                <div class="client-item"><img src="https://placehold.co/120x50?text=ARK" class="max-h-8 opacity-70"></div>
                <div class="client-item"><img src="https://placehold.co/120x50?text=Creaco" class="max-h-8 opacity-70"></div>
                <div class="client-item"><img src="https://placehold.co/120x50?text=Darnasa" class="max-h-8 opacity-70"></div>
                <!-- duplicate for seamless loop -->
                <div class="client-item"><img src="https://placehold.co/120x50?text=LIU+Yemen" class="max-h-8 opacity-70"></div>
                <div class="client-item"><img src="https://placehold.co/120x50?text=BlueLine" class="max-h-8 opacity-70"></div>
                <div class="client-item"><img src="https://placehold.co/120x50?text=Matraf" class="max-h-8 opacity-70"></div>
                <div class="client-item"><img src="https://placehold.co/120x50?text=Madinah" class="max-h-8 opacity-70"></div>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT section - minimalist form -->
<section id="contact" class="py-24 bg-gray-50/40">
    <div class="max-w-3xl mx-auto px-6 lg:px-12 text-center">
        <span class="text-sm text-[#2bb673] font-semibold uppercase tracking-wider">Start a conversation</span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Let’s build something great</h2>
        <p class="text-gray-500 mt-4 mb-8">Whether you have an idea or a challenge — our team is ready.</p>
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8 md:p-10 text-left">
            <form id="contactForm" class="space-y-6">
                <div class="grid md:grid-cols-2 gap-5">
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Full name</label><input type="text" name="name" class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-1 focus:ring-[#1ca0d8] outline-none" placeholder="John Carter"></div>
                    <div><label class="block text-sm font-medium text-gray-700 mb-1">Email address</label><input type="email" name="email" class="w-full border border-gray-200 rounded-xl px-4 py-3 focus:ring-[#1ca0d8]" placeholder="hello@company.com"></div>
                </div>
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Subject</label><input type="text" name="subject" class="w-full border border-gray-200 rounded-xl px-4 py-3" placeholder="Project inquiry"></div>
                <div><label class="block text-sm font-medium text-gray-700 mb-1">Message</label><textarea rows="4" name="message" class="w-full border border-gray-200 rounded-xl px-4 py-3" placeholder="Tell us about your goals..."></textarea></div>
                <button type="submit" class="btn-primary w-full md:w-auto px-8 py-3 flex items-center justify-center gap-2">Send message <i class="fas fa-paper-plane text-sm"></i></button>
                <div class="text-sm text-gray-400 pt-2 text-center">Or reach us at <a href="mailto:info@piware.tech" class="text-[#1ca0d8]">info@piware.tech</a></div>
                <div id="successMessage" class="hidden text-green-600 text-sm bg-green-50 p-3 rounded-lg"></div>
                <div id="errorMessage" class="hidden text-red-500 text-sm bg-red-50 p-3 rounded-lg"></div>
            </form>
        </div>
    </div>
</section>

<!-- Simple Footer -->
<footer class="bg-white border-t border-gray-100 py-8 text-center text-gray-400 text-sm">
    <div class="max-w-7xl mx-auto px-6">© 2026 piware. All rights reserved. Modern IT solutions</div>
</footer>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 700, once: true, offset: 30 });
    // Typewriter effect
    const strings = ["Full-cycle development", "AI-driven analytics", "Cloud & security", "Mobile & web apps"];
    let idx = 0, i = 0, el = document.getElementById('typewriter');
    function typeWriter() {
        if(!el) return;
        let current = strings[idx];
        el.innerHTML = current.slice(0,i);
        i++;
        if(i <= current.length) setTimeout(typeWriter, 55);
        else setTimeout(eraseText, 1800);
    }
    function eraseText() {
        let current = strings[idx];
        i--;
        if(el) el.innerHTML = current.slice(0,i);
        if(i > 0) setTimeout(eraseText, 25);
        else { idx = (idx+1)%strings.length; setTimeout(typeWriter, 300); }
    }
    typeWriter();

    // mock contact handler (prevents actual post but shows success)
    document.getElementById('contactForm')?.addEventListener('submit', function(e) {
        e.preventDefault();
        const successDiv = document.getElementById('successMessage');
        const errorDiv = document.getElementById('errorMessage');
        successDiv.classList.remove('hidden');
        successDiv.innerHTML = "✓ Thanks! Our team will respond within 24 hours.";
        errorDiv.classList.add('hidden');
        this.reset();
        setTimeout(() => successDiv.classList.add('hidden'), 4000);
    });
</script>
</body>
</html>
