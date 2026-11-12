@extends('layouts.app')

@section('title', 'Studi Kasus: Optimasi Performa Web & Arsitektur Sistem Layanan Rootera Plumbing | Desty Mikayla Ariana')
@section('meta_description', 'Artikel teknis studi kasus Desty Mikayla Ariana: Rekayasa arsitektur database, clean code Laravel, caching, dan technical SEO pada sistem layanan Rootera Plumbing (J&J Group).')

@push('schema')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "TechArticle",
  "headline": "Optimasi Performa Web & Arsitektur Sistem Layanan Rootera Plumbing",
  "description": "Studi kasus rekayasa ulang performa backend, optimasi query database, clean code Laravel, dan technical SEO pada website Rootera Plumbing di bawah naungan J&J Group.",
  "author": {
    "@type": "Person",
    "name": "Desty Mikayla Ariana",
    "jobTitle": "Full Stack Web Developer (Intern)"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Rootera Plumbing",
    "url": "https://rooteraplumbing.id"
  },
  "datePublished": "2026-03-01",
  "dateModified": "2026-03-15",
  "articleSection": "Web Performance & Backend Architecture",
  "keywords": ["Rootera Plumbing", "J&J Group", "Laravel Caching", "Database Optimization", "Core Web Vitals", "Technical SEO", "Clean Code"]
}
</script>
@endpush

@section('content')
<!-- Article Hero & Header (Warm Design) -->
<header class="relative pt-12 pb-16 md:pt-16 md:pb-24 border-b border-stone-200/80 dark:border-stone-800/80 overflow-hidden">
    <!-- Ambient Glow Warm Background -->
    <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-gradient-to-b from-orange-500/15 via-rose-500/10 to-transparent rounded-full blur-3xl pointer-events-none -z-10"></div>
    <div class="absolute top-20 right-10 w-64 h-64 bg-amber-400/10 rounded-full blur-2xl pointer-events-none -z-10"></div>

    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb Navigation -->
        <nav class="flex items-center gap-2 text-xs font-medium text-stone-500 dark:text-stone-400 mb-8" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">Beranda</a>
            <span>/</span>
            <a href="{{ route('home') }}#proyek" class="hover:text-orange-600 dark:hover:text-orange-400 transition-colors">Portofolio</a>
            <span>/</span>
            <span class="text-orange-700 dark:text-orange-400 font-semibold">Studi Kasus Teknis</span>
        </nav>

        <!-- Category & Badges -->
        <div class="flex flex-wrap items-center gap-2.5 mb-6">
            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-orange-100 text-orange-900 dark:bg-orange-900/80 dark:text-orange-200 border border-orange-200 dark:border-orange-800">
                Technical Case Study
            </span>
            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-stone-100 text-stone-700 dark:bg-stone-800 dark:text-stone-300">
                Backend Architecture &bull; Laravel &bull; SEO
            </span>
            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-900 dark:bg-amber-950/80 dark:text-amber-200">
                Lighthouse 98+
            </span>
        </div>

        <!-- Title -->
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-stone-900 dark:text-white tracking-tight leading-tight mb-6">
            Optimasi Performa Web &amp; Arsitektur Sistem Layanan Rootera Plumbing
        </h1>

        <!-- Meta Author & Reading Details -->
        <div class="flex flex-wrap items-center justify-between gap-4 p-4 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 text-xs sm:text-sm text-stone-600 dark:text-stone-400">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/desty-profile.jpg') }}" 
                     alt="Desty Mikayla Ariana" 
                     class="w-10 h-10 rounded-xl object-cover object-center ring-2 ring-orange-700/30 dark:ring-orange-500/40 shadow-xs"
                     width="40"
                     height="40">
                <div>
                    <span class="block font-bold text-stone-900 dark:text-white">Desty Mikayla Ariana</span>
                    <span class="text-xs text-stone-500 dark:text-stone-400">Full Stack Web Developer (Intern) di Rootera Plumbing</span>
                </div>
            </div>
            <div class="flex items-center gap-4 text-xs font-medium">
                <span class="flex items-center gap-1 text-orange-700 dark:text-orange-400">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    6 Menit Baca
                </span>
                <span>&bull;</span>
                <span>Q1 2026</span>
            </div>
        </div>
    </div>
</header>

