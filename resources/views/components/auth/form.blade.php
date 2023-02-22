@props([
  'title',
  'subtitle'
])

<div class="md:w-1/2 w-full p-12 border-solid">
  <!-- title -->
  <h1 class="text-2xl font-bold text-slate-700 mb-2">{{ $title }}</h1>
  <!-- subtitle -->
  <p class="text-xs font-thin text-slate-500">{{ $subtitle }}</p>

  <!-- Input -->
  <div class="mt-8">
    <form action="{{ route('login') }}" method="POST">
      @csrf
      <!-- From group input email -->
      <x-auth.input 
        label="Email"
        name="email"
        type="email"
        placeholder="example@example.com"
        autocomplete="off"
      />
      
      <!-- From group input password -->
      <x-auth.input-password
        label="Password"
        type="password"
        name="password"
        placeholder="Input your password"
        autocomplete="off"
      />

      <!-- Remember me -->
      <div class="flex justify-between">
        <x-auth.remember-me 
          type="checkbox"
        />

        <!-- Forgotpassword -->
        <x-auth.forgot-password 
          href="#"
        />
      </div>

      <!-- button -->
      <x-auth.button
        type="submit"
        class="px-3 py-2 w-full mt-10 bg-slate-800 hover:bg-slate-900 text-white font-semibold rounded-md"
      >Log In</x-auth.button>
    </form>

    <!-- Footer-->
    <p class="text-xs mt-16 text-center">Dont have account?<a href="{{ route('register') }}" class="text-blue-500"> Sign Up</a></p>
  </div>
</div>