@section('about')
    <div class="w-[97%] h-90 flex justify-center items-center gap-[8%]
    hidden md:flex lg-flex ">
        <span class="w-[46%] h-full flex flex-col gap-5">
            <p class="lg:text-4xl font-bold md:text-4xl">
                About Our Orgarnization
            </p>

            <p class="lg:text-xl md:text-1xl">
                The Idea for Gildon health was formed in 2020, and the major question
                that was asked was how do we offer healthcare services to people in the
                comfort of their homes, and at an affordable rate.
            </p>

            <p class="lg:text-xl md:text-1xl">
                Gildon Health was created to ensure that people can receive medical
                services comfortable from anywhere in the world. We would also ensure
                that you get connected to the right facilities and officials in an
                emergency situation, our job is to make sure you get the best healthcare
                within your budget rate, at the push of buttons on your phone.
            </p>
        </span>

        <span class="w-[46%] h-full">
            <video src="{{ asset('images/homepage/gildon.mp4') }}" class="rounded-lg
            h-full w-full object-cover flex w-full h-full" controls>
                Your browser does not support the video tag.
            </video>
        </span>
    </div>

    <div class="w-[90%] h-90 flex justify-center bg-blue-500
    flex md:hidden lg-hidden ">
        <p class="text-3xl font-bold">
            About Our Orgarnization
        </p>

        <p class="text-2xl font-bold">
            The Idea for Gildon health was formed in 2020, and the major question
            that was asked was how do we offer healthcare services to people in the
            comfort of their homes, and at an affordable rate.
        </p>
    </div>
@endsection
