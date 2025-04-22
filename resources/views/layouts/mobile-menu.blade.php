<section id="mobile-menu"
    class="bg-white h-screen w-[80%] max-w-xs fixed top-0 right-0 z-[9999] shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out">
    <div class="flex flex-col h-full">

        <div class="flex justify-end items-center p-4">
            <a href="{{ route('home') }}">
                <img id="close-menu" class="w-8 text-white cursor-pointer"
                src="{{ asset('asssets/img/menu/close1.svg') }}" alt="">
            </a>
        </div>

        <div class="flex flex-col items-center space-y-8 pt-24">
            <a href="{{ route('home') }}" class="text-gray-800 font-semibold text-xl hover:text-primary transition">Home</a>
            <a href="{{ route('services') }}" class="text-gray-800 font-semibold text-xl hover:text-primary transition">Service</a>
            <a href="{{ route('about') }}" class="text-gray-800 font-semibold text-xl hover:text-primary transition">About</a>
            <a href="{{ route('team') }}" class="text-gray-800 font-semibold text-xl hover:text-primary transition">Team</a>
            <a href="{{ route('contact') }}" class="text-gray-800 font-semibold text-xl hover:text-primary transition">Contact</a>
        </div>
    </div>
</section>
