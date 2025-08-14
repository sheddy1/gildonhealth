@section('mobileapp')
    <div class="w-full h-95 hidden lg:flex md:flex flex-col justify-center items-center gap-5">
        <span class="w-[97%] ml-[1.5%] mr-[1.5%] h-20% text-center flex justify-center items-center flex-col">
            <p class="text-3xl font-bold text-[#2A4652]">
                Gildon Health Mobile App
            </p>

            <p class="text-xl text-[#2A4652]">
                Access healthcare services on the go with our mobile app.
            </p>
        </span>

        <span class="w-full h-[77%] flex justify-center items-center gap-7">
            <span class="ml-[1.5%] rounded-lg w-[40%] h-[100%] ">
                <img src="{{ asset('images/homepage/mobileapp.png') }}" class="rounded-lg h-full w-full object-cover flex" alt="Gildon Health Mobile App">
            </span>

            <span class="mr-[1.5%] w-[63%] h-[100%] flex flex-col justify-center items-left gap-9 md:gap-2">
                <p class="text-3xl md:text-2xl font-semibold text-[#2A4652] ">
                    Healthcare Services at Your Fingertips
                </p>

                <p class="text-2xl md:text-xl text-[#2A4652] text-left">
                    The Gildon Health mobile app allows you to connect with healthcare professionals, book appointments, and manage your health records from anywhere, anytime.
                </p>

                <button class="bg-[#2A4652] h-9 w-30 font-bold text-[#FED077] rounded">
                    Download Now
                </button>
            </span>
        </span>
    </div>

    <div class="w-full h-250 flex flex-col justify-center items-center gap-5 lg:hidden md:hidden">
        <span class="w-[90%] ml-[1.5%] mr-[1.5%] h-[100%] text-center flex justify-center items-center flex-col gap-5">
            <p class="text-2xl font-bold text-[#2A4652]">
                Gildon Health Mobile App
            </p>

            <p class="text-1

@endsection
