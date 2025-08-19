@section('header')
    <div class="w-full h-130 hidden md:flex lg:flex bg-blue-500 flex justify-center items-center">
        <span class="w-[97%] h-10 bg-blue-400 flex justify-center items-center">
            <span class=" flex justify-left items-center gap-3
            w-full h-7" >
                <img src="{{ asset('images/homepage/logo1.png') }}"
                    class=" h-[100%]" alt="">

                <p class="text-3xl font-bold text-[#FED077]">
                    Gildon Health
                </p>
            </span>

            <span class="flex justify-center items-center gap-10">
                <ul>
                    <li><a href="">Home</a></li>

                    <li><a href="">About</a></li>

                    <li><a href="">Carres</a></li>

                    <li><a href="">Contact Us</a></li>
                </ul>
            </span>
        </span>
    </div>
@endsection
