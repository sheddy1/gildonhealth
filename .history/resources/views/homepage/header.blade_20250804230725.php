@section('header')
    <div class="relative w-100% h-0 md:h-110 lg:h-120">

        <span >
            <span class="flex flex-col justify-center items-left gap-[12%]
            absolute top-0 left-[1.5%] w-60 h-7 h-[100%] w-120" >
            <span class="flex justify-left items-center gap-[5%]
                 w-60 h-7 ml-2" >
                <img src="{{ asset('images/homepage/logo1.png') }}"
                class=" h-[100%]" alt="">

                <p class="text-xl font-bold text-[#FED077]">
                    Gildon Health
                </p>
            </span>

            <span class="flex justify-left items-center gap-[5%]
            ml-2 w-60 h-7" >
                <p class="text-x3 text-[#FED077]">
                    An Online
                </p>
                <span class="w-[55%] h-[3%] bg-[#FED077]"></span>
            </span>

            <p class="text-[40px] md:text-4xl lg:text-5xl font-bold text-[#FED077] ml-2">
                Healthcare System
            </p>

            <p class=" lg:text-2xl md:text-x3 text-[#FED077] ml-2">
                Motto: Healthcare At Your Finger Tips
            </p>

            <button class="bg-[#FED077] h-7 w-30 font-bold text-[#2A4652] rounded
            ml-2">
                Get Started
            </button>
            </span>


            <img src="{{ asset('images/homepage/Vector.png') }}"
            class="w-[70%] h-[105%]" alt="">
        </span>



        <span >
                <ul class=" absolute top-0 right-[1.5%]">
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                    <li><a href="">Home</a></li>
                </ul>
            <img src="{{ asset('images/homepage/header2.png') }}"
            class="w-[70%] h-[105%] absolute top-0 right-0" alt="">
        </span>

    </div>


@endsection

