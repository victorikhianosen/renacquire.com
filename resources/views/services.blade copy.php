@extends('layouts.app')
@section('main')
    <section class="bg-white">
        <div class="container mx-auto px-6 pt-48 pb-24 text-center">
            <h1 class="font-[Plus Jakarta Sans] text-[55px] font-semibold leading-[65px] text-[#242528]">
                Services
            </h1>

            <div class="text-[16px] font-bold leading-[25px] text-black pt-4 flex justify-center items-center gap-3">
                <a class="text-gray-200" href="{{ route('home') }}">Home |</a>
                <p>about</p>
            </div>
        </div>
    </section>






    <section class="bg-black">
        <div class="container mx-auto px-6 py-24">




            <div class="text-center mb-20">
                <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-white mb-4">
                    Our Services
                </h1>
                <p class="text-gray-200 text-lg max-w-3xl mx-auto">

                    RenAcquire is your trusted partner for innovative financial and advisory services. We work with public
                    sector entities, businesses, and high net-worth individuals, providing tailored solutions that drive
                    growth, efficiency, and long-term success.
                </p>
            </div>


            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-10">

                <!-- Advisory Services -->
                <div
                    class="group bg-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-white/10">
                    <div
                        class="w-14 h-14 flex items-center justify-center rounded-full bg-indigo-600/20 group-hover:bg-indigo-600 mb-6 transition duration-300">
                        <i class="fas fa-lightbulb text-indigo-400 group-hover:text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Advisory Services</h3>
                    <p class="text-gray-300">
                        RenAcquire provides strategic advisory solutions to help businesses and public sector entities
                        achieve their goals. From financial planning to public sector consulting, we ensure impactful
                        outcomes.
                    </p>
                </div>

                <!-- Lending Solutions -->
                <div
                    class="group bg-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-white/10">
                    <div
                        class="w-14 h-14 flex items-center justify-center rounded-full bg-pink-600/20 group-hover:bg-pink-600 mb-6 transition duration-300">
                        <i class="fas fa-hand-holding-usd text-pink-400 group-hover:text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Lending Solutions</h3>
                    <p class="text-gray-300">
                        Our lending services are designed to support public sector entities and government parastatals in
                        achieving their objectives. We offer tailored financing solutions with flexible terms.
                    </p>
                </div>

                <!-- Transaction Structuring -->
                <div
                    class="group bg-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-white/10">
                    <div
                        class="w-14 h-14 flex items-center justify-center rounded-full bg-yellow-500/20 group-hover:bg-yellow-500 mb-6 transition duration-300">
                        <i class="fas fa-project-diagram text-yellow-400 group-hover:text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Transaction Structuring</h3>
                    <p class="text-gray-300">
                        We specialise in structuring and executing complex corporate transactions, ensuring optimal outcomes
                        for all stakeholders involved.
                    </p>
                </div>

                <!-- Wealth Management -->
                <div
                    class="group bg-white/10 backdrop-blur-xl rounded-3xl p-8 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border border-white/10">
                    <div
                        class="w-14 h-14 flex items-center justify-center rounded-full bg-green-500/20 group-hover:bg-green-500 mb-6 transition duration-300">
                        <i class="fas fa-piggy-bank text-green-400 group-hover:text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Wealth Management</h3>
                    <p class="text-gray-300">
                        For High Net-Worth Individuals (HNIs), we provide personalised wealth management services designed
                        to preserve and grow wealth while aligning with individual financial objectives.
                    </p>
                </div>

            </div>

            <!-- CTA Section -->
            <div class="mt-20 text-center">
                <h4 class="text-2xl font-semibold text-white mb-4">Not sure what you need?</h4>
                <p class="text-gray-400 mb-6">Let’s discuss your goals and recommend the perfect solution for your business.
                </p>
                <a href="/contact"
                    class="inline-block px-6 py-3 bg-primary text-white font-medium rounded-xl shadow hover:opacity-90 transition">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>
@endsection
