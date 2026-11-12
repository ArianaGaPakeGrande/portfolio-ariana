<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio homepage.
     */
    public function index(): View
    {
        $projects = [
            [
                'id' => 1,
                'title' => 'Website Berita',
                'category' => 'Web Application & CMS',
                'description' => 'Platform portal berita dinamis dengan kategorisasi berita bertingkat, artikel editorial, sistem komentar interaktif, dan optimasi performa SEO untuk kecepatan pembacaan tinggi.',
                'tech' => ['PHP', 'Laravel', 'Tailwind CSS', 'MySQL'],
                'highlights' => ['Dynamic Content Management', 'SEO-Optimized Slugs & Meta', 'Responsive Editorial Grid'],
                'icon' => 'newspaper',
                'featured' => false,
            ],
            [
                'id' => 2,
                'title' => 'Sistem Informasi Perpustakaan',
                'badge' => 'Multi-Auth: 3 Role',
                'category' => 'Enterprise Information System',
                'description' => 'Sistem manajemen peminjaman dan inventaris buku terintegrasi. Mendukung 3 tingkat hak akses berjenjang (Admin, Pustakawan/Staff, dan Anggota/Siswa) dengan pelacakan denda keterlambatan otomatis.',
                'tech' => ['PHP', 'Laravel', 'Blade', 'MySQL', 'Tailwind CSS'],
                'highlights' => ['Role-Based Access Control (RBAC)', 'Automated Late Fee Calculation', 'Exportable Circulation Reports'],
                'icon' => 'book',
                'featured' => false,
            ],
            [
                'id' => 3,
                'title' => 'Aplikasi Web Kasir POS',
                'badge' => 'Multi-Auth: 3 Role',
                'category' => 'Point of Sales System',
                'description' => 'Aplikasi kasir berbasis cloud untuk efisiensi transaksi penjualan harian, pemantauan stok real-time, pencetakan struk digital, dan audit keuangan dengan hak akses Owner, Manajer Toko, dan Kasir.',
                'tech' => ['PHP', 'Laravel', 'JavaScript', 'MySQL', 'Tailwind CSS'],
                'highlights' => ['Multi-Role Permissions (Owner/Manager/Cashier)', 'Real-time Stock Management', 'Financial Profit & Loss Reports'],
                'icon' => 'shopping-cart',
                'featured' => false,
            ],
            [
                'id' => 4,
                'title' => 'Website Absensi',
                'category' => 'Internal Management Tool',
                'description' => 'Aplikasi pencatatan absensi digital terstruktur untuk organisasi dan sekolah. Dilengkapi validasi waktu kehadiran, klasifikasi status (Hadir, Sakit, Izin, Alpa), serta rekap data periodik.',
                'tech' => ['PHP', 'Laravel', 'JavaScript', 'MySQL', 'Tailwind CSS'],
                'highlights' => ['Automated Attendance Logs', 'Status Categorization', 'CSV/PDF Report Export'],
                'icon' => 'clock',
                'featured' => false,
            ],
            [
                'id' => 5,
                'title' => 'Rootera Intern Portal',
                'badge' => 'Production / Featured Project',
                'category' => 'Internal Operations & PKL Management',
                'description' => 'Sistem portal internal khusus untuk rekan kerja Praktik Kerja Lapangan (PKL) di Rootera Plumbing. Mencakup sistem absensi harian, pengumpulan tugas dan progress harian, serta manajemen jadwal operasional.',
                'tech' => ['PHP', 'Laravel', 'JavaScript', 'MySQL', 'Tailwind CSS', 'Git'],
                'highlights' => ['Daily PKL Schedule Management', 'Assignment & Milestone Submission', 'Attendance Verification Dashboard'],
                'icon' => 'building-office',
                'featured' => true,
                'link' => route('case-study'),
            ],
        ];

        $techStack = [
            [
                'name' => 'PHP',
                'role' => 'Backend Core',
                'level' => 'Advanced',
                'description' => 'Object-Oriented Programming modern, Strong Typing (PHP 8+), Design Patterns, & Clean Architecture.',
                'icon' => 'php',
                'category' => 'Backend',
            ],
            [
                'name' => 'Laravel',
                'role' => 'Backend Framework',
                'level' => 'Advanced',
                'description' => 'MVC architecture, Eloquent ORM optimization, Middleware, Multi-auth RBAC, Caching, & REST API development.',
                'icon' => 'laravel',
                'category' => 'Backend',
            ],
            [
                'name' => 'JavaScript',
                'role' => 'Frontend Interactivity',
                'level' => 'Intermediate',
                'description' => 'ES6+, Asynchronous programming, Fetch/AJAX, DOM manipulation, dan modern browser APIs.',
                'icon' => 'javascript',
                'category' => 'Frontend',
            ],
            [
                'name' => 'Tailwind CSS',
                'role' => 'Modern Styling Engine',
                'level' => 'Advanced',
                'description' => 'Utility-first styling, fluid responsiveness, custom design tokens, dark mode variant, dan UI clean-slate styling.',
                'icon' => 'tailwind',
                'category' => 'Frontend',
            ],
            [
                'name' => 'MySQL',
                'role' => 'Relational Database',
                'level' => 'Intermediate',
                'description' => 'Schema normalization, indexing strategies, complex joins, query profiling, dan optimasi performa transaksi.',
                'icon' => 'mysql',
                'category' => 'Database',
            ],
            [
                'name' => 'Git',
                'role' => 'Version Control & Workflow',
                'level' => 'Intermediate',
                'description' => 'Git branching strategies, commit hygiene, repository management, collaborative PRs, dan CI/CD readiness.',
                'icon' => 'git',
                'category' => 'Tools',
            ],
        ];

        return view('index', compact('projects', 'techStack'));
    }

    /**
     * Display the dedicated case study page.
     */
    public function caseStudy(): View
    {
        return view('case-study');
    }
}
