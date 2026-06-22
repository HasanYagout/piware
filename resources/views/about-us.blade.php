@extends('layouts.app')

@section('title', __('About Us'))

@section('content')
    <div class=" text-slate-800 overflow-hidden">

        <!-- Background Decorations -->
        <div class="fixed inset-0 -z-10 overflow-hidden">
            <div class="absolute -top-40 -left-40 w-[700px] h-[700px] bg-cyan-300/20 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 -right-40 w-[700px] h-[700px] bg-emerald-300/20 rounded-full blur-3xl"></div>
        </div>

        <!-- Hero -->
        <section class="relative py-28">
            <div class="container mx-auto px-6">

                <div class="max-w-5xl mx-auto text-center">

                    <img
                        src="{{ asset('logo.png') }}"
                        alt="Piware"
                        class="w-32 mx-auto mb-8">

                    <span class="inline-flex items-center px-5 py-2 rounded-full bg-white/80 backdrop-blur-xl border border-cyan-100 text-cyan-700 font-medium shadow-lg">
                    {{ __('Endless Technology') }}
                </span>

                    <h1 class="mt-8 text-5xl md:text-7xl font-bold leading-tight">
                        {{ __('Building The Future Through') }}
                        <span class="bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] bg-clip-text text-transparent">
                        {{ __('Technology') }}
                    </span>
                    </h1>

                    <p class="mt-8 text-xl text-slate-600 leading-relaxed max-w-4xl mx-auto">
                        {{ __('Piware empowers organizations, businesses, and institutions with integrated technology solutions that drive innovation, improve operational efficiency, strengthen cybersecurity, and accelerate digital transformation.') }}
                    </p>

                </div>

            </div>
        </section>

        <!-- Who We Are -->
        <section class="py-24">
            <div class="container mx-auto px-6">

                <div class="grid lg:grid-cols-2 gap-20 items-center">

                    <div class="relative flex justify-center">

                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-[450px] h-[450px] bg-gradient-to-r from-cyan-200/40 to-emerald-200/40 rounded-full blur-3xl"></div>
                        </div>

                        <img
                            src="{{ asset('logo.png') }}"
                            alt="Piware Logo"
                            class="relative z-10 w-full max-w-lg">

                    </div>

                    <div>

                    <span class="text-cyan-600 font-semibold uppercase tracking-[0.2em]">
                        {{ __('Who We Are') }}
                    </span>

                        <h2 class="mt-4 text-5xl font-bold text-slate-900">
                            {{ __('Your Strategic Technology Partner') }}
                        </h2>

                        <p class="mt-8 text-lg text-slate-600 leading-relaxed">
                            {{ __('Piware is a technology company dedicated to delivering innovative digital solutions that help organizations unlock growth, improve performance, and adapt to the rapidly evolving digital landscape.') }}
                        </p>

                        <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                            {{ __('Our expertise spans software engineering, enterprise systems, cloud infrastructure, cybersecurity, managed services, and digital transformation initiatives.') }}
                        </p>

                        <p class="mt-6 text-lg text-slate-600 leading-relaxed">
                            {{ __("We believe technology should not only solve today's challenges but also create opportunities for tomorrow. That's why we build scalable, secure, and future-ready solutions that deliver measurable business value.") }}
                        </p>

                    </div>

                </div>

            </div>
        </section>

        <!-- Logo Philosophy -->
        <section class="py-24">
            <div class="container mx-auto px-6">

                <div class="text-center mb-16">

                <span class="text-cyan-600 font-semibold uppercase tracking-[0.2em]">
                    {{ __('Our Identity') }}
                </span>

                    <h2 class="mt-4 text-5xl font-bold text-slate-900">
                        {{ __('The Philosophy Behind Piware') }}
                    </h2>

                    <p class="mt-6 text-slate-600 max-w-3xl mx-auto">
                        {{ __('Our logo is inspired by the mathematical symbol π (Pi), representing endless possibilities, continuous innovation, and limitless growth through technology.') }}
                    </p>

                </div>

                <div class="grid md:grid-cols-3 gap-8">

                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-100">

                        <div class="text-6xl font-bold text-cyan-500 mb-6">
                            π
                        </div>

                        <h3 class="text-2xl font-bold mb-4">
                            {{ __('Endless Innovation') }}
                        </h3>

                        <p class="text-slate-600 leading-relaxed">
                            {{ __('Just as Pi continues infinitely without repetition, innovation never stops. We constantly explore new ways to help businesses grow through technology.') }}
                        </p>

                    </div>

                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-100">

                        <div class="text-5xl mb-6">
                            ⚡
                        </div>

                        <h3 class="text-2xl font-bold mb-4">
                            {{ __('Connected Technology') }}
                        </h3>

                        <p class="text-slate-600 leading-relaxed">
                            {{ __('The circuit lines integrated into our logo symbolize connectivity, engineering excellence, digital systems, and the power of modern technological solutions.') }}
                        </p>

                    </div>

                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-xl shadow-slate-100">

                        <div class="text-5xl mb-6">
                            📈
                        </div>

                        <h3 class="text-2xl font-bold mb-4">
                            {{ __('Growth & Transformation') }}
                        </h3>

                        <p class="text-slate-600 leading-relaxed">
                            {{ __('The blue and green colors reflect trust, innovation, sustainability, and growth—the core values that drive every solution we deliver.') }}
                        </p>

                    </div>

                </div>

            </div>
        </section>

        <!-- Services -->
        <section class="py-24">
            <div class="container mx-auto px-6">

                <div class="text-center mb-16">

                <span class="text-cyan-600 font-semibold uppercase tracking-[0.2em]">
                    {{ __('What We Do') }}
                </span>

                    <h2 class="mt-4 text-5xl font-bold text-slate-900">
                        {{ __('Our Services') }}
                    </h2>

                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Service 1 -->
                    <div class="rounded-3xl p-8 bg-gradient-to-br from-white to-cyan-50 border border-cyan-100 shadow-xl shadow-cyan-100/50">
                        <h3 class="text-2xl font-bold mb-5 text-cyan-700">
                            {{ __('Software Development') }}
                        </h3>

                        <ul class="space-y-3 text-slate-600">
                            <li>• {{ __('Custom Software Design & Development') }}</li>
                            <li>• {{ __('Enterprise Resource Systems') }}</li>
                            <li>• {{ __('Operations Management Systems') }}</li>
                            <li>• {{ __('Systems Integration & Connectivity') }}</li>
                        </ul>
                    </div>

                    <!-- Service 2 -->
                    <div class="rounded-3xl p-8 bg-gradient-to-br from-white to-cyan-50 border border-cyan-100 shadow-xl shadow-cyan-100/50">
                        <h3 class="text-2xl font-bold mb-5 text-cyan-700">
                            {{ __('Web & Mobile Development') }}
                        </h3>

                        <ul class="space-y-3 text-slate-600">
                            <li>• {{ __('Professional Website Development') }}</li>
                            <li>• {{ __('Mobile Applications') }}</li>
                            <li>• {{ __('iOS & Android Development') }}</li>
                            <li>• {{ __('UI/UX Design') }}</li>
                        </ul>
                    </div>

                    <!-- Service 3 -->
                    <div class="rounded-3xl p-8 bg-gradient-to-br from-white to-cyan-50 border border-cyan-100 shadow-xl shadow-cyan-100/50">
                        <h3 class="text-2xl font-bold mb-5 text-cyan-700">
                            {{ __('Infrastructure Solutions') }}
                        </h3>

                        <ul class="space-y-3 text-slate-600">
                            <li>• {{ __('Server Management') }}</li>
                            <li>• {{ __('Network Administration') }}</li>
                            <li>• {{ __('Cloud Computing Solutions') }}</li>
                            <li>• {{ __('Backup & Disaster Recovery') }}</li>
                        </ul>
                    </div>

                    <!-- Service 4 -->
                    <div class="rounded-3xl p-8 bg-gradient-to-br from-white to-emerald-50 border border-emerald-100 shadow-xl shadow-emerald-100/50">
                        <h3 class="text-2xl font-bold mb-5 text-emerald-700">
                            {{ __('Cybersecurity Services') }}
                        </h3>

                        <ul class="space-y-3 text-slate-600">
                            <li>• {{ __('Risk Assessment') }}</li>
                            <li>• {{ __('Vulnerability Management') }}</li>
                            <li>• {{ __('Systems & Data Protection') }}</li>
                            <li>• {{ __('Security Governance') }}</li>
                        </ul>
                    </div>

                    <!-- Service 5 -->
                    <div class="rounded-3xl p-8 bg-gradient-to-br from-white to-emerald-50 border border-emerald-100 shadow-xl shadow-emerald-100/50">
                        <h3 class="text-2xl font-bold mb-5 text-emerald-700">
                            {{ __('Managed IT Services') }}
                        </h3>

                        <ul class="space-y-3 text-slate-600">
                            <li>• {{ __('IT Operations Management') }}</li>
                            <li>• {{ __('Preventive Maintenance') }}</li>
                            <li>• {{ __('Support Contracts') }}</li>
                            <li>• {{ __('Continuous Monitoring') }}</li>
                        </ul>
                    </div>

                    <!-- Service 6 -->
                    <div class="rounded-3xl p-8 bg-gradient-to-br from-white to-emerald-50 border border-emerald-100 shadow-xl shadow-emerald-100/50">
                        <h3 class="text-2xl font-bold mb-5 text-emerald-700">
                            {{ __('Digital Transformation') }}
                        </h3>

                        <ul class="space-y-3 text-slate-600">
                            <li>• {{ __('Process Automation') }}</li>
                            <li>• {{ __('Workflow Optimization') }}</li>
                            <li>• {{ __('Business Transformation') }}</li>
                            <li>• {{ __('Productivity Enhancement') }}</li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>

        <!-- Why Choose Us -->
        <section class="pb-24">
            <div class="container mx-auto px-6">

                <div class="rounded-[40px] p-14 bg-gradient-to-r from-[#1ca0d8] to-[#2bb673] text-white shadow-2xl">

                    <div class="text-center">

                        <h2 class="text-5xl font-bold mb-4">
                            {{ __('Why Choose Piware?') }}
                        </h2>

                        <p class="text-white/90 text-lg">
                            {{ __('Technology solutions designed around your success.') }}
                        </p>

                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mt-16">

                        <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-6">
                            <h3 class="font-bold text-xl mb-3">
                                {{ __('Tailored Solutions') }}
                            </h3>

                            <p class="text-white/90">
                                {{ __('Customized technology aligned with business goals.') }}
                            </p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-6">
                            <h3 class="font-bold text-xl mb-3">
                                {{ __('Expert Team') }}
                            </h3>

                            <p class="text-white/90">
                                {{ __('Experienced specialists across multiple domains.') }}
                            </p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-6">
                            <h3 class="font-bold text-xl mb-3">
                                {{ __('Security First') }}
                            </h3>

                            <p class="text-white/90">
                                {{ __('Industry best practices and reliable standards.') }}
                            </p>
                        </div>

                        <div class="bg-white/10 backdrop-blur-xl rounded-3xl p-6">
                            <h3 class="font-bold text-xl mb-3">
                                {{ __('Long-Term Value') }}
                            </h3>

                            <p class="text-white/90">
                                {{ __('Partnerships focused on measurable outcomes.') }}
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>
@endsection