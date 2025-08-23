@section('header')
    <div class="mt-8 w-[97%] h-10 hidden lg:flex md:flex flex-col justify-center
    items-center gap-5">
        <span class="text-[#2A4652]  w-full h-10 flex justify-center items-center">
            <span class="mr-auto flex justify-left items-center gap-3
            h-7" >
                <img src="{{ asset('images/homepage/logo2.png') }}"
                    class=" h-[100%]" alt="">

                <p class="text-3xl font-bold">
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
    </div>

    <div class="mt-8 w-[97%] h-10 flex lg:hidden md:hidden flex-col justify-center
    items-center gap-5 bg-blue-500 text-[#2A4652]">
        <span class="flex justify-center items-center gap-5
        w-full h-7 lg:hidden md:hidden " >
            <span class="mr-auto flex justify-left items-center gap-[3%]
            w-60 h-7 " >
                <img src="{{ asset('images/homepage/logo2.png') }}"
                class=" h-[100%]" alt="">

                <p class="text-xl font-bold">
                    Gildon Health
                </p>
            </span>

            <input type="checkbox" id="menu-toggle"  for="menu-icon">

            <label for="menu-toggle" class="ml-auto w-8 h-[100%] flex justify-end items-end">
                <img src="{{ asset('images/careers/menu.png') }}"
                class=" w-8 h-[100%]" alt="Logo" id="menu-icon">
            </label>



            <span class=" dropdown absolute right-[5%] top-10 bg-[#E9FAFD] w-[55%] h-50
            rounded-tl-lg rounded-bl-lg rounded-br-lg  flex-col justify-center items-center
            gap-6 hidden">
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