<!DOCTYPE html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><script src="https://cdn.tailwindcss.com"></script></head>
<body class="flex min-h-screen items-center justify-center bg-slate-950 text-slate-100">
<form method="POST" action="{{ route('admin.login.submit') }}" class="w-full max-w-md space-y-4 rounded-xl border border-slate-800 bg-slate-900 p-6">@csrf
<h1 class="text-2xl font-bold">Admin Login</h1>
<x-form-input label="Email" name="email" type="email" required="true"/>
<x-form-input label="Password" name="password" type="password" required="true"/>
<button class="w-full rounded bg-cyan-500 px-4 py-2 font-semibold text-slate-900">Login</button>
</form></body></html>
