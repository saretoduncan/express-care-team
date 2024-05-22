<div
    {{ $attributes->merge(['class' => ' absolute h-full w-full  transition-all duration-1000 ease-in-out corousel-img']) }}>
    <figure class="w-full h-full relative">
        <img src="{{ asset($courouselImg) }}" alt="" class="w-full h-full object-cover" />
        <figcaption
            class="absolute w-full h-full top-0 left-0 mx-auto flex justify-center items-center  text-center  text-white text-xl font-bold">
            <div>
                  <p class="bg-custom-blue p-2 rounded max-w-[80%] mx-auto">{{ $imgCaption }}
            </p>
            </div>
          
        </figcaption>
    </figure>



</div>
