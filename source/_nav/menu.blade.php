@php $level = $level ?? 0 @endphp

<nav
    class="absolute md:static top-0 left-0 -mr-8 sm:mr-0 md:rounded-l md:rounded-none justify-self-end w-screen h-screen md:h-auto md:w-48 md:w-full bg-white md:bg-transparent md:flex md:flex-row text-white md:space-x-3 md:flex-1 md:items-center md:justify-end text-center md:text-left p-3 pt-12 md:p-0"
    :class="{ 'flex flex-col': open, 'hidden': !open }"
    >
    @foreach ($items as $label => $item)
        @include('_nav.menu-item')
    @endforeach
    <a href="#" class="font-semibold hidden md:block inline-block px-5 py-2 border border-white rounded hover:bg-white hover:text-black"><x-icon icon="doctor" /> Patient Portal</a>
</nav>
<button @click="open = !open" class="z-10 absolute md:static top-3 right-0 toggle block md:hidden inline-flex items-center justify-center p-2" aria-controls="mobile-menu" :aria-expanded="open">
    <span class="sr-only">Open main menu</span>
    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="fill-current h-7 w-7 text-white" viewBox="0 0 32 32">
        <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z" />
    </svg>
    <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="fill-current h-5 w-7 text-black mt-1" viewBox="0 0 36 30">
        <polygon points="32.8,4.4 28.6,0.2 18,10.8 7.4,0.2 3.2,4.4 13.8,15 3.2,25.6 7.4,29.8 18,19.2 28.6,29.8 32.8,25.6 22.2,15 " />
    </svg>
</button>