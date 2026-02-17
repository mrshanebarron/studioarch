@extends('layouts.app')

@section('title', 'Projects')
@section('meta_description', 'Explore our portfolio of residential, commercial and public architecture projects across Buckinghamshire and the Thames Valley.')

@section('content')

{{-- Header --}}
<section class="pt-32 pb-16 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">Portfolio</span>
        <h1 class="font-serif text-5xl md:text-6xl font-light mb-4">Our Projects</h1>
        <p class="text-warm-400 text-lg font-light max-w-xl">
            A curated selection of work across residential, commercial, public, and interior design.
        </p>
    </div>
</section>

{{-- Filter --}}
<section class="px-6 lg:px-8 mb-12" x-data="{ active: '{{ $category ?? '' }}' }">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-wrap gap-3 border-b border-warm-800/20 pb-6">
            <a href="{{ route('projects.index') }}"
               class="px-5 py-2 text-xs tracking-[0.2em] uppercase transition-all duration-300 border {{ !$category ? 'bg-arch-gold text-arch-dark border-arch-gold' : 'border-warm-700/30 text-warm-400 hover:border-arch-gold/50 hover:text-warm-200' }}">
                All
            </a>
            @foreach($categories as $cat)
                <a href="{{ route('projects.index', ['category' => $cat]) }}"
                   class="px-5 py-2 text-xs tracking-[0.2em] uppercase transition-all duration-300 border {{ $category === $cat ? 'bg-arch-gold text-arch-dark border-arch-gold' : 'border-warm-700/30 text-warm-400 hover:border-arch-gold/50 hover:text-warm-200' }}">
                    {{ $cat }}
                </a>
            @endforeach
        </div>
    </div>
</section>

{{-- Projects Grid --}}
<section class="px-6 lg:px-8 pb-24">
    <div class="max-w-7xl mx-auto">
        @if($projects->isEmpty())
            <div class="text-center py-20">
                <p class="text-warm-400 text-lg">No projects found in this category.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($projects as $index => $project)
                    <a href="{{ route('projects.show', $project) }}"
                       class="project-card group block reveal"
                       style="transition-delay: {{ ($index % 3) * 100 }}ms">
                        <div class="relative overflow-hidden aspect-[4/3]">
                            <img src="{{ $project->image }}"
                                 alt="{{ $project->title }}"
                                 class="w-full h-full object-cover"
                                 loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-arch-dark/80 via-arch-dark/10 to-transparent opacity-50 group-hover:opacity-80 transition-opacity duration-500"></div>

                            {{-- Category --}}
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 bg-arch-dark/60 backdrop-blur-sm text-arch-gold text-[10px] tracking-[0.3em] uppercase border border-arch-gold/20">
                                    {{ $project->category }}
                                </span>
                            </div>

                            {{-- Info --}}
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <h3 class="font-serif text-xl mb-1 group-hover:text-arch-gold transition-colors duration-300">{{ $project->title }}</h3>
                                <p class="text-warm-400 text-sm">{{ $project->location }} &bull; {{ $project->year }}</p>
                            </div>

                            {{-- Arrow --}}
                            <div class="absolute top-4 right-4 w-8 h-8 border border-warm-200/20 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <svg class="w-3 h-3 text-warm-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection
