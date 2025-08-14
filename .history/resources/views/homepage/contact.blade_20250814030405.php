@section('contact')
    <div class="w-[97%] h-110 hidden md:flex lg:flex
    justify-center items-center gap-[25%]">
        <span class="w-[35%] h-full rounded-[15px] flex flex-col justify-center items-left">
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

                <span class="w-[90%] h-13">
                    <span class="w-full h-full flex justify-center items-left
                    gap-0 flex-col">
                        <p class="text-[#FED077] text-1xl">Email*</p>

                        <input type="text" class="w-full h-15 rounded-[10px]
                        border-[2px] border-[#FED077] text-[#FED077] pl-3"
                        placeholder="Email Address">
                    </span>
                </span>

                <span class="w-[90%] h-13">
                    <span class="w-full h-full flex justify-center items-left
                    gap-0 flex-col">
                        <p class="text-[#FED077] text-1xl">Subject*</p>

                        <input type="text" class="w-full h-15 rounded-[10px]
                        border-[2px] border-[#FED077] text-[#FED077] pl-3"
                        placeholder="Subject">
                    </span>
                </span>

                <span class="w-[90%] h-23">
                    <span class="w-full h-full flex justify-center items-left
                    gap-0 flex-col">
                        <p class="text-[#FED077] text-1xl">Subject*</p>

                        <textarea name="" id="" placeholder="Enter Your Message"  class="w-full
                        h-15 rounded-[10px] border-[2px] border-[#FED077] text-[#FED077] pl-3"></textarea>

                        </textarea>
                    </span>
                </span>

                <button class="w-[40%] h-7 bg-[#FED077] text-[#2A4652]
                rounded-[10px] font-bold text-xl cursor-pointer">Submit</button>
            </span>
        </span>

        <span class="w-[40%] h-full rounded-[15px] flex
        flex-col justify-top items-left gap-5">
            <p class="text-1xl font-[600]">Contact Us</p>

            <p class="text-3xl font-[700]">How Can We Help?</p>

            <p class="text-1xl w-full">
                To learn more about our services at Gildon Health you can send us
                a message, after which we would reply back within the next 48 hours.
            </p>

            <span class="w-[60%] h-10 flex justify-center items-center gap-3">
                <img src="{{ asset('images/homepage/instagram.png') }}"
                class="w-1/6 h-full cursor-pointer" alt="">

                <img src="{{ asset('images/homepage/facebook.png') }}"
                class="w-1/6 h-full cursor-pointer" alt="">

                <img src="{{ asset('images/homepage/whatsapp.png') }}"
                class="w-1/6 h-full cursor-pointer" alt="">

                <img src="{{ asset('images/homepage/tiktok.png') }}"
                class="w-1/6 h-full cursor-pointer" alt="">

                <img src="{{ asset('images/homepage/linkedin.png') }}"
                class="w-1/6 h-full cursor-pointer" alt="">

                <img src="{{ asset('images/homepage/x.png') }}"
                class="w-1/6 h-full cursor-pointer" alt="">
            </span>
        </span>
    </div>

    <div class="w-[97%] h-200 flex md:hidden lg:hidden
    justify-center items-center gap-[25%]">

    </div>
@endsection
