@section('about')
    <div class="w-full h-95 hidden lg:flex md:flex flex-col justify-center items-center gap-5">
        <span class="w-[97%] ml-[1.5%] mr-[1.5%] h-20% text-center flex  justify-center items-center flex-col">
            <p class="text-3xl font-bold text-[#2A4652]">
                About Gildon Health
            </p>

            <p class="text-xl text-[#2A4652]">
                Gildon Health is dedicated to providing affordable and accessible healthcare solutions to individuals and families.
            </p>
        </span>

        <span class="w-full h-[77%] flex justify-center items-center  gap-7">
            <span class="ml-[1.5%] rounded-lg w-[40%] h-[100%] ">
                <video src="{{ asset('images/homepage/gildon.mp4') }}" class="rounded-lg h-full w-full object-cover flex" controls>
                Your browser does not support the video tag.
                </video>
            </span>

            <span class="mr-[1.5%] w-[63%] h-[100%] flex flex-col justify-center items-left
            gap-9 ">
                <p class="text-3xl font-semibold text-[#2A4652] ">
                    Comfortable Healthcare Services At Your Finger Tips
                </p>

                <p class="text-2xl  text-[#2A4652] text-left">
                    Gildon Health is an online healthcare system that aims to connect
                    individuals to healthcare officials and services with ease,
                    we have inbuilt features that allow you to receive healthcare
                    services comfortably from where you are, as a patient you can
                    get access to doctors pharmacists hospitals and Nurses, and in
                    any case of an emergency you would be referred to a facility near you
                </p>


            </span>

        </span>
    </div>

    <div class="w-full h-250 flex flex-col justify-center items-center gap-5
    lg:hidden md:hidden">
        <span class="w-[90%] ml-[1.5%] mr-[1.5%] h-[100%] text-center flex
         justify-center items-center flex-col gap-5">
            <p class="text-2xl font-bold text-[#2A4652]">
                About Gildon Health
            </p>

            <p class="text-1xl text-[#2A4652]">
                Gildon Health is dedicated to providing affordable and accessible healthcare solutions to individuals and families.
            </p>

            <video src="{{ asset('images/homepage/gildon.mp4') }}" class="rounded-lg
            h-full w-full object-cover flex w-[90%] h-120" controls>
                Your browser does not support the video tag.
            </video>

            <p class="text-2xl md:text-sm font-semibold text-[#2A4652] ">
                Comfortable Healthcare Services At Your Finger Tips
            </p>

            <p class="lg:text-1xl md:text-xs text-[#2A4652] text-center">
                    At Gildon Health, we believe that quality healthcare should be
                    simple, connected, and accessible to everyone no matter where
                    they are. Our platform brings together all essential healthcare
                    services into one easy to 'use' hub, ensuring that you can get the
                    care you need without unnecessary stress or delays. From booking
                    virtual consultations with licensed doctors to accessing trusted
                    pharmacies and accredited laboratories, we make your health journey
                    seamless from start to finish. <br> <br>

                    We understand that healthcare isn’t just about treatment — it’s
                    about support, understanding, and connection. That’s why Gildon
                    Health also provides a unique community feature, allowing patients
                    with similar conditions to connect, share experiences, and encourage
                    one another. Whether you’re managing a chronic illness or seeking quick
                    medical advice, you’ll find both professional help and peer support right
                    at your fingertips. <br>

                    Join us at Gildon Health, where we’re transforming the healthcare
            </p>
        </span>
    </div>
@endsection
