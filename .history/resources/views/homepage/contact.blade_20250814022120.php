@section('contact')
    <div class="w-[97%] h-110 hidden md:flex lg:flex bg-blue-500
    justify-center items-center gap-[25%]">
        <span class="w-[35%] h-full bg-blue-400 rounded-[15px] flex flex-col justify-center items-left">
            <span class="w-full h-[5%] bg-[#FED077] rounded-tl-[10px] rounded-tr-[10px]">
            </span>

            <span class="w-full h-[95%] bg-[#2A4652] flex justify-center items-center
            flex-col gap-6">
                <span class="w-[90%] h-13 flex justify-center items-center
                gap-[4%]">
                    <span class="w-[48%] h-full flex justify-center items-left
                    gap-0 flex-col">
                        <p class="text-[#FED077] text-1xl">First Name*</p>

                        <input type="text" class="w-full h-15 rounded-[10px]
                        border-[2px] border-[#FED077] text-[#FED077] pl-3"
                        placeholder="First Name">
                    </span>

                    <span class="w-[48%] h-full flex justify-center items-left
                    gap-0 flex-col">
                        <p class="text-[#FED077] text-1xl">Last Name*</p>

                        <input type="text" class="w-full h-15 rounded-[10px]
                        border-[2px] border-[#FED077] text-[#FED077] pl-3"
                        placeholder="Last Name">
                    </span>
                </span>

                <span class="w-[90%] h-13 bg-blue-400">
                    <span class="w-full h-full flex justify-center items-left
                    gap-0 flex-col">
                        <p class="text-[#FED077] text-1xl">Email*</p>

                        <input type="text" class="w-full h-15 rounded-[10px]
                        border-[2px] border-[#FED077] text-[#FED077] pl-3"
                        placeholder="Email Address">
                    </span>
                </span>

                <span class="w-[90%] h-13 bg-blue-400">
                    <span class="w-full h-full flex justify-center items-left
                    gap-0 flex-col">
                        <p class="text-[#FED077] text-1xl">Subject*</p>

                        <input type="text" class="w-full h-15 rounded-[10px]
                        border-[2px] border-[#FED077] text-[#FED077] pl-3"
                        placeholder="Subject">
                    </span>
                </span>

                <span class="w-[90%] h-23 bg-blue-400">
                    <span class="w-full h-full flex justify-center items-left
                    gap-0 flex-col">
                        <p class="text-[#FED077] text-1xl">Subject*</p>

                        <textarea name="" id="" cols="30" rows="10" class="w-full
                        h-15 rounded-[10px] border-[2px] border-[#FED077] text-[#FED077] pl-3">

                        </textarea>
                    </span>
                </span>

                <button class="w-[40%] h-7 bg-blue-400 rounded-[15px]">Submit</button>
            </span>
        </span>

        <span class="w-[40%] h-full bg-blue-400 rounded-[15px]">

        </span>
    </div>
@endsection
