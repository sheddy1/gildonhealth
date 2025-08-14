@section('information')
    <div class="w-[97%] h-60 hidden md:flex lg:flex rounded-[10px]
    justify-center items-center gap-40 bg-[#E9FAFD]-500
    shadow-[0px_14px_40px_rgba(0,0,0,0.25)]">
        <span class="w-50 h-40 flex justify-center items-center rounded-[10px]
        flex-col gap-5">
            <img src="{{ asset('images/homepage/location.png') }}"
            class="w-9 h-9" alt="">

            <p class="text-1xl ">Headquaters</p>

            <p class="text-xl font-bold">Kado, Abuja</p>
        </span>

        <span class="w-50 h-40 flex justify-center items-center rounded-[10px]
        flex-col gap-5">
            <img src="{{ asset('images/homepage/mail.png') }}"
            class="w-9 h-9" alt="">

            <p class="text-1xl ">Email</p>

            <p class="text-xl font-bold">gildonhealth@gmail.com</p>
        </span>

        <span class="w-50 h-40 flex justify-center items-center rounded-[10px]
        flex-col gap-5">
            <img src="{{ asset('images/homepage/telephone.png') }}"
            class="w-9 h-9" alt="">

            <p class="text-1xl ">Phone</p>

            <p class="text-xl font-bold">07065575067</p>
        </span>
    </div>

    <div class="w-[90%] h-100 flex md:hidden lg:hidden rounded-[10px]
    justify-center items-center gap-40 bg-[#E9FAFD]-500 flex-col
    shadow-[0px_14px_40px_rgba(0,0,0,0.25)]">
        <span class="w-[90%] h-25 flex justify-center items-center rounded-[10px]
        flex-col gap-5">
            <img src="{{ asset('images/homepage/location.png') }}"
            class="w-9 h-9" alt="">

            <p class="text-1xl ">Headquaters</p>

            <p class="text-xl font-bold">Kado, Abuja</p>
        </span>

        <span class="w-[90%] h-25 flex justify-center items-center rounded-[10px]
        flex-col gap-5">
            <img src="{{ asset('images/homepage/location.png') }}"
            class="w-9 h-9" alt="">

            <p class="text-1xl ">Headquaters</p>

            <p class="text-xl font-bold">Kado, Abuja</p>
        </span>

        <span class="w-[90%] h-25 flex justify-center items-center rounded-[10px]
        flex-col gap-5">
            <img src="{{ asset('images/homepage/location.png') }}"
            class="w-9 h-9" alt="">

            <p class="text-1xl ">Headquaters</p>

            <p class="text-xl font-bold">Kado, Abuja</p>
        </span>
    </div>
@endsection
