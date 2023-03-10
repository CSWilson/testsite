@extends('_layouts.main')

@section('precontent')
<section class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white md:flex md:justify-center md:items-center md:space-x-4 text-center px-4 py-12">
&nbsp;
</section>
@endsection

@section('content')
<h1 class="text-2xl font-bold leading-7 text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">Terms and Conditions</h1>

<h2>Welcome to {{ $page->company }}!</h2>
<p>These terms and conditions outline the rules and regulations for the use of {{ $page->company }}'s Website, located at <x-link href="{{ $page->domain }}">{{ $page->domain }}</x-link>.</p>
<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use {{ $page->company }} if you do not agree to take all of the terms and conditions stated on this page.</p>
<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of The United States of America. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>

<h3>License</h3>
<p>Unless otherwise stated, {{ $page->company }} and/or its licensors own the intellectual property rights for all material on {{ $page->company }}. All intellectual property rights are reserved. You may access this from {{ $page->company }} for your own personal use subjected to restrictions set in these terms and conditions.</p>
<p><strong>You must not:</strong></p>
<ul class="list-disc pl-4">
    <li>Republish material from {{ $page->company }}</li>
    <li>Sell, rent or sub-license material from {{ $page->company }}</li>
    <li>Reproduce, duplicate or copy material from {{ $page->company }}</li>
    <li>Redistribute content from {{ $page->company }}</li>
</ul>
<p>This Agreement shall begin on the date hereof.</p>

<h3>iFrames</h3>
<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>

<h3>Your Privacy</h3>
<p>Please read <x-link href="/privacy-policy">Privacy Policy</x-link></p>

<h3>Removal of links from our website</h3>
<p>If you find any link on our Website that is offensive for any reason, you are free to <x-link href="/contact">contact</x-link> and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>
<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

<h3>Disclaimer</h3>
<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>
<ul class="list-disc pl-4">
    <li>limit or exclude our or your liability for death or personal injury;</li>
    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
</ul>
<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>
<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
@endsection