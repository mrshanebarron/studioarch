@extends('layouts.app')

@section('title', 'Contact')
@section('meta_description', 'Get in touch with Whitfield & Partners. Architecture practice based in High Wycombe, Buckinghamshire.')

@section('content')

{{-- Header --}}
<section class="pt-32 pb-16 px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <span class="text-arch-gold text-xs tracking-[0.3em] uppercase block mb-3">Get in Touch</span>
        <h1 class="font-serif text-5xl md:text-6xl font-light mb-4">Contact Us</h1>
        <p class="text-warm-400 text-lg font-light max-w-xl">
            Every project begins with a conversation. Tell us about your plans and we'll arrange an initial consultation.
        </p>
    </div>
</section>

{{-- Contact Content --}}
<section class="px-6 lg:px-8 pb-24">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">

            {{-- Form --}}
            <div class="lg:col-span-3 reveal">
                @if(session('success'))
                    <div class="bg-green-900/20 border border-green-600/30 text-green-300 p-6 mb-8" x-data x-init="setTimeout(() => $el.remove(), 8000)">
                        <p class="font-serif text-lg mb-1">Thank you for your enquiry</p>
                        <p class="text-sm text-green-400">{{ session('success') }}</p>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6" x-data="{ projectType: '' }">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-xs tracking-[0.2em] uppercase text-warm-400 mb-2">Full Name *</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                   class="w-full bg-arch-charcoal border border-warm-800/30 px-4 py-3 text-warm-100 focus:border-arch-gold focus:outline-none transition-colors placeholder-warm-600"
                                   placeholder="James Smith">
                            @error('name') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="email" class="block text-xs tracking-[0.2em] uppercase text-warm-400 mb-2">Email Address *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                   class="w-full bg-arch-charcoal border border-warm-800/30 px-4 py-3 text-warm-100 focus:border-arch-gold focus:outline-none transition-colors placeholder-warm-600"
                                   placeholder="james@example.com">
                            @error('email') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="block text-xs tracking-[0.2em] uppercase text-warm-400 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                   class="w-full bg-arch-charcoal border border-warm-800/30 px-4 py-3 text-warm-100 focus:border-arch-gold focus:outline-none transition-colors placeholder-warm-600"
                                   placeholder="+44 7700 900000">
                            @error('phone') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="project_type" class="block text-xs tracking-[0.2em] uppercase text-warm-400 mb-2">Project Type</label>
                            <select id="project_type" name="project_type" x-model="projectType"
                                    class="w-full bg-arch-charcoal border border-warm-800/30 px-4 py-3 text-warm-100 focus:border-arch-gold focus:outline-none transition-colors">
                                <option value="" class="text-warm-600">Select a type...</option>
                                <option value="new_build">New Build</option>
                                <option value="extension">Extension / Alteration</option>
                                <option value="renovation">Renovation / Conservation</option>
                                <option value="interior">Interior Design</option>
                                <option value="commercial">Commercial / Workplace</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="subject" class="block text-xs tracking-[0.2em] uppercase text-warm-400 mb-2">Subject *</label>
                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" required
                               class="w-full bg-arch-charcoal border border-warm-800/30 px-4 py-3 text-warm-100 focus:border-arch-gold focus:outline-none transition-colors placeholder-warm-600"
                               placeholder="New house project in Buckinghamshire">
                        @error('subject') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="message" class="block text-xs tracking-[0.2em] uppercase text-warm-400 mb-2">Your Message *</label>
                        <textarea id="message" name="message" rows="6" required
                                  class="w-full bg-arch-charcoal border border-warm-800/30 px-4 py-3 text-warm-100 focus:border-arch-gold focus:outline-none transition-colors placeholder-warm-600 resize-none"
                                  placeholder="Tell us about your project — the site, your ambitions, timeline, and budget range...">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit"
                            class="inline-flex items-center gap-2 px-10 py-4 bg-arch-gold text-arch-dark text-sm tracking-widest uppercase font-medium hover:bg-arch-copper transition-colors duration-300">
                        Send Enquiry
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </button>
                </form>
            </div>

            {{-- Contact Info --}}
            <div class="lg:col-span-2 reveal" style="transition-delay: 200ms">
                <div class="bg-arch-charcoal p-8 space-y-8 mb-8">
                    <div>
                        <h3 class="font-serif text-lg text-arch-gold mb-4">Studio</h3>
                        <div class="space-y-3 text-warm-300 text-sm">
                            <p>Whitfield & Partners</p>
                            <p>14 Castle Street<br>High Wycombe, HP13 6RZ<br>Buckinghamshire, United Kingdom</p>
                        </div>
                    </div>

                    <div class="border-t border-warm-800/20 pt-6">
                        <h3 class="font-serif text-lg text-arch-gold mb-4">Details</h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex items-start gap-3">
                                <span class="text-warm-500 w-16 shrink-0">Email</span>
                                <a href="mailto:studio@whitfieldpartners.co.uk" class="text-warm-300 hover:text-arch-gold transition-colors">studio@whitfieldpartners.co.uk</a>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-warm-500 w-16 shrink-0">Phone</span>
                                <a href="tel:+441494123456" class="text-warm-300 hover:text-arch-gold transition-colors">+44 (0) 1494 123 456</a>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="text-warm-500 w-16 shrink-0">Hours</span>
                                <span class="text-warm-300">Mon – Fri, 9:00 – 17:30</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Map placeholder --}}
                <div class="relative overflow-hidden aspect-[4/3] bg-arch-charcoal">
                    <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=600&q=80"
                         alt="High Wycombe, Buckinghamshire"
                         class="w-full h-full object-cover opacity-50">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-8 h-8 mx-auto mb-2 border border-arch-gold/60 rotate-45 flex items-center justify-center">
                                <div class="w-2 h-2 bg-arch-gold rotate-45"></div>
                            </div>
                            <p class="text-warm-300 text-sm">High Wycombe</p>
                            <p class="text-warm-500 text-xs">Buckinghamshire, UK</p>
                        </div>
                    </div>
                </div>

                {{-- Social --}}
                <div class="mt-8">
                    <h3 class="font-serif text-sm text-arch-gold tracking-[0.2em] uppercase mb-4">Follow Us</h3>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 border border-warm-800/30 flex items-center justify-center hover:border-arch-gold hover:text-arch-gold transition-colors text-warm-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 border border-warm-800/30 flex items-center justify-center hover:border-arch-gold hover:text-arch-gold transition-colors text-warm-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 border border-warm-800/30 flex items-center justify-center hover:border-arch-gold hover:text-arch-gold transition-colors text-warm-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.372 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.632-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
