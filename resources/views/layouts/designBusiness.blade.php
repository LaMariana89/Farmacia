<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Farmacy Live</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/tailwind/2.0.1/tailwind.min.css">
    
    <script src="http://kit.fontawesome.com/a23e6feb03.js"></script>

    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <style>
      .gradient {
          background-image: linear-gradient(-100deg, #d65ad685 0%, #52cdec59 100%);
      }

      .imagen{
        width: 400px;
        height: 400px;
      }

      .imagenCar{
        width: 100px;
        height: 100px;
      }
  </style>

  </head>
  <body class="text-gray-800">

    <nav class="gradient flex py-5 text-white">
        <div class="w-1/6 px-16 mr-auto">
          <img class="logo" src="{!! asset('farma.png') !!}">
        </div>
        <ul class="w-1/2 px-1 ml-auto flex justify-end pt-1">
          @if(auth()->check())
          <li class="mx-6">
             <p class="text-xl font-style: italic">Welcome to Farma Live! Hello <b>{{auth()->user()->name}}</b></p>
          </li>  
          <li>
             <a href="{{route('products.index')}}" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-purple-200 text-gray-800 font-bold rounded-full w-full mt-4 lg:mt-0 py-4 px-5 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:bg-cyan-100 duration-300 ease-in-out">To Return</a>
          </li>
          <li>
            <a href="{{route('login.destroy')}}" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-purple-200 text-gray-800 font-bold rounded-full w-full mt-4 lg:mt-0 py-4 px-5 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:bg-cyan-100 duration-300 ease-in-out">To Close</a>
          </li>
          @endif
        </ul>
    </nav>
        @yield('content')
  </body>
</html>