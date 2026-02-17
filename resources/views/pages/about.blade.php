@extends('layouts.app')

@section('title', 'About')
@section('meta_description', 'Whitfield & Partners is a RIBA Chartered architecture practice founded in 2008. Based in High Wycombe, Buckinghamshire.')

@section('content')

{{-- Header --}}
<section class="pt-32 pb-16 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-end">
            <div>
                <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">About the Practice</span>
                <h1 class="font-serif text-5xl md:text-6xl font-light leading-tight">We believe architecture is an act of care</h1>
            </div>
            <div>
                <p class="text-warm-300 text-lg leading-relaxed">
                    Founded in 2008 by James Whitfield, we are a RIBA Chartered practice with a simple conviction: that good buildings come from listening carefully — to clients, to sites, and to the communities they serve.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Studio Image --}}
<section class="px-6 lg:px-8 pb-20">
    <div class="max-w-7xl mx-auto reveal">
        <div class="relative overflow-hidden aspect-[21/9]">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=1600&q=80"
                 alt="Whitfield & Partners studio"
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-arch-dark/40 to-transparent"></div>
        </div>
    </div>
</section>

{{-- Story --}}
<section class="py-20 px-6 lg:px-8 bg-arch-charcoal">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">
            <div class="lg:col-span-2 reveal">
                <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">Our Story</span>
                <h2 class="font-serif text-3xl md:text-4xl font-light mb-6">From the Chilterns to the world</h2>
                <div class="w-12 h-px bg-arch-gold/40 mb-6"></div>
            </div>
            <div class="lg:col-span-3 space-y-6 reveal" style="transition-delay: 100ms">
                <p class="text-warm-300 leading-relaxed">
                    James Whitfield left Foster + Partners in 2008 with a conviction that architecture didn't need to choose between ambition and sensitivity. He opened a one-man practice above a bookshop in High Wycombe, designing extensions for neighbours and dreaming about public buildings.
                </p>
                <p class="text-warm-300 leading-relaxed">
                    Seventeen years later, Whitfield & Partners is a team of twelve across four disciplines. We still work from the Chilterns — our roots here inform everything we do. The landscape's chalk, flint, and beech woods appear in our material palette. The area's tradition of furniture-making influenced our love of timber.
                </p>
                <p class="text-warm-300 leading-relaxed">
                    We've delivered over {{ $projectCount }} projects, from single-room extensions to cultural centres, always guided by the same principle: design with the site, not against it. Our work has been recognised with RIBA Awards, Civic Trust commendations, and features in the Architectural Review and Dezeen.
                </p>
                <p class="text-warm-300 leading-relaxed">
                    We are quietly ambitious. Every project, regardless of scale, receives our full attention. The residential extension gets the same rigour as the public library. That's not a marketing claim — it's how we work.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Values --}}
<section class="py-20 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 reveal">
            <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">What Guides Us</span>
            <h2 class="font-serif text-3xl md:text-4xl font-light">Our Values</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-16">
            <div class="reveal flex gap-6">
                <span class="text-arch-gold/30 font-serif text-5xl leading-none shrink-0">01</span>
                <div>
                    <h3 class="font-serif text-xl mb-3">Contextual Sensitivity</h3>
                    <p class="text-warm-400 text-sm leading-relaxed">We study the character of a place before we propose to change it. History, scale, materials, light — these aren't constraints. They're the starting brief.</p>
                </div>
            </div>
            <div class="reveal flex gap-6" style="transition-delay: 100ms">
                <span class="text-arch-gold/30 font-serif text-5xl leading-none shrink-0">02</span>
                <div>
                    <h3 class="font-serif text-xl mb-3">Collaborative Process</h3>
                    <p class="text-warm-400 text-sm leading-relaxed">Great buildings emerge from conversation. We involve clients, consultants, and communities from the earliest sketch to the final snagging list.</p>
                </div>
            </div>
            <div class="reveal flex gap-6" style="transition-delay: 200ms">
                <span class="text-arch-gold/30 font-serif text-5xl leading-none shrink-0">03</span>
                <div>
                    <h3 class="font-serif text-xl mb-3">Sustainable Ambition</h3>
                    <p class="text-warm-400 text-sm leading-relaxed">We target Passivhaus or BREEAM Excellent as standard, not as an upgrade. Sustainability isn't an add-on — it shapes every decision from orientation to insulation.</p>
                </div>
            </div>
            <div class="reveal flex gap-6" style="transition-delay: 300ms">
                <span class="text-arch-gold/30 font-serif text-5xl leading-none shrink-0">04</span>
                <div>
                    <h3 class="font-serif text-xl mb-3">Craft in Detail</h3>
                    <p class="text-warm-400 text-sm leading-relaxed">The difference between good architecture and great architecture is in the junctions — where wall meets roof, where inside meets outside, where light meets surface.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Team --}}
