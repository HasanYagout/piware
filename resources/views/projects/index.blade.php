@extends('layouts.app')

@section('title', __('Our Projects'))

@section('content')
    <style>
        /* --- Custom animations for projects page --- */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        @keyframes float-slow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(-2deg); }
        }
        @keyframes float-faster {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-25px) rotate(3deg); }
        }
        @keyframes pulse-ring {
            0% { transform: scale(0.95); opacity: 0.7; }
            50% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(0.95); opacity: 0.7; }
        }

        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
        .animate-float-slow {
            animation: float-slow 5s ease-in-out infinite;
        }
        .animate-float-faster {
            animation: float-faster 3.5s ease-in-out infinite;
        }
        .animate-pulse-ring {
            animation: pulse-ring 3s ease-in-out infinite;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.10);
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(40px);
            border: 1px solid rgba(255, 255, 255, 0.50);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.06);
        }

        .glass-card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .glass-card-hover:hover {
            background: rgba(255, 255, 255, 0.20);
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.10);
        }

        .gradient-text {
            background: linear-gradient(135deg, #1ca0d8, #2bb673);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .project-card {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .project-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(135deg, #1ca0d8, #2bb673, #1ca0d8);
            background-size: 300% 300%;
            border-radius: inherit;
            opacity: 0;
            transition: opacity 0.5s ease;
            z-index: -1;
            animation: gradient-shift 3s ease infinite;
        }

        .project-card:hover::before {
            opacity: 1;
        }

        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .project-card-inner {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.10);
            backdrop-filter: blur(40px);
            -webkit-backdrop-filter: blur(40px);
            border-radius: inherit;
            transition: all 0.4s ease;
        }

        .project-card:hover .project-card-inner {
            background: rgba(255, 255, 255, 0.20);
        }

        .project-tag {
            display: inline-block;
            padding: 0.25rem 1rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.3px;
            background: rgba(255, 255, 255, 0.30);
            border: 1px solid rgba(255, 255, 255, 0.40);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .project-tag:hover {
            background: rgba(28, 160, 216, 0.15);
            border-color: #1ca0d8;
        }

        .tech-badge {
            display: inline-block;
            padding: 0.2rem 0.8rem;
            border-radius: 12px;
            font-size: 0.7rem;
            font-weight: 500;
            background: rgba(255, 255, 255, 0.20);
            border: 1px solid rgba(255, 255, 255, 0.30);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .tech-badge:hover {
            background: rgba(28, 160, 216, 0.15);
            border-color: #1ca0d8;
            transform: scale(1.05);
        }

        .filter-btn {
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.10);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.30);
            color: #4a4e6b;
            cursor: pointer;
        }

        .filter-btn:hover {
            background: rgba(28, 160, 216, 0.15);
            border-color: #1ca0d8;
            transform: translateY(-2px);
        }

        .filter-btn.active {
            background: linear-gradient(135deg, #1ca0d8, #2bb673);
            color: white;
            border-color: transparent;
            box-shadow: 0 4px 15px rgba(28, 160, 216, 0.30);
        }



        @media (max-width: 640px) {
            .filter-btn {
                padding: 0.4rem 1rem;
                font-size: 0.85rem;
            }
        }
    </style>

    <section class="relative overflow-hidden min-h-screen bg-[#edf2f7]">

        <!-- ===== Background Glow Effects ===== -->
        <div class="absolute -top-32 -left-32 h-[600px] w-[600px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(135deg, rgba(28,160,216,0.5), rgba(43,182,115,0.4));">
        </div>
        <div class="absolute -top-20 -right-20 h-[450px] w-[450px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(225deg, rgba(28,160,216,0.45), rgba(43,182,115,0.35));">
        </div>
        <div class="absolute top-1/3 -left-24 h-[300px] w-[300px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(135deg, rgba(43,182,115,0.5), rgba(28,160,216,0.4));">
        </div>
        <div class="absolute top-1/2 -right-28 h-[500px] w-[500px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(200deg, rgba(28,160,216,0.5), rgba(43,182,115,0.3));">
        </div>
        <div class="absolute -bottom-32 -left-20 h-[550px] w-[550px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(45deg, rgba(43,182,115,0.5), rgba(28,160,216,0.4));">
        </div>
        <div class="absolute -bottom-48 -right-48 h-[700px] w-[700px] rounded-full blur-3xl opacity-70"
             style="background:linear-gradient(160deg, rgba(28,160,216,0.6), rgba(43,182,115,0.5));">
        </div>

        <!-- ===== Main Glass Container ===== -->
        <div class="relative z-10 min-h-screen">
            <div class="min-h-[95vh] bg-white/20 backdrop-blur-[40px] border border-white/60 shadow-2xl shadow-slate-300/50">

                <!-- ===== HERO SECTION ===== -->
                <div class="px-6 md:px-12 lg:px-20 pt-12 lg:pt-20 pb-10">
                    <div class="text-center max-w-4xl mx-auto" data-aos="fade-up" data-aos-duration="1000">
                        <div class="inline-flex items-center gap-2 bg-transparent border border-white/50 backdrop-blur-xl rounded-full px-4 py-2 shadow-sm mb-6">
                            <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                            <span class="text-sm text-slate-700">Our Portfolio</span>
                        </div>
                        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-[1.2]">
                            Featured
                            <span class="block gradient-text pb-1">
                            Projects
                        </span>
                        </h1>
                        <p class="mt-6 text-lg lg:text-xl text-slate-600 leading-relaxed max-w-2xl mx-auto">
                            Explore our portfolio of successful projects — from ERP systems and web applications
                            to mobile apps and cloud infrastructure solutions.
                        </p>
                    </div>
                </div>


                <!-- ===== FILTERS ===== -->
                <div class="px-6 md:px-12 lg:px-20 py-8 border-t border-white/30">
                    <div class="flex flex-wrap justify-center gap-3" data-aos="fade-up" data-aos-duration="800">
                        <button class="filter-btn active" data-filter="all">All Projects</button>
                        <button class="filter-btn" data-filter="web">Web Applications</button>
                        <button class="filter-btn" data-filter="mobile">Mobile Apps</button>
                        <button class="filter-btn" data-filter="erp">ERP Systems</button>
                        <button class="filter-btn" data-filter="cloud">Cloud Solutions</button>
                    </div>
                </div>

                <!-- ===== PROJECTS GRID ===== -->
                <div class="px-6 md:px-12 lg:px-20 py-8 border-t border-white/30">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" id="projectsGrid">
                        @php
                            $projects = [
                                [
                                    'title' => 'Enterprise ERP System',
                                    'category' => 'erp',
                                    'description' => 'Comprehensive ERP solution for logistics and supply chain management with real-time analytics.',
                                    'tech' => ['Laravel', 'React', 'PostgreSQL', 'Redis'],
                                    'icon' => 'fa-building',
                                    'color' => '#1ca0d8',
                                    'delay' => 100
                                ],
                                [
                                    'title' => 'E-Commerce Platform',
                                    'category' => 'web',
                                    'description' => 'Full-featured e-commerce platform with AI-powered recommendations and payment integration.',
                                    'tech' => ['Vue.js', 'Node.js', 'MongoDB', 'Stripe'],
                                    'icon' => 'fa-shopping-cart',
                                    'color' => '#2bb673',
                                    'delay' => 200
                                ],
                                [
                                    'title' => 'Healthcare Mobile App',
                                    'category' => 'mobile',
                                    'description' => 'Cross-platform mobile app for patient management, appointment scheduling, and telemedicine.',
                                    'tech' => ['Flutter', 'Firebase', 'WebRTC'],
                                    'icon' => 'fa-heartbeat',
                                    'color' => '#f9a826',
                                    'delay' => 300
                                ],
                                [
                                    'title' => 'Cloud Infrastructure Platform',
                                    'category' => 'cloud',
                                    'description' => 'Scalable cloud infrastructure with automated deployment, monitoring, and disaster recovery.',
                                    'tech' => ['AWS', 'Terraform', 'Docker', 'Kubernetes'],
                                    'icon' => 'fa-cloud-upload-alt',
                                    'color' => '#6c5ce7',
                                    'delay' => 400
                                ],
                                [
                                    'title' => 'HR Management System',
                                    'category' => 'erp',
                                    'description' => 'End-to-end HR platform with payroll, attendance tracking, performance management, and employee self-service.',
                                    'tech' => ['Laravel', 'Livewire', 'MySQL', 'Tailwind'],
                                    'icon' => 'fa-users-cog',
                                    'color' => '#e17055',
                                    'delay' => 500
                                ],
                                [
                                    'title' => 'Real Estate Web Portal',
                                    'category' => 'web',
                                    'description' => 'Property listing platform with advanced search, 3D virtual tours, and CRM integration.',
                                    'tech' => ['React', 'Django', 'PostGIS', 'Elasticsearch'],
                                    'icon' => 'fa-home',
                                    'color' => '#00b894',
                                    'delay' => 600
                                ],
                                [
                                    'title' => 'Fleet Management App',
                                    'category' => 'mobile',
                                    'description' => 'Real-time fleet tracking, route optimization, and maintenance scheduling for logistics companies.',
                                    'tech' => ['React Native', 'GraphQL', 'MongoDB', 'Mapbox'],
                                    'icon' => 'fa-truck',
                                    'color' => '#0984e3',
                                    'delay' => 700
                                ],
                                [
                                    'title' => 'DevOps Automation Suite',
                                    'category' => 'cloud',
                                    'description' => 'Complete DevOps pipeline with CI/CD, automated testing, and infrastructure as code.',
                                    'tech' => ['Jenkins', 'GitHub Actions', 'Ansible', 'Prometheus'],
                                    'icon' => 'fa-cogs',
                                    'color' => '#fd79a8',
                                    'delay' => 800
                                ],
                                [
                                    'title' => 'Financial Analytics Dashboard',
                                    'category' => 'web',
                                    'description' => 'Real-time financial analytics dashboard with interactive charts, forecasts, and reporting.',
                                    'tech' => ['D3.js', 'Python', 'Django', 'PostgreSQL'],
                                    'icon' => 'fa-chart-line',
                                    'color' => '#fdcb6e',
                                    'delay' => 900
                                ],
                            ];
                        @endphp

                        @foreach($projects as $index => $project)
                            <div class="project-card rounded-3xl project-item"
                                 data-category="{{ $project['category'] }}"
                                 data-aos="fade-up"
                                 data-aos-delay="{{ $project['delay'] }}"
                                 data-aos-duration="800">
                                <div class="project-card-inner p-6 lg:p-8 h-full">
                                    <!-- Icon & Category -->
                                    <div class="flex items-start justify-between mb-4">
                                        <div class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl"
                                             style="background: {{ $project['color'] }}20;">
                                            <i class="fas {{ $project['icon'] }}" style="color: {{ $project['color'] }};"></i>
                                        </div>
                                        <span class="project-tag text-xs uppercase tracking-wider"
                                              style="color: {{ $project['color'] }};">
                                        {{ ucfirst($project['category']) }}
                                    </span>
                                    </div>

                                    <!-- Title -->
                                    <h3 class="text-xl lg:text-2xl font-bold text-slate-800 mb-2">
                                        {{ $project['title'] }}
                                    </h3>

                                    <!-- Description -->
                                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                                        {{ $project['description'] }}
                                    </p>

                                    <!-- Tech Stack -->
                                    <div class="flex flex-wrap gap-2 mb-4">
                                        @foreach($project['tech'] as $tech)
                                            <span class="tech-badge">{{ $tech }}</span>
                                        @endforeach
                                    </div>

                                    <!-- View Project Link -->
                                    <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold transition-all duration-300 group/link"
                                       style="color: {{ $project['color'] }};">
                                        <span>View Project</span>
                                        <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover/link:translate-x-1"></i>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- ===== CTA SECTION ===== -->
                <div class="px-6 md:px-12 lg:px-20 py-16 border-t border-white/30">
                    <div class="max-w-4xl mx-auto glass-card rounded-3xl p-8 lg:p-12 text-center" data-aos="fade-up" data-aos-duration="800">
                        <h2 class="text-3xl lg:text-4xl font-bold text-slate-800">
                            Have a Project in <span class="gradient-text">Mind</span>?
                        </h2>
                        <p class="text-slate-600 mt-4 text-lg max-w-2xl mx-auto">
                            Let's bring your ideas to life. We're ready to build something amazing together.
                        </p>
                        <div class="flex flex-wrap justify-center gap-4 mt-8">
                            <a href="#contact" class="px-8 py-4 rounded-2xl text-white bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] shadow-lg hover:shadow-xl transition-all hover:scale-[1.02]">
                                <i class="fas fa-paper-plane mr-2"></i> Start a Project
                            </a>
                            <a href="#" class="px-8 py-4 rounded-2xl bg-white/30 border border-white/50 backdrop-blur-xl shadow-md hover:shadow-lg transition-all hover:bg-white/40">
                                <i class="fas fa-phone mr-2"></i> Contact Us
                            </a>
                        </div>
                    </div>
                </div>

            </div> <!-- end glass container -->
        </div> <!-- end relative container -->
    </section>

    <!-- ===== FILTER FUNCTIONALITY ===== -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 100,
                    easing: 'ease-out-cubic',
                });
            }

            // Filter functionality
            const filterButtons = document.querySelectorAll('.filter-btn');
            const projectItems = document.querySelectorAll('.project-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    const filterValue = this.getAttribute('data-filter');

                    projectItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                            setTimeout(() => {
                                item.style.opacity = '1';
                                item.style.transform = 'scale(1)';
                            }, 50);
                        } else {
                            item.style.opacity = '0';
                            item.style.transform = 'scale(0.95)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        e.preventDefault();
                        const navHeight = document.querySelector('nav.fixed, header.fixed, .navbar-fixed')?.offsetHeight || 80;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navHeight;

                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });

                        history.pushState(null, null, targetId);
                    }
                });
            });
        });
    </script>


@endsection
