<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - laravel App</title>
    
    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
 
  </head>
  <body class="bg-gray-100 text-gray-800">
    <!-- Document body -->

    <nav class="flex py-5 bg-purple-500 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <h2 class="text-2x1 px-16 font-bold">Farma Live</h2>
      </div>
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
        <li class="mx-6">
           <p class="text-xl">Welcome to Farma Live <b>{{auth()->user()->name}}</b></p>
        </li>  
        <li>
           <a href="{{route('login.destroy')}}" class="font-bold py-2 px-4 rounded-md bg-red-500 hover:bg-red-600">Log Out</a>
        </li>
        @else
        @endif
      </ul>
    </nav>
    @yield('content')


  </body>
</html>