<section class="py-20 px-6 lg:px-8 bg-arch-charcoal">
    <div class="max-w-7xl mx-auto">
        <div class="mb-16 reveal">
            <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">The Team</span>
            <h2 class="font-serif text-3xl md:text-4xl font-light">People behind the practice</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($team as $index => $member)
                <div class="reveal group" style="transition-delay: {{ $index * 100 }}ms">
                    <div class="relative overflow-hidden aspect-[3/4] mb-4">
                        <img src="{{ $member->image }}"
                             alt="{{ $member->name }}"
                             class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700"
                             loading="lazy">
                        <div class="absolute inset-0 bg-arch-dark/20 group-hover:bg-transparent transition-colors duration-500"></div>
                    </div>
                    <h3 class="font-serif text-lg">{{ $member->name }}</h3>
                    <p class="text-arch-gold text-xs tracking-[0.2em] uppercase mt-1 mb-3">{{ $member->role }}</p>
                    <p class="text-warm-400 text-sm leading-relaxed">{{ $member->bio }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- Awards --}}
<section class="py-20 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto reveal">
        <div class="text-center mb-12">
            <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">Recognition</span>
            <h2 class="font-serif text-3xl font-light">Awards & Publications</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="border border-warm-800/20 p-6 hover:border-arch-gold/30 transition-colors">
                <span class="text-arch-gold text-xs tracking-[0.2em] uppercase">2025</span>
                <h4 class="font-serif text-lg mt-2">RIBA South Award</h4>
                <p class="text-warm-500 text-sm mt-1">Wycombe Cultural Centre</p>
            </div>
            <div class="border border-warm-800/20 p-6 hover:border-arch-gold/30 transition-colors">
                <span class="text-arch-gold text-xs tracking-[0.2em] uppercase">2024</span>
                <h4 class="font-serif text-lg mt-2">Civic Trust Award</h4>
                <p class="text-warm-500 text-sm mt-1">Beaconsfield Library</p>
            </div>
            <div class="border border-warm-800/20 p-6 hover:border-arch-gold/30 transition-colors">
                <span class="text-arch-gold text-xs tracking-[0.2em] uppercase">2024</span>
                <h4 class="font-serif text-lg mt-2">Dezeen Feature</h4>
                <p class="text-warm-500 text-sm mt-1">The Glass Barn</p>
            </div>
            <div class="border border-warm-800/20 p-6 hover:border-arch-gold/30 transition-colors">
                <span class="text-arch-gold text-xs tracking-[0.2em] uppercase">2023</span>
                <h4 class="font-serif text-lg mt-2">BREEAM Excellent</h4>
                <p class="text-warm-500 text-sm mt-1">Osprey Office Park</p>
            </div>
            <div class="border border-warm-800/20 p-6 hover:border-arch-gold/30 transition-colors">
                <span class="text-arch-gold text-xs tracking-[0.2em] uppercase">2023</span>
                <h4 class="font-serif text-lg mt-2">Architectural Review</h4>
                <p class="text-warm-500 text-sm mt-1">Henley Riverside Hotel</p>
            </div>
            <div class="border border-warm-800/20 p-6 hover:border-arch-gold/30 transition-colors">
                <span class="text-arch-gold text-xs tracking-[0.2em] uppercase">2022</span>
                <h4 class="font-serif text-lg mt-2">Passivhaus Certified</h4>
                <p class="text-warm-500 text-sm mt-1">Chiltern Wellness Retreat</p>
            </div>
        </div>
    </div>
</section>

{{-- CTA --}}
<section class="py-20 px-6 lg:px-8 bg-arch-charcoal">
    <div class="max-w-3xl mx-auto text-center reveal">
        <h2 class="font-serif text-3xl md:text-4xl font-light mb-6">Join the studio</h2>
        <p class="text-warm-400 leading-relaxed mb-8">
            We're always interested in hearing from talented architects, designers and technologists who share our values. Send a portfolio and covering letter to careers@whitfieldpartners.co.uk
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-3 border border-arch-gold text-arch-gold text-sm tracking-widest uppercase hover:bg-arch-gold hover:text-arch-dark transition-all duration-300">
            Get in Touch
        </a>
    </div>
</section>

@endsection
