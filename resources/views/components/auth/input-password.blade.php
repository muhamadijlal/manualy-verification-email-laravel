@props([
  'label',
])

<div class="form-group my-3">
  <label for="#" class="text-sm text-slate-700">{{ $label }}</label>
  <!-- input group -->
  <div class="relative bg-blue-300 mt-2">
    <input class="w-full py-2 px-5 text-sm font-medium caret-slate-600 ring-1 ring-slate-400 outline-none focus:ring-1 focus:ring-slate-800 rounded-md" {{ $attributes }}>
    <!-- icon eye -->
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 absolute right-0 mr-3 top-1/2 -translate-y-1/2 text-slate-400">
      <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
    </svg>
  </div>
</div>