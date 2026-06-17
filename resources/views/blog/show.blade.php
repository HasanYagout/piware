@extends('layouts.app')

@section('content')

    <section class="relative bg-[#edf2f7]">

        <div class="relative overflow-hidden">

            <!-- Scattered Gradient Shapes -->
            <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full blur-3xl" style="background:linear-gradient(135deg, rgba(28,160,216,0.5), rgba(43,182,115,0.4));"></div>
            <div class="absolute -top-20 -right-20 w-[450px] h-[450px] rounded-full blur-3xl" style="background:linear-gradient(225deg, rgba(28,160,216,0.45), rgba(43,182,115,0.35));"></div>
            <div class="absolute top-1/3 -left-24 w-[300px] h-[300px] rounded-full blur-3xl" style="background:linear-gradient(135deg, rgba(43,182,115,0.5), rgba(28,160,216,0.4));"></div>
            <div class="absolute top-1/2 -right-28 w-[500px] h-[500px] rounded-full blur-3xl" style="background:linear-gradient(200deg, rgba(28,160,216,0.5), rgba(43,182,115,0.3));"></div>
            <div class="absolute -bottom-32 -left-20 w-[550px] h-[550px] rounded-full blur-3xl" style="background:linear-gradient(45deg, rgba(43,182,115,0.5), rgba(28,160,216,0.4));"></div>
            <div class="absolute -bottom-48 -right-48 w-[700px] h-[700px] rounded-full blur-3xl" style="background:linear-gradient(160deg, rgba(28,160,216,0.6), rgba(43,182,115,0.5));"></div>
            <div class="absolute top-10 left-1/3 w-[200px] h-[200px] rounded-full blur-3xl" style="background:linear-gradient(90deg, rgba(28,160,216,0.4), rgba(43,182,115,0.3));"></div>
            <div class="absolute bottom-20 left-2/3 w-[350px] h-[350px] rounded-full blur-3xl" style="background:linear-gradient(270deg, rgba(43,182,115,0.45), rgba(28,160,216,0.35));"></div>

            <!-- Main Glass Container -->
            <div class="relative z-10 min-h-screen py-10">
                <div class="max-w-5xl mx-auto bg-white/20 backdrop-blur-[40px] border border-white/60 shadow-2xl shadow-slate-300/50 rounded-[40px] p-8 lg:p-16">

                    <!-- Back Button -->
                    <a href="{{ route('blog.index') }}"
                       class="inline-flex items-center gap-2 text-sm text-slate-600 hover:text-[#1ca0d8] transition-colors mb-8 group">
                        <span class="group-hover:-translate-x-1 transition-transform">←</span>
                        Back to Blog
                    </a>

                    <!-- Blog Header -->
                    <div class="mb-12" data-aos="fade-up" data-aos-duration="800">
                        <div class="flex flex-wrap items-center gap-3 mb-4">
                        <span class="text-sm text-[#1ca0d8] font-semibold bg-[#1ca0d8]/10 px-4 py-1 rounded-full">
                            {{$post->category}}
                        </span>
                            <span class="text-sm text-slate-500">•</span>
                            <span class="text-sm text-slate-500">{{$post->formatted_date}}</span>
                            <span class="text-sm text-slate-500">•</span>
                            <span class="text-sm text-slate-500">{{$post->reading_time}}</span>
                        </div>

                        <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold leading-[1.1] text-slate-800">
                            {{ $post->title }}
                        </h1>
                        @if($post->excerpt)

                        <p class="mt-6 text-xl text-slate-600 leading-relaxed max-w-3xl">
                            {{ $post->excerpt }}
                        </p>
                        @endif
                        <div class="flex items-center gap-4 mt-8">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] flex items-center justify-center text-white text-xl font-bold">
                                    PW
                                </div>
                                <div>
                                    <p class="font-semibold text-slate-800">PiWare Team</p>
                                    <p class="text-sm text-slate-500">Development Team</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Featured Image Placeholder -->
                    <div class="mb-12 rounded-3xl overflow-hidden bg-gradient-to-r from-[#1ca0d8]/10 to-[#2bb673]/10 border border-white/50 p-12 text-center"
                         data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                        <div class="text-7xl mb-4">🖐️</div>
                        <p class="text-slate-500 text-sm">Fingerprint Attendance System Interface</p>
                    </div>

                    <!-- Blog Content -->
                    <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">

                        <!-- Introduction -->
                        <h2 class="text-2xl font-bold text-slate-800 mt-8">The Challenge</h2>
                        <p class="text-slate-600 leading-relaxed">
                            The Libyan International University (LIU) faced a significant challenge in
                            tracking student attendance across multiple departments and campuses.
                            Traditional paper-based methods were inefficient, prone to errors, and
                            consumed valuable administrative time.
                        </p>

                        <p class="text-slate-600 leading-relaxed">
                            The university needed a modern, automated solution that could:
                        </p>

                        <ul class="list-disc pl-6 text-slate-600 space-y-2">
                            <li><strong>Eliminate manual attendance tracking</strong> — Replace paper sign-in sheets with an automated system</li>
                            <li><strong>Prevent attendance fraud</strong> — Ensure students couldn't sign in for each other</li>
                            <li><strong>Generate real-time reports</strong> — Provide instant access to attendance data for faculty and administration</li>
                            <li><strong>Integrate with existing systems</strong> — Connect seamlessly with the university's student management platform</li>
                            <li><strong>Scale across multiple campuses</strong> — Support hundreds of students across different locations</li>
                        </ul>

                        <!-- The Solution -->
                        <h2 class="text-2xl font-bold text-slate-800 mt-12">Our Solution</h2>
                        <p class="text-slate-600 leading-relaxed">
                            We developed a comprehensive <strong>biometric fingerprint attendance system</strong>
                            that combines hardware fingerprint scanners with a cloud-based software platform.
                            The system provides a seamless, secure, and efficient way to track student attendance.
                        </p>

                        <!-- Architecture -->
                        <h3 class="text-xl font-bold text-slate-800 mt-8">System Architecture</h3>

                        <div class="grid md:grid-cols-3 gap-4 my-6">
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50 text-center">
                                <div class="text-4xl mb-3">🖐️</div>
                                <h4 class="font-bold text-slate-800">Fingerprint Scanner</h4>
                                <p class="text-sm text-slate-600 mt-1">Hardware device for biometric capture</p>
                            </div>
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50 text-center">
                                <div class="text-4xl mb-3">☁️</div>
                                <h4 class="font-bold text-slate-800">Cloud Backend</h4>
                                <p class="text-sm text-slate-600 mt-1">API & database for data processing</p>
                            </div>
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50 text-center">
                                <div class="text-4xl mb-3">📊</div>
                                <h4 class="font-bold text-slate-800">Admin Dashboard</h4>
                                <p class="text-sm text-slate-600 mt-1">Web interface for management & reporting</p>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-slate-800 mt-8">Key Features</h3>

                        <div class="grid md:grid-cols-2 gap-4 my-6">
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50">
                                <div class="text-2xl mb-2">🔐</div>
                                <h4 class="font-bold text-slate-800">Biometric Authentication</h4>
                                <p class="text-sm text-slate-600">Secure fingerprint matching with 99.9% accuracy</p>
                            </div>
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50">
                                <div class="text-2xl mb-2">📱</div>
                                <h4 class="font-bold text-slate-800">Mobile-Ready Dashboard</h4>
                                <p class="text-sm text-slate-600">Access attendance data from any device</p>
                            </div>
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50">
                                <div class="text-2xl mb-2">📈</div>
                                <h4 class="font-bold text-slate-800">Real-Time Analytics</h4>
                                <p class="text-sm text-slate-600">Live attendance tracking and reporting</p>
                            </div>
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50">
                                <div class="text-2xl mb-2">🔔</div>
                                <h4 class="font-bold text-slate-800">Automated Notifications</h4>
                                <p class="text-sm text-slate-600">Alerts for absentees and low attendance</p>
                            </div>
                        </div>

                        <!-- Technology Stack -->
                        <h2 class="text-2xl font-bold text-slate-800 mt-12">Technology Stack</h2>

                        <div class="flex flex-wrap gap-3 my-4">
                            <span class="px-4 py-2 bg-white/40 rounded-full border border-white/50 text-sm font-medium text-slate-700">Laravel</span>
                            <span class="px-4 py-2 bg-white/40 rounded-full border border-white/50 text-sm font-medium text-slate-700">PHP 8.2</span>
                            <span class="px-4 py-2 bg-white/40 rounded-full border border-white/50 text-sm font-medium text-slate-700">MySQL</span>
                            <span class="px-4 py-2 bg-white/40 rounded-full border border-white/50 text-sm font-medium text-slate-700">REST API</span>
                            <span class="px-4 py-2 bg-white/40 rounded-full border border-white/50 text-sm font-medium text-slate-700">Tailwind CSS</span>
                            <span class="px-4 py-2 bg-white/40 rounded-full border border-white/50 text-sm font-medium text-slate-700">Alpine.js</span>
                            <span class="px-4 py-2 bg-white/40 rounded-full border border-white/50 text-sm font-medium text-slate-700">AWS EC2</span>
                            <span class="px-4 py-2 bg-white/40 rounded-full border border-white/50 text-sm font-medium text-slate-700">Fingerprint SDK</span>
                        </div>

                        <!-- Development Process -->
                        <h2 class="text-2xl font-bold text-slate-800 mt-12">Development Process</h2>

                        <div class="space-y-6 my-6">
                            <div class="flex gap-4 items-start">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] flex items-center justify-center text-white font-bold shrink-0 mt-1">1</div>
                                <div>
                                    <h4 class="font-bold text-slate-800">Requirements Gathering</h4>
                                    <p class="text-slate-600">Worked closely with LIU administration to understand their needs, pain points, and expectations.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] flex items-center justify-center text-white font-bold shrink-0 mt-1">2</div>
                                <div>
                                    <h4 class="font-bold text-slate-800">Hardware Selection</h4>
                                    <p class="text-slate-600">Evaluated and selected reliable fingerprint scanners compatible with our software stack.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] flex items-center justify-center text-white font-bold shrink-0 mt-1">3</div>
                                <div>
                                    <h4 class="font-bold text-slate-800">Backend Development</h4>
                                    <p class="text-slate-600">Built a robust Laravel API with secure authentication, fingerprint data storage, and real-time processing.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] flex items-center justify-center text-white font-bold shrink-0 mt-1">4</div>
                                <div>
                                    <h4 class="font-bold text-slate-800">Dashboard Development</h4>
                                    <p class="text-slate-600">Created an intuitive admin dashboard with real-time attendance visualization and reporting.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 items-start">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] flex items-center justify-center text-white font-bold shrink-0 mt-1">5</div>
                                <div>
                                    <h4 class="font-bold text-slate-800">Testing & Deployment</h4>
                                    <p class="text-slate-600">Conducted extensive testing with real users and deployed the system on AWS infrastructure.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Results -->
                        <h2 class="text-2xl font-bold text-slate-800 mt-12">Results & Impact</h2>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 my-6">
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50 text-center">
                                <div class="text-3xl font-bold bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">98%</div>
                                <p class="text-sm text-slate-600 mt-1">Attendance Accuracy</p>
                            </div>
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50 text-center">
                                <div class="text-3xl font-bold bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">3,500+</div>
                                <p class="text-sm text-slate-600 mt-1">Students Registered</p>
                            </div>
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50 text-center">
                                <div class="text-3xl font-bold bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">75%</div>
                                <p class="text-sm text-slate-600 mt-1">Time Saved on Admin</p>
                            </div>
                            <div class="bg-white/30 backdrop-blur-sm rounded-2xl p-6 border border-white/50 text-center">
                                <div class="text-3xl font-bold bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">100%</div>
                                <p class="text-sm text-slate-600 mt-1">Fraud Prevention</p>
                            </div>
                        </div>

                        <blockquote class="border-l-4 border-[#1ca0d8] pl-6 my-8 text-slate-700 italic">
                            <p class="text-lg">
                                "The fingerprint attendance system has revolutionized how we track student attendance.
                                It's accurate, efficient, and our faculty loves the real-time reporting features."
                            </p>
                            <footer class="text-sm text-slate-500 mt-2 not-italic">
                                — LIU Administration
                            </footer>
                        </blockquote>

                        <!-- Challenges -->
                        <h2 class="text-2xl font-bold text-slate-800 mt-12">Challenges Overcome</h2>

                        <ul class="list-disc pl-6 text-slate-600 space-y-2">
                            <li>
                                <strong>Hardware Integration:</strong> Successfully integrated multiple fingerprint scanner models with our software using custom SDKs.
                            </li>
                            <li>
                                <strong>Data Security:</strong> Implemented encryption and secure storage for biometric data to ensure student privacy.
                            </li>
                            <li>
                                <strong>Network Reliability:</strong> Built offline support to handle internet disruptions in certain campus locations.
                            </li>
                            <li>
                                <strong>User Adoption:</strong> Provided comprehensive training and support to ensure smooth transition for faculty and students.
                            </li>
                        </ul>

                        <!-- Future Plans -->
                        <h2 class="text-2xl font-bold text-slate-800 mt-12">What's Next?</h2>

                        <ul class="list-disc pl-6 text-slate-600 space-y-2">
                            <li>🔮 <strong>AI-Powered Analytics:</strong> Predictive analytics for student retention based on attendance patterns</li>
                            <li>📱 <strong>Student Mobile App:</strong> Allow students to view their attendance history and receive notifications</li>
                            <li>🌍 <strong>Multi-Campus Sync:</strong> Real-time synchronization across all LIU campuses</li>
                            <li>📊 <strong>Advanced Reporting:</strong> Customizable reports for department heads and administration</li>
                        </ul>

                        <!-- Conclusion -->
                        <h2 class="text-2xl font-bold text-slate-800 mt-12">Conclusion</h2>
                        <p class="text-slate-600 leading-relaxed">
                            The LIU Yemen Student Fingerprint System represents a significant step forward in
                            educational technology. By combining biometric authentication with modern cloud-based
                            software, we've created a solution that not only solves the immediate challenge of
                            attendance tracking but also provides valuable insights for improving student outcomes.
                        </p>
                        <p class="text-slate-600 leading-relaxed mt-4">
                            This project demonstrates how thoughtful technology implementation can transform
                            administrative processes, save time, and ultimately contribute to a better educational
                            experience for both students and faculty.
                        </p>

                    </div>

                    <!-- Tags -->
                    <div class="mt-12 pt-8 border-t border-white/30">
                        <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-white/30 rounded-full border border-white/50 text-sm text-slate-600">#FingerprintSystem</span>
                            <span class="px-4 py-2 bg-white/30 rounded-full border border-white/50 text-sm text-slate-600">#LIUYemen</span>
                            <span class="px-4 py-2 bg-white/30 rounded-full border border-white/50 text-sm text-slate-600">#AttendanceTracking</span>
                            <span class="px-4 py-2 bg-white/30 rounded-full border border-white/50 text-sm text-slate-600">#EdTech</span>
                            <span class="px-4 py-2 bg-white/30 rounded-full border border-white/50 text-sm text-slate-600">#Biometrics</span>
                            <span class="px-4 py-2 bg-white/30 rounded-full border border-white/50 text-sm text-slate-600">#Laravel</span>
                        </div>
                    </div>

                    <!-- Share Section -->
                    <div class="mt-8 pt-8 border-t border-white/30">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <span class="text-sm font-medium text-slate-700">Share this article:</span>
                            <div class="flex gap-3">
                                <a href="#" class="p-3 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-600 hover:text-[#1ca0d8] hover:scale-110 transition-all duration-300">
                                    <i class="fab fa-twitter text-lg"></i>
                                </a>
                                <a href="#" class="p-3 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-600 hover:text-[#0A66C2] hover:scale-110 transition-all duration-300">
                                    <i class="fab fa-linkedin text-lg"></i>
                                </a>
                                <a href="#" class="p-3 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-600 hover:text-[#1877F2] hover:scale-110 transition-all duration-300">
                                    <i class="fab fa-facebook text-lg"></i>
                                </a>
                                <a href="#" class="p-3 bg-white/30 backdrop-blur-sm rounded-full border border-white/40 text-slate-600 hover:text-[#E4405F] hover:scale-110 transition-all duration-300">
                                    <i class="fab fa-instagram text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <!-- AOS Initialization -->
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
        .prose ul {
            list-style-type: disc !important;
        }
        .prose ul li::marker {
            color: #1ca0d8;
        }
        .prose strong {
            color: #1e293b;
        }
    </style>

@endsection
