@section('team')
    <div class="relative w-[97%] h-90 flex items-center gap-[8%] bg-blue-500
    hidden md:flex lg-flex flex-col">
        <p class="font-bold text-4xl">Meet Our Amazing Team</p>

        <span class="absolute bottom-0 w-[100%] h-50 flex justify-center items-center bg-blue-400
        gap-5 text-[#FED077]">
            <span class="relative w-1/4 h-full flex justify-center items-center bg-[#2A4652]
            flex-col rounded-lg gap-4">
                <img src="{{ asset('images/about/person1.png') }}"
                class="w-[40%] h-[55%] absolute top-[-55px]" alt="">

                <p>Shadrach Godwin</p>

                <p>Shadrach Godwin</p>
            </span>
        </span>
    </div>
@endsection
