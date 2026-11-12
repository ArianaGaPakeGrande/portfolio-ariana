@extends('layouts.app')

@section('title', 'Desty Mikayla Ariana | Full Stack Web Developer & Pengelola Konten Digital')
@section('meta_description', 'Portofolio profesional Desty Mikayla Ariana: Siswa SMK Prestasi Prima, Sekretaris Utama Orens Solutions, dan Full Stack Web Developer Intern di Rootera Plumbing. Spesialis Laravel, PHP, MySQL, & Modern Web Development.')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "Person",
  "name": "Desty Mikayla Ariana",
  "jobTitle": "Full Stack Web Developer (Intern) & Pengelola Konten Digital",
  "worksFor": {
    "@type": "Organization",
    "name": "Rootera Plumbing",
    "url": "https://rooteraplumbing.id"
  },
  "alumniOf": {
    "@type": "EducationalOrganization",
    "name": "SMK Prestasi Prima"
  },
  "description": "Saya adalah siswa SMK Prestasi Prima yang berdedikasi tinggi di bidang teknologi. Saya sangat aktif berorganisasi sejak kelas 10 di Orens Solutions, di mana saya dipercaya menjabat sebagai Sekretaris Utama yang membawahi 4 divisi. Saat ini, saya sedang magang sebagai Full Stack Web Developer di Rootera Plumbing.",
  "knowsAbout": ["PHP", "Laravel", "Tailwind CSS", "JavaScript", "MySQL", "Git", "SEO", "Web Performance"]
}
</script>
@endpush

