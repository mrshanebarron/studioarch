@extends('layouts.app')

@section('title', 'Services')
@section('meta_description', 'Architecture, Interior Design, Urban Planning and Renovation services from Whitfield & Partners. RIBA Chartered practice.')

@section('content')

{{-- Header --}}
<section class="pt-32 pb-16 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">What We Do</span>
        <h1 class="font-serif text-5xl md:text-6xl font-light mb-4">Our Services</h1>
        <p class="text-warm-400 text-lg font-light max-w-xl">
            From initial concept through to completion, we offer a full range of architectural and design services.
        </p>
    </div>
</section>

{{-- Services --}}
<section class="px-6 lg:px-8 pb-24">
    <div class="max-w-7xl mx-auto space-y-0">

        {{-- Architecture --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 reveal border-t border-warm-800/20">
            <div class="relative overflow-hidden aspect-[4/3] lg:aspect-auto">
                <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=1000&q=80"
                     alt="Architecture services"
                     class="w-full h-full object-cover">
            </div>
            <div class="bg-arch-charcoal p-10 lg:p-16 flex flex-col justify-center">
                <span class="text-arch-gold/40 font-serif text-6xl leading-none mb-4">01</span>
                <h2 class="font-serif text-3xl mb-4">Architecture</h2>
                <p class="text-warm-300 leading-relaxed mb-6">
                    Our core discipline. From private houses to public buildings, we deliver architecture that responds to its context while pushing boundaries in materiality, sustainability, and spatial quality.
                </p>
                <ul class="space-y-3 text-warm-400 text-sm">
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        New-build residential (houses, apartments, estates)
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Commercial & workplace (offices, hotels, retail)
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Public & cultural (libraries, galleries, community centres)
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Planning applications & listed building consents
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        RIBA Stages 0–7 (full service or partial appointment)
                    </li>
                </ul>
            </div>
        </div>

        {{-- Interior Design --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 reveal border-t border-warm-800/20">
            <div class="bg-arch-charcoal p-10 lg:p-16 flex flex-col justify-center order-2 lg:order-1">
                <span class="text-arch-gold/40 font-serif text-6xl leading-none mb-4">02</span>
                <h2 class="font-serif text-3xl mb-4">Interior Design</h2>
                <p class="text-warm-300 leading-relaxed mb-6">
                    Led by Priya Sharma, our interior studio transforms spaces through material, light, and bespoke joinery. We create interiors that feel inevitable — as though the space could not exist any other way.
                </p>
                <ul class="space-y-3 text-warm-400 text-sm">
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Residential interior design & FF&E specification
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Bespoke joinery design & procurement
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Hospitality & commercial interiors
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Material & colour consultancy
                    </li>
                </ul>
            </div>
            <div class="relative overflow-hidden aspect-[4/3] lg:aspect-auto order-1 lg:order-2">
                <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?w=1000&q=80"
                     alt="Interior design services"
                     class="w-full h-full object-cover">
            </div>
        </div>

        {{-- Urban Planning --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 reveal border-t border-warm-800/20">
            <div class="relative overflow-hidden aspect-[4/3] lg:aspect-auto">
                <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=1000&q=80"
                     alt="Urban planning services"
                     class="w-full h-full object-cover">
            </div>
            <div class="bg-arch-charcoal p-10 lg:p-16 flex flex-col justify-center">
                <span class="text-arch-gold/40 font-serif text-6xl leading-none mb-4">03</span>
                <h2 class="font-serif text-3xl mb-4">Masterplanning</h2>
                <p class="text-warm-300 leading-relaxed mb-6">
                    For larger sites and multi-building projects, we provide masterplanning services that establish a coherent spatial framework. We balance density with green space, privacy with community, and commercial viability with design quality.
                </p>
                <ul class="space-y-3 text-warm-400 text-sm">
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Site analysis & development appraisals
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Residential & mixed-use masterplans
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Public realm & landscape strategy
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Community engagement & consultation
                    </li>
                </ul>
            </div>
        </div>

        {{-- Renovation --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 reveal border-t border-b border-warm-800/20">
            <div class="bg-arch-charcoal p-10 lg:p-16 flex flex-col justify-center order-2 lg:order-1">
                <span class="text-arch-gold/40 font-serif text-6xl leading-none mb-4">04</span>
                <h2 class="font-serif text-3xl mb-4">Renovation & Conservation</h2>
                <p class="text-warm-300 leading-relaxed mb-6">
                    Working with existing buildings requires a particular sensitivity. We have deep experience with listed buildings, conservation areas, and adaptive reuse projects — finding the line between preservation and transformation.
                </p>
                <ul class="space-y-3 text-warm-400 text-sm">
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Listed building consent & heritage statements
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Extensions & alterations to existing buildings
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Adaptive reuse (barns, mills, industrial buildings)
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="w-1 h-1 rounded-full bg-arch-gold mt-2 shrink-0"></span>
                        Energy retrofitting & thermal upgrade strategies
                    </li>
                </ul>
            </div>
            <div class="relative overflow-hidden aspect-[4/3] lg:aspect-auto order-1 lg:order-2">
                <img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=1000&q=80"
                     alt="Renovation services"
                     class="w-full h-full object-cover">
            </div>
        </div>
    </div>
</section>

{{-- Process --}}
<section class="py-20 px-6 lg:px-8 bg-arch-charcoal">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal">
            <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">How We Work</span>
            <h2 class="font-serif text-3xl md:text-4xl font-light">Our Process</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="reveal text-center">
                <div class="w-16 h-16 mx-auto mb-4 border border-arch-gold/30 rotate-45 flex items-center justify-center">
                    <span class="font-serif text-arch-gold text-xl -rotate-45">01</span>
                </div>
                <h3 class="font-serif text-lg mb-2">Listen</h3>
                <p class="text-warm-400 text-sm leading-relaxed">We begin with a conversation. Understanding your ambitions, constraints, budget, and timeline before we pick up a pencil.</p>
            </div>
            <div class="reveal text-center" style="transition-delay: 100ms">
                <div class="w-16 h-16 mx-auto mb-4 border border-arch-gold/30 rotate-45 flex items-center justify-center">
                    <span class="font-serif text-arch-gold text-xl -rotate-45">02</span>
                </div>
                <h3 class="font-serif text-lg mb-2">Explore</h3>
                <p class="text-warm-400 text-sm leading-relaxed">We study the site, research precedents, and develop multiple design options. This phase is about possibilities, not premature commitment.</p>
            </div>
            <div class="reveal text-center" style="transition-delay: 200ms">
                <div class="w-16 h-16 mx-auto mb-4 border border-arch-gold/30 rotate-45 flex items-center justify-center">
                    <span class="font-serif text-arch-gold text-xl -rotate-45">03</span>
                </div>
                <h3 class="font-serif text-lg mb-2">Refine</h3>
                <p class="text-warm-400 text-sm leading-relaxed">Through iterative workshops, we develop the chosen direction into detailed designs — resolving every junction, material choice, and spatial relationship.</p>
            </div>
            <div class="reveal text-center" style="transition-delay: 300ms">
                <div class="w-16 h-16 mx-auto mb-4 border border-arch-gold/30 rotate-45 flex items-center justify-center">
                    <span class="font-serif text-arch-gold text-xl -rotate-45">04</span>
                </div>
                <h3 class="font-serif text-lg mb-2">Deliver</h3>
                <p class="text-warm-400 text-sm leading-relaxed">We stay involved through construction, visiting site regularly and resolving challenges as they arise. We don't disappear after planning.</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 px-6 lg:px-8">
    <div class="max-w-3xl mx-auto text-center reveal">
        <h2 class="font-serif text-3xl md:text-4xl font-light mb-6">Ready to start your project?</h2>
        <p class="text-warm-400 leading-relaxed mb-8">
            Every project begins with a conversation. Tell us about your site, your ambitions, and your timeline — we'll let you know how we can help.
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-10 py-4 bg-arch-gold text-arch-dark text-sm tracking-widest uppercase font-medium hover:bg-arch-copper transition-colors duration-300">
            Start a Conversation
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
    </div>
</section>

@endsection
