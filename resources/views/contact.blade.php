@extends('layouts.app')
@section('main')
    <section class="relative text-black bg-cover bg-center"
        style="background-image: url('{{ asset('asssets/img/servicebg.jpg') }}');">
        <div class="absolute inset-0 bg-primary/95 z-0"></div>

        <div class="relative z-10 container mx-auto px-6 pt-40 pb-24 text-center text-black">
            <h1 class="text-5xl sm:text-6xl font-bold mb-4">Contact</h1>
            <div class="text-base sm:text-lg font-semibold flex justify-center gap-2">
                <a href="{{ route('home') }}" class="hover:underline text-gray-300">Home</a>
                <span>|</span>
                <span>Contact</span>
            </div>
        </div>

    </section>

    <section class="bg-charcoal text-white py-24">
        <div class="container mx-auto px-6">

            <!-- Contact Header (Time & Date) -->
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-white mb-4">Let's Get In Touch!</h2>
                <p class="text-primary text-lg">We’re available and ready to talk with you. Reach out to us anytime!</p>
                <div class="text-xl text-gray-400 mt-4">
                    <p>Open Days: Monday - Friday</p>
                    <p>Open Hours: 8 AM – 5 PM</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-16">

                <!-- Left side: Contact Form -->
                <div class="space-y-8">
                    <h3 class="text-3xl font-semibold text-white mb-6">Drop Us A Message!</h3>
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <input type="text" name="fullName" placeholder="Your Full Name"
                                class="w-full p-4 bg-gray-800 rounded-lg text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-indigo-500"
                                required>
                        </div>

                        <div>
                            <input type="email" name="email" placeholder="Your Email Address"
                                class="w-full p-4 bg-gray-800 rounded-lg text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-indigo-500"
                                required>
                        </div>

                        <div>
                            <input type="tel" name="phone" placeholder="Your Phone Number"
                                class="w-full p-4 bg-gray-800 rounded-lg text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-indigo-500"
                                required>
                        </div>

                        <div>
                            <input type="text" name="subject" placeholder="Subject"
                                class="w-full p-4 bg-gray-800 rounded-lg text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-indigo-500"
                                required>
                        </div>

                        <div>
                            <textarea name="message" placeholder="Your Message" rows="6"
                                class="w-full p-4 bg-gray-800 rounded-lg text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-indigo-500"
                                required></textarea>
                        </div>

                        <button type="submit"
                            class="w-full py-5 bg-primary text-white font-semibold rounded-lg transition-transform transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Submit
                        </button>
                    </form>
                </div>

                <!-- Right side: Image -->
                {{-- <div class="relative bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <img src="https://via.placeholder.com/500x400" alt="Office Image"
                        class="w-full h-full object-cover rounded-lg" />
                    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 flex items-center justify-center">
                        <div class="text-center text-white px-6">
                            <h3 class="text-2xl font-semibold mb-4">Visit Us!</h3>
                            <p>Come to our office to experience our financial solutions in person.</p>
                        </div>
                    </div>
                </div> --}}


                <div class="relative bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <iframe
                        src="https://www.google.com/maps?q=19A+Sinari+Daranijo+Street,+Victoria+Island,+Lagos&output=embed"
                        class="w-full h-full rounded-lg"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                  
                </div>


            </div>

            <!-- Address and Contact Information -->
            <div class="text-center mt-16">
                <h3 class="text-3xl font-semibold text-white mb-4">Visit Our Location</h3>
                <p class="text-gray-300 text-lg mb-4">19A, Sinari Daranijo Street, Victoria Island, Lagos</p>
                <a href="https://www.google.com/maps?q=19A,+Sinari+Daranijo+Street,+Victoria+Island,+Lagos"
                    class="text-gray-400 hover:text-indigo-500 transition">Check Location on Google Maps</a>
            </div>

        </div>
    </section>
@endsection
