@section('whychooseus')
    <div class="h-120 w-[97%] lg:flex md:flex
    hidden justify-center items-center gap-[4%]
    ">
        <span class="w-[48%] h-full flex justify-center items-left flex-col
         gap-5">
            <span class="flex justify-left items-center gap-[2%]
                w-full h-7">
                <span class="w-20 h-[2px] bg-[#2A4652]"></span>
                <p class="text-xl">Why Chose Us?</p>
            </span>

            <p class="lg:text-4xl md:text-[27px] font-bold">
                Why Partner with Gildon Health
            </p>

            <p class="lg:text-2xl md:text-[17px] ">
                Gildon Health connects you to more patients, flexible work,
                and steady income—all in one platform. Whether you are a
                 doctor, pharmacist, or lab, we make it easy to grow your
                 practice, work on your terms, and make real impact. Join
                 the future of smart, accessible healthcare.
            </p>
        </span>

        <span class="w-[48%] h-full flex justify-center items-center
        flex-col gap-[4%]">
            <span class="w-full h-[48%] flex justify-center 
            items-center gap-[4%]">
                <span class="w-[48%] h-full bg-[#2A4652] flex justify-center 
                items-center rounded-lg flex-col text-[#E9FAFD] gap-3">
                    <img src="{{ asset('images/careers/earn2.png') }}"
                    class="w-11 h-11" alt="">

                    <p class="w-[90%] text-xl font-bold text-center">
                        Earn More Stress Less
                    </p>

                    <p class="text-1xl w-[90%] text-center">
                        Enjoy a steady income of ₦400K+ monthly with 
                        flexible hours and minimal overhead.
                    </p>
                </span>

                <span class="w-[48%] h-full bg-[#E9FAFD] flex justify-center 
                items-center rounded-lg flex-col text-[#2A4652] gap-3
                shadow-[0px_14px_40px_rgba(0,0,0,0.25)]">
                    <img src="{{ asset('images/careers/teams.png') }}"
                    class="w-11 h-11" alt="">

                    <p class="w-[90%] text-xl font-bold text-center">
                        Work on Your Terms
                    </p>

                    <p class="text-1xl w-[90%] text-center">
                        Choose your own schedule and consult from anywhere—no commuting, 
                        no clinic costs.
                    </p>
                </span>
            </span>

            <span class="w-full h-[48%] flex justify-center items-center
            gap-[4%]">
                <span class="w-[48%] h-full bg-[#E9FAFD] flex justify-center 
                items-center rounded-lg flex-col text-[#2A4652] gap-3
                shadow-[0px_14px_40px_rgba(0,0,0,0.25)]">
                    <img src="{{ asset('images/careers/network.png') }}"
                    class="w-11 h-11" alt="">

                    <p class="w-[90%] text-xl font-bold text-center">
                         Join a Trusted Network
                    </p>

                    <p class="text-1xl w-[90%] text-center">
                        Be part of a growing, reputable healthcare platform trusted 
                        by patients and professionals
                    </p>
                </span>

                <span class="w-[48%] h-full bg-[#2A4652] flex justify-center 
                items-center rounded-lg flex-col text-[#E9FAFD] gap-3">
                    <img src="{{ asset('images/careers/impact.png') }}"
                    class="w-11 h-11" alt="">

                    <p class="w-[90%] text-xl font-bold text-center">
                        Make a Real Impact
                    </p>

                    <p class="text-1xl w-[90%] text-center">
                        Reach more people and deliver meaningful care
                    </p>
                </span>
            </span>
        </span>
    </div>

    <div class="h-300 w-[90%] lg:hidden md:hidden bg-blue-500 flex-col
    flex justify-center items-center gap-[4%]
    ">
        <p class="text-xl">Why Chose Us?</p>

        <p class="text-3xl font-bold w-[90%] text-center">
            Why Partner with Gildon Health
        </p>

        <p class="text-xl w-[90%] text-center">
            Gildon Health connects you to more patients, flexible work,
            and steady income—all in one platform. Whether you are a
            doctor, pharmacist, or lab, we make it easy to grow your
            practice, work on your terms, and make real impact. Join
            the future of smart, accessible healthcare.
        </p>

        <span class="w-full h-70 bg-[#2A4652] flex justify-center 
        items-center rounded-lg flex-col text-[#E9FAFD] gap-8">
            <img src="{{ asset('images/careers/earn2.png') }}"
            class="w-11 h-11" alt="">

            <p class="w-[90%] text-xl font-bold text-center">
                Earn More Stress Less
            </p>

            <p class="text-1xl w-[90%] text-center">
                Enjoy a steady income of ₦400K+ monthly with 
                flexible hours and minimal overhead.
            </p>
        </span>

        <span class="w-[48%] h-full bg-[#E9FAFD] flex justify-center 
                items-center rounded-lg flex-col text-[#2A4652] gap-3
                shadow-[0px_14px_40px_rgba(0,0,0,0.25)]">
                    <img src="{{ asset('images/careers/teams.png') }}"
                    class="w-11 h-11" alt="">

                    <p class="w-[90%] text-xl font-bold text-center">
                        Work on Your Terms
                    </p>

                    <p class="text-1xl w-[90%] text-center">
                        Choose your own schedule and consult from anywhere—no commuting, 
                        no clinic costs.
                    </p>
                </span>
    </div>
@endsection
