<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Verified your email</title>
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
  <section class="h-screen grid place-content-center">
    <div class="border-2 border-gray-200 rounded-xl w-auto h-auto p-10 flex flex-col justify-center gap-8">
      <img src="{{ asset('assets/img/mail-sent.jpg') }}" alt="mail" class="w-auto h-auto">
      <div class="text-center">
        <h1 class="text-2xl text-slate-700 font-bold">Email was sent!</h1>
        <p class="text-lg text-slate-500 font-medium">
          Check you'r registered email to verification the account!
        </p>
      </div>
    </div>
  </section>
</body>
</html>