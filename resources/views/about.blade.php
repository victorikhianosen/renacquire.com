@extends('layouts.app')
@section('main')
    <section class="bg-navy text-primary">
        <div class="container mx-auto px-6 pt-40 pb-24 text-center">
            <h1 class="text-5xl sm:text-6xl font-bold mb-4">About</h1>
            <div class="text-base sm:text-lg font-semibold flex justify-center gap-2">
                <a href="{{ route('home') }}" class="hover:underline text-primary/80">Home</a>
                <span>|</span>
                <span>About</span>
            </div>
        </div>
    </section>

    <section class="bg-charcoal text-white py-24">
        <div class="container mx-auto px-6">

            <!-- Hero Title -->
            <div class="text-center mb-20">
                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
                    About RenAcquire
                </h1>
                <p class="text-gray-200 text-lg max-w-3xl mx-auto">
                    RenAcquire is committed to delivering innovative financial and advisory services tailored to empower
                    public sector entities, businesses, and high net-worth individuals.
                </p>
            </div>



            <!-- About Section -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-semibold text-white mb-4">Who We Are</h2>
                    <h2 class="text-6xl font-semibold text-white mb-4">Driving financial growth with strategic solutions.
                    </h2>


                    <p class="text-gray-300 mb-6 leading-relaxed text-justify">
                        RenAcquire Limited is a leading advisory and investment banking firm committed to fostering economic
                        growth and financial empowerment. With a focus on innovation and integrity, we deliver tailor-made
                        solutions that address the unique needs of our clients. .</p>

                    <a href="/contact"
                        class="inline-block px-6 py-3 bg-black text-white font-medium rounded-xl shadow-md hover:opacity-90 transition transform hover:scale-105">
                        Talk to Us
                    </a>
                </div>

                <div>
                    <img src="{{ asset('asssets/img/about.png') }}" alt="About Image"
                        class="rounded-2xl shadow-xl w-full object-cover">
                </div>
            </div>

            <!-- Values or Highlights -->
            <div class="mt-24 grid md:grid-cols-3 gap-8">
                <!-- Mission -->
                <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 hover:scale-105 transition">
                    <i class="fas fa-crosshairs text-indigo-400 text-3xl mb-4"></i>
                    <!-- Crosshairs for mission (goal-oriented) -->
                    <h4 class="text-xl font-semibold text-white mb-2">Mission</h4>
                    <p class="text-gray-300">To empower our clients with financial strategies that drive sustainable growth
                        and prosperity.</p>
                </div>

                <!-- Vision -->
                <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 hover:scale-105 transition">
                    <i class="fas fa-eye text-pink-400 text-3xl mb-4"></i> <!-- Eye for vision (foresight) -->
                    <h4 class="text-xl font-semibold text-white mb-2">Vision</h4>
                    <p class="text-gray-300">To be the most trusted partner for innovative financial solutions in Africa and
                        beyond.</p>
                </div>

                <!-- Values -->
                <div class="bg-white/10 backdrop-blur-md p-8 rounded-2xl border border-white/20 hover:scale-105 transition">
                    <i class="fas fa-handshake text-yellow-400 text-3xl mb-4"></i>
                    <!-- Handshake for values (partnership) -->
                    <h4 class="text-xl font-semibold text-white mb-2">Values</h4>
                    <p class="text-gray-300">We prioritise understanding and achieving the unique goals of every client, to
                        deliver impactful, customised solutions.</p>
                </div>
            </div>





            <div class="grid md:grid-cols-2 gap-12 items-center pt-24">

                <!-- Image on the Left -->
                <div>
                    <img src="{{ asset('asssets/img/okoya.jpg') }}" alt="Director Image"
                        class="rounded-2xl shadow-lg w-full object-cover">
                </div>

                <!-- Message from the Managing Director -->
                <div>
                    <h2 class="text-5xl font-semibold text-white mb-4">Message from the Managing Director</h2>
                    <p class="text-white leading-relaxed mb-6">
                        Dear Stakeholders,
                    </p>
                    <p class="text-white leading-relaxed mb-6 text-justify">
                        At RenAcquire Limited, we are committed to delivering tailored financial solutions that help
                        businesses navigate complex challenges and achieve their strategic objectives. Drawing from decades
                        of experience, we work closely with our clients to unlock growth opportunities, structure innovative
                        transactions, and deliver measurable value. Our goal is to partner with businesses and institutions
                        to create innovative, client-focused solutions that deliver real impact. In today’s dynamic
                        environment, we believe collaboration is key to unlocking full potential, and we welcome
                        opportunities to work with visionary organisations seeking sustainable growth.
                    </p>
                    <p class="text-white leading-relaxed mb-6 text-justify">
                        Thank you for choosing RenAcquire as your trusted partner. Together, we can achieve extraordinary
                        results.
                    </p>

                    <p class="text-white leading-relaxed mb-6 text-justify text-lg font-bold">
                        Funke Okoya
                    </p>
                </div>

            </div>


        </div>
    </section>
@endsection
