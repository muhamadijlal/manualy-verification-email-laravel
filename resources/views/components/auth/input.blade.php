@props([
  'label',
])

<div class="form-group my-3">
  <label for="#" class="text-sm text-slate-700">{{ $label }}</label>
  <input class="w-full py-2 px-5 text-sm font-medium mt-2 caret-slate-600 ring-1 ring-slate-400 outline-none focus:ring-1 focus:ring-slate-800 rounded-md" {{ $attributes }}>
</div>