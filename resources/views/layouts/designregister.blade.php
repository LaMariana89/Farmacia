<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Farma Live</title>
    
    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <style>
      .gradient {
        background-image: linear-gradient(-100deg, #d65ad685 0%, #52cdec59 100%);
      }
    </style>
 
  </head>
  <body class="gradient text-gray-800">
    <nav class="gradient flex py-5 text-white">
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        
        <li class="mx-6">
           <a href="{{route('login.index')}}" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-purple-200 text-gray-800 font-bold rounded-full w-full mt-4 lg:mt-0 py-4 px-20 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:bg-cyan-100 duration-300 ease-in-out">Log in</a>
        </li>       
      </ul>
    </nav>
    @yield('content')

  </body>
</html>