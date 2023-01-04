@if ($url = is_string($item) ? $item : $item->url)
    {{-- Menu item with URL--}}
    <a href="{{ $page->url($url) }}"
        target="{{ $item->target ?? '' }}"
        class="{{ $page->selected($page->url($url)) ? 'font-extrabold underline text-black md:text-white' : 'text-black md:text-white font-medium' }} px-3 py-2 text-lg md:text-sm whitespace-nowrap hover:underline"
    >
        {{ $label }}
    </a>
@else
    {{-- Menu item without URL--}}
    <div class="flex flex-col md:relative group">
        <div class="hidden md:block peer group-hover:md:bg-gray-100 group-hover:md:text-black cursor-pointer text-white md:hover:text-black px-3 py-2 text-lg md:text-sm font-medium whitespace-nowrap rounded-t">
            {{ $label }}
        </div>
        <div class="flex flex-col group-hover:md:bg-gray-100 md:hidden peer-hover:md:flex md:hover:flex md:absolute md:top-9 md:left-0 md:bg-gray-100 w-full md:w-56 rounded rounded-tl-none overflow-hidden">
        @if (! is_string($item) && $item->children)
            @foreach ($item->children as $label2 => $item2)
            <a href="{{ $page->url($item2) }}"
                target="{{ $item2->target ?? '' }}"
                class="text-black hover:text-black md:hover:bg-gray-50 px-3 py-2 text-lg md:text-sm font-medium whitespace-nowrap"
            >
                {{ $label2 }}
            </a>
            @endforeach
        @endif
        </div>
    </div>
@endif
