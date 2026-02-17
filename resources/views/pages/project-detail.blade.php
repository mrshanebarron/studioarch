@extends('layouts.app')

@section('title', $project->title)
@section('meta_description', Str::limit(strip_tags($project->description), 160))

@section('content')

{{-- Hero --}}
<section class="relative h-[70vh] overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ $project->image }}"
             alt="{{ $project->title }}"
             class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-arch-dark via-arch-dark/30 to-arch-dark/20"></div>
    </div>

    <div class="relative h-full flex flex-col justify-end pb-16 px-6 lg:px-8 max-w-7xl mx-auto">
        <div>
            <a href="{{ route('projects.index', ['category' => $project->category]) }}"
               class="inline-block px-3 py-1 border border-arch-gold/30 text-arch-gold text-[10px] tracking-[0.3em] uppercase mb-4 hover:bg-arch-gold/10 transition-colors">
                {{ $project->category }}
            </a>
            <h1 class="font-serif text-4xl md:text-6xl font-light mb-3">{{ $project->title }}</h1>
            <p class="text-warm-400 text-lg">{{ $project->location }} &bull; {{ $project->year }}</p>
        </div>
    </div>
</section>

{{-- Project Details --}}
<section class="py-20 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            {{-- Main description --}}
            <div class="lg:col-span-2">
                <div class="reveal">
                    @if($project->brief)
                        <div class="mb-10 pl-6 border-l-2 border-arch-gold/40">
                            <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-2">The Brief</span>
                            <p class="font-serif text-xl text-warm-200 leading-relaxed italic">{{ $project->brief }}</p>
                        </div>
                    @endif

                    <div class="prose prose-lg prose-invert max-w-none">
                        <p class="text-warm-300 leading-relaxed text-base">{{ $project->description }}</p>
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="reveal" style="transition-delay: 200ms">
                <div class="bg-arch-charcoal p-8 space-y-6">
                    <h3 class="font-serif text-lg text-arch-gold border-b border-warm-800/30 pb-3">Project Details</h3>

                    <div>
                        <span class="text-warm-500 text-xs tracking-[0.2em] uppercase">Client</span>
                        <p class="text-warm-200 mt-1">{{ $project->client_name ?? 'Private Client' }}</p>
                    </div>

                    <div>
                        <span class="text-warm-500 text-xs tracking-[0.2em] uppercase">Location</span>
                        <p class="text-warm-200 mt-1">{{ $project->location }}</p>
                    </div>

                    <div>
                        <span class="text-warm-500 text-xs tracking-[0.2em] uppercase">Year</span>
                        <p class="text-warm-200 mt-1">{{ $project->year }}</p>
                    </div>

                    @if($project->area)
                        <div>
                            <span class="text-warm-500 text-xs tracking-[0.2em] uppercase">Area</span>
                            <p class="text-warm-200 mt-1">{{ $project->area }}</p>
                        </div>
                    @endif

                    <div>
                        <span class="text-warm-500 text-xs tracking-[0.2em] uppercase">Category</span>
                        <p class="text-warm-200 mt-1 capitalize">{{ $project->category }}</p>
                    </div>
                </div>

                {{-- CTA --}}
                <div class="mt-6 p-8 border border-warm-800/20">
                    <p class="text-warm-300 text-sm mb-4">Interested in a similar project?</p>
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-arch-gold text-arch-dark text-xs tracking-widest uppercase font-medium hover:bg-arch-copper transition-colors w-full justify-center">
                        Start a Conversation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Gallery --}}
@if($project->gallery && count($project->gallery) > 0)
    <section class="py-16 px-6 lg:px-8 bg-arch-charcoal">
        <div class="max-w-7xl mx-auto">
            <h2 class="font-serif text-2xl mb-8 reveal">Gallery</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($project->gallery as $index => $image)
                    <div class="reveal overflow-hidden" style="transition-delay: {{ $index * 100 }}ms">
                        <img src="{{ $image }}"
                             alt="{{ $project->title }} - Image {{ $index + 1 }}"
                             class="w-full aspect-[4/3] object-cover hover:scale-105 transition-transform duration-700"
                             loading="lazy">
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

{{-- Related Projects --}}
@if($related->isNotEmpty())
    <section class="py-20 px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-end justify-between mb-10 reveal">
                <div>
                    <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-2">More Work</span>
                    <h2 class="font-serif text-3xl font-light">Related Projects</h2>
                </div>
                <a href="{{ route('projects.index', ['category' => $project->category]) }}" class="hidden md:inline-flex items-center gap-2 text-warm-400 text-sm tracking-wider uppercase hover:text-arch-gold transition-colors">
                    View All {{ $project->category }}
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @foreach($related as $index => $relatedProject)
                    <a href="{{ route('projects.show', $relatedProject) }}"
                       class="project-card group block reveal"
                       style="transition-delay: {{ $index * 100 }}ms">
                        <div class="relative overflow-hidden aspect-[16/10]">
                            <img src="{{ $relatedProject->image }}"
                                 alt="{{ $relatedProject->title }}"
                                 class="w-full h-full object-cover"
                                 loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-arch-dark/80 via-arch-dark/20 to-transparent opacity-60 group-hover:opacity-80 transition-opacity duration-500"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="font-serif text-2xl mb-1 group-hover:text-arch-gold transition-colors">{{ $relatedProject->title }}</h3>
                                <p class="text-warm-400 text-sm">{{ $relatedProject->location }} &bull; {{ $relatedProject->year }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endif

{{-- Back navigation --}}
<section class="px-6 lg:px-8 pb-16">
    <div class="max-w-7xl mx-auto">
        <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-warm-400 text-sm tracking-wider uppercase hover:text-arch-gold transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 16l-4-4m0 0l4-4m-4 4h18"/></svg>
            Back to Projects
        </a>
    </div>
</section>

@endsection
