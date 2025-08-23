@section('whyus')
    <div class="relative w-[97%] h-90 flex items-center bg-blue-500
    hidden md:flex lg-flex">
        <span class="custombg2 w-[40%] h-full bg-[#2A4652] rounded-lg
        flex justify-center items-center">
            <span class="ml-[-150px] w-60 h-60 flex flex-col text-[#FED077]
            gap-5">
                <p class="text-2xl font-bold">
                    Why Choose Us?
                </p>

                <p class="text-1xl">
                    We are Dedicated to ensuring that you have the best healthcare 
                    services at an affordable price. We have a standard test for 
                    everyone working with us.
                </p>
            </span>
        </span>

        <span class="absolute right-0 w-[70%] h-60 bg-blue-300 flex
        justify-center items-center gap-10">
            <span class="w-1/3 h-full bg-[#E9FAFD] rounded-lg flex
            justify-center items-center">
                <span class="w-[80%] h-[80%] flex flex-col gap-5">
                    <img src="{{ asset('images/about/skilledexperts.png') }}"
                    class="h-7 w-7" alt="">

                    <p class="text-2xl font-bold">Skilled Experts</p>

                    <p class="text-1xl">
                        Get personalized care from certified doctors and professionals—all 
                        online, anytime
                    </p>
                </span>
            </span>

            <span class="w-1/3 h-full bg-[#E9FAFD] rounded-lg flex
            justify-center items-center">
                <span class="w-[80%] h-[80%] flex flex-col gap-5">
                    <img src="{{ asset('images/about/hours.png') }}"
                    class="h-7 w-7" alt="">

                    <p class="text-2xl font-bold">24/7 Access & Support</p>

                    <p class="text-1xl">
                        Get personalized care from certified doctors and professionals—all 
                        online, anytime
                    </p>
                </span>
            </span>

            <span class="w-1/3 h-full bg-[#E9FAFD] rounded-lg flex
            justify-center items-center">
                <span class="w-[80%] h-[80%] bg-blue-500 flex flex-col gap-5">
                    <img src="{{ asset('images/about/skilledexperts.png') }}"
                    class="h-7 w-7" alt="">

                    <p class="text-2xl font-bold">Skilled Experts</p>

                    <p class="text-1xl">
                        Get personalized care from certified doctors and professionals—all 
                        online, anytime
                    </p>
                </span>
            </span>
        </span>
    </div>
@endsection