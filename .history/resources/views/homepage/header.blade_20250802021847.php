@section('header')
    <div class="relative w-100% h-0 md:h-110 lg:h-120">

        <span>
            <span class="flex justify-left items-center gap-[5%]
            absolute top-8 left-[1.5%] w-60 h-7" >
                <img src="{{ asset('images/homepage/logo1.png') }}"
                class="w-[15%] h-[100%]" alt="">

                <p class="text-xl font-bold text-[#FED077]">
                    Gildon Health
                </p>
            </span>

            <span class="flex justify-left items-center gap-[5%]
            absolute bg-blue-500 top-30 left-[1.5%] w-60 h-7" >
                <p class="text-x3 text-[#FED077]">
                    Gildon Health
                </p>
                <hr class="border-t border-gray-300 my-4">
            </span>

            <img src="{{ asset('images/homepage/Vector.png') }}"
            class="w-[70%] h-[105%]" alt="">
        </span>

        <span>
            <img src="{{ asset('images/homepage/header2.png') }}"
            class="w-[70%] h-[105%] absolute top-0 right-0" alt="">
        </span>

    </div>

    <div class="relative w-100% h-76 md:h-0 lg:h-0 bg-[#2A4652]">

    </div>
@endsection
