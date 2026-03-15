@extends('layouts.app')
@section('title', 'Training | AKSIT Global')
@section('content')
<x-hero title="IT Training Programs" subtitle="Learn from experts and build job-ready technical skills."/>
<section class="mx-auto max-w-7xl px-6 py-12">
<div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3"><x-card title="CCNA">Core routing and switching fundamentals.</x-card><x-card title="CCNP Enterprise">Advanced enterprise networking and troubleshooting.</x-card><x-card title="Cybersecurity / Ethical Hacking">Security operations, offensive testing, and defense strategy.</x-card><x-card title="Windows & Linux Server Administration">Server setup, hardening, automation, and monitoring.</x-card><x-card title="Networking Fundamentals">Networking basics for students and entry-level professionals.</x-card></div>
<form class="mt-10 grid gap-4 rounded-xl border border-slate-800 bg-slate-900 p-6" action="{{ route('training.enquiry.store') }}" method="POST">@csrf
<h3 class="text-xl font-semibold">Enroll Now</h3>
<x-form-input label="Name" name="name" required="true"/>
<x-form-input label="Email" name="email" type="email" required="true"/>
<x-form-input label="Phone" name="phone" required="true"/>
<div><label class="mb-2 block text-sm font-medium">Program</label><select name="program" class="w-full rounded border border-slate-700 bg-slate-950 px-4 py-2"><option>CCNA</option><option>CCNP Enterprise</option><option>Cybersecurity / Ethical Hacking</option><option>Windows & Linux Server Administration</option><option>Networking Fundamentals</option></select></div>
<div><label class="mb-2 block text-sm font-medium">Message</label><textarea name="message" class="w-full rounded border border-slate-700 bg-slate-950 px-4 py-2"></textarea></div>
<button class="rounded bg-cyan-500 px-5 py-2 font-semibold text-slate-900">Submit Enquiry</button>
</form></section>
@endsection
