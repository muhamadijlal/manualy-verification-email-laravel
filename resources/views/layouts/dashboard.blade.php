<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard page's</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<!-- navbar -->
<nav class="border-b-2 border-gray-300 z-50 top-0 w-full fixed">
  <div class="bg-white flex items-center justify-between py-3 px-5 md:px-40">
    <!-- Title navbar -->
    <a href="#">
      <span class="text-lg text-slate-700 font-bold ">Autentication</span>
    </a>

    <!-- menu's -->
    <div class="icon w-60 flex items-center justify-around">
      <!-- github icon-->
      <a href="https://github.com/muhamadijlal" target="_blank">
        <svg viewBox="0 0 24 24" aria-hidden="true" class="h-8 w-8 fill-slate-500 hover:fill-slate-700"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.463 2 11.97c0 4.404 2.865 8.14 6.839 9.458.5.092.682-.216.682-.48 0-.236-.008-.864-.013-1.695-2.782.602-3.369-1.337-3.369-1.337-.454-1.151-1.11-1.458-1.11-1.458-.908-.618.069-.606.069-.606 1.003.07 1.531 1.027 1.531 1.027.892 1.524 2.341 1.084 2.91.828.092-.643.35-1.083.636-1.332-2.22-.251-4.555-1.107-4.555-4.927 0-1.088.39-1.979 1.029-2.675-.103-.252-.446-1.266.098-2.638 0 0 .84-.268 2.75 1.022A9.607 9.607 0 0 1 12 6.82c.85.004 1.705.114 2.504.336 1.909-1.29 2.747-1.022 2.747-1.022.546 1.372.202 2.386.1 2.638.64.696 1.028 1.587 1.028 2.675 0 3.83-2.339 4.673-4.566 4.92.359.307.678.915.678 1.846 0 1.332-.012 2.407-.012 2.734 0 .267.18.577.688.48 3.97-1.32 6.833-5.054 6.833-9.458C22 6.463 17.522 2 12 2Z"></path></svg>
      </a>
      <button class="px-2 py-2 bg-slate-800 hover:bg-slate-900 rounded-md text-white text-sm font-bold">
        Get Statrted
      </button>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="px-2 py-2 bg-red-500 hover:bg-red-600 rounded-md text-white text-sm font-bold">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
          </svg>
        </button>
      </form>
    </div>
  </div>
</nav>

@if(session('success'))
  <div class=" flex justify-center w-screen absolute">
    <div class="bg-green-100 border-l-4 border-green-500 text-green-500 p-4 w-1/2 mt-10" role="alert">
      <p class="font-bold">Success!</p>
      <p class="text-medium">{{ session('success') }}</p>
    </div>
  </div>
  @endif

<!-- Content -->
<section class="h-screen relative md:grid md:grid-cols-2">
  <!-- Description -->
  <div class="pt-64 p-5 md:w-full md:pt-56 md:ml-20">
    <h1 class="text-4xl font-bold text-slate-700">Autentication manually verification auth.</h1>
    <p class="text-lg text-slate-500 py-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima itaque consequuntur commodi veniam cum sunt libero adipisci totam eaque, voluptates quae velit cumque quas aliquam odit asperiores unde, aperiam dignissimos.</p>
    <button class="px-4 py-3 mt-3 bg-slate-800 hover:bg-slate-900 rounded-lg text-white text-md font-bold">
      Get Statrted
    </button>    
  </div>

  <!-- img pattern -->
  <img src="{{ asset('assets/img/pattern.jpg') }}" alt="pattern" class="absolute -top-36 -right-52 rotate-90 md:top-0 md:right-0 md:w-2/5">
</section>
</body>
</html>