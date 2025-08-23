@section('header')
    <div class="w-full h-130 hidden md:flex lg:flex bg-blue-500 flex justify-center items-center custom-bg
    flex-col">
        <span class=" w-[97%] h-10 bg-blue-400 flex justify-center items-center">
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

        <span class="w-[97%] flex justify-center items-center flex-col">
            <p class="font-bold text-5xl">About Us</p>

            <p class="text-3xl">
                Gildon Health is created with on sole purpose  which is to give
                individuals access to comfortable health care services at an affordable rate.
            </p>
        </span>
    </div>
@endsection
