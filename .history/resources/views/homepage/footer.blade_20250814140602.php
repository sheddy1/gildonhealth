@section('footer')
    <div class="h-60 w-[97%] rounded-[10px] bg-blue-500 flex justify-center items-center
    flex-col gap-[4%]">
        <span class="w-full h-[81%] bg-blue-400 flex justify-center items-center
        gap-[10%]">
            <span class="w-[30%] h-full bg-blue-200 flex justify-center items-center
            flex-col gap-5 bg-blue-500">
                <span class=" flex justify-left items-center gap-[5%]
                    w-full h-7 " >
                    <img src="{{ asset('images/homepage/logo2.png') }}"
                    class=" h-[100%]" alt="">

                    <p class="text-3xl font-bold">
                        Gildon Health
                    </p>
                </span>

                <p class="text-1xl w-[90%] text-left">
                    We are an online health care system that specializes
                    aims to give you the best
                </p>
            </span>

            <span class="w-[60%] h-full bg-blue-200"></span>
        </span>

        <span class="w-full h-[15%] bg-blue-300"></span>
    </div>
@endsection
