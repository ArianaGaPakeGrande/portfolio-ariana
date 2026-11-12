<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    /**
     * Test the homepage renders successfully with required identity and content.
     */
    public function test_homepage_renders_all_required_sections_and_identity(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Verify Identity
        $response->assertSee('Desty Mikayla Ariana');
        $response->assertSee('Full Stack Web Developer (Intern) di Rootera Plumbing &amp; Pengelola Konten Digital', false);

        // Verify Required Summary Statement
        $response->assertSee(
            'Saya adalah siswa SMK Prestasi Prima yang berdedikasi tinggi di bidang teknologi. Saya sangat aktif berorganisasi sejak kelas 10 di Orens Solutions, di mana saya dipercaya menjabat sebagai Sekretaris Utama yang membawahi 4 divisi. Saat ini, saya sedang magang sebagai Full Stack Web Developer di Rootera Plumbing.'
        );

        // Verify Tech Stack
        $response->assertSee('PHP');
        $response->assertSee('Laravel');
        $response->assertSee('JavaScript');
        $response->assertDontSee('Alpine.js');
        $response->assertSee('Tailwind CSS');
        $response->assertSee('MySQL');
        $response->assertSee('Git');

        // Verify 5 Projects Showcase
        $response->assertSee('Website Berita');
        $response->assertSee('Sistem Informasi Perpustakaan');
        $response->assertSee('Multi-Auth: 3 Role');
        $response->assertSee('Aplikasi Web Kasir POS');
        $response->assertSee('Website Absensi');
        $response->assertSee('Rootera Intern Portal');

        // Verify Contextual Backlink in Experience & Footer
        $response->assertSee('https://rooteraplumbing.id');
        $response->assertSee(
            '© 2026 Desty Mikayla Ariana. Proudly part of <a href="https://rooteraplumbing.id"',
            false
        );
        $response->assertSee('Rootera Plumbing IT Division');
    }

    /**
     * Test the case study page renders with business context, technical breakdown, and SEO backlinks.
     */
    public function test_case_study_page_renders_with_required_specifications(): void
    {
        $response = $this->get('/case-study');

        $response->assertStatus(200);

        // Verify Title
        $response->assertSee('Optimasi Performa Web &amp; Arsitektur Sistem Layanan Rootera Plumbing', false);

        // Verify Business Context (J&J Group & Core Services)
        $response->assertSee('J&amp;J Group', false);
        $response->assertSee('Instalasi Pipa Modern');
        $response->assertSee('Deteksi Pipa Bocor');
        $response->assertSee('Perbaikan Saluran Mampet');
        $response->assertSee('gutter restoran');

        // Verify Explicit Statement that Rootera is NOT a sedot WC provider
        $response->assertSee('Rootera Plumbing BUKAN penyedia jasa sedot WC');

        // Verify Natural SEO Backlink Anchor Texts (No 'klik di sini', standard tag)
        $response->assertSee('<a href="https://rooteraplumbing.id"', false);
        $response->assertSee('jasa perbaikan saluran pipa mampet');
        $response->assertSee('deteksi pipa bocor');
        $response->assertDontSee('Klik di sini');

        // Verify Technical Narrative
        $response->assertSee('Core Web Vitals');
        $response->assertSee('Eager Loading');
        $response->assertSee('BookingService');
        $response->assertSee('Lighthouse');
    }

    /**
     * Test /index redirects to home.
     */
    public function test_index_url_redirects_to_home(): void
    {
        $response = $this->get('/index');

        $response->assertRedirect('/');
    }
}