<!-- Main Article Content Body -->
<article class="py-16 md:py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

        <!-- Executive Impact Dashboard / Metrics (Warm Colors) -->
        <section class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="p-5 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 text-center shadow-xs">
                <span class="block text-3xl sm:text-4xl font-extrabold text-orange-600 dark:text-orange-400">98</span>
                <span class="block text-xs font-semibold text-stone-700 dark:text-stone-300 mt-1">Lighthouse Score</span>
                <span class="text-[11px] text-stone-500 dark:text-stone-400">Performance (Mobile)</span>
            </div>
            <div class="p-5 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 text-center shadow-xs">
                <span class="block text-3xl sm:text-4xl font-extrabold text-rose-600 dark:text-rose-400">-74%</span>
                <span class="block text-xs font-semibold text-stone-700 dark:text-stone-300 mt-1">Query Latency</span>
                <span class="text-[11px] text-stone-500 dark:text-stone-400">Database Execution</span>
            </div>
            <div class="p-5 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 text-center shadow-xs">
                <span class="block text-3xl sm:text-4xl font-extrabold text-amber-600 dark:text-amber-400">160ms</span>
                <span class="block text-xs font-semibold text-stone-700 dark:text-stone-300 mt-1">Time To First Byte</span>
                <span class="text-[11px] text-stone-500 dark:text-stone-400">Server TTFB</span>
            </div>
            <div class="p-5 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 text-center shadow-xs">
                <span class="block text-3xl sm:text-4xl font-extrabold text-orange-500">100%</span>
                <span class="block text-xs font-semibold text-stone-700 dark:text-stone-300 mt-1">Core Web Vitals</span>
                <span class="text-[11px] text-stone-500 dark:text-stone-400">LCP, FID, &amp; CLS Pass</span>
            </div>
        </section>

        <!-- SECTION 1: KONTEKS BISNIS (DENGAN PENEGASAN J&J GROUP & BUKAN SEDOT WC) -->
        <section class="space-y-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-orange-100 dark:bg-orange-950 text-orange-700 dark:text-orange-400 font-mono font-bold flex items-center justify-center text-sm">
                    01
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-stone-900 dark:text-white">
                    Konteks Bisnis: Solusi Rekayasa Perpipaan Modern
                </h2>
            </div>

            <div class="text-base sm:text-lg text-stone-700 dark:text-stone-300 leading-relaxed space-y-4">
                <p>
                    <a href="https://rooteraplumbing.id" class="text-orange-700 dark:text-orange-400 font-semibold underline underline-offset-4 decoration-orange-400 hover:text-orange-800 dark:hover:text-orange-300 transition-colors">Rootera Plumbing</a> adalah perusahaan spesialis perpipaan yang beroperasi di bawah naungan <strong>J&amp;J Group</strong>. Sebagai penyedia solusi infrastruktur sanitasi dan perpipaan terkemuka, fokus layanan perusahaan berpusat pada tiga pilar utama:
                </p>

                <ul class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                    <li class="p-4 rounded-xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-1 shadow-2xs">
                        <span class="block text-xs font-bold uppercase tracking-wider text-orange-700 dark:text-orange-400">Pilar 1</span>
                        <h3 class="font-bold text-stone-900 dark:text-white text-base">Instalasi Pipa Modern</h3>
                        <p class="text-xs text-stone-600 dark:text-stone-400">Pemasangan jalur pipa air bersih dan buangan berstandar teknik tinggi untuk perumahan serta gedung komersial.</p>
                    </li>
                    <li class="p-4 rounded-xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-1 shadow-2xs">
                        <span class="block text-xs font-bold uppercase tracking-wider text-orange-700 dark:text-orange-400">Pilar 2</span>
                        <h3 class="font-bold text-stone-900 dark:text-white text-base">Deteksi Pipa Bocor</h3>
                        <p class="text-xs text-stone-600 dark:text-stone-400">Pelacakan kebocoran tersembunyi tanpa merusak struktur lantai atau dinding melalui sensor akustik dan kamera inspeksi.</p>
                    </li>
                    <li class="p-4 rounded-xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-1 shadow-2xs">
                        <span class="block text-xs font-bold uppercase tracking-wider text-orange-700 dark:text-orange-400">Pilar 3</span>
                        <h3 class="font-bold text-stone-900 dark:text-white text-base">Perbaikan Saluran Mampet</h3>
                        <p class="text-xs text-stone-600 dark:text-stone-400">Pembersihan kerak pipa, sisa lemak, dan gutter saluran air restoran dengan mesin drain cleaner spiral modern.</p>
                    </li>
                </ul>

                <!-- CRITICAL EMPHASIS CALLOUT: BUKAN PENYEDIA JASA SEDOT WC -->
                <div class="p-6 rounded-2xl bg-amber-50/90 dark:bg-stone-900 border-2 border-amber-300/90 dark:border-amber-700/80 shadow-xs space-y-2">
                    <div class="flex items-center gap-2 text-amber-900 dark:text-amber-300 font-bold text-base">
                        <svg class="w-5 h-5 text-amber-600 dark:text-amber-400 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                        <span>Penegasan Batasan Layanan Perusahaan:</span>
                    </div>
                    <p class="text-sm sm:text-base text-amber-950 dark:text-amber-200 leading-relaxed font-medium">
                        Perlu <span class="underline decoration-amber-500 font-bold">digarisbawahi dan ditegaskan bahwa Rootera Plumbing BUKAN penyedia jasa sedot WC</span>. Rootera Plumbing memposisikan dirinya secara eksklusif sebagai spesialis rekayasa mekanikal pipa, deteksi kebocoran non-destruktif, dan pemulihan aliran drainase pipa mampet (seperti gutter restoran, floor drain, dan bak kontrol), bukan layanan pengurasan tangki septik limbah tinja.
                    </p>
                </div>

                <p>
                    Klarifikasi identitas bisnis ini sangat menentukan arah strategi digital. Website harus mampu mengedukasi pengunjung dengan cepat bahwa ketika saluran buangan tersumbat lemak atau mengalami kebocoran misterius di dalam dinding, solusi yang tepat adalah menghubungi <a href="https://rooteraplumbing.id" class="text-orange-700 dark:text-orange-400 font-semibold underline underline-offset-4 decoration-orange-400 hover:text-orange-800 dark:hover:text-orange-300 transition-colors">Rootera Plumbing</a> untuk penanganan mekanikal berteknologi canggih.
                </p>
            </div>
        </section>

        <!-- SECTION 2: TANTANGAN TEKNIS -->
        <section class="space-y-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-orange-100 dark:bg-orange-950 text-orange-700 dark:text-orange-400 font-mono font-bold flex items-center justify-center text-sm">
                    02
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-stone-900 dark:text-white">
                    Tantangan Teknis: Menghilangkan Hambatan Konversi
                </h2>
            </div>

            <p class="text-base sm:text-lg text-stone-700 dark:text-stone-300 leading-relaxed">
                Sebelum dilakukan optimasi terstruktur, platform web menghadapi sejumlah hambatan teknis serius yang berdampak langsung pada pengalaman pengguna dan visibilitas di mesin pencari:
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Bottleneck 1 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-3 shadow-2xs">
                    <div class="w-10 h-10 rounded-xl bg-rose-50 dark:bg-rose-950/60 text-rose-600 dark:text-rose-400 flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-stone-900 dark:text-white">Skor Core Web Vitals Rendah</h3>
                    <p class="text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                        Largest Contentful Paint (LCP) mencapai 3.8 detik akibat aset yang belum teroptimasi dan server render time yang lambat. Tingkat pentalan (bounce rate) meningkat drastis pada pengguna ponsel.
                    </p>
                </div>

                <!-- Bottleneck 2 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-3 shadow-2xs">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 dark:bg-amber-950/60 text-amber-700 dark:text-amber-400 flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2 1 3 3 3h10c2 0 3-1 3-3V7c0-2-1-3-3-3H7C5 4 4 5 4 7z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-stone-900 dark:text-white">N+1 Queries &amp; Unindexed DB</h3>
                    <p class="text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                        Kueri relasional pemanggilan kategori layanan pipa dan testimoni pelanggan dieksekusi berulang-ulang tanpa eager loading, menimbulkan puluhan kueri MySQL yang mubazir per request.
                    </p>
                </div>

                <!-- Bottleneck 3 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-3 shadow-2xs">
                    <div class="w-10 h-10 rounded-xl bg-orange-50 dark:bg-orange-950/60 text-orange-600 dark:text-orange-400 flex items-center justify-center font-bold">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-bold text-stone-900 dark:text-white">Form Booking Lambat &amp; Berat</h3>
                    <p class="text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                        Formulir booking reservasi teknisi pipa memiliki alur validasi monolitik yang berat, sehingga calon pelanggan yang sedang menghadapi situasi darurat pipa air sering gagal melakukan submit data.
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION 3: SOLUSI TEKNIS & ARSITEKTUR BACKEND -->
        <section class="space-y-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-orange-100 dark:bg-orange-950 text-orange-700 dark:text-orange-400 font-mono font-bold flex items-center justify-center text-sm">
                    03
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-stone-900 dark:text-white">
                    Solusi Teknis: Backend Refactoring, Caching, &amp; Clean Architecture
                </h2>
            </div>

            <!-- MANDATORY NATURAL BACKLINK PLACEMENT 1 (WARM ACCENT) -->
            <p class="text-base sm:text-lg text-stone-700 dark:text-stone-300 leading-relaxed">
                Untuk memastikan kepuasan pelanggan saat membutuhkan <a href="https://rooteraplumbing.id" class="text-orange-700 dark:text-orange-400 font-semibold underline underline-offset-4 decoration-orange-400 hover:text-orange-800 dark:hover:text-orange-300 transition-colors">jasa perbaikan saluran pipa mampet</a>, saya mengoptimalkan respons arsitektur backend Laravel agar setiap permintaan booking darurat diproses dalam waktu kurang dari 200 milidetik.
            </p>

            <div class="space-y-6">
                <!-- Solusi 1: Refactoring Database & Indexing -->
                <div class="p-6 sm:p-8 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-4 shadow-2xs">
                    <h3 class="text-xl font-bold text-stone-900 dark:text-white flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                        1. Normalisasi Basis Data &amp; Compound Indexing
                    </h3>
                    <p class="text-sm sm:text-base text-stone-600 dark:text-stone-400 leading-relaxed">
                        Saya membedah struktur tabel di MySQL dan menambahkan indeks komposit (`service_category_id`, `status`, `available_date`) pada tabel penjadwalan teknisi. Masalah N+1 diatasi secara tuntas menggunakan Eager Loading di Eloquent (`with(['category', 'technician'])`).
                    </p>
                    <div class="p-4 rounded-xl bg-stone-950 text-stone-200 font-mono text-xs overflow-x-auto border border-stone-800">
                        <span class="text-stone-500">// Optimalisasi Query Eager Loading & Caching di Service Layer</span><br>
                        <span class="text-rose-400">$services</span> = Cache::remember(<span class="text-amber-300">'rootera:services:active'</span>, now()->addHours(12), <span class="text-orange-400">function</span> () {<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class="text-rose-400">return</span> ServiceCatalog::with([<span class="text-amber-300">'category'</span>, <span class="text-amber-300">'pricingTier'</span>])<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;->where(<span class="text-amber-300">'is_active'</span>, <span class="text-orange-400">true</span>)<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;->orderBy(<span class="text-amber-300">'priority_rank'</span>)<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;->get();<br>
                        });
                    </div>
                </div>

                <!-- Solusi 2: Clean Code Laravel & Service Layer Pattern -->
                <div class="p-6 sm:p-8 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-4 shadow-2xs">
                    <h3 class="text-xl font-bold text-stone-900 dark:text-white flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                        2. Penerapan Clean Architecture &amp; Service Layer
                    </h3>
                    <p class="text-sm sm:text-base text-stone-600 dark:text-stone-400 leading-relaxed">
                        Sebelumnya, controller memuat logika validasi, manipulasi database, dan pengiriman notifikasi secara bersamaan (Fat Controller). Saya memecahnya dengan prinsip <em>Single Responsibility</em>:
                    </p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs sm:text-sm text-stone-700 dark:text-stone-300">
                        <li class="p-3 rounded-lg bg-stone-50 dark:bg-stone-800/60 border border-stone-200 dark:border-stone-700">
                            <strong>BookingFormRequest:</strong> Isolasi validasi sanitasi input nomor telepon, alamat, dan deskripsi gejala pipa.
                        </li>
                        <li class="p-3 rounded-lg bg-stone-50 dark:bg-stone-800/60 border border-stone-200 dark:border-stone-700">
                            <strong>BookingService:</strong> Enkapsulasi transaksi database atomik (`DB::transaction`) untuk reservasi jadwal teknisi.
                        </li>
                    </ul>
                </div>

                <!-- Solusi 3: Strategi Caching & Respons Form Booking -->
                <div class="p-6 sm:p-8 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-4 shadow-2xs">
                    <h3 class="text-xl font-bold text-stone-900 dark:text-white flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-orange-500"></span>
                        3. Asynchronous Form Processing &amp; Query Caching
                    </h3>
                    <!-- MANDATORY NATURAL BACKLINK PLACEMENT 2 (WARM ACCENT) -->
                    <p class="text-sm sm:text-base text-stone-600 dark:text-stone-400 leading-relaxed">
                        Begitu pula pada saat klien memesan layanan inspeksi akustik untuk <a href="https://rooteraplumbing.id" class="text-orange-700 dark:text-orange-400 font-semibold underline underline-offset-4 decoration-orange-400 hover:text-orange-800 dark:hover:text-orange-300 transition-colors">deteksi pipa bocor</a> pada bangunan bertingkat, formulir booking mengirimkan payload JSON ringan yang diverifikasi seketika di backend tanpa perlu me-reload seluruh halaman web. Respon seketika ini memangkas waktu tunggu pengguna dari 3.2 detik menjadi hanya 180ms.
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION 4: TECHNICAL SEO & CORE WEB VITALS -->
        <section class="space-y-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-orange-100 dark:bg-orange-950 text-orange-700 dark:text-orange-400 font-mono font-bold flex items-center justify-center text-sm">
                    04
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-stone-900 dark:text-white">
                    Technical SEO &amp; Optimasi Core Web Vitals
                </h2>
            </div>

            <!-- MANDATORY NATURAL BACKLINK PLACEMENT 3 (WARM ACCENT) -->
            <p class="text-base sm:text-lg text-stone-700 dark:text-stone-300 leading-relaxed">
                Sebagai pengelola konten digital di <a href="https://rooteraplumbing.id" class="text-orange-700 dark:text-orange-400 font-semibold underline underline-offset-4 decoration-orange-400 hover:text-orange-800 dark:hover:text-orange-300 transition-colors">Rootera Plumbing</a>, saya memadukan penulisan kode teknis dengan strategi search engine optimization yang solid:
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-6 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-3 shadow-2xs">
                    <h3 class="text-base font-bold text-stone-900 dark:text-white flex items-center gap-2">
                        <svg class="w-5 h-5 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                        Schema.org JSON-LD Structured Data
                    </h3>
                    <p class="text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                        Menginjeksikan markup semantik Schema.org untuk tipe <code>PlumbingService</code> dan <code>LocalBusiness</code>. Hasilnya, Google dapat menampilkan rich snippet lengkap dengan rating, jam operasional, dan cakupan wilayah penanganan.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white dark:bg-stone-900 border border-stone-200 dark:border-stone-800 space-y-3 shadow-2xs">
                    <h3 class="text-base font-bold text-stone-900 dark:text-white flex items-center gap-2">
                        <svg class="w-5 h-5 text-rose-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        Critical CSS Inlining &amp; Asset Bundling
                    </h3>
                    <p class="text-sm text-stone-600 dark:text-stone-400 leading-relaxed">
                        Memanfaatkan Vite untuk memecah berkas CSS/JS menjadi chunk terkecil, mengeliminasi render-blocking resources, dan menerapkan font-display swap sehingga Cumulative Layout Shift (CLS) berhasil ditekan ke angka 0.
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION 5: KESIMPULAN & REFLEKSI PEMBELAJARAN (WARM THEME) -->
        <section class="p-8 sm:p-10 rounded-3xl bg-stone-900 text-white space-y-6 border border-orange-500/25">
            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                Kesimpulan &amp; Dampak Terhadap Bisnis
            </h2>
            <p class="text-stone-300 text-base leading-relaxed">
                Pengalaman memimpin inisiatif optimasi performa web dan tata kelola konten di Rootera Plumbing membuktikan bahwa seorang developer tidak hanya dituntut menguasai sintaks bahasa pemrograman, melainkan harus mampu memahami denyut bisnis yang dijalani.
            </p>
            <p class="text-stone-300 text-base leading-relaxed">
                Dengan mengubah sistem web dari yang semula lambat menjadi platform berkecepatan tinggi, pelanggan yang tengah mengalami kendala kebocoran pipa atau gutter restoran mampet kini dapat langsung menjadwalkan teknisi dalam hitungan detik. Fondasi kode Laravel yang clean, modular, dan terstruktur juga mempermudah tim IT internal untuk terus mengembangkan fitur baru di masa depan.
            </p>

            <div class="pt-4 border-t border-stone-800 flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center gap-2.5 text-xs text-stone-400">
                    <img src="{{ asset('images/desty-profile.jpg') }}" 
                         alt="Desty Mikayla Ariana" 
                         class="w-6 h-6 rounded-full object-cover object-center ring-1 ring-orange-500/40"
                         width="24"
                         height="24">
                    <span>Ditulis oleh: <span class="text-orange-400 font-semibold">Desty Mikayla Ariana</span> &bull; Full Stack Developer Intern</span>
                </div>
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl text-xs font-bold text-white bg-orange-700 hover:bg-orange-800 active:bg-orange-900 transition-colors shadow-xs hover:shadow-md">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Kembali ke Beranda Portofolio</span>
                </a>
            </div>
        </section>

    </div>
</article>
@endsection
