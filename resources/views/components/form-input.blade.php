<div>
    <label class="mb-2 block text-sm font-medium">{{ $label }}</label>
    <input name="{{ $name }}" type="{{ $type ?? 'text' }}" value="{{ old($name) }}" class="w-full rounded border border-slate-700 bg-slate-950 px-4 py-2 text-slate-100 focus:border-cyan-400" @if($required ?? false) required @endif>
    @error($name)<p class="mt-1 text-xs text-red-400">{{ $message }}</p>@enderror
</div>
