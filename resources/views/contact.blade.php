@extends('layouts.app')
@section('main')
<section class="bg-navy text-white">
    <div class="container mx-auto px-6 pt-48 pb-24 text-center">
            <h1 class="font-[Plus Jakarta Sans] text-[55px] font-semibold leading-[65px] text-white">
                Contact
            </h1>

            <div class="text-[16px] font-bold leading-[25px] text-black pt-4 flex justify-center items-center gap-3">
                <a class="text-gray-200" href="{{ route('home') }}">Home |</a>
                <p class="text-white">contact</p>
            </div>
        </div>
    </section>


    <section class="bg-charcoal text-white py-24">
        <div class="container mx-auto px-6">

            <!-- Contact Header (Time & Date) -->
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-bold text-indigo-400 mb-4">Let's Get In Touch!</h2>
                <p class="text-gray-300 text-lg">We’re available and ready to talk with you. Reach out to us anytime!</p>
                <div class="text-xl text-gray-400 mt-4">
                    <p>Open Hours: Mon-Fri: 8 AM – 5 PM</p>
                    <p>Sat & Sun: Closed</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-16">

                <!-- Left side: Contact Form -->
                <div class="space-y-8">
                    <h3 class="text-3xl font-semibold text-indigo-400 mb-6">Drop Us A Message!</h3>
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <input type="text" name="fullName" placeholder="Your Full Name" class="w-full p-4 bg-gray-800 rounded-lg text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>

                        <div>
                            <input type="email" name="email" placeholder="Your Email Address" class="w-full p-4 bg-gray-800 rounded-lg text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>

                        <div>
                            <input type="tel" name="phone" placeholder="Your Phone Number" class="w-full p-4 bg-gray-800 rounded-lg text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>

                        <div>
                            <input type="text" name="subject" placeholder="Subject" class="w-full p-4 bg-gray-800 rounded-lg text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-indigo-500" required>
                        </div>

                        <div>
                            <textarea name="message" placeholder="Your Message" rows="6" class="w-full p-4 bg-gray-800 rounded-lg text-white placeholder-gray-400 border-none focus:ring-2 focus:ring-indigo-500" required></textarea>
                        </div>

                        <button type="submit" class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg transition-transform transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Submit
                        </button>
                    </form>
                </div>

                <!-- Right side: Image -->
                <div class="relative bg-gray-800 rounded-lg overflow-hidden shadow-lg">
                    <img src="https://via.placeholder.com/500x400" alt="Office Image" class="w-full h-full object-cover rounded-lg" />
                    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50 flex items-center justify-center">
                        <div class="text-center text-white px-6">
                            <h3 class="text-2xl font-semibold mb-4">Visit Us!</h3>
                            <p>Come to our office to experience our financial solutions in person.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Address and Contact Information -->
            <div class="text-center mt-16">
                <h3 class="text-3xl font-semibold text-indigo-400 mb-4">Visit Our Location</h3>
                <p class="text-gray-300 text-lg mb-4">19A, Sinari Daranijo Street, Victoria Island, Lagos</p>
                <a href="https://www.google.com/maps?q=19A,+Sinari+Daranijo+Street,+Victoria+Island,+Lagos" class="text-indigo-400 hover:text-indigo-500 transition">Check Location on Google Maps</a>
            </div>

        </div>
    </section>





      @endsection
