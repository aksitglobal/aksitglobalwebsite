@extends('layouts.app')
@section('title', 'Careers | AKSIT Global')
@section('content')
<x-hero title="Careers at AKSIT Global" subtitle="Join our mission to deliver excellence in IT services and education."/>
<section class="mx-auto max-w-5xl px-6 py-12">
<x-card title="Open Role: IT Instructor (Cisco / Server Technologies)">Teach practical networking and server technologies to aspiring professionals.</x-card>
<form class="mt-8 grid gap-4 rounded-xl border border-slate-800 bg-slate-900 p-6" action="{{ route('career.application.store') }}" method="POST">@csrf
<h3 class="text-xl font-semibold">Apply Now</h3>
<x-form-input label="Name" name="name" required="true"/>
<x-form-input label="Email" name="email" type="email" required="true"/>
<x-form-input label="Phone" name="phone" required="true"/>
<x-form-input label="Position" name="position" required="true"/>
<div><label class="mb-2 block text-sm font-medium">Cover Letter</label><textarea name="cover_letter" required class="w-full rounded border border-slate-700 bg-slate-950 px-4 py-2"></textarea></div>
<button class="rounded bg-cyan-500 px-5 py-2 font-semibold text-slate-900">Submit Application</button>
</form></section>
@endsection
