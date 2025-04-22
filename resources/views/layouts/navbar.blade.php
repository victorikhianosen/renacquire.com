
<section id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-300 bg-primary">
    <div class="container mx-auto px-6">
        <div class="flex justify-between items-center py-4">

            <a href="{{ route('home') }}">
                <img class="w-36 md:w-44" src="{{ asset('asssets/img/logo.png') }}" alt="">

            </a>
            <div class="space-x-6 hidden lg:block">
                <a href="{{ route('home') }}"
                    class="text-black font-medium text-lg transition-all duration-200 px-5 rounded-md py-1.5 hover:bg-primary hover:text-white">Home</a>
                <a href="{{ route('services') }}"
                    class="text-black font-medium text-lg transition-all duration-200 px-5 rounded-md py-1.5 hover:bg-primary hover:text-white">Service</a>
                <a href="{{ route('about') }}"
                    class="text-black font-medium text-lg transition-all duration-200 px-5 rounded-md py-1.5 hover:bg-primary hover:text-white">About</a>
                <a href="{{ route('team') }}"
                    class="text-black font-medium text-lg transition-all duration-200 px-5 rounded-md py-1.5 hover:bg-primary hover:text-white">Team</a>
                <a href="{{ route('contact') }}"
                    class="text-black font-medium text-lg transition-all duration-200 px-5 rounded-md py-1.5 hover:bg-primary hover:text-white">Contact</a>
            </div>

            <div class="lg:hidden">
                <img id="open-menu" class="w-6 text-white" src="{{ asset('asssets/img/menu/menu2.svg') }}"
                    alt="">
            </div>

        </div>
    </div>
</section>




@include('layouts.mobile-menu')
