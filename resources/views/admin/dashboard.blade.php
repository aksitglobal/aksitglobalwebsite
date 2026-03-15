@extends('layouts.app')
@section('title','Admin Dashboard')
@section('content')
<section class="mx-auto max-w-7xl px-6 py-10">
<div class="mb-6 flex items-center justify-between"><h1 class="text-3xl font-bold">Admin Dashboard</h1><form method="POST" action="{{ route('admin.logout') }}">@csrf<button class="rounded bg-red-500 px-4 py-2 text-sm font-semibold">Logout</button></form></div>
<div class="grid gap-8">
<div><h2 class="mb-3 text-xl font-semibold">Contact Submissions</h2><div class="overflow-x-auto"><table class="w-full text-sm"><thead><tr class="border-b border-slate-700"><th class="p-2 text-left">Name</th><th class="p-2 text-left">Email</th><th class="p-2">Phone</th><th class="p-2 text-left">Message</th></tr></thead><tbody>@foreach($contacts as $item)<tr class="border-b border-slate-800"><td class="p-2">{{ $item->name }}</td><td class="p-2">{{ $item->email }}</td><td class="p-2">{{ $item->phone }}</td><td class="p-2">{{ $item->message }}</td></tr>@endforeach</tbody></table></div></div>
<div><h2 class="mb-3 text-xl font-semibold">Training Enquiries</h2><div class="overflow-x-auto"><table class="w-full text-sm"><thead><tr class="border-b border-slate-700"><th class="p-2 text-left">Name</th><th class="p-2 text-left">Program</th><th class="p-2 text-left">Email</th></tr></thead><tbody>@foreach($trainingEnquiries as $item)<tr class="border-b border-slate-800"><td class="p-2">{{ $item->name }}</td><td class="p-2">{{ $item->program }}</td><td class="p-2">{{ $item->email }}</td></tr>@endforeach</tbody></table></div></div>
<div><h2 class="mb-3 text-xl font-semibold">Career Applications</h2><div class="overflow-x-auto"><table class="w-full text-sm"><thead><tr class="border-b border-slate-700"><th class="p-2 text-left">Name</th><th class="p-2 text-left">Position</th><th class="p-2 text-left">Email</th></tr></thead><tbody>@foreach($careerApplications as $item)<tr class="border-b border-slate-800"><td class="p-2">{{ $item->name }}</td><td class="p-2">{{ $item->position }}</td><td class="p-2">{{ $item->email }}</td></tr>@endforeach</tbody></table></div></div>
</div>
</section>
@endsection
