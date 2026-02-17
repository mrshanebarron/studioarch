<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Whitfield & Partners — Architecture, Interior Design & Urban Planning. Award-winning practice based in Buckinghamshire.')">
    <title>@yield('title', 'Whitfield & Partners') — Architecture Studio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['Cormorant Garamond', 'Georgia', 'serif'],
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        stone: {
                            950: '#0f0e0d',
                        },
                        cream: '#f5f0eb',
                        warm: {
                            50: '#faf8f5',
                            100: '#f0ebe3',
                            200: '#e0d5c7',
                            300: '#c9b9a5',
                            400: '#b09a82',
                            500: '#9a8068',
                            600: '#8a6f58',
                            700: '#735c4a',
                            800: '#5f4d40',
                            900: '#504237',
                        },
                        arch: {
                            dark: '#1a1a18',
                            charcoal: '#2d2d2a',
                            gold: '#c4a265',
                            copper: '#b87333',
                        },
                    },
                },
            },
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }

        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #1a1a18; }
        ::-webkit-scrollbar-thumb { background: #c4a265; border-radius: 3px; }

        /* Smooth image loading */
        img { transition: opacity 0.4s ease; }

        /* Text selection */
        ::selection { background: #c4a265; color: #1a1a18; }

        /* Animated underline for nav links */
        .nav-link { position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 1px;
            background: #c4a265;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after { width: 100%; }

        /* Project card hover */
        .project-card img {
            transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .project-card:hover img {
            transform: scale(1.05);
        }

        /* Fade-in on scroll */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Horizontal rule ornament */
        .ornament {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .ornament::before, .ornament::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(to right, transparent, #c4a265, transparent);
        }
    </style>
</head>
<body class="bg-arch-dark text-warm-100 font-sans antialiased">

    {{-- Navigation --}}
    <nav x-data="{ open: false, scrolled: false }"
         x-init="window.addEventListener('scroll', () => scrolled = window.scrollY > 50)"
         :class="scrolled ? 'bg-arch-dark/95 backdrop-blur-md shadow-lg' : 'bg-transparent'"
         class="fixed top-0 inset-x-0 z-50 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-8 h-8 border border-arch-gold/60 rotate-45 group-hover:rotate-[135deg] transition-transform duration-700 flex items-center justify-center">
                        <div class="w-3 h-3 bg-arch-gold/80 rotate-45"></div>
                    </div>
                    <div>
                        <span class="font-serif text-xl tracking-wide text-warm-100">Whitfield</span>
                        <span class="font-serif text-xl tracking-wide text-arch-gold"> & Partners</span>
                    </div>
                </a>

                {{-- Desktop Nav --}}
                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="nav-link text-sm tracking-widest uppercase font-light {{ request()->routeIs('home') ? 'text-arch-gold active' : 'text-warm-200 hover:text-warm-100' }}">Home</a>
                    <a href="{{ route('projects.index') }}" class="nav-link text-sm tracking-widest uppercase font-light {{ request()->routeIs('projects.*') ? 'text-arch-gold active' : 'text-warm-200 hover:text-warm-100' }}">Projects</a>
                    <a href="{{ route('about') }}" class="nav-link text-sm tracking-widest uppercase font-light {{ request()->routeIs('about') ? 'text-arch-gold active' : 'text-warm-200 hover:text-warm-100' }}">About</a>
                    <a href="{{ route('services') }}" class="nav-link text-sm tracking-widest uppercase font-light {{ request()->routeIs('services') ? 'text-arch-gold active' : 'text-warm-200 hover:text-warm-100' }}">Services</a>
                    <a href="{{ route('contact') }}" class="nav-link text-sm tracking-widest uppercase font-light {{ request()->routeIs('contact') ? 'text-arch-gold active' : 'text-warm-200 hover:text-warm-100' }}">Contact</a>
                </div>

                {{-- Mobile Toggle --}}
                <button @click="open = !open" class="md:hidden text-warm-200 hover:text-arch-gold transition-colors">
                    <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="open" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Mobile Menu --}}
            <div x-show="open" x-cloak
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 -translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-4"
                 class="md:hidden pb-6 border-t border-warm-800/30">
                <div class="flex flex-col gap-4 pt-4">
                    <a href="{{ route('home') }}" class="text-sm tracking-widest uppercase font-light {{ request()->routeIs('home') ? 'text-arch-gold' : 'text-warm-200' }}">Home</a>
                    <a href="{{ route('projects.index') }}" class="text-sm tracking-widest uppercase font-light {{ request()->routeIs('projects.*') ? 'text-arch-gold' : 'text-warm-200' }}">Projects</a>
                    <a href="{{ route('about') }}" class="text-sm tracking-widest uppercase font-light {{ request()->routeIs('about') ? 'text-arch-gold' : 'text-warm-200' }}">About</a>
                    <a href="{{ route('services') }}" class="text-sm tracking-widest uppercase font-light {{ request()->routeIs('services') ? 'text-arch-gold' : 'text-warm-200' }}">Services</a>
                    <a href="{{ route('contact') }}" class="text-sm tracking-widest uppercase font-light {{ request()->routeIs('contact') ? 'text-arch-gold' : 'text-warm-200' }}">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-arch-charcoal border-t border-warm-800/20">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                {{-- Brand --}}
                <div class="md:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-6 h-6 border border-arch-gold/60 rotate-45 flex items-center justify-center">
                            <div class="w-2 h-2 bg-arch-gold/80 rotate-45"></div>
                        </div>
                        <span class="font-serif text-lg tracking-wide">Whitfield & Partners</span>
                    </div>
                    <p class="text-warm-400 text-sm leading-relaxed max-w-md">
                        Award-winning architecture practice based in the Chilterns. We design buildings that belong — to their site, to their purpose, and to the people who inhabit them.
                    </p>
                    <p class="text-warm-500 text-xs mt-4">RIBA Chartered Practice &bull; ARB Registered</p>
                </div>

                {{-- Navigation --}}
                <div>
                    <h4 class="font-serif text-arch-gold text-sm tracking-widest uppercase mb-4">Studio</h4>
                    <ul class="space-y-2">
                        <li><a href="{{ route('projects.index') }}" class="text-warm-400 text-sm hover:text-warm-200 transition-colors">Projects</a></li>
                        <li><a href="{{ route('about') }}" class="text-warm-400 text-sm hover:text-warm-200 transition-colors">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="text-warm-400 text-sm hover:text-warm-200 transition-colors">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="text-warm-400 text-sm hover:text-warm-200 transition-colors">Contact</a></li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h4 class="font-serif text-arch-gold text-sm tracking-widest uppercase mb-4">Contact</h4>
                    <ul class="space-y-2 text-warm-400 text-sm">
                        <li>14 Castle Street</li>
                        <li>High Wycombe, HP13 6RZ</li>
                        <li>Buckinghamshire, UK</li>
                        <li class="pt-2">
                            <a href="mailto:studio@whitfieldpartners.co.uk" class="hover:text-arch-gold transition-colors">studio@whitfieldpartners.co.uk</a>
                        </li>
                        <li>
                            <a href="tel:+441234567890" class="hover:text-arch-gold transition-colors">+44 (0) 1494 123 456</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-warm-800/20 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-warm-600 text-xs">&copy; {{ date('Y') }} Whitfield & Partners Ltd. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="text-warm-500 hover:text-arch-gold transition-colors text-xs uppercase tracking-wider">Instagram</a>
                    <a href="#" class="text-warm-500 hover:text-arch-gold transition-colors text-xs uppercase tracking-wider">LinkedIn</a>
                    <a href="#" class="text-warm-500 hover:text-arch-gold transition-colors text-xs uppercase tracking-wider">Pinterest</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Scroll reveal script --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const reveals = document.querySelectorAll('.reveal');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

            reveals.forEach(el => observer.observe(el));
        });
    </script>

    @stack('scripts')
</body>
</html>
