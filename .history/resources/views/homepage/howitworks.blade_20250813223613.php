@section('howitworks')
    <div class="relative w-[100%] h-130 hidden md:flex lg:flex bg-blue-500 hidden flex
    lg:flex md:flex justify-center items-center gap-5 flex-col">
        <span class="w-[10%] h-6 border-[3px] border-[#2A4652] rounded-[10px]
        flex justify-center items-center">
            <p class="text-sm font-bold text-[#2A4652]">
                How It Works
            </p>
        </span>

        {{--  <span class="w-[90%] flex  justify-center items-left">
            How Our

            <p class="font-bold text-5xl"> Healthcare System </p>

            Works
        </span>  --}}

        <p class="text-5xl font-bold w-[90%] text-center">
            How Our <span class="text-[#FED077] font-bold text-5xl">Healthcare System</span> Works
        </p>

        <p class="text-2xl w-[90%] text-center">
            Sign up, talk to a doctor, get prescriptions, connect
            with pharmacies and labs—all in one place
        </p>

        <span class="w-[97%] h-70 bg-blue-400 flex justify-center items-center
        gap-5 ">
            <span class="w-1/4 h-full flex justify-center items-center bg-green-300
            flex-col rounded-[10px] border-[3px] border-[#2A4652] rounded-[15px] gap-5">
                <img src="{{ asset('images/homepage/signup.png') }}"
                class="w-[30%] h-[30%]" alt="">

                <span class="w-full h-[50%] bg-blue-300 flex flex-col justify-center
                items-left gap-7">
                    <p class="text-xl font-[600] text-[#2A4652]">
                        Step 1
                    </p>

                    <p class="text-2xl font-[700] text-[#2A4652]">
                        Sign Up
                    </p>

                    <p class="text-1xl  text-[#2A4652]">
                        Create your free account in minutes
                    </p>
                </span>
            </span>

            <span class="w-1/4 h-full flex justify-center items-center bg-green-300
            flex-col rounded-[10px]">
            </span>

            <span class="w-1/4 h-full flex justify-center items-center bg-green-300
            flex-col rounded-[10px]">
            </span>

            <span class="w-1/4 h-full flex justify-center items-center bg-green-300
            flex-col rounded-[10px]">
            </span>
        </span>
    </div>
@endsection
