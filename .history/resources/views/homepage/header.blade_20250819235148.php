@section('header')
    <div class="relative w-[100%] h-130 hidden md:flex lg:flex">

        <span class="w-[100%] h-[100%] top-[50%]">
            <span class="flex flex-col justify-center items-left gap-[15%]
            absolute top-[7%] left-[1.5%] h-[85%] w-120 " >
                <span class=" flex justify-left items-center gap-[5%]
                    w-60 h-7 " >
                    <img src="{{ asset('images/homepage/logo1.png') }}"
                    class=" h-[100%]" alt="">

                    <p class="text-3xl font-bold text-[#FED077]">
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

    <div class="w-full h-110 md:hidden lg:hidden bg-[#2A4652]
    flex flex-col justify-center items-center gap-15
    custom-bg">
        <span class=" flex justify-center items-center gap-5
        w-[90%] h-7 lg:hidden md:hidden mt-0" >
            <span class=" flex justify-left items-center gap-[3%]
            w-60 h-7 " >
                <img src="{{ asset('images/homepage/logo1.png') }}"
                class=" h-[100%]" alt="">

                <p class="text-xl font-bold text-[#FED077]">
                    Gildon Health
                </p>
            </span>

            <input type="checkbox" id="menu-toggle" class="hidden" for="menu-icon">

            <label for="menu-toggle" class="ml-auto w-8 h-[100%] flex justify-end items-end">
                <img src="{{ asset('images/homepage/menu.png') }}"
                class=" w-8 h-[100%]" alt="Logo" id="menu-icon">
            </label>



            <span class=" dropdown absolute right-[5%] top-16 bg-[#E9FAFD] w-[55%] h-50
            rounded-tl-lg rounded-bl-lg rounded-br-lg  flex-col justify-center items-center
            gap-4 hidden">
                <span class="h-6 w-full flex justify-center items-center gap-3">
                    <img src="{{ asset('images/homepage/home.png') }}"
                    class="w-8 h-[100%] flex justify-end items-end" alt="Logo">

                    <p class="text-[#2A4652] text-2xl">Home</p>
                </span>

                <span class="h-6 w-full flex justify-center items-center gap-3">
                    <img src="{{ asset('images/homepage/about.png') }}"
                    class="w-8 h-[100%] flex justify-end items-end" alt="Logo">

                    <p class="text-[#2A4652] text-2xl">About</p>
                </span>

                <span class="h-6 w-full flex justify-center items-center gap-3">
                    <img src="{{ asset('images/homepage/career.png') }}"
                    class="w-8 h-[100%] flex justify-end items-end" alt="Logo">

                    <p class="text-[#2A4652] text-2xl">Careers</p>
                </span>

                <span class="h-6 w-full flex justify-center items-center gap-3">
                    <img src="{{ asset('images/homepage/contact-mail.png') }}"
                    class="w-8 h-[100%] flex justify-end items-end" alt="Logo">

                    <p class="text-[#2A4652] text-2xl">Contact Us</p>
                </span>
            </span>

            </span>
        </span>



        <p class="text-xl text-[#FED077] text-center lg:hidden md:hidden">An Online</p>

        <p class="text-3xl font-bold text-[#FED077] text-center lg:hidden md:hidden">Healthcare System</p>

        <p class="text-xl text-[#FED077] text-center lg:hidden md:hidden">Motto: Healthcare At Your Finger Tips</p>

        <button class="bg-[#FED077] h-7 w-30 font-bold text-[#2A4652] rounded
        lg:hidden md:hidden">
            Get Started
        </button>

    </div>


@endsection

