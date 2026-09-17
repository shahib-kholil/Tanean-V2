<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'TANEAN.ID')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'tanean-beige': '#ACA593',
                        'tanean-green': '#B8C5A8',
                        'tanean-pink': '#E5A9A1',
                        'tanean-dark': '#2C2C2C',
                        'tanean-logo': '#9D9385'
                    },
                    fontFamily: {
                        'display': ['Roboto Serif', 'serif'],
                        'holtwood': ['Holtwood One SC', 'serif'],
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&family=Playfair+Display:wght@700;800;900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900&family=Holtwood+One+SC&family=Playfair+Display:wght@700;800;900&display=swap"
        rel="stylesheet">
    <style>
        html,
        body {
            width: 100%;
            margin: 0;
        }

        .font-medium-weight {
            font-weight: 500;
        }

        .text-h2-custom {
            font-size: 20px;
            line-height: 1.5;
            letter-spacing: 0;
        }

        .text-excerpt-custom {
            font-family: 'Roboto Serif', serif;
            font-weight: 400;
            font-style: normal;
            font-size: 15px;
            line-height: 1.5;
            letter-spacing: 0;
            text-align: left;
        }

        .text-author-custom {
            font-family: 'Roboto Serif', serif;
            font-weight: 400;
            font-style: italic;
            font-size: 14px;
            line-height: 1;
            letter-spacing: 0;
        }

        #category-navbar a.active-category {
            position: relative;
        }

        #category-navbar a.active-category::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
        }
    </style>
</head>

