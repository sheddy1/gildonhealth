@section('header')
    <div class="w-full h-130 hidden md:flex lg:flex bg-blue-500 flex justify-center items-center custom-bg
    flex-col">
        <span class="text-[#FED077] absolute top-[30px] w-[97%] h-10 flex justify-center items-center">
            <span class="mr-auto flex justify-left items-center gap-3
            h-7" >
                <img src="{{ asset('images/homepage/logo1.png') }}"
                    class=" h-[100%]" alt="">

                <p class="text-3xl font-bold text-[#FED077]">
                    Gildon Health
                </p>
            </span>

            <span class="flex justify-center items-center gap-14 text-xl">
                <p>Home</p>

                <p>About</p>

                <p>Careers</p>

                <p><a href="">Contact Us</a></p>
            </span>
        </span>

        <span class="text-[#FED077] w-[97%] flex justify-center items-center flex-col gap-5">
            <p class="font-bold text-5xl">About Us</p>

            <p class="text-2xl text-center">
                Gildon Health is created with on sole purpose  which is to give
                individuals access to comfortable health care services at an affordable rate.
            </p>
        </span>
    </div>

    <div class="w-full h-110 flex md:hidden lg:hidden flex justify-center items-center custom-bg
    flex-col">
        <span class=" flex justify-center items-center gap-5
        w-[90%] h-7 lg:hidden md:hidden mt-0 absolute top-[30px]" >
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



            <span class=" dropdown absolute right-[5%] top-10 bg-[#E9FAFD] w-[55%] h-50
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
    </div>
@endsection
