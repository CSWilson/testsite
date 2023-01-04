<header class="absolute top-0 left-0 w-full z-50">
    @if($page->location)
    <div class="bg-gray-50/10 text-white font-semibold">
        <div class="px-4 py-1 sm:px-6 lg:px-8 mx-auto max-w-7xl flex justify-center md:justify-between">
            <div class="flex flex-col md:flex-row text-center leading-8">
                <div><a href="https://www.google.com/maps/place/{{ str_replace(' ', '+', $page->location->address.'+'.$page->location->city.'+'.$page->location->state.'+'.$page->location->zip) }}" target="_blank" class="hover:underline">
                <x-icon icon="location-dot" />
                {{ $page->location->address }}, {{ $page->location->city }}, {{ $page->location->state }} {{ $page->location->zip }}</a></div><div><a href="tel:{{ preg_replace('/[^0-9]/','', $page->phone) }}" class="hover:underline"><x-icon icon="phone" class="ml-4" /> {{ $page->phone }}</a></div>
            </div>
            <div class="hidden md:block">
                <x-social-icons :social="$page->social" class="mt-0.5" w="5" h="5" />
            </div>
        </div>
    </div>
    @endif
    <div x-data="{open: false}" class="wrapper mx-auto max-w-7xl px-8 py-4 sm:px-6 lg:px-8 md:relative flex items-center justify-between">
        <div class="pt-1">
            <a href="/" title="Return Home"><img class="logo h-6 w-auto" src="{{ $page->logo }}" alt="{{ $page->company }}"></a>
        </div>
        @include('_nav.menu', ['items' => $page->navigation])
    </div>
</header>
