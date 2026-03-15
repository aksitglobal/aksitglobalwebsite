<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'AKSIT Global | IT Services & Training')</title>
    <meta name="description" content="@yield('meta_description', 'AKSIT Global delivers software development, managed IT services, and enterprise IT training in Pakistan.')" />
    <meta property="og:title" content="@yield('og_title', 'AKSIT Global')" />
    <meta property="og:description" content="@yield('og_description', 'Premium IT services and training programs including CCNA, CCNP and cybersecurity.')" />
    <meta property="og:type" content="website" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>body{font-family:'Inter',sans-serif}.brand-gradient{background:linear-gradient(135deg,#0a2a66 0%,#0f4bcf 50%,#06b6d4 100%)}</style>
</head>
<body class="bg-slate-950 text-slate-100">
    <x-navigation />
    <main>@yield('content')</main>
    <x-footer />
</body>
</html>
