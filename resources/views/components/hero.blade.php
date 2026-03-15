<section class="brand-gradient">
    <div class="mx-auto max-w-7xl px-6 py-24 text-center">
        <h1 class="text-4xl font-extrabold md:text-6xl">{{ $title }}</h1>
        <p class="mx-auto mt-6 max-w-2xl text-slate-100/90">{{ $subtitle }}</p>
        @isset($ctaUrl)
            <a href="{{ $ctaUrl }}" class="mt-8 inline-block rounded bg-white px-6 py-3 font-semibold text-slate-900">{{ $ctaText }}</a>
        @endisset
    </div>
</section>
