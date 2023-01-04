@extends('_layouts.main')

@section('precontent')
<section class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white md:flex md:justify-center md:items-center md:space-x-4 text-center px-4 py-12">
&nbsp;
</section>
@endsection

@section('content')
<h1 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Accessibility</h1>

<p>{{ $page->company }} is committed to ensuring digital accessibility for people with disabilities. We are continually improving the user experience for everyone, and applying the relevant accessibility standards.</p>

<h4>Conformance Status</h4>
<p>The Web Content Accessibility Guidelines (WCAG) defines requirements for designers and developers to improve accessibility for people with disabilities. It defines three levels of conformance: Level A, Level AA, and Level AAA. {{ $page->company }} is partially conformant with WCAG 2.1 level A. Partially conformant means that some parts of the content do not fully conform to the accessibility standard.</p>

<h4>Feedback</h4>
<p>{{ $page->company }} welcomes your feedback on our accessibility. Please let us know if you encounter accessibility barriers on our website or at one of our location(s).</p>

<p>
    <strong>Phone:</strong> {{ $page->phone }}<br>
    <strong>E-mail:</strong> {{ $page->email }}<br>
    <strong>Address:</strong> {{ $page->mailing->address }}, {{ $page->mailing->city }}, {{ $page->mailing->state }} {{ $page->mailing->zip }}<br>
    We try to respond to feedback within 2 business days.
</p>
@endsection