@section('content')
<!-- Hero Section -->
<section id="beranda" class="relative pt-12 pb-20 md:pt-20 md:pb-32 overflow-hidden">
    <!-- Ambient Background Warm Lighting Accents (Calm Terracotta, Soft Warm Amber, & Neutral Stone) -->
    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 sm:w-[600px] sm:h-[600px] bg-gradient-to-tr from-orange-700/10 via-amber-700/5 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-10 right-10 w-72 h-72 bg-amber-600/10 rounded-full blur-2xl pointer-events-none -z-10"></div>
    <div class="absolute bottom-10 left-10 w-64 h-64 bg-stone-500/10 rounded-full blur-2xl pointer-events-none -z-10"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Copywriting & Credentials -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <!-- Status Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-semibold bg-stone-100/90 text-stone-800 dark:bg-stone-900/90 dark:text-stone-200 border border-stone-200 dark:border-stone-700 shadow-2xs">
                    <span class="w-2 h-2 rounded-full bg-orange-700 dark:bg-orange-600 animate-pulse"></span>
                    <span>Full Stack Web Developer (Intern) &bull; Rootera Plumbing</span>
                </div>

                <!-- Main Greeting & Headline -->
                <div class="space-y-2">
                    <p class="text-sm sm:text-base font-semibold text-orange-700 dark:text-orange-400 tracking-wide uppercase">
                        Halo, Selamat Datang di Portofolio Saya
                    </p>
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight text-stone-900 dark:text-white leading-[1.15]">
                        Desty Mikayla <span class="text-orange-700 dark:text-orange-400">Ariana</span>
                    </h1>
                    <p class="text-lg sm:text-xl font-medium text-stone-600 dark:text-stone-300">
                        Full Stack Web Developer (Intern) di Rootera Plumbing &amp; Pengelola Konten Digital
                    </p>
                </div>

                <!-- REQUIRED SUMMARY STATEMENT WITH PRECISE CAPITALIZATION -->
                <div class="p-5 rounded-2xl bg-white/90 dark:bg-stone-900/90 backdrop-blur-sm border border-stone-200/90 dark:border-stone-800 shadow-xs">
                    <p class="text-base sm:text-lg text-stone-700 dark:text-stone-300 leading-relaxed font-normal">
                        &ldquo;Saya adalah siswa SMK Prestasi Prima yang berdedikasi tinggi di bidang teknologi. Saya sangat aktif berorganisasi sejak kelas 10 di Orens Solutions, di mana saya dipercaya menjabat sebagai Sekretaris Utama yang membawahi 4 divisi. Saat ini, saya sedang magang sebagai Full Stack Web Developer di Rootera Plumbing.&rdquo;
                    </p>
                </div>

                <!-- Call to Action Buttons -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 pt-2">
                    <a href="#proyek" class="px-6 py-3.5 rounded-xl font-semibold text-sm text-white bg-orange-700 hover:bg-orange-800 active:bg-orange-900 shadow-xs hover:shadow-md transition-all duration-200 inline-flex items-center gap-2">
                        <span>Lihat Portofolio Proyek</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </a>
                    <a href="{{ route('case-study') }}" class="px-6 py-3.5 rounded-xl font-semibold text-sm text-stone-800 dark:text-stone-200 bg-white dark:bg-stone-900 hover:bg-stone-100 dark:hover:bg-stone-800 border border-stone-300 dark:border-stone-700 hover:border-orange-700 dark:hover:border-orange-500 shadow-2xs transition-all duration-200 inline-flex items-center gap-2">
                        <span>Baca Studi Kasus Rootera</span>
                        <span class="w-2 h-2 rounded-full bg-orange-700 dark:bg-orange-500"></span>
                    </a>
                    <a href="#kontak" class="px-5 py-3.5 rounded-xl font-medium text-sm text-stone-600 dark:text-stone-400 hover:text-orange-700 dark:hover:text-orange-400 transition-colors">
                        Hubungi Saya &rarr;
                    </a>
                </div>

                <!-- Quick Key Metrics / Badges -->
                <div class="grid grid-cols-3 gap-3 pt-4 border-t border-stone-200 dark:border-stone-800">
                    <div class="text-center lg:text-left">
                        <span class="block text-2xl font-bold text-stone-900 dark:text-white">4 Divisi</span>
                        <span class="text-xs text-stone-500 dark:text-stone-400">Dibawahi di Orens Solutions</span>
                    </div>
                    <div class="text-center lg:text-left">
                        <span class="block text-2xl font-bold text-stone-900 dark:text-white">5+ Proyek</span>
                        <span class="text-xs text-stone-500 dark:text-stone-400">Web Laravel &amp; MySQL</span>
                    </div>
                    <div class="text-center lg:text-left">
                        <span class="block text-2xl font-bold text-orange-700 dark:text-orange-400">98+</span>
                        <span class="text-xs text-stone-500 dark:text-stone-400">Lighthouse Performance</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Bento Grid & Professional Profile Card Showcase (Replaces Code Window) -->
            <div class="lg:col-span-5 flex justify-center">
                <div class="w-full max-w-md space-y-3.5">
                    
                    <!-- Main Profile Bento Card -->
                    <div class="relative p-6 sm:p-7 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200/90 dark:border-stone-800 shadow-xl overflow-hidden group transition-all duration-300">
                        <!-- Subtle warm background glow inside card -->
                        <div class="absolute -top-12 -right-12 w-40 h-40 bg-orange-700/10 dark:bg-orange-700/15 rounded-full blur-2xl pointer-events-none"></div>
                        <div class="absolute -bottom-10 -left-10 w-36 h-36 bg-amber-700/10 dark:bg-amber-700/15 rounded-full blur-2xl pointer-events-none"></div>

                        <div class="relative z-10 flex flex-col items-center text-center">
                            <!-- Real Profile Photo (Smooth Rounded-Rect with warm border & ring) -->
                            <div class="relative mb-5 group-hover:scale-102 transition-transform duration-300">
                                <!-- Outer Decorative Ring -->
                                <div class="w-32 h-32 sm:w-36 sm:h-36 rounded-3xl p-1 bg-gradient-to-tr from-orange-700 via-amber-600 to-stone-400 dark:from-orange-600 dark:via-amber-500 dark:to-stone-600 shadow-md shadow-orange-950/15">
                                    <div class="w-full h-full rounded-[22px] overflow-hidden relative border border-white/60 dark:border-stone-700/60 bg-stone-100 dark:bg-stone-800">
                                        <img src="{{ asset('images/desty-profile.jpg') }}" 
                                             alt="Foto Profil Desty Mikayla Ariana" 
                                             class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-300"
                                             loading="eager"
                                             width="144"
                                             height="144">
                                    </div>
                                </div>

                                <!-- Online / Active Status Indicator Pill -->
                                <div class="absolute -bottom-2.5 left-1/2 -translate-x-1/2 px-3 py-0.5 rounded-full bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-700 shadow-xs flex items-center gap-1.5 whitespace-nowrap">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                                    <span class="text-[11px] font-semibold text-stone-700 dark:text-stone-300">Active PKL</span>
                                </div>
                            </div>

                            <!-- Profile Credentials -->
                            <h3 class="text-xl font-bold text-stone-900 dark:text-white mt-2">
                                Desty Mikayla Ariana
                            </h3>
                            <p class="text-xs font-semibold text-orange-700 dark:text-orange-400 mt-0.5">
                                Full Stack Web Developer (Intern)
                            </p>
                            <p class="text-xs text-stone-500 dark:text-stone-400 mt-1">
                                Rootera Plumbing &bull; J&amp;J Group
                            </p>

                            <!-- Divider -->
                            <div class="w-full my-4 border-t border-stone-100 dark:border-stone-800"></div>

                            <!-- Roles & Affiliations Summary -->
                            <div class="grid grid-cols-2 gap-2 w-full text-left">
                                <div class="p-2.5 rounded-xl bg-stone-50 dark:bg-stone-800/60 border border-stone-200/80 dark:border-stone-800">
                                    <span class="block text-[10px] font-bold uppercase tracking-wider text-stone-500 dark:text-stone-400">Institusi</span>
                                    <span class="text-xs font-semibold text-stone-800 dark:text-stone-200 truncate block">SMK Prestasi Prima</span>
                                </div>
                                <div class="p-2.5 rounded-xl bg-stone-50 dark:bg-stone-800/60 border border-stone-200/80 dark:border-stone-800">
                                    <span class="block text-[10px] font-bold uppercase tracking-wider text-stone-500 dark:text-stone-400">Organisasi</span>
                                    <span class="text-xs font-semibold text-stone-800 dark:text-stone-200 truncate block">Orens Solutions</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bento Grid: Floating Tech & Tools Showcase Cards (Visual, No Raw Code) -->
                    <div class="grid grid-cols-3 gap-2.5">
                        
                        <!-- Bento Item 1: Laravel -->
                        <div class="p-3 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200/90 dark:border-stone-800 shadow-2xs hover:border-orange-700/50 dark:hover:border-orange-500/50 hover:shadow-xs transition-all text-center flex flex-col items-center justify-between">
                            <div class="w-9 h-9 rounded-xl bg-stone-50 dark:bg-stone-800 text-orange-700 dark:text-orange-400 flex items-center justify-center mb-1.5 shadow-2xs">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M22.02 6.55l-9.04-5.22a2 2 0 0 0-2 0L1.94 6.55a2 2 0 0 0-1 1.73v10.44a2 2 0 0 0 1 1.73l9.04 5.22a2 2 0 0 0 2 0l9.04-5.22a2 2 0 0 0 1-1.73V8.28a2 2 0 0 0-.96-1.73zM12 3.25l7.58 4.38L16.2 9.58 8.62 5.2 12 3.25zm-1 17.5l-7.58-4.38V8.62L11 13v7.75zm2 0V13l3.38-1.95v3.47l-1.38.8v2.68l5.58-3.22V8.62L13 20.75z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="block text-xs font-bold text-stone-900 dark:text-white">Laravel</span>
                                <span class="text-[10px] text-stone-500 dark:text-stone-400">Backend Core</span>
                            </div>
                        </div>

                        <!-- Bento Item 2: PHP -->
                        <div class="p-3 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200/90 dark:border-stone-800 shadow-2xs hover:border-orange-700/50 dark:hover:border-orange-500/50 hover:shadow-xs transition-all text-center flex flex-col items-center justify-between">
                            <div class="w-9 h-9 rounded-xl bg-stone-50 dark:bg-stone-800 text-orange-700 dark:text-orange-400 flex items-center justify-center font-mono font-extrabold text-xs mb-1.5 shadow-2xs">
                                PHP
                            </div>
                            <div>
                                <span class="block text-xs font-bold text-stone-900 dark:text-white">PHP 8.4</span>
                                <span class="text-[10px] text-stone-500 dark:text-stone-400">Clean Code</span>
                            </div>
                        </div>

                        <!-- Bento Item 3: Tailwind CSS -->
                        <div class="p-3 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200/90 dark:border-stone-800 shadow-2xs hover:border-orange-700/50 dark:hover:border-orange-500/50 hover:shadow-xs transition-all text-center flex flex-col items-center justify-between">
                            <div class="w-9 h-9 rounded-xl bg-stone-50 dark:bg-stone-800 text-orange-700 dark:text-orange-400 flex items-center justify-center mb-1.5 shadow-2xs">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.335 6.182 14.974 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.335 13.382 8.974 12 6.001 12z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="block text-xs font-bold text-stone-900 dark:text-white">Tailwind</span>
                                <span class="text-[10px] text-stone-500 dark:text-stone-400">Modern UI</span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Tech Stack Section -->
