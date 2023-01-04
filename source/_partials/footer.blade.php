<footer>
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 text-gray-500 dark:text-gray-400">
        <div class="text-gray-400 mb-8"><x-social-icons :social="$page->social" w="7" h="7" /></div>
        <div class="mt-2 flex flex-col md:flex-row justify-center space-y-2 md:space-y-0 text-center" aria-label="Footer">
            <a class="px-3 text-base hover:text-black dark-hover:text-white hover:underline {{ $page->selected('terms-and-conditions') ? 'font-medium text-black':null }}" href="{{ $page->baseUrl }}/terms-and-conditions">Terms and Conditions</a>
            <a class="px-3 text-base hover:text-black dark-hover:text-white hover:underline {{ $page->selected('privacy-policy') ? 'font-medium text-black':null }}" href="{{ $page->baseUrl }}/privacy-policy">Privacy Policy</a>
            <a class="px-3 text-base hover:text-black dark-hover:text-white hover:underline {{ $page->selected('accessibility') ? 'font-medium text-black':null }}" href="{{ $page->baseUrl }}/accessibility">Accessibility</a>
        </div>
    </div>
    <div class="bg-gray-900">
        <div class="flex justify-between items-center mx-auto max-w-7xl py-8 px-4 sm:px-6 lg:px-8 text-gray-400">
            <div class="text-sm">&copy; {{ $page->company }} {{ date('Y') }} - Website by <a href="https://cswapps.com" target="_blank" class="hover:text-white hover:underline">C.S. Wilson & Associates</a>.</div>
            <div class="mt-2 flex flex-col md:flex-row justify-center space-y-2 md:space-y-0 text-center" aria-label="Footer">
                <a class="px-3 text-sm hover:text-white hover:underline {{ $page->selected('terms-and-conditions') ? 'font-medium text-black':null }}" href="{{ $page->baseUrl }}/terms-and-conditions">Terms and Conditions</a>
                <a class="px-3 text-sm hover:text-white hover:underline {{ $page->selected('privacy-policy') ? 'font-medium text-black':null }}" href="{{ $page->baseUrl }}/privacy-policy">Privacy Policy</a>
                <a class="px-3 text-sm hover:text-white hover:underline {{ $page->selected('accessibility') ? 'font-medium text-black':null }}" href="{{ $page->baseUrl }}/accessibility">Accessibility</a>
            </div>
        </div>
    </div>
</footer>
