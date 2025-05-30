@extends('layouts.app')

@section('main')
    {{-- Header Section --}}
    <section class="relative text-black bg-cover bg-center" style="background-image: url('{{ asset('asssets/img/servicebg.jpg') }}');">
    <div class="absolute inset-0 bg-primary/95 z-0"></div>

        <div class="relative z-10 container mx-auto px-6 pt-40 pb-24 text-center text-black">
            <h1 class="text-5xl sm:text-6xl font-bold mb-4">Team</h1>
            <div class="text-base sm:text-lg font-semibold flex justify-center gap-2">
                <a href="{{ route('home') }}" class="hover:underline text-gray-300">Home</a>
                <span>|</span>
                <span>Team</span>
            </div>
        </div>

    </section>



    <section class="bg-charcoal text-white py-24">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl sm:text-4xl font-semibold mb-6">Meet Our Leadership Team</h2>
            <p class="text-primary mb-12">
                Our leadership team brings expertise and a shared vision to ensure RenAcquire delivers exceptional financial solutions for businesses worldwide.
            </p>

            <div class="grid md:grid-cols-3 gap-10">
                {{-- 1 --}}

                <div class="bg-white/10 rounded-2xl overflow-hidden">
                    <img class="object-cover w-full h-[30rem]" src="{{ asset('asssets/img/fo.jpeg') }}" alt="">
                    <div class="px-6 py-8">
                        <h4 class="text-xl font-semibold mb-1">Funke Okoya
                        </h4>
                        <p class="text-primary font-medium mb-3">Founder and Managing Director
                        </p>
                        <p class="text-gray-300 text-sm leading-relaxed">Leading RenAcquire with a focus on innovation and client success.</p>
                    </div>
                </div>


                {{-- 2 --}}
                <div class="bg-white/10 rounded-2xl overflow-hidden">
                    <img class="object-cover w-full h-[30rem]" src="{{ asset('asssets/img/fumi.jpeg') }}" alt="">
                    <div class="px-6 py-8">
                        <h4 class="text-xl font-semibold mb-1">Tolulope Williams
                        </h4>
                        <p class="text-primary font-medium mb-3">Chief Operating Officer
                        </p>
                        <p class="text-gray-300 text-sm leading-relaxed">Overseeing financial strategies and operations to ensure growth.</p>
                    </div>
                </div>


                {{-- 3 --}}

                <div class="bg-white/10 rounded-2xl overflow-hidden">
                    <img class="object-fit w-full h-[30rem]" src="{{ asset('asssets/img/king.jpg') }}" alt="">
                    <div class="px-6 py-8">
                        <h4 class="text-xl font-semibold mb-1">Kingsley Ezemegbu</h4>
                        <p class="text-primary font-medium mb-3">Head of Client Coverage</p>
                        <p class="text-gray-300 text-sm leading-relaxed">Managing operations to drive efficiency and excellence across the organization.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
