@extends('layouts.app')

@section('main')
    {{-- Hero Header --}}
    <section class="relative text-black bg-cover bg-center" style="background-image: url('{{ asset('asssets/img/servicebg.jpg') }}');">
    <div class="absolute inset-0 bg-primary/95 z-0"></div>

        <div class="relative z-10 container mx-auto px-6 pt-40 pb-24 text-center text-black">
            <h1 class="text-5xl sm:text-6xl font-bold mb-4">Services</h1>
            <div class="text-base sm:text-lg font-semibold flex justify-center gap-2">
                <a href="{{ route('home') }}" class="hover:underline text-black/90">Home</a>
                <span>|</span>
                <span>Services</span>
            </div>
        </div>

    </section>



    {{-- Services --}}
    <section class="bg-charcoal text-white py-24">
        <div class="container mx-auto px-6">
            {{-- Title --}}
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl sm:text-5xl font-extrabold mb-4">What We Offer</h2>
                <p class="text-primary text-lg">
                    RenAcquire delivers tailored financial and advisory solutions across sectors, ensuring your success through innovation and strategic excellence.
                </p>
            </div>

            {{-- Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ([
                    ['icon' => 'fas fa-lightbulb', 'title' => 'Advisory Services', 'desc' => 'Strategic planning, financial structuring, and tailored business consulting to help you thrive.'],
                    ['icon' => 'fas fa-hand-holding-usd', 'title' => 'Lending Solutions', 'desc' => 'Flexible financing for public sector projects and institutional initiatives.'],
                    ['icon' => 'fas fa-project-diagram', 'title' => 'Transaction Structuring', 'desc' => 'Expert guidance on mergers, acquisitions, and corporate restructuring.'],
                    ['icon' => 'fas fa-piggy-bank', 'title' => 'Wealth Management', 'desc' => 'Personalized strategies for High Net-Worth Individuals to protect and grow wealth.'],
                ] as $service)
                    <div class="bg-white/10 border border-white/10 rounded-2xl p-6 text-center hover:-translate-y-2 transition transform duration-300 shadow-lg hover:shadow-xl">
                        <div class="w-14 h-14 mx-auto flex items-center justify-center rounded-full bg-primary/20 text-primary mb-4">
                            <i class="{{ $service['icon'] }} text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $service['title'] }}</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">{{ $service['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            {{-- Call to Action --}}
            <div class="mt-20 text-center">
                <h4 class="text-2xl font-bold mb-2">Not sure what you need?</h4>
                <p class="text-primary mb-6">Let’s explore your goals together and recommend the right path forward.</p>
                <a href="/contact"
                    class="px-6 py-3 bg-primary text-navy font-semibold rounded-lg shadow hover:bg-white hover:text-navy transition">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>
@endsection
