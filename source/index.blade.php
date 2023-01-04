@extends('_layouts.main')

@section('precontent')
<section class="hero relative">
    <div class="z-0 absolute top-0 left-0 bg-gradient-to-r from-brand-400 to-brand-700 opacity-90 h-full w-full"></div>
    <section class="relative z-10 py-48">
        <div class="mx-auto max-w-7xl px-8">
            <div class="max-w-3xl">
                <h1 class="font-extralight font-serif text-5xl md:text-7xl text-white mb-4 tracking-tight drop-shadow-[1px_1px_1px_rgba(0,0,0,0.5)]">A better life starts with a beautiful smile</h1>
                <p class="text-white text-xl md:text-2xl mb-8 drop-shadow-[1px_1px_1px_rgba(0,0,0,0.5)]">Welcome to the Dentist Office of Dr. Thomas Dooley, where trust and comfort are priorities...</p>
                <x-button-white-border href="{{ $page->bookAppt }}">Book Appointment <x-icon icon="chevron-right" /></x-button-white-border>
            </div>
        </div>
    </section>
</section>

<div class="relative bg-brand-900">
    <div class="h-56 bg-gray-600 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
        <picture>
            <source type="image/webp" srcset="/assets/images/pexels-los-muertos-crew-8460159.webp" class="h-full w-full object-cover" alt="{{ $page->doctors[0]['title'] . ' ' . $page->doctors[0]['fullName'] }}, {{ $page->doctors[0]['certs'] }}">
            <source type="image/jpeg" srcset="/assets/images/pexels-los-muertos-crew-8460159.jpg" class="h-full w-full object-cover" alt="{{ $page->doctors[0]['title'] . ' ' . $page->doctors[0]['fullName'] }}, {{ $page->doctors[0]['certs'] }}">
            <img src="/assets/images/pexels-los-muertos-crew-8460159.jpg" class="h-full w-full object-cover" alt="{{ $page->doctors[0]['title'] . ' ' . $page->doctors[0]['fullName'] }}, {{ $page->doctors[0]['certs'] }}">
        </picture>
    </div>
    <div class="relative mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-32">
        <div class="md:ml-auto md:w-1/2 md:pl-20">
            <p class="mt-0 text-3xl font-serif font-bold text-white sm:text-4xl tracking-tight">We're here to help</p>
            <p class="mt-3 mb-8 text-lg text-gray-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet amet volutpat quisque ut interdum tincidunt duis.</p>
            <x-button-white-border href="/about">Read full bio <i class="fa-regular fa-chevron-right"></i></x-button-white-border>
        </div>
    </div>
</div>

<div class="testimonials2 bg-brand-50 relative">
    <div class="relative mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-24">
        <x-testimonials :testimonials="$page->testimonials" />
    </div>
</div>
@endsection

@section('content')

@endsection

@section('postcontent')
<section class="bg-clouds px-4 py-16">
    <div class="mx-auto max-w-7xl px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
        @foreach($page->services as $service)
        <article class="bg-white p-3 drop-shadow-md rounded flex flex-col justify-between">
            <div class="pt-4">
                <div class="mx-auto mb-4">{!! $service->icon !!}</div>
                <div class="font-serif text-lg font-bold">{{ $service->heading }}</div>
                <p class="mb-6">{{ $service->content }}</p>
            </div>
            <x-button href="{{ $service->url }}">Learn More <x-icon icon="chevron-right" /></x-button>
        </article>
        @endforeach
    </div>
</section>

<section class="bg-gradient-to-r from-brand-400 to-brand-700 text-white md:flex md:justify-center md:items-center md:space-x-4 text-center px-4 pb-16 md:pb-8 pt-8">
    <p class="text-xl">Get in touch with us today!</p>
    <p class="text-xl mb-8 md:mb-4">Give us a call: {{ $page->phone }}</p>
    <p>
        <x-button-white-border href="{{ $page->bookAppt }}"><x-icon icon="clipboard-check" /> Book Appointment</x-button-white-border>
    </p>
</section>
@endsection