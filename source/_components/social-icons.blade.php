<div class="flex justify-center items-center space-x-2">
    @foreach($social as $index => $item)
        @if($item['url'] != '')
            <a href="{{ $item['url'] }}" target="_blank" class="hover:text-brand-800">
                <span class="sr-only">{{ $item['label'] }}</span>
                <x-icon icon="{{ $index }}" :class="$class ?? null" :w="$w ?? null" :h="$h ?? null" />
            </a>
        @endif
    @endforeach
</div>
