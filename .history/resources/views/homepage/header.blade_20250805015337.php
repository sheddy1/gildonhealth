@section('header')
    <div class="relative w-100% h-0 md:h-110 lg:h-120">

        <span class="w-[70%] h-[100%] bg-blue-500 top-[50%]">
            <span class="flex flex-col justify-center items-left gap-[15%]
            absolute top-[7%] left-[1.5%] h-[85%] w-120 " >
                <span class=" flex justify-left items-center gap-[5%]
                    w-60 h-7 " >
                    <img src="{{ asset('images/homepage/logo1.png') }}"
                    class=" h-[100%]" alt="">

                    <p class="text-xl font-bold text-[#FED077]">
                        Gildon Health
                    </p>
                </span>

                <span class="flex justify-left items-center gap-[5%]
                w-60 h-7" >
                    <p class="text-x3 text-[#FED077]">
                        An Online
                    </p>
                    <span class="w-[55%] h-[3%] bg-[#FED077]"></span>
                </span>

                <p class="text-[40px] md:text-4xl lg:text-5xl font-bold text-[#FED077] ">
                    Healthcare System
                </p>

                <p class=" lg:text-2xl md:text-x3 text-[#FED077] ">
                    Motto: Healthcare At Your Finger Tips
                </p>

                <button class="bg-[#FED077] h-7 w-30 font-bold text-[#2A4652] rounded
                ">
                    Get Started
                </button>
            </span>


            <img src="{{ asset('images/homepage/Vector.png') }}"
            class="w-[70%] h-[105%]" alt="">
        </span>

        <span >
            <span class="flex flex-col justify-center items-left gap-[12%] hidden md:flex lg:flex
            absolute top-[7%] right-[1.5%] h-[85%] w-140 z-1">
                <ul class="absolute top-0 right-0 flex flex-row justify-center items-left gap-14 text-xl">
                    <li><a class="font-bold " href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </span>

            <img src="{{ asset('images/homepage/header2.png') }}"
            class="w-[70%] h-[105%] absolute top-0 right-0" alt="">
        </span>

    </div>

    <div class="absolute top-0 left-0 w-full h-90 md:h-0 lg:h-0 bg-[#2A4652]
    flex flex-col justify-center items-center gap-10">
        <span class=" flex justify-left items-center gap-10
        w-[90%] h-7 bg-blue-500">
            <span class=" flex justify-left items-center gap-[5%]
            w-60 h-7 " >
                <img src="{{ asset('images/homepage/logo1.png') }}"
                class=" h-[100%]" alt="">

                <p class="text-xl font-bold text-[#FED077]">
                    Gildon Health
                </p>
            </span>

            <img src="{{ asset('images/homepage/menu.png') }}"
            class="w-[4%] h-[100%] absolute right-0" alt="">
        </span>

    </div>


@endsection

