<section
    class="relative pt-24 bg-cover bg-center"
    style="background-image: url('{{ asset('asssets/img/investments.jpg') }}');">
    <div class="absolute inset-0 bg-primary/90 z-0"></div>
    <div class="relative z-10 container mx-auto px-6 py-10 md:py-16">
        <div class="flex justify-center items-center gap-8 flex-wrap lg:flex-nowrap">
            <div class="space-y-5 max-w-2xl">
                <h1 class="font-bold text-[34px] md:text-[70px] leading-none text-black">Innovative Advisory & Investment Solutions</h1>
                <p class="text-black text-sm md:text-[16px] font-normal leading-[26px] text-justify">
                    At RenAcquire Limited, we pride ourselves on providing cutting-edge advisory, lending,
                    transaction structuring, and wealth management services. Our expertise drives success for our
                    clients across the public and private sectors.
                </p>
                <div class="flex justify-start items-center gap-6 pt-6 flex-wrap">
                    <button class="bg-black text-sm md:text-base text-white py-3 px-6 md:px-8 rounded-sm font-semibold transition-all duration-200 hover:bg-white hover:text-black">
                        Discover More
                    </button>
                    <button class="bg-white text-sm md:text-base text-black py-3 px-6 md:px-8 rounded-sm font-semibold transition-all duration-200 hover:bg-black hover:text-white">
                        Discover More
                    </button>
                </div>
            </div>
            <div class="hidden lg:block">
                <img class="w-[50rem] h-[30rem] object-fit" src="{{ asset('asssets/img/hero.png') }}" alt="">

                {{-- <img class="w-[50rem]" src="{{ asset('asssets/img/hero.webp') }}" alt=""> --}}
            </div>
        </div>
    </div>
</section>
