@section('about')
    <div class="relative w-full md:h-100 lg:h-120  mt-10 flex flex-col justify-center items-center bg-blue-500 gap-5">
        <span class="flex justify-center items-center flex-col">
            <p class="text-3xl font-bold text-[#2A4652]">
            About Gildon Health
            </p>

            <p class="text-xl text-[#2A4652]">
                Gildon Health is dedicated to providing affordable and accessible healthcare solutions to individuals and families.
            </p>
        </span>
        
        <span class=" absolute left-[1.5%]w-full h-[90%] flex justify-center items-center bg-green-500 gap-7">
            <span class="bg-yellow-500 w-[40%] h-[100%]">
                <video src="{{ asset('images/homepage/gildon.mp4') }}" class="h-full w-full object-cover flex" controls>
                Your browser does not support the video tag.
                </video>
            </span>

            

            <span class="bg-yellow-500 w-[63%] h-[100%]">

            </span>

        </span>
    </div>
@endsection