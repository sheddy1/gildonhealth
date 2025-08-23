@section('whyus')
    <div class="relative w-[97%] h-90 flex items-center 
    hidden md:flex lg-flex">
        <span class="custombg2 w-[40%] h-full bg-[#2A4652] rounded-lg
        flex justify-center items-center">
            <span class="absolute left-[5%] lg:w-60 md:w-40 h-60 flex flex-col text-[#FED077]
            gap-5">
                <p class="lg:text-2xl md:text-xl font-bold">
                    Why Choose Us?
                </p>

                <p class="lg:text-1xl md:text-sm">
                    We are Dedicated to ensuring that you have the best healthcare 
                    services at an affordable price. We have a standard test for 
                    everyone working with us.
                </p>
            </span>
        </span>

        <span class="absolute right-0 w-[70%] h-60 flex
        justify-center items-center gap-10">
            <span class="w-1/3 h-full bg-[#E9FAFD] rounded-lg flex
            justify-center items-center shadow-[0px_14px_40px_rgba(0,0,0,0.25)]">
                <span class="w-[80%] h-[80%] flex flex-col gap-5">
                    <img src="{{ asset('images/about/skilledexperts.png') }}"
                    class="h-7 w-7" alt="">

                    <p class="lg:text-[20px] md:text-[15px] font-bold">Skilled Experts</p>

                    <p class="lg:text-[15px] md:text-[13px]">
                        Get personalized care from certified doctors and professionals—all 
                        online, anytime
                    </p>
                </span>
            </span>

            <span class="w-1/3 h-full bg-[#E9FAFD] rounded-lg flex
            justify-center items-center shadow-[0px_14px_40px_rgba(0,0,0,0.25)]">
                <span class="w-[80%] h-[80%] flex flex-col gap-5">
                    <img src="{{ asset('images/about/hours.png') }}"
                    class="h-7 w-7" alt="">

                    <p class="lg:text-[6px] md:text-[15px] font-bold">24/7 Access & Support</p>

                    <p class="lg:text-[6px] md:text-[13px]">
                        Consult a doctor, ask questions, or get prescriptions 
                        from the comfort of your home—day or night.
                    </p>
                </span>
            </span>

            <span class="w-1/3 h-full bg-[#E9FAFD] rounded-lg flex
            justify-center items-center shadow-[0px_14px_40px_rgba(0,0,0,0.25)]">
                <span class="w-[80%] h-[80%] flex flex-col gap-5">
                    <img src="{{ asset('images/about/safe.png') }}"
                    class="h-7 w-7" alt="">

                    <p class="lg:text-[6px] md:text-[15px] font-bold">Safe & Simple</p>

                    <p class="lg:text-[6px] md:text-[13px]">
                        Your health data is protected with top-grade security, 
                        and consultations are always private and stress-free.
                    </p>
                </span>
            </span>
        </span>
    </div>

    <div class="relative w-[90%] h-90 flex items-center bg-blue-500
    hidden md:flex lg-flex">

    </div>
@endsection