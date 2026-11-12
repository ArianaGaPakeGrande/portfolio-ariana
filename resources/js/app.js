// Portfolio Application Scripts - Desty Mikayla Ariana
// Pure Vanilla JavaScript (Clean, Fast, Lightweight, Zero Overhead)

document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // 1. Dark Mode / Theme Toggle Handler
    // ----------------------------------------------------
    const themeToggleBtn = document.getElementById('theme-toggle-btn');

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            const isDark = document.documentElement.classList.toggle('dark');
            localStorage.setItem('theme', isDark ? 'dark' : 'light');
        });
    }

    // Auto update theme when OS color scheme changes (if user hasn't chosen manually)
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
        if (!localStorage.getItem('theme')) {
            if (e.matches) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    });

    // ----------------------------------------------------
    // 2. Mobile Navigation Drawer Handler
    // ----------------------------------------------------
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileDrawer = document.getElementById('mobile-menu-drawer');
    const openIcon = document.getElementById('mobile-menu-open-icon');
    const closeIcon = document.getElementById('mobile-menu-close-icon');

    function setMobileMenuState(isOpen) {
        if (!mobileDrawer) return;

        if (isOpen) {
            mobileDrawer.classList.remove('hidden');
            if (openIcon) openIcon.classList.add('hidden');
            if (closeIcon) closeIcon.classList.remove('hidden');
            if (mobileBtn) mobileBtn.setAttribute('aria-expanded', 'true');
        } else {
            mobileDrawer.classList.add('hidden');
            if (openIcon) openIcon.classList.remove('hidden');
            if (closeIcon) closeIcon.classList.add('hidden');
            if (mobileBtn) mobileBtn.setAttribute('aria-expanded', 'false');
        }
    }

    if (mobileBtn && mobileDrawer) {
        mobileBtn.addEventListener('click', () => {
            const isCurrentlyHidden = mobileDrawer.classList.contains('hidden');
            setMobileMenuState(isCurrentlyHidden);
        });

        // Close drawer when clicking any mobile nav link
        const mobileLinks = mobileDrawer.querySelectorAll('.mobile-nav-link');
        mobileLinks.forEach((link) => {
            link.addEventListener('click', () => {
                setMobileMenuState(false);
            });
        });

        // Close drawer when clicking outside
        document.addEventListener('click', (event) => {
            if (!mobileDrawer.contains(event.target) && !mobileBtn.contains(event.target)) {
                setMobileMenuState(false);
            }
        });
    }

    // ----------------------------------------------------
    // 3. Sticky Navbar Blur & Background on Scroll
    // ----------------------------------------------------
    const mainHeader = document.getElementById('main-header');

    if (mainHeader) {
        const updateHeaderOnScroll = () => {
            if (window.scrollY > 20) {
                mainHeader.classList.add(
                    'bg-[#faf7f2]/90',
                    'dark:bg-[#141210]/90',
                    'backdrop-blur-md',
                    'shadow-xs',
                    'border-stone-200/80',
                    'dark:border-stone-800/80'
                );
                mainHeader.classList.remove('bg-transparent', 'border-transparent');
            } else {
                mainHeader.classList.remove(
                    'bg-[#faf7f2]/90',
                    'dark:bg-[#141210]/90',
                    'backdrop-blur-md',
                    'shadow-xs',
                    'border-stone-200/80',
                    'dark:border-stone-800/80'
                );
                mainHeader.classList.add('bg-transparent', 'border-transparent');
            }
        };

        window.addEventListener('scroll', updateHeaderOnScroll, { passive: true });
        updateHeaderOnScroll();
    }
});
