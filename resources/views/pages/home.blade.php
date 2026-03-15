@extends('layouts.app')
@section('title', 'AKSIT Global | Home')
@section('content')
<x-hero title="Enterprise IT Solutions & Training" subtitle="We build resilient digital systems and produce industry-ready professionals." ctaUrl="{{ route('contact') }}" ctaText="Start a Project"/>
<section class="mx-auto grid max-w-7xl gap-6 px-6 py-16 md:grid-cols-3">
    <x-card title="About AKSIT Global">We are a full-stack technology partner delivering software, cloud, and networking excellence.</x-card>
    <x-card title="Services">From web platforms to managed IT, we design solutions that scale securely.</x-card>
    <x-card title="Training Programs">Career-focused training including CCNA, CCNP, and cybersecurity tracks.</x-card>
</section>
<section class="mx-auto max-w-7xl px-6 py-10"><h2 class="text-2xl font-bold">Why Choose Us</h2><div class="mt-4 grid gap-4 md:grid-cols-3"><x-card title="Certified Team">Certified instructors and engineers.</x-card><x-card title="Result Driven">Business-first delivery approach.</x-card><x-card title="End-to-End Support">Planning, implementation, and maintenance.</x-card></div></section>
<section class="mx-auto max-w-7xl px-6 py-10"><h2 class="text-2xl font-bold">Testimonials</h2><div class="mt-4 grid gap-4 md:grid-cols-3">@foreach($testimonials as $item)<x-card :title="$item['name']">{{ $item['quote'] }}</x-card>@endforeach</div></section>
<section class="mx-auto max-w-7xl px-6 py-16 text-center"><h2 class="text-3xl font-bold">Ready to modernize your IT operations?</h2><a href="{{ route('contact') }}" class="mt-6 inline-block rounded bg-cyan-500 px-6 py-3 font-semibold text-slate-900">Contact Us Today</a></section>
@endsection