<body class="font-sans overflow-x-hidden bg-[#f2f0eb]">
    <!-- Replace the existing <header> block with this -->
    @if (!isset($hideHeader) || !$hideHeader)
        <header class="bg-[#f2f0eb] sticky top-0 z-50">
            <!-- TOP BAR -->
            <div class="max-w-7xl mx-auto px-8 py-4">
                <div class="grid grid-cols-3 items-center">
                    <div class="flex items-center gap-1 md:gap-6">
                        <button id="mobile-menu-button" class="flex flex-col items-center gap-1 text-tanean-beige">
                            <svg class="w-4 h-4 md:w-8 md:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2"
                                    d="M4 5h16M4 10h16M4 15h16M4 20h16" />
                            </svg>
                            <span class="hidden md:block text-xs tracking-widest font-semibold">MENU</span>
                        </button>


                    </div>

                    <!-- LOGO -->
                    <div class="flex justify-center">
                        <a href="{{ route('home') }}"
                            class="inline-block text-2xl md:text-4xl lg:text-5xl font-holtwood text-tanean-logo tracking-wide">
                            TANEAN.ID
                        </a>
                    </div>

                    <!-- RIGHT -->
                    <div class="flex justify-end gap-3">
                        <a href="#"
                            class="hidden md:inline-flex items-center px-5 py-2 rounded-full text-xs font-bold uppercase tracking-wide text-white bg-tanean-beige hover:bg-tanean-dark hover:border-tanean-dark border border-transparent transition">
                            Kirimkan Ceritamu
                        </a>
                        <a href="{{ route('login') }}"
                            class="hidden md:inline-flex items-center px-5 py-2 rounded-[15px] text-xs font-bold uppercase tracking-wide text-white bg-tanean-beige hover:bg-tanean-dark hover:border-tanean-dark border border-transparent transition"
                            target="_blank">
                            Masuk
                        </a>
                    </div>

                </div>
            </div>

            <!-- RUBRIK -->
            <nav id="category-navbar" class="hidden md:block border-t border-b border-tanean-beige py-1 bg-[#f2f0eb]">
                <ul
                    class="flex justify-center gap-56 py-1 text-sm font-semibold tracking-widest uppercase text-gray-800">
                    <li>
                        <a href="{{ route('article.category', 'warta') }}"
                            class="hover:text-tanean-beige {{ isset($category) && $category == 'warta' ? '!text-tanean-beige' : '' }}">
                            Warta
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('article.category', 'warita') }}"
                            class="hover:text-tanean-beige {{ isset($category) && $category == 'warita' ? '!text-tanean-beige' : '' }}">
                            Warita
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('article.category', 'swara') }}"
                            class="hover:text-tanean-beige {{ isset($category) && $category == 'swara' ? '!text-tanean-beige' : '' }}">
                            Swara
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('article.category', 'lensa') }}"
                            class="hover:text-tanean-beige {{ isset($category) && $category == 'lensa' ? '!text-tanean-beige' : '' }}">
                            Lensa
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <div id="search-overlay"
            class="fixed inset-0 bg-black/70 hidden z-50 flex items-center justify-center
   transition-opacity duration-300">
            <div class="bg-[#f2f0eb] w-full max-w-xl p-6 rounded">
                <form action="{{ route('home') }}" method="GET">
                    <input type="text" name="q" placeholder="Cari artikel..."
                        class="w-full border px-4 py-3 text-lg focus:outline-none" autofocus>
                </form>
                <button id="close-search" class="mt-4 text-sm text-gray-500">Tutup</button>
            </div>
        </div>
    @endif



    <!-- Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="font-display bg-tanean-beige text-[#f2f0eb]">
        <div class="container mx-auto px-6 pt-16 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Brand -->
                <div>
                    <div>
                        <a href="{{ route('home') }}" class="font-holtwood text-3xl text-tanean-dark tracking-wide">TANEAN.ID</a>
                    </div>
                    <!-- Social Media -->
                    <div class="flex justify-center space-x-4 mt-10">
                        <a href="#" aria-label="Facebook" class="text-tanean-dark hover:text-gray-600"><span class="iconify text-2xl" data-icon="mdi:facebook"></span></a>
                        <a href="#" aria-label="Instagram" class="text-tanean-dark hover:text-gray-600"><span class="iconify text-2xl" data-icon="mdi:instagram"></span></a>
                        <a href="#" aria-label="X" class="text-tanean-dark hover:text-gray-600"><span class="iconify text-2xl" data-icon="simple-icons:x"></span></a>
                        <a href="#" aria-label="YouTube" class="text-tanean-dark hover:text-gray-600"><span class="iconify text-2xl" data-icon="mdi:youtube"></span></a>
                    </div>
                </div>

                <!-- Kontak -->
                <div>
                    <h4 class="font-semibold text-tanean-dark mb-4">Kontak</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li><a href="#" class="hover:text-tanean-dark">Tentang Kami</a></li>
                        <li><a href="#" class="hover:text-tanean-dark">Redaksi</a></li>
                        <li><a href="#" class="hover:text-tanean-dark">Pedoman Media Siber</a></li>
                        <li><a href="#" class="hover:text-tanean-dark">Kontak</a></li>
                    </ul>
                </div>

                <!-- Rubrik -->
                <div>
                    <h4 class="font-semibold text-tanean-dark mb-4">Rubrik</h4>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li><a href="{{ route('article.category', 'warta') }}"
                                class="hover:text-tanean-dark">Warta</a>
                        </li>
                        <li><a href="{{ route('article.category', 'swara') }}"
                                class="hover:text-tanean-dark">Swara</a>
                        </li>
                        <li><a href="{{ route('article.category', 'warita') }}"
                                class="hover:text-tanean-dark">warita</a>
                        </li>
                        <li><a href="#" class="hover:text-tanean-dark">Arsip</a></li>
                    </ul>
                </div>

                <!-- Info -->
                <div>
                    <h4 class="font-semibold text-tanean-dark mb-4">Info</h4>
                    <div>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li><a href="#" class="hover:text-tanean-dark">Disclaimer</a></li>
                            <li><a href="#" class="hover:text-tanean-dark">Kebijakan Privasi</a></li>
                            <li><a href="#" class="hover:text-tanean-dark">Syarat dan Ketentuan</a></li>
                            <div class="py-5">
                                <a href="#"
                                    class="inline-flex px-5 py-2 text-xs font-bold uppercase tracking-wide text-white bg-tanean-dark hover:bg-gray-800 border border-transparent transition">
                                    Kirimkan Ceritamu
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('login') }}"
                                    class="inline-flex px-5 py-2 text-xs font-bold uppercase tracking-wide text-tanean-dark hover:bg-white border border-tanean-dark transition"
                                    target="_blank">
                                    Masuk
                                </a>
                            </div>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="border-t border-tanean-dark py-4 mt-4 text-center text-sm text-tanean-dark">
                <p>&copy; 2025 SHAHIB. All rights reserved.</p>
            </div>
        </div>
    </footer>
    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="fixed inset-0 bg-black/50 opacity-0 pointer-events-none z-50 transition-opacity duration-300">
        <div class="relative bg-[#f2f0eb] w-72 h-full p-6 -translate-x-full transition-transform duration-300 ease-out">
            <button id="close-menu" aria-label="Tutup menu" class="absolute right-5 top-5 text-xl leading-none text-tanean-dark">✕</button>

            <form action="{{ route('home') }}" method="GET" class="mt-10 flex w-full items-center gap-3 rounded-full bg-gray-200 px-4 py-2.5">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="search" name="q" value="{{ request('q') }}" placeholder="Cari..." aria-label="Cari artikel"
                    class="w-full border-0 bg-transparent p-0 text-sm text-tanean-dark placeholder-gray-500 focus:outline-none focus:ring-0">
            </form>

            <nav class="mt-8 font-display text-base font-semibold text-tanean-dark">
                <a href="{{ route('article.category', 'warta') }}" class="flex items-center justify-between border-b border-tanean-beige py-4">
                    <span>Artikel</span>
                </a>
                <a href="{{ route('article.category', 'lensa') }}" class="flex items-center justify-between border-b border-tanean-beige py-4">
                    <span>Multimedia</span>
                </a>
                <a href="{{ route('article.category', 'swara') }}" class="flex items-center justify-between border-b border-tanean-beige py-4">
                    <span>Serial</span>
                </a>
                <a href="#" class="flex items-center justify-between border-b border-tanean-beige py-4">
                    <span>Tentang Kami</span>
                </a>
            </nav>

            <div class="mt-8 space-y-3">
                <a href="#" class="font-display block bg-tanean-green text-center py-2 rounded">Kirim Cerita</a>
                <a href="{{ route('login') }}" class="font-display block border text-center py-2 rounded">Masuk</a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const body = document.body;

            // ===== ELEMENTS =====
            const menuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const closeMenuButton = document.getElementById('close-menu');

            const searchButton = null;
            const searchOverlay = document.getElementById('search-overlay');
            const closeSearchButton = document.getElementById('close-search');


            // ===== HELPERS =====
            const openModal = (el) => {
                if (!el) return;
                el.classList.remove('pointer-events-none', 'opacity-0');
                el.classList.add('pointer-events-auto', 'opacity-100');
                const panel = el.firstElementChild;
                if (panel?.classList.contains('-translate-x-full')) panel.classList.remove('-translate-x-full');
                body.classList.add('overflow-hidden');
            };

            const closeModal = (el) => {
                if (!el) return;
                el.classList.remove('pointer-events-auto', 'opacity-100');
                el.classList.add('pointer-events-none', 'opacity-0');
                const panel = el.firstElementChild;
                if (panel) panel.classList.add('-translate-x-full');
                body.classList.remove('overflow-hidden');
            };

            // ===== MOBILE MENU =====
            if (menuButton && mobileMenu) {
                menuButton.addEventListener('click', () => {
                    closeModal(searchOverlay); // tutup search kalau kebuka
                    openModal(mobileMenu);
                });
            }

            if (closeMenuButton && mobileMenu) {
                closeMenuButton.addEventListener('click', () => {
                    closeModal(mobileMenu);
                });
            }

            if (mobileMenu) {
                mobileMenu.addEventListener('click', (e) => {
                    if (e.target === mobileMenu) closeModal(mobileMenu);
                });
            }

            // ===== SEARCH =====
            if (searchButton && searchOverlay) {
                searchButton.addEventListener('click', () => {
                    closeModal(mobileMenu); // tutup menu kalau kebuka
                    openModal(searchOverlay);
                });
            }

            if (closeSearchButton && searchOverlay) {
                closeSearchButton.addEventListener('click', () => {
                    closeModal(searchOverlay);
                });
            }

            if (searchOverlay) {
                searchOverlay.addEventListener('click', (e) => {
                    if (e.target === searchOverlay) closeModal(searchOverlay);
                });
            }

            // ===== ESC KEY =====
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    closeModal(mobileMenu);
                    closeModal(searchOverlay);
                }
            });
            // Fungsi untuk menginisialisasi slider
            // Slider Desktop
            function initDesktopSlider() {
                // Ambil semua slider desktop dengan kelas unik
                const sliders = document.querySelectorAll('[class*="lensaSliderDesktop-"]');

                sliders.forEach(slider => {
                    // Ekstrak ID unik dari kelas
                    const classList = Array.from(slider.classList);
                    const uniqueId = classList.find(cls => cls.includes('lensaSliderDesktop-')).split(
                        'lensaSliderDesktop-')[1];

                    // Cari elemen-elemen terkait dengan ID unik
                    const prevBtn = document.querySelector(`.lensaPrevDesktop-${uniqueId}`);
                    const nextBtn = document.querySelector(`.lensaNextDesktop-${uniqueId}`);
                    const container = slider.querySelector(`.carousel-container-${uniqueId}`);
                    const dots = document.querySelectorAll(`.dot-desktop-${uniqueId}`);

                    if (!slider || !prevBtn || !nextBtn || !container) return;

                    let currentIndex = 0;
                    const totalSlides = container.children.length;

                    function updateSlider() {
                        container.style.transform = `translateX(-${currentIndex * 100}%)`;

                        // Update dots
                        dots.forEach((dot, index) => {
                            dot.classList.toggle('bg-white', index === currentIndex);
                            dot.classList.toggle('bg-gray-400', index !== currentIndex);
                        });
                    }

                    // Next button
                    if (nextBtn) {
                        nextBtn.addEventListener('click', (e) => {
                            e.preventDefault();
                            if (currentIndex < totalSlides - 1) {
                                currentIndex++;
                            } else {
                                currentIndex = 0;
                            }
                            updateSlider();
                        });
                    }

                    // Previous button
                    if (prevBtn) {
                        prevBtn.addEventListener('click', (e) => {
                            e.preventDefault();
                            if (currentIndex > 0) {
                                currentIndex--;
                            } else {
                                currentIndex = totalSlides - 1;
                            }
                            updateSlider();
                        });
                    }

                    // Dot navigation
                    dots.forEach((dot, index) => {
                        dot.addEventListener('click', (e) => {
                            e.preventDefault();
                            currentIndex = index;
                            updateSlider();
                        });
                    });
                });
            }

            // Slider Mobile
            function initMobileSlider() {
                // Ambil semua slider mobile dengan kelas unik
                const sliders = document.querySelectorAll('[class*="lensaSliderMobile-"]');

                sliders.forEach(slider => {
                    // Ekstrak ID unik dari kelas
                    const classList = Array.from(slider.classList);
                    const uniqueId = classList.find(cls => cls.includes('lensaSliderMobile-')).split(
                        'lensaSliderMobile-')[1];

                    // Cari elemen-elemen terkait dengan ID unik
                    const prevBtn = document.querySelector(`.lensaPrevMobile-${uniqueId}`);
                    const nextBtn = document.querySelector(`.lensaNextMobile-${uniqueId}`);
                    const container = slider.querySelector(`.carousel-container-${uniqueId}`);
                    const dots = document.querySelectorAll(`.dot-mobile-${uniqueId}`);

                    if (!slider || !prevBtn || !nextBtn || !container) return;

                    let currentIndex = 0;
                    const totalSlides = container.children.length;

                    function updateSlider() {
                        container.style.transform = `translateX(-${currentIndex * 100}%)`;

                        // Update dots
                        dots.forEach((dot, index) => {
                            dot.classList.toggle('bg-white', index === currentIndex);
                            dot.classList.toggle('bg-gray-400', index !== currentIndex);
                        });
                    }

                    // Next button
                    if (nextBtn) {
                        nextBtn.addEventListener('click', (e) => {
                            e.preventDefault();
                            if (currentIndex < totalSlides - 1) {
                                currentIndex++;
                            } else {
                                currentIndex = 0;
                            }
                            updateSlider();
                        });
                    }

                    // Previous button
                    if (prevBtn) {
                        prevBtn.addEventListener('click', (e) => {
                            e.preventDefault();
                            if (currentIndex > 0) {
                                currentIndex--;
                            } else {
                                currentIndex = totalSlides - 1;
                            }
                            updateSlider();
                        });
                    }

                    // Dot navigation
                    dots.forEach((dot, index) => {
                        dot.addEventListener('click', (e) => {
                            e.preventDefault();
                            currentIndex = index;
                            updateSlider();
                        });
                    });
                });
            }

            // Inisialisasi slider
            initDesktopSlider();
            initMobileSlider();

        });
    </script>
    @stack('scripts')
</body>

</html>
