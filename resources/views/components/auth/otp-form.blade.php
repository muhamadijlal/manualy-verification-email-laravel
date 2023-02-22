@props([
  'title',
  'subtitle'
])

<div class="md:w-1/2 w-full p-8 md:p-12 border-solid">
  <!-- title -->
  <h1 class="text-2xl font-bold text-slate-700 mb-2">{{ $title }}</h1>
  <!-- subtitle -->
  <p class="text-xs font-thin text-slate-500">{{ $subtitle }}</p>

  <!-- Input -->
  <div class="mt-8">
    <form action="{{ route('store_otp') }}" method="POST">
      @csrf
      <!-- From input OTP -->
      <x-auth.input 
        label="Token OTP"
        name="token_otp"
        type="text"
        placeholder="Input your otp don't tell anyone!"
        autocomplete="off"
      />

      <x-auth.button
        type="submit"
        class="px-3 py-2 float-right mt-2 bg-slate-800 hover:bg-slate-900 text-white font-semibold rounded-md"
      >Submit</x-auth.button>
  </div>
</div>