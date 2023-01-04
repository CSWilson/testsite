<h2 class="text-3xl mb-4 font-serif font-bold text-gray-600 tracking-tight">Customer Testimonials</h2>

<div class="my-8 container mx-auto flex flex-col md:flex-row" x-data="{ testimonialActive: 0 }" x-cloak>

    <div class="flex flex-col relative w-full">

        @if($testimonials)
        <div class="z-20 absolute right-0 -top-4 mr-4 mb-4 flex">
            <button aria-label="Previous Customer Testimonial" class="rounded-l-full border-r border-gray-300 bg-gray-200 text-gray-500 focus:outline-none hover:bg-gray-100 hover:text-gray-500 font-bold w-12 h-10" x-on:click="testimonialActive = testimonialActive === 0 ? {{ count($testimonials)-1 }} : testimonialActive - 1">
                &#8592;
            </button>
            <button aria-label="Next Customer Testimonial" class="rounded-r-full bg-gray-200 text-gray-500 focus:outline-none hover:bg-gray-100 hover:text-gray-500 font-bold w-12 h-10" x-on:click="testimonialActive = testimonialActive >= {{ count($testimonials)-1 }} ? 0 : testimonialActive + 1">
                &#8594;
            </button>
        </div>

        <div class="absolute top-0 left-0 z-20">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24">
                <path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z" />
            </svg>
        </div>

        <div class="relative z-10">
            @foreach($testimonials as $index => $item)
            <div class="bg-white rounded-lg p-6" x-show.immediate="testimonialActive === {{ $index }}">
                <div x-show.transition="testimonialActive == {{ $index }}" x-transition>
                    <p class="text-gray-700 font-serif font-normal italic pt-3 text-xl md:text-2xl">
                        {{ $item->content }}
                    </p>
                    <div class="flex space-x-3 items-center">
                        <img src="{{ $item->avatar ? $item->avatar : '/assets/images/no-avatar.png' }}" alt="{{ $item->name }}" class="w-8">
                        <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">{{ $item->name }}</h2>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="flex my-4 justify-center items-center space-x-3">
            @foreach($testimonials as $index => $item)
            <button aria-label="View Testimonial Number {{ $index+1 }}" @click.prevent="testimonialActive = {{ $index }}" class="h-5 w-5 focus:outline-none focus:shadow-outline inline-block rounded-full" :class="{'opacity-50 bg-brand-300 hover:bg-brand-600 hover:opacity-75': testimonialActive != {{ $index }}, 'opacity-100 bg-brand-600': testimonialActive == {{ $index }} }"></button>
            @endforeach
        </div>

    </div>

    @else
    <p class="text-center py-4 text-gray-400">There are no customer testimonials at this time.</p>
    @endif

</div>
