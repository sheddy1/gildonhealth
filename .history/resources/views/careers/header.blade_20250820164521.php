@section('header')
    <div class="mt-5 w-[97%] h-10 hidden lg:flex md:flex flex-col justify-center
    items-center gap-5">
        <span class="text-[#2A4652]  w-[97%] h-10 flex justify-center items-center">
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

    <div class="absolute top-[30px] w-[97%] h-10 hidden lg:flex md:flex flex-col justify-center
    items-center gap-5">

    </div>
@endsection