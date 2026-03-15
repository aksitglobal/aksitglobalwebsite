@extends('layouts.app')
@section('title', 'Contact | AKSIT Global')
@section('content')
<x-hero title="Contact AKSIT Global" subtitle="Let us help your organization scale with technology."/>
<section class="mx-auto grid max-w-6xl gap-8 px-6 py-12 md:grid-cols-2">
<div><h2 class="text-2xl font-bold">Our Office</h2><p class="mt-3 text-slate-300">Office 16,17 1st Floor, E1 Emporium,<br>Paradise Boulevard, Main GT Rd,<br>Near Bahria Paradise Gate,<br>Rawalpindi, Pakistan</p></div>
<form class="grid gap-4 rounded-xl border border-slate-800 bg-slate-900 p-6" action="{{ route('contact.store') }}" method="POST">@csrf
<h3 class="text-xl font-semibold">Send a Message</h3>
<x-form-input label="Name" name="name" required="true"/>
<x-form-input label="Email" name="email" type="email" required="true"/>
<x-form-input label="Phone" name="phone" required="true"/>
<div><label class="mb-2 block text-sm font-medium">Message</label><textarea name="message" required class="w-full rounded border border-slate-700 bg-slate-950 px-4 py-2"></textarea></div>
<button class="rounded bg-cyan-500 px-5 py-2 font-semibold text-slate-900">Submit</button>
</form>
</section>
@endsection
