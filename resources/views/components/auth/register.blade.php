<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
      body {
        font-family: 'Nunito', sans-serif;
      }
    </style>
  </head>
  <body>
    
    <!-- Alerts -->
    @if($errors->any())
    <div class=" flex justify-center w-screen absolute">
      <div class="bg-red-100 border-l-4 border-red-500 text-red-500 p-4 w-1/2 mt-10" role="alert">
        <p class="font-bold">Oops! ada error</p>
        <ul class="list-disc">
          @foreach ($errors->all() as $error)
            <li class="ml-5">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>
    @endif

    <!-- Section login page -->
    <section class="h-screen bg-slate-200 grid place-content-center">
      <!-- Login card -->
      <div class="bg-white md:w-[750px] md:h-auto rounded-lg flex">
        <!-- Image -->
        <x-auth.image 
          :src="asset('assets/img/img3.jpg')"
          alt='image'
          class='w-full h-full object-fill rounded-md'
        />
        
        <!-- Form -->
        <x-auth.form-register
          title="Welcome!"
          subtitle="Register your account"
        />
      </div>

    </section>

  </body>
</html>