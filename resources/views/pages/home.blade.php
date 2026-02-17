@extends('layouts.app')

@section('title', 'Whitfield & Partners')
@section('meta_description', 'Award-winning architecture practice in Buckinghamshire. Residential, commercial and public buildings designed with intention.')

@section('content')

{{-- Hero --}}
<section class="relative h-screen overflow-hidden">
    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="https://images.unsplash.com/photo-1486718448742-163732cd1544?w=1920&q=80"
             alt="Architectural detail"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-b from-arch-dark/70 via-arch-dark/40 to-arch-dark"></div>
    </div>

    {{-- Content --}}
    <div class="relative h-full flex flex-col justify-end pb-24 px-6 lg:px-8 max-w-7xl mx-auto">
        <div class="reveal">
            <p class="text-arch-gold text-sm tracking-[0.3em] uppercase mb-4 font-light">Architecture &bull; Interior Design &bull; Urban Planning</p>
            <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl font-light leading-[0.95] mb-6 max-w-4xl">
                Buildings that
                <em class="text-arch-gold">belong</em>
            </h1>
            <p class="text-warm-300 text-lg md:text-xl font-light max-w-xl leading-relaxed mb-10">
                We design for the site, for the purpose, and for the people who will inhabit the space long after we leave.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 px-8 py-3 border border-arch-gold text-arch-gold text-sm tracking-widest uppercase hover:bg-arch-gold hover:text-arch-dark transition-all duration-300">
                    View Projects
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 text-warm-300 text-sm tracking-widest uppercase hover:text-warm-100 transition-colors">
                    Start a Conversation
                </a>
            </div>
        </div>
    </div>

    {{-- Scroll indicator --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
        <span class="text-warm-500 text-[10px] tracking-[0.4em] uppercase">Scroll</span>
        <div class="w-px h-8 bg-gradient-to-b from-arch-gold/60 to-transparent"></div>
    </div>
</section>

{{-- Philosophy Strip --}}
<section class="py-24 px-6 lg:px-8 bg-arch-charcoal">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 reveal">
            <div class="border-l border-arch-gold/30 pl-6">
                <span class="text-arch-gold text-xs tracking-[0.3em] uppercase">01</span>
                <h3 class="font-serif text-2xl mt-3 mb-3">Site-Led Design</h3>
                <p class="text-warm-400 text-sm leading-relaxed">Every project begins with the land. We study light, topography, prevailing wind, and the grain of the existing settlement before we draw a single line.</p>
            </div>
            <div class="border-l border-arch-gold/30 pl-6">
                <span class="text-arch-gold text-xs tracking-[0.3em] uppercase">02</span>
                <h3 class="font-serif text-2xl mt-3 mb-3">Material Honesty</h3>
                <p class="text-warm-400 text-sm leading-relaxed">We let materials be what they are. Stone is heavy, glass is light, timber is warm. No cladding over structure, no pretending concrete is something else.</p>
            </div>
            <div class="border-l border-arch-gold/30 pl-6">
                <span class="text-arch-gold text-xs tracking-[0.3em] uppercase">03</span>
                <h3 class="font-serif text-2xl mt-3 mb-3">Long-Term Thinking</h3>
                <p class="text-warm-400 text-sm leading-relaxed">We design for the next fifty years. That means robust construction, timeless proportions, and spaces flexible enough to adapt as lives change.</p>
            </div>
        </div>
    </div>
</section>

{{-- Featured Projects --}}
<section class="py-24 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="flex items-end justify-between mb-16 reveal">
            <div>
                <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">Selected Work</span>
                <h2 class="font-serif text-4xl md:text-5xl font-light">Featured Projects</h2>
            </div>
            <a href="{{ route('projects.index') }}" class="hidden md:inline-flex items-center gap-2 text-warm-400 text-sm tracking-wider uppercase hover:text-arch-gold transition-colors">
                View All
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($featured as $index => $project)
                <a href="{{ route('projects.show', $project) }}"
                   class="project-card group block reveal"
                   style="transition-delay: {{ $index * 100 }}ms">
                    <div class="relative overflow-hidden aspect-[4/3] {{ $index === 0 ? 'md:aspect-[16/10]' : '' }}">
                        <img src="{{ $project->image }}"
                             alt="{{ $project->title }}"
                             class="w-full h-full object-cover"
                             loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-arch-dark/80 via-arch-dark/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>

                        {{-- Category tag --}}
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-arch-dark/60 backdrop-blur-sm text-arch-gold text-[10px] tracking-[0.3em] uppercase border border-arch-gold/20">
                                {{ $project->category }}
                            </span>
                        </div>

                        {{-- Project info --}}
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="font-serif text-2xl md:text-3xl mb-1 group-hover:text-arch-gold transition-colors duration-300">{{ $project->title }}</h3>
                            <p class="text-warm-400 text-sm">{{ $project->location }} &bull; {{ $project->year }}</p>
                        </div>

                        {{-- Arrow --}}
                        <div class="absolute top-4 right-4 w-10 h-10 border border-warm-200/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300 translate-x-2 group-hover:translate-x-0">
                            <svg class="w-4 h-4 text-warm-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="mt-8 text-center md:hidden">
            <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 px-8 py-3 border border-arch-gold/40 text-arch-gold text-sm tracking-widest uppercase hover:bg-arch-gold hover:text-arch-dark transition-all">
                View All Projects
            </a>
        </div>
    </div>
</section>

{{-- Statistics --}}
<section class="py-20 px-6 lg:px-8 bg-arch-charcoal border-y border-warm-800/20">
    <div class="max-w-7xl mx-auto reveal">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <span class="font-serif text-4xl md:text-5xl text-arch-gold">17</span>
                <p class="text-warm-400 text-sm tracking-wider uppercase mt-2">Years of Practice</p>
            </div>
            <div>
                <span class="font-serif text-4xl md:text-5xl text-arch-gold">{{ $categories->sum() }}+</span>
                <p class="text-warm-400 text-sm tracking-wider uppercase mt-2">Projects Completed</p>
            </div>
            <div>
                <span class="font-serif text-4xl md:text-5xl text-arch-gold">12</span>
                <p class="text-warm-400 text-sm tracking-wider uppercase mt-2">Design Awards</p>
            </div>
            <div>
                <span class="font-serif text-4xl md:text-5xl text-arch-gold">4</span>
                <p class="text-warm-400 text-sm tracking-wider uppercase mt-2">Disciplines</p>
            </div>
        </div>
    </div>
</section>

{{-- Testimonial --}}
<section class="py-24 px-6 lg:px-8">
    <div class="max-w-4xl mx-auto text-center reveal">
        <div class="ornament mb-8">
            <svg class="w-6 h-6 text-arch-gold" fill="currentColor" viewBox="0 0 24 24"><path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 01-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/></svg>
        </div>
        <blockquote class="font-serif text-2xl md:text-3xl font-light leading-relaxed text-warm-200 mb-8">
            Whitfield & Partners didn't just design our home — they understood how we wanted to live in it. Every room feels considered, every detail earned.
        </blockquote>
        <cite class="not-italic">
            <span class="text-arch-gold text-sm tracking-wider">— The Meridian House, Private Client</span>
        </cite>
    </div>
</section>

{{-- CTA --}}
<section class="py-24 px-6 lg:px-8 bg-arch-charcoal">
    <div class="max-w-3xl mx-auto text-center reveal">
        <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">Start a Project</span>
        <h2 class="font-serif text-4xl md:text-5xl font-light mb-6">Have something in mind?</h2>
        <p class="text-warm-400 leading-relaxed mb-10 max-w-xl mx-auto">
            Whether you're planning an extension, a new build, or a complete renovation, we'd love to hear about your project. The best buildings start with a conversation.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-10 py-4 bg-arch-gold text-arch-dark text-sm tracking-widest uppercase font-medium hover:bg-arch-copper transition-colors duration-300">
            Get in Touch
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>

@endsection
