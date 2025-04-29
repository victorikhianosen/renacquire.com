

<section class="bg-black">
    <div class="container m-auto p-6 py-24">
        <div class="grid grid-cols-4 gap-16">
            <div class="col-span-4 md:col-span-2 lg:col-span-1">
                <img class="w-[50%] md:[40%] lg:w-[90%]" src="{{ asset('asssets/img/White on Gold.png') }}"
                    alt="">
                <p class="text-textColor text-sm md:text-[16px] font-normal leading-[26px] text-justify mt-4">
                    19A, Sinari Daranijo Street, Victoria Island, Lagos. Nigeria
                </p>
            </div>
            <div class="col-span-4 md:col-span-2 lg:col-span-3">
                <h2
                    class="w-full text-[28px] md:text-[34px] lg:text-[58px] leading-[33px] md:leading-[50px] lg:leading-[64px] text-white">
                    RenAcquire Limited is a leading advisory and investment firm.

                </h2>
            </div>
        </div>


        <div class="relative grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-x-1 md:gap-x-8 gap-y-24 pt-16">

            <div class="w-full">
                <h5
                    class="text-sm md:text-[26px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider text-white">
                    Newsletter</h5>
                <p
                    class="text-textColor text-sm md:text-[16px] font-normal leading-[23px] text-justifytext-white pt-4 tracking-wider w-[120px] md:w-full text-justify">
                    Subscribe to our newsletter to get the latest news and updates about our services.
                </p>

                <div class="hidden md:flex justify-start items-center py-4">
                    <input class="w-full text-sm border-0 rounded-l-lg py-3 px-3 outline-0 text-black"
                        type="text" placeholder="Enter email address"
                        class="bg-softWhite text-textColor2 text-sm md:text-xs font-normal leading-[26px] border-2 border-borderGray rounded-md py-3 px-4 w-full md:w-[80%] lg:w-[50%] placeholder:text-xs">
                    <button
                        class="bg-primary text-white border-0 rounded-r-lg py-3 px-4 text-sm transform-all duration-200 hover:text-black">Suscribe</button>
                </div>

                <div class="absolute flex md:hidden w-full justify-start items-center py-4">
                    <input class="w-full text-sm border-0 rounded-l-lg py-3 px-3 outline-0 text-black"
                        type="text" placeholder="Enter your email address"
                        class="bg-softWhite text-textColor2 text-sm md:text-base font-normal leading-[26px] border-2 border-borderGray rounded-md py-3 px-4 w-full md:w-[80%] lg:w-[50%]">
                    <button
                        class="bg-primary text-white border-0 rounded-r-lg py-3 px-4 text-sm transform-all duration-200 hover:text-black">Suscribe</button>
                </div>


            </div>
            <div>
                <h5
                    class="text-sm md:text-[18px] font-semibold leading-[23px] text-justifytext-white pt-2 tracking-wider text-white">
                    Quick Links</h5>
                <div class="flex flex-col justify-start items-start pt-2">
                    <a href="{{ route('home') }}"
                        class="text-textColor text-sm md:text-[14px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider  transition-all duration-300 hover:text-white hover:translate-x-2">
                        Home</a>

                    <a href="{{ route('services') }}"
                        class="text-textColor text-sm md:text-[14px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider  transition-all duration-300 hover:text-white hover:translate-x-2">
                        Services</a>

                    <a href="{{ route('team') }}"
                        class="text-textColor text-sm md:text-[14px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider  transition-all duration-300 hover:text-white hover:translate-x-2">
                        Team</a>

                    <a href="{{ route('contact') }}"
                        class="text-textColor text-sm md:text-[14px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider  transition-all duration-300 hover:text-white hover:translate-x-2">
                        Contact</a>

                </div>
            </div>





            <div>
                <h5
                    class="text-sm md:text-[18px] font-semibold leading-[23px] text-justifytext-white pt-2 tracking-wider text-white">
                    Socials</h5>
                <div class="flex flex-col justify-start items-start pt-2">
                    <a href=""
                        class="text-textColor text-sm md:text-[14px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider transition-all duration-300 hover:text-white hover:translate-x-2">
                        Facebook</a>

                    <a href="{{ url('https://www.instagram.com/renacquire/') }}" target="_blank"
                        class="text-textColor text-sm md:text-[14px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider transition-all duration-300 hover:text-white hover:translate-x-2">
                        Instagram</a>

                    <a href="{{ url('https://www.linkedin.com/in/renacquire-limited-128568347/') }}" target="_blank"
                        class="text-textColor text-sm md:text-[14px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider transition-all duration-300 hover:text-white hover:translate-x-2">
                        Linkedin</a>

                    <a href=""
                        class="text-textColor text-sm md:text-[14px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider  transition-all duration-300 hover:text-white hover:translate-x-2">
                        Twitter</a>

                </div>
            </div>

            <div class="">
                <h5
                    class="text-sm md:text-[18px] font-semibold leading-[23px] text-justifytext-white pt-2 tracking-wider text-white">
                    Say Hello
                </h5>
                <div class="flex flex-col justify-start items-start pt-2">
                    <a href=""
                        class="flex mr-24 md:mr-0 text-textColor text-sm md:text-[12px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider  transition-all duration-300 hover:text-white hover:translate-x-2">
                        <span>
                            <i class="fa-solid fa-envelope-open-text text-white mr-1"></i>
                        </span>

                        renacquire@gmail.com
                    </a>

                    <a href=""
                        class="flex text-textColor text-sm md:text-[14px] font-normal leading-[23px] text-justifytext-white pt-2 tracking-wider  transition-all duration-300 hover:text-white hover:translate-x-2">
                        <span>
                            <i class="fa-solid fa-phone-volume text-white mr-1"></i>
                        </span>

                        +234 814 132 5535</a>
                </div>
            </div>








        </div>
    </div>
</section>


<script src="{{ asset('asssets/js/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>

</html>
