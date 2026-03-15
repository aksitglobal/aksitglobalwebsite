<header x-data="{open:false}" class="sticky top-0 z-40 border-b border-slate-800 bg-slate-950/95 backdrop-blur">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
        <a href="{{ route('home') }}" class="text-lg font-bold tracking-wide">AKSIT <span class="text-cyan-400">Global</span></a>
        <button class="md:hidden" @click="open=!open">☰</button>
        <ul class="hidden gap-6 text-sm md:flex">
            @foreach ([['Home','home'],['About','about'],['Services','services'],['Training','training'],['Careers','careers'],['Contact','contact']] as [$label,$route])
                <li><a class="hover:text-cyan-400" href="{{ route($route) }}">{{ $label }}</a></li>
            @endforeach
            <li><a class="rounded bg-cyan-500 px-3 py-1 text-slate-900" href="{{ route('admin.login') }}">Admin</a></li>
        </ul>
    </nav>
    <ul x-show="open" class="space-y-2 px-6 pb-4 md:hidden">
        @foreach ([['Home','home'],['About','about'],['Services','services'],['Training','training'],['Careers','careers'],['Contact','contact']] as [$label,$route])
            <li><a class="block py-1" href="{{ route($route) }}">{{ $label }}</a></li>
        @endforeach
    </ul>
</header>
