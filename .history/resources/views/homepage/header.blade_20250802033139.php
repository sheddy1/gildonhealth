@section('header')
    <div class="relative w-100% h-0 md:h-110 lg:h-120">

        <span class="flex flex-row justify-left items-center gap-[5%]
            h-[100%] w-[100%] bg-blue-500">
            <span class="flex justify-left items-center gap-[5%]
            absolute top-8 left-[1.5%] w-60 h-7" >
                <img src="{{ asset('images/homepage/logo1.png') }}"
                class=" h-[100%]" alt="">

                <p class="text-xl font-bold text-[#FED077]">
                    Gildon Health
                </p>
            </span>

            <span class="flex justify-left items-center gap-[5%]
            absolute top-30 left-[1.5%] w-60 h-7" >
                <p class="text-x3 text-[#FED077]">
                    An Online
                </p>
                <span class="w-[55%] h-[3%] bg-[#FED077]"></span>
            </span>

            <p class="text-[40px] md:text-4xl lg:text-5xl font-bold text-[#FED077] absolute top-45 left-[1.5%]">
                Healthcare System
            </p>

            <p class=" lg:text-2xl md:text-x3 text-[#FED077] absolute top-70 left-[1.5%]">
                Motto: Healthcare At Your Finger Tips
            </p>

            <button class="bg-[#FED077] h-7 w-30 font-bold text-[#2A4652] rounded
            absolute top-90 left-[1.5%]">
                Get Started
            </button>

            <img src="{{ asset('images/homepage/Vector.png') }}"
            class="w-[70%] h-[105%]" alt="">
        </span>

        <span class="relative w-100% h-76 md:h-0 lg:h-0 bg-[#2A4652]">

        </span>

        <span>
            <img src="{{ asset('images/homepage/header2.png') }}"
            class="w-[70%] h-[105%] absolute top-0 right-0" alt="">
        </span>

    </div>


@endsection
