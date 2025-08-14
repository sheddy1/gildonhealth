@section('mobileapp')
    <div class="h-100 w-[97%] rounded-[15px] bg-[#E9FAFD]-500
    shadow-[0px_14px_40px_rgba(0,0,0,0.25)] hidden justify-center items-center gap-[20%]
    lg:flex md:flex">
        <span class="w-[40%] h-[80%] flex justify-center items-left flex-col
        gap-3">
            <p class="text-1xl opacity-70">
                Get our Mobile Application
            </p>

            <p class="text-4xl font-bold">
                This App Makes The Process simple And Easy
            </p>

            <p class="text-1xl opacity-70">
                With this app you can get access to all the services we offer,
                and you get the first two months  free usage of the app
            </p>

            <span class="w-full h-13 flex justify-center items-center">
                <span class="mr-auto w-[40%] h-full bg-[#2A4652] rounded-[10px]
                flex justify-center items-center gap-3">
                    <img src="{{ asset('images/homepage/istore.png') }}"
                    class="h-[65%] w-[18%]" alt="">

                    <span class="w-[50%] h-[65%] flex justify-center items-left flex-col
                    gap-0">
                        <p class="text-sm md:text-xs text-[#FED077] opacity-70">
                            Download From
                        </p>

                        <p class="text-1xl md:text-lg text-[#FED077] font-bold">
                            Play Store
                        </p>

                    </span>
                </span>

                <span class="w-[40%] h-full bg-[#2A4652] rounded-[10px] flex justify-center
                items-center gap-3">
                    <img src="{{ asset('images/homepage/android.png') }}"
                    class="h-[65%] w-[18%]" alt="">

                    <span class="w-[50%] h-[65%] flex justify-center items-left flex-col
                    gap-0">
                        <p class="text-sm text-[#FED077] opacity-70">
                            Download From
                        </p>

                        <p class="text-1xl text-[#FED077] font-bold">
                            Apple Store
                        </p>

                    </span>
                </span>
            </span>
        </span>

        <span class="w-[27%] h-[90%]  mt-auto">
            <img src="{{ asset('images/homepage/phone.png') }}"
            class="h-[100%] w-[100%] " alt="">
        </span>
    </div>

    <div class="h-300 w-[90%] rounded-[10px] flex justify-center items-center
    gap-10 lg:hidden md:hidden flex-col bg-[#E9FAFD]-500
    shadow-[0px_14px_40px_rgba(0,0,0,0.25)]">
        <p class="text-1xl opacity-70 text-center w-[90%]">
            Get our Mobile Application
        </p>

        <p class="text-4xl font-bold text-center w-[90%]">
            This App Makes The Process simple And Easy
        </p>

        <p class="text-1xl opacity-70 text-center w-[90%]">
            With this app you can get access to all the services we offer,
            and you get the first two months  free usage of the app
        </p>

        <span class="w-[90%] h-20 bg-[#2A4652] rounded-[10px]
        flex justify-center items-center gap-3">
            <img src="{{ asset('images/homepage/istore.png') }}"
            class="h-[65%] w-[14%]" alt="">

            <span class="w-[29%] h-[65%] flex justify-center items-left flex-col
            gap-0">
                <p class="text-sm text-[#FED077] opacity-70">
                    Download From
                </p>

                <p class="text-1xl text-[#FED077] font-bold">
                    Play Store
                </p>

            </span>


        </span>

        <span class="w-[90%] h-20 bg-[#2A4652] rounded-[10px]
        flex justify-center items-center gap-3">
            <img src="{{ asset('images/homepage/android.png') }}"
            class="h-[65%] w-[14%]" alt="">

            <span class="w-[29%] h-[65%]  flex justify-center items-left flex-col
            gap-0">
                <p class="text-sm text-[#FED077] opacity-70">
                    Download From
                </p>

                <p class="text-1xl text-[#FED077] font-bold">
                    Apple Store
                </p>

            </span>


        </span>

        <span class="phone1 w-[90%] h-120  mt-auto">
            <img src="{{ asset('images/homepage/phone.png') }}"
            class="h-[100%] w-[100%] " alt="">
        </span>
    </div>
@endsection
