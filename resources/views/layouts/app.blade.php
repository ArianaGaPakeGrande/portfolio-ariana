<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Desty Mikayla Ariana | Full Stack Web Developer & Pengelola Konten Digital')</title>
    <meta name="description" content="@yield('meta_description', 'Portofolio profesional Desty Mikayla Ariana - Full Stack Web Developer (Intern) di Rootera Plumbing dan Pengelola Konten Digital. Siswa SMK Prestasi Prima & Sekretaris Utama Orens Solutions.')">
    <meta name="keywords" content="Desty Mikayla Ariana, Full Stack Web Developer, Laravel, PHP, MySQL, Rootera Plumbing, SMK Prestasi Prima, Orens Solutions, J&J Group, Web Performance">
    <meta name="author" content="Desty Mikayla Ariana">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Desty Mikayla Ariana | Full Stack Web Developer')">
    <meta property="og:description" content="@yield('meta_description', 'Portofolio profesional Desty Mikayla Ariana - Full Stack Web Developer (Intern) di Rootera Plumbing.')">
    <meta property="og:image" content="{{ asset('images/desty-profile.jpg') }}">
    <meta property="og:site_name" content="Desty Mikayla Ariana Portfolio">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Desty Mikayla Ariana | Full Stack Web Developer')">
    <meta name="twitter:description" content="@yield('meta_description', 'Portofolio profesional Desty Mikayla Ariana - Full Stack Web Developer.')">
    <meta name="twitter:image" content="{{ asset('images/desty-profile.jpg') }}">

    <!-- Theme Color - Warm Palette -->
    <meta name="theme-color" content="#ea580c" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#141210" media="(prefers-color-scheme: dark)">

    <!-- Inline Script to Prevent FOUC (Flash of Unstyled Content) on Dark Mode -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <!-- Schema.org JSON-LD Structured Data for Technical SEO -->
    @stack('schema')

    <!-- Styles & Scripts via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#faf7f2] text-stone-800 dark:bg-[#141210] dark:text-stone-100 antialiased selection:bg-orange-500 selection:text-white transition-colors duration-300 min-h-screen flex flex-col justify-between font-sans">

    <!-- Header & Navigation Bar -->
    <header id="main-header" class="sticky top-0 z-50 transition-all duration-300 bg-transparent border-b border-transparent">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between" aria-label="Navigasi Utama">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="group flex items-center gap-3 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-500 rounded-lg p-1" aria-label="Beranda Desty Mikayla Ariana">
                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-orange-600 via-rose-500 to-amber-500 flex items-center justify-center text-white shadow-md shadow-orange-500/20 group-hover:scale-105 transition-transform duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-base sm:text-lg tracking-tight text-stone-900 dark:text-white group-hover:text-orange-600 dark:group-hover:text-orange-400 transition-colors">
                        Desty Mikayla Ariana
                    </span>
                    <span class="text-xs text-stone-500 dark:text-stone-400 font-medium hidden sm:inline-block">
                        Full Stack Web Developer
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex items-center gap-1 lg:gap-2">
                <a href="{{ route('home') }}#beranda" class="px-3 py-2 rounded-lg text-sm font-medium text-stone-700 dark:text-stone-200 hover:text-orange-600 dark:hover:text-orange-400 hover:bg-stone-100/80 dark:hover:bg-stone-800/60 transition-colors">
                    Beranda
                </a>
                <a href="{{ route('home') }}#tentang" class="px-3 py-2 rounded-lg text-sm font-medium text-stone-700 dark:text-stone-200 hover:text-orange-600 dark:hover:text-orange-400 hover:bg-stone-100/80 dark:hover:bg-stone-800/60 transition-colors">
                    Tentang
                </a>
                <a href="{{ route('home') }}#keahlian" class="px-3 py-2 rounded-lg text-sm font-medium text-stone-700 dark:text-stone-200 hover:text-orange-600 dark:hover:text-orange-400 hover:bg-stone-100/80 dark:hover:bg-stone-800/60 transition-colors">
                    Keahlian
                </a>
                <a href="{{ route('home') }}#pengalaman" class="px-3 py-2 rounded-lg text-sm font-medium text-stone-700 dark:text-stone-200 hover:text-orange-600 dark:hover:text-orange-400 hover:bg-stone-100/80 dark:hover:bg-stone-800/60 transition-colors">
                    Pengalaman
                </a>
                <a href="{{ route('home') }}#proyek" class="px-3 py-2 rounded-lg text-sm font-medium text-stone-700 dark:text-stone-200 hover:text-orange-600 dark:hover:text-orange-400 hover:bg-stone-100/80 dark:hover:bg-stone-800/60 transition-colors">
                    Proyek
                </a>
                <a href="{{ route('case-study') }}" class="relative px-3 py-2 rounded-lg text-sm font-medium text-orange-700 dark:text-orange-300 hover:bg-orange-50 dark:hover:bg-orange-950/40 transition-colors flex items-center gap-1.5 {{ request()->routeIs('case-study') ? 'bg-orange-100/80 dark:bg-orange-950/60 text-orange-700 dark:text-orange-300 font-semibold' : '' }}">
                    <span>Studi Kasus</span>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-[10px] font-semibold text-white bg-orange-700 shadow-2xs">
                        Featured
                    </span>
                </a>
                <a href="{{ route('home') }}#kontak" class="px-3 py-2 rounded-lg text-sm font-medium text-stone-700 dark:text-stone-200 hover:text-orange-600 dark:hover:text-orange-400 hover:bg-stone-100/80 dark:hover:bg-stone-800/60 transition-colors">
                    Kontak
                </a>
            </div>

            <!-- Action Controls: Theme Switcher & Mobile Hamburger -->
            <div class="flex items-center gap-3">
                <!-- Light / Dark Mode Toggle Button (Pure Vanilla JS) -->
                <div>
                    <button type="button"
                            id="theme-toggle-btn"
                            class="relative p-2.5 rounded-xl border border-stone-200 dark:border-stone-800 bg-white dark:bg-stone-900 text-stone-600 dark:text-stone-300 hover:text-orange-600 dark:hover:text-orange-400 hover:border-orange-300 dark:hover:border-orange-700 shadow-xs transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-500"
                            aria-label="Beralih tema terang/gelap"
                            title="Ganti Mode Tema">
                        <!-- Sun Icon (shown in dark mode) -->
                        <svg class="w-5 h-5 text-amber-400 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                        <!-- Moon Icon (shown in light mode) -->
                        <svg class="w-5 h-5 text-stone-600 block dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </button>
                </div>

                <!-- Hire Me / Quick Contact CTA (Desktop) -->
                <a href="{{ route('home') }}#kontak" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold text-white bg-orange-700 hover:bg-orange-800 active:bg-orange-900 shadow-xs hover:shadow-md transition-all duration-200">
                    <span>Hubungi</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>

                <!-- Mobile Menu Button (Hamburger) -->
                <button type="button"
                        id="mobile-menu-btn"
                        class="md:hidden p-2.5 rounded-xl border border-stone-200 dark:border-stone-800 bg-white dark:bg-stone-900 text-stone-700 dark:text-stone-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-500"
                        aria-expanded="false"
                        aria-label="Buka Menu Navigasi">
                    <svg id="mobile-menu-open-icon" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="mobile-menu-close-icon" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </nav>

        <!-- Mobile Drawer Navigation -->
        <div id="mobile-menu-drawer"
             class="hidden md:hidden bg-[#faf7f2]/95 dark:bg-[#141210]/95 backdrop-blur-lg border-b border-stone-200 dark:border-stone-800 px-4 pt-3 pb-6 space-y-1">
            <a href="{{ route('home') }}#beranda" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-medium text-stone-800 dark:text-stone-100 hover:bg-stone-100 dark:hover:bg-stone-800">
                Beranda
            </a>
            <a href="{{ route('home') }}#tentang" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-medium text-stone-800 dark:text-stone-100 hover:bg-stone-100 dark:hover:bg-stone-800">
                Tentang
            </a>
            <a href="{{ route('home') }}#keahlian" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-medium text-stone-800 dark:text-stone-100 hover:bg-stone-100 dark:hover:bg-stone-800">
                Keahlian
            </a>
            <a href="{{ route('home') }}#pengalaman" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-medium text-stone-800 dark:text-stone-100 hover:bg-stone-100 dark:hover:bg-stone-800">
                Pengalaman
            </a>
            <a href="{{ route('home') }}#proyek" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-medium text-stone-800 dark:text-stone-100 hover:bg-stone-100 dark:hover:bg-stone-800">
                Proyek
            </a>
            <a href="{{ route('case-study') }}" class="mobile-nav-link flex items-center justify-between px-3 py-2.5 rounded-lg text-base font-medium text-orange-700 dark:text-orange-300 bg-orange-50 dark:bg-orange-950/40">
                <span>Studi Kasus Rootera</span>
                <span class="text-xs px-2 py-0.5 rounded-full bg-orange-700 text-white font-semibold">Featured</span>
            </a>
            <a href="{{ route('home') }}#kontak" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-medium text-stone-800 dark:text-stone-100 hover:bg-stone-100 dark:hover:bg-stone-800">
                Kontak
            </a>
        </div>
    </header>

    <!-- Main Content Yield -->
    <main id="main-content" class="flex-grow">
        @yield('content')
    </main>

    <!-- Professional Footer -->
    <footer class="bg-white dark:bg-stone-900 border-t border-stone-200 dark:border-stone-800 transition-colors duration-300 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">
                <!-- Col 1: Brand & Profile Info -->
                <div class="md:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-orange-600 via-rose-500 to-amber-500 flex items-center justify-center text-white shadow-xs">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <span class="font-bold text-lg text-stone-900 dark:text-white">
                            Desty Mikayla Ariana
                        </span>
                    </div>
                    <p class="text-sm text-stone-600 dark:text-stone-400 max-w-md leading-relaxed">
                        Full Stack Web Developer (Intern) di Rootera Plumbing dan Pengelola Konten Digital. Berdedikasi tinggi dalam merancang arsitektur web modern, performa tinggi, dan clean code berbasis Laravel &amp; Tailwind CSS.
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold bg-amber-50 text-amber-900 dark:bg-amber-950/80 dark:text-amber-300 border border-amber-200/90 dark:border-amber-800/90">
                            <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
                            Terbuka untuk Diskusi &amp; Kolaborasi
                        </span>
                    </div>
                </div>

                <!-- Col 2: Navigasi Cepat -->
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-stone-900 dark:text-white mb-4">
                        Navigasi
                    </h3>
                    <ul class="space-y-2.5 text-sm">
                        <li>
                            <a href="{{ route('home') }}#beranda" class="text-stone-600 dark:text-stone-400 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#keahlian" class="text-stone-600 dark:text-stone-400 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">
                                Tech Stack
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#pengalaman" class="text-stone-600 dark:text-stone-400 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">
                                Pengalaman Kerja
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#proyek" class="text-stone-600 dark:text-stone-400 hover:text-orange-600 dark:hover:text-orange-400 transition-colors">
                                Portofolio Proyek
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('case-study') }}" class="text-orange-700 dark:text-orange-400 font-semibold hover:underline">
                                Studi Kasus Rootera Plumbing
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 3: Hubungi & Institusi (VERIFIKASI HURUF KAPITAL) -->
                <div>
                    <h3 class="text-sm font-semibold uppercase tracking-wider text-stone-900 dark:text-white mb-4">
                        Koneksi &amp; Institusi
                    </h3>
                    <ul class="space-y-2.5 text-sm text-stone-600 dark:text-stone-400">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-orange-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                            <span>Rootera Plumbing (J&amp;J Group)</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-orange-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                            </svg>
                            <span>SMK Prestasi Prima</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-orange-500 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span>Orens Solutions (Sekretaris Utama)</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar with Required Copyright & Backlink Notice -->
            <div class="pt-8 border-t border-stone-200 dark:border-stone-800 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-stone-500 dark:text-stone-400 text-center sm:text-left">
                <!-- REQUIRED FOOTER TEXT WITH BACKLINK -->
                <p>
                    © 2026 Desty Mikayla Ariana. Proudly part of <a href="https://rooteraplumbing.id" class="text-orange-700 dark:text-orange-400 hover:text-orange-800 dark:hover:text-orange-300 font-semibold underline underline-offset-4 decoration-orange-400/50 hover:decoration-orange-600 transition-colors">Rootera Plumbing IT Division</a>.
                </p>

                <!-- Build Information -->
                <div class="flex items-center gap-4 text-stone-400 dark:text-stone-500">
                    <span>Built with Laravel &amp; Tailwind CSS</span>
                    <span>&bull;</span>
                    <a href="#main-content" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors inline-flex items-center gap-1">
                        <span>Kembali ke atas</span>
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
