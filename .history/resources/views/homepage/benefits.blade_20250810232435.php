@section('benefits')
    <div class="relative w-full md:h-100 lg:h-120">
        <span class="absolute left-[1.5%] w-[47%] h-full hidden md:flex lg:flex flex-col justify-center
        items-left md:gap-5 lg:gap-10   ">
            <p class="text-3xl font-bold text-[#2A4652]">
                Benefits of Joining Gildon Health
            </p>

            <p class="text-2xl font-semibold text-[#2A4652]">
                Gildon health, has a whole lot of benefits, some of which are:
            </p>

            <span class="flex justify-left items-center gap-2">
                <img src="{{ asset('images/homepage/point.png') }}"
                class=" h-[100%]" alt="">

                <p class="text-xl text-[#2A4652]">
                    Connecting Individuals
                </p>
            </span>

            <span class="flex justify-left items-center gap-2">
                <img src="{{ asset('images/homepage/point.png') }}"
                class=" h-[100%]" alt="">

                <p class="text-xl text-[#2A4652]">
                    Affordable Healthcare
                </p>
            </span>

            <span class="flex justify-left items-center gap-2">
                <img src="{{ asset('images/homepage/point.png') }}"
                class=" h-[100%]" alt="">

                <p class="text-xl text-[#2A4652]">
                    Quick and Efficient
                </p>
            </span>

            <span class="flex justify-left items-center gap-2">
                <img src="{{ asset('images/homepage/point.png') }}"
                class=" h-[100%]" alt="">

                <p class="text-xl text-[#2A4652]">
                    Makes Life Easy
                </p>
            </span>

            <span class="flex justify-left items-center gap-2">
                <img src="{{ asset('images/homepage/point.png') }}"
                class=" h-[100%]" alt="">

                <p class="text-xl text-[#2A4652]">
                    Quick and Efficient
                </p>
            </span>
        </span>

        <span class="absolute top-0 right-[1.5%] w-[47%] h-full hidden md:flex lg:flex
        justify-start items-left gap-10 ">
            <span class="500 w-[47%] h-full flex flex-col justify-center items-left gap-10">
                <img src="{{ asset('images/homepage/pic3.png') }}"
                class="h-[47%] w-full" alt="">
            </span>

            <span class="w-[47%] h-full flex flex-col justify-center items-left gap-10">
                <img src="{{ asset('images/homepage/pic1.png') }}"
                class="h-[47%] w-full" alt="">

                <img src="{{ asset('images/homepage/pic2.png') }}"
                class="h-[47%] w-full" alt="">
            </span>
        </span>
    </div>

    <div class="bg-blue-300 relative w-full h-250 gap-10 flex flex-col justify-center
    items-center md:hidden lg:hidden">

    </div>
@endsection