<section id="keahlian" class="py-20 bg-stone-100/70 dark:bg-stone-900/50 border-y border-stone-200/80 dark:border-stone-800/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <h2 class="text-xs sm:text-sm font-bold uppercase tracking-wider text-orange-700 dark:text-orange-400">
                Keahlian &amp; Teknologi
            </h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-stone-900 dark:text-white tracking-tight">
                Tech Stack Berdaya Guna Tinggi
            </h3>
            <p class="text-base text-stone-600 dark:text-stone-400">
                Kombinasi bahasa pemrograman, framework, basis data, dan alat pengembangan yang saya gunakan untuk mewujudkan solusi perangkat lunak yang andal, scalable, dan cepat.
            </p>
        </div>

        <!-- Tech Stack Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($techStack as $tech)
            <div class="group p-6 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 hover:border-orange-500/50 dark:hover:border-orange-500/50 shadow-2xs hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Top bar of card -->
                    <div class="flex items-center justify-between mb-4">
                        <!-- Modern Warm Icon Box -->
                        <div class="w-12 h-12 rounded-xl bg-orange-50 dark:bg-orange-950/80 border border-orange-200/80 dark:border-orange-800/80 flex items-center justify-center text-orange-600 dark:text-orange-400 font-bold group-hover:scale-110 transition-transform">
                            @if($tech['name'] === 'PHP')
                                <span class="font-mono text-sm font-extrabold">PHP</span>
                            @elseif($tech['name'] === 'Laravel')
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M22.02 6.55l-9.04-5.22a2 2 0 0 0-2 0L1.94 6.55a2 2 0 0 0-1 1.73v10.44a2 2 0 0 0 1 1.73l9.04 5.22a2 2 0 0 0 2 0l9.04-5.22a2 2 0 0 0 1-1.73V8.28a2 2 0 0 0-.96-1.73zM12 3.25l7.58 4.38L16.2 9.58 8.62 5.2 12 3.25zm-1 17.5l-7.58-4.38V8.62L11 13v7.75zm2 0V13l3.38-1.95v3.47l-1.38.8v2.68l5.58-3.22V8.62L13 20.75z"/>
                                </svg>
                            @elseif($tech['name'] === 'JavaScript')
                                <span class="font-mono text-sm font-extrabold">JS</span>
                            @elseif($tech['name'] === 'Tailwind CSS')
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.335 6.182 14.974 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.335 13.382 8.974 12 6.001 12z"/>
                                </svg>
                            @elseif($tech['name'] === 'MySQL')
                                <span class="font-mono text-xs font-extrabold">SQL</span>
                            @elseif($tech['name'] === 'Git')
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M21.62 10.45L13.55 2.38a2.53 2.53 0 0 0-3.58 0L8.14 4.21l3.07 3.07a2.16 2.16 0 0 1 2.73 2.75l2.96 2.96a2.17 2.17 0 1 1-1.35 1.34l-2.73-2.73v4.61a2.17 2.17 0 1 1-1.92 0V11.5a2.16 2.16 0 0 1-1.17-2.85L6.68 5.68 2.38 9.98a2.53 2.53 0 0 0 0 3.58l8.07 8.07a2.53 2.53 0 0 0 3.58 0l7.59-7.6a2.53 2.53 0 0 0 0-3.58z"/>
                                </svg>
                            @else
                                <span class="font-mono text-sm">&lt;/&gt;</span>
                            @endif
                        </div>
                        <span class="text-[11px] font-semibold tracking-wide uppercase px-2.5 py-1 rounded-full bg-stone-100 dark:bg-stone-800 text-stone-600 dark:text-stone-300">
                            {{ $tech['category'] }}
                        </span>
                    </div>

                    <h4 class="text-xl font-bold text-stone-900 dark:text-white mb-1">
                        {{ $tech['name'] }}
                    </h4>
                    <p class="text-xs font-medium text-orange-700 dark:text-orange-400 mb-3">
                        {{ $tech['role'] }}
                    </p>
                    <p class="text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                        {{ $tech['description'] }}
                    </p>
                </div>

                <div class="pt-4 mt-4 border-t border-stone-100 dark:border-stone-800 flex items-center justify-between text-xs text-stone-500 dark:text-stone-400">
                    <span>Kemahiran:</span>
                    <span class="font-semibold text-stone-700 dark:text-stone-200">{{ $tech['level'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Work Experience Section -->
<section id="pengalaman" class="py-20 md:py-28">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <h2 class="text-xs sm:text-sm font-bold uppercase tracking-wider text-orange-700 dark:text-orange-400">
                Jejak Karier &amp; Kepemimpinan
            </h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-stone-900 dark:text-white tracking-tight">
                Pengalaman Kerja &amp; Organisasi
            </h3>
            <p class="text-base text-stone-600 dark:text-stone-400">
                Perpaduan antara pengalaman praktis di industri perpipaan modern dan kepemimpinan manajerial organisasi sejak bangku SMK.
            </p>
        </div>

        <!-- Experience Timeline -->
        <div class="max-w-4xl mx-auto space-y-8">

            <!-- Card 1: ROOTERA PLUMBING (WITH MANDATORY NATURAL BACKLINKS & PRECISE CAPITALIZATION) -->
            <div class="relative p-6 sm:p-8 rounded-3xl bg-white dark:bg-stone-900 border-2 border-orange-500/30 dark:border-orange-500/40 shadow-lg transition-all duration-300">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4 pb-4 border-b border-stone-100 dark:border-stone-800">
                    <div>
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-orange-100 text-orange-900 dark:bg-orange-900/60 dark:text-orange-200 mb-2">
                            <span>Sedang Berjalan (Active PKL)</span>
                        </div>
                        <h4 class="text-2xl font-bold text-stone-900 dark:text-white">
                            Full Stack Web Developer (Intern) &amp; Pengelola Konten Digital
                        </h4>
                        <p class="text-base font-semibold text-orange-700 dark:text-orange-400">
                            Rootera Plumbing &bull; J&amp;J Group
                        </p>
                    </div>
                    <div class="text-sm font-semibold text-stone-500 dark:text-stone-400 sm:text-right">
                        <span>2026 - Sekarang</span>
                        <span class="block text-xs font-normal">Jakarta &amp; Sekitarnya</span>
                    </div>
                </div>

                <!-- REQUIRED WORK DESCRIPTION WITH NATURAL CONTEXTUAL BACKLINKS -->
                <div class="space-y-4 text-base text-stone-700 dark:text-stone-300 leading-relaxed">
                    <p>
                        Sebagai Full Stack Web Developer (Intern) sekaligus pengelola konten digital di <a href="https://rooteraplumbing.id" class="text-orange-700 dark:text-orange-400 font-semibold underline underline-offset-4 decoration-orange-400 hover:text-orange-800 dark:hover:text-orange-300 transition-colors">Rootera Plumbing</a>, saya bertanggung jawab penuh dalam merawat stabilitas performa sistem web, mengembangkan fitur internal, dan memastikan alur reservasi pelanggan berjalan mulus tanpa hambatan teknis. Saya mengelola integrasi backend Laravel untuk katalog layanan dan sistem penjadwalan teknisi.
                    </p>
                    <p>
                        Selain penulisan kode, saya memegang peranan krusial dalam menyusun strategi publikasi konten digital yang tepat sasaran, sehingga calon pelanggan dapat dengan mudah memahami solusi perpipaan profesional yang dihadirkan melalui portal resmi <a href="https://rooteraplumbing.id" class="text-orange-700 dark:text-orange-400 font-semibold underline underline-offset-4 decoration-orange-400 hover:text-orange-800 dark:hover:text-orange-300 transition-colors">layanan perpipaan Rootera Plumbing</a>. Pengalaman ini memperdalam kemampuan saya dalam menghubungkan kebutuhan bisnis riil dengan arsitektur teknis yang efisien dan ramah SEO.
                    </p>
                </div>

                <!-- Key Highlights Badge List -->
                <div class="mt-6 pt-4 border-t border-stone-100 dark:border-stone-800/80 flex flex-wrap items-center gap-2 text-xs">
                    <span class="px-3 py-1 rounded-lg bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-300 font-medium">Laravel 11/12</span>
                    <span class="px-3 py-1 rounded-lg bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-300 font-medium">Tailwind CSS</span>
                    <span class="px-3 py-1 rounded-lg bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-300 font-medium">Content Marketing</span>
                    <span class="px-3 py-1 rounded-lg bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-300 font-medium">Technical SEO</span>
                    <a href="{{ route('case-study') }}" class="ml-auto inline-flex items-center gap-1 text-orange-700 dark:text-orange-400 font-semibold hover:underline">
                        <span>Baca Studi Kasus Mendalam</span> &rarr;
                    </a>
                </div>
            </div>

            <!-- Card 2: ORENS SOLUTIONS (VERIFIKASI HURUF KAPITAL) -->
            <div class="p-6 sm:p-8 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 shadow-xs hover:shadow-md transition-all duration-300">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4 pb-4 border-b border-stone-100 dark:border-stone-800">
                    <div>
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-300 mb-2">
                            <span>Organisasi Teknologi Siswa</span>
                        </div>
                        <h4 class="text-2xl font-bold text-stone-900 dark:text-white">
                            Sekretaris Utama (Membawahi 4 Divisi)
                        </h4>
                        <p class="text-base font-semibold text-orange-700 dark:text-orange-400">
                            Orens Solutions &bull; SMK Prestasi Prima
                        </p>
                    </div>
                    <div class="text-sm font-semibold text-stone-500 dark:text-stone-400 sm:text-right">
                        <span>Kelas 10 - Sekarang</span>
                        <span class="block text-xs font-normal">Manajemen &amp; Administrasi</span>
                    </div>
                </div>

                <div class="space-y-4 text-base text-stone-700 dark:text-stone-300 leading-relaxed">
                    <p>
                        Sangat aktif berkiprah dalam kepengurusan organisasi sejak kelas 10 di SMK Prestasi Prima. Dipercaya mengemban amanah sebagai Sekretaris Utama yang memegang tanggung jawab supervisi manajerial atas 4 divisi kerja di Orens Solutions.
                    </p>
                    <p>
                        Mengelola standarisasi dokumentasi proyek perangkat lunak, penyusunan agenda strategis organisasi, pelaporan periodik, dan koordinasi alur komunikasi lintas divisi agar setiap inisiatif teknologi terlaksana dengan tertib dan tepat waktu.
                    </p>
                </div>

                <div class="mt-6 pt-4 border-t border-stone-100 dark:border-stone-800/80 flex flex-wrap gap-2 text-xs">
                    <span class="px-3 py-1 rounded-lg bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-300 font-medium">Cross-functional Leadership</span>
                    <span class="px-3 py-1 rounded-lg bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-300 font-medium">Technical Documentation</span>
                    <span class="px-3 py-1 rounded-lg bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-300 font-medium">Project Coordination</span>
                </div>
            </div>

            <!-- Card 3: SMK PRESTASI PRIMA (VERIFIKASI HURUF KAPITAL) -->
            <div class="p-6 sm:p-8 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 shadow-xs transition-all duration-300">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4 pb-4 border-b border-stone-100 dark:border-stone-800">
                    <div>
                        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-300 mb-2">
                            <span>Pendidikan Formal Kejuruan</span>
                        </div>
                        <h4 class="text-2xl font-bold text-stone-900 dark:text-white">
                            Siswa Jurusan Pengembangan Perangkat Lunak
                        </h4>
                        <p class="text-base font-semibold text-orange-700 dark:text-orange-400">
                            SMK Prestasi Prima
                        </p>
                    </div>
                    <div class="text-sm font-semibold text-stone-500 dark:text-stone-400 sm:text-right">
                        <span>Aktif</span>
                        <span class="block text-xs font-normal">Jakarta Timur</span>
                    </div>
                </div>

                <p class="text-base text-stone-700 dark:text-stone-300 leading-relaxed">
                    Menempuh pendidikan kejuruan di SMK Prestasi Prima dengan konsentrasi pada rekayasa perangkat lunak, algoritma pemrograman, pemodelan basis data relasional MySQL, dan praktik terbaik pemrograman berbasis web menggunakan ekosistem PHP dan Laravel.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Project Showcase Section (Bentuk Grid/Card) -->
<section id="proyek" class="py-20 md:py-28 bg-stone-100/70 dark:bg-stone-900/50 border-t border-stone-200/80 dark:border-stone-800/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <h2 class="text-xs sm:text-sm font-bold uppercase tracking-wider text-orange-700 dark:text-orange-400">
                Karya &amp; Portofolio
            </h2>
            <h3 class="text-3xl sm:text-4xl font-extrabold text-stone-900 dark:text-white tracking-tight">
                Project Showcase
            </h3>
            <p class="text-base text-stone-600 dark:text-stone-400">
                Kumpulan sistem informasi dan aplikasi web yang telah saya rancang dan bangun dengan fokus pada keamanan otentikasi, skalabilitas data, dan kenyamanan pengguna.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="flex flex-col justify-between rounded-3xl bg-white dark:bg-stone-900 border {{ $project['featured'] ? 'border-2 border-orange-500 shadow-xl' : 'border-stone-200 dark:border-stone-800 shadow-xs' }} overflow-hidden hover:shadow-lg transition-all duration-300 group">
                
                <!-- Card Header Visual / Monogram -->
                <div class="p-6 pb-4">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-xs font-mono font-bold px-2.5 py-1 rounded-md bg-stone-100 dark:bg-stone-800 text-stone-700 dark:text-stone-300">
                            #0{{ $project['id'] }}
                        </span>
                        @if(isset($project['badge']))
                            <span class="text-xs font-semibold px-2.5 py-1 rounded-full {{ $project['featured'] ? 'bg-orange-100 text-orange-800 dark:bg-orange-900/80 dark:text-orange-200 border border-orange-200 dark:border-orange-800' : 'bg-amber-100 text-amber-900 dark:bg-amber-950 dark:text-amber-200' }}">
                                {{ $project['badge'] }}
                            </span>
                        @endif
                    </div>

                    <span class="text-xs font-medium text-orange-700 dark:text-orange-400 uppercase tracking-wider">
                        {{ $project['category'] }}
                    </span>
                    <h4 class="text-2xl font-bold text-stone-900 dark:text-white mt-1 group-hover:text-orange-600 dark:group-hover:text-orange-400 transition-colors">
                        {{ $project['title'] }}
                    </h4>

                    <p class="text-sm text-stone-600 dark:text-stone-400 mt-3 leading-relaxed">
                        {{ $project['description'] }}
                    </p>
                </div>

                <!-- Features & Tech Stack -->
                <div class="px-6 py-4 bg-stone-50/50 dark:bg-stone-800/30 border-t border-stone-100 dark:border-stone-800/80 space-y-4">
                    <div>
                        <span class="block text-xs font-semibold text-stone-700 dark:text-stone-300 mb-2">Fitur Unggulan:</span>
                        <ul class="space-y-1 text-xs text-stone-600 dark:text-stone-400">
                            @foreach($project['highlights'] as $highlight)
                            <li class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-orange-500 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                <span>{{ $highlight }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Tech Tags -->
                    <div class="flex flex-wrap gap-1.5 pt-2">
                        @foreach($project['tech'] as $t)
                        <span class="text-[11px] font-mono px-2 py-0.5 rounded-md bg-white dark:bg-stone-800 border border-stone-200 dark:border-stone-700 text-stone-700 dark:text-stone-300">
                            {{ $t }}
                        </span>
                        @endforeach
                    </div>
                </div>

                <!-- Card Action Footer -->
                <div class="px-6 py-4 bg-white dark:bg-stone-900 border-t border-stone-100 dark:border-stone-800 flex items-center justify-between text-xs">
                    @if(isset($project['link']))
                        <a href="{{ $project['link'] }}" class="w-full inline-flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl font-semibold bg-orange-700 hover:bg-orange-800 active:bg-orange-900 text-white transition-colors shadow-xs hover:shadow-md">
                            <span>Baca Studi Kasus Terkait</span>
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    @else
                        <span class="text-stone-500 dark:text-stone-400 font-medium flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-amber-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            Selesai &amp; Teruji
                        </span>
                        <span class="text-orange-700 dark:text-orange-400 font-semibold">Laravel Stack</span>
                    @endif
                </div>

            </div>
            @endforeach
        </div>

        <!-- Featured Project Banner to Case Study (Warm Atmosphere) -->
        <div class="mt-16 p-8 sm:p-10 rounded-3xl bg-gradient-to-r from-stone-900 via-[#1c1917] to-stone-950 text-white shadow-xl border border-orange-500/25 relative overflow-hidden">
            <div class="absolute -right-12 -bottom-12 w-64 h-64 bg-orange-500/15 rounded-full blur-2xl"></div>
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">
                <div class="lg:col-span-8 space-y-3">
                    <span class="text-xs uppercase tracking-wider font-semibold px-3 py-1 rounded-full bg-orange-500/20 text-orange-300 border border-orange-500/30">
                        Technical Deep-Dive
                    </span>
                    <h4 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                        Optimasi Performa Web &amp; Arsitektur Sistem Layanan Rootera Plumbing
                    </h4>
                    <p class="text-sm sm:text-base text-stone-300 leading-relaxed max-w-2xl">
                        Pelajari bagaimana saya merekayasa ulang arsitektur database, mengimplementasikan clean code Laravel, dan mempercepat form booking layanan pelanggan hingga mencapai skor performa maksimal.
                    </p>
                </div>
                <div class="lg:col-span-4 flex lg:justify-end">
                    <a href="{{ route('case-study') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl text-sm font-bold text-white bg-orange-700 hover:bg-orange-800 active:bg-orange-900 transition-colors shadow-md hover:shadow-lg">
                        <span>Buka Halaman Studi Kasus</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact & Collaboration Section -->
<section id="kontak" class="py-20 md:py-28">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="p-8 sm:p-12 rounded-3xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 shadow-xl text-center space-y-8">
            <div class="max-w-2xl mx-auto space-y-3">
                <span class="text-xs sm:text-sm font-bold uppercase tracking-wider text-orange-700 dark:text-orange-400">
                    Mari Terhubung
                </span>
                <h3 class="text-3xl sm:text-4xl font-extrabold text-stone-900 dark:text-white tracking-tight">
                    Tertarik Berkolaborasi atau Diskusi Proyek?
                </h3>
                <p class="text-base text-stone-600 dark:text-stone-400">
                    Saya selalu bersemangat untuk mengeksplorasi teknologi baru, berbagi gagasan seputar arsitektur web Laravel, dan berkontribusi secara nyata dalam pengembangan software berkualitas.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 max-w-3xl mx-auto pt-2">
                <!-- Location -->
                <div class="p-5 rounded-2xl bg-stone-50 dark:bg-stone-800/50 border border-stone-200/80 dark:border-stone-800">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 dark:bg-orange-950 flex items-center justify-center text-orange-600 dark:text-orange-400 mx-auto mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <span class="block text-xs font-medium text-stone-500 dark:text-stone-400">Lokasi</span>
                    <span class="text-sm font-bold text-stone-800 dark:text-stone-200">Jakarta, Indonesia</span>
                </div>

                <!-- Role Status (VERIFIKASI HURUF KAPITAL) -->
                <div class="p-5 rounded-2xl bg-stone-50 dark:bg-stone-800/50 border border-stone-200/80 dark:border-stone-800">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 dark:bg-orange-950 flex items-center justify-center text-orange-600 dark:text-orange-400 mx-auto mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span class="block text-xs font-medium text-stone-500 dark:text-stone-400">Status Magang</span>
                    <span class="text-sm font-bold text-stone-800 dark:text-stone-200">Rootera Plumbing (Active PKL)</span>
                </div>

                <!-- Education (VERIFIKASI HURUF KAPITAL) -->
                <div class="p-5 rounded-2xl bg-stone-50 dark:bg-stone-800/50 border border-stone-200/80 dark:border-stone-800">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 dark:bg-orange-950 flex items-center justify-center text-orange-600 dark:text-orange-400 mx-auto mb-3">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                        </svg>
                    </div>
                    <span class="block text-xs font-medium text-stone-500 dark:text-stone-400">Institusi</span>
                    <span class="text-sm font-bold text-stone-800 dark:text-stone-200">SMK Prestasi Prima</span>
                </div>
            </div>

            <!-- Call to action button -->
            <div class="pt-4">
                <a href="https://rooteraplumbing.id" target="_blank" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl text-base font-bold text-white bg-orange-700 hover:bg-orange-800 active:bg-orange-900 shadow-xs hover:shadow-md transition-all duration-200">
                    <span>Kunjungi Portal Resmi Rootera Plumbing</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
