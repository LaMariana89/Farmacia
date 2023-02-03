<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">
    
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <title>@yield('title') - Farma Live</title>
    
    <!-- Tailwind CSS Link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/> <!--Replace with your tailwind.css once created-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
 
    <style>
      .gradient {
      background-image: linear-gradient(-100deg, #d65ad685 0%, #52cdec59 100%);
      }
    </style>
  </head>
  <body class="text-gray-800">
    <nav class="gradient flex py-5 text-white">
      <div class="w-1/2 px-12 mr-auto">
        
      </div>
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
        <li class="mx-6">
           <p class="text-xl font-style: italic ">Welcome to Farma Live! Hello <b>{{auth()->user()->name}}</b></p>
        </li>  
        <li>
           <a href="{{route('login.destroy')}}" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-purple-200 text-gray-800 font-bold rounded-full w-full mt-4 lg:mt-0 py-4 px-10 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:bg-cyan-100 duration-300 ease-in-out">Log Out</a>
        </li> 
        @endif
      </ul>
    </nav>
      @yield('content')
  </body>
</html>