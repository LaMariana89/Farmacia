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


  </head>


  <body class="bg-purple-50 text-gray-800">
    <!-- Document body -->

    <nav class="flex py-5 bg-green-300 text-white">
      <div class="w-1/2 px-12 mr-auto">
        <h2 class="text-2x1 px-16 font-bold">Farma Live</h2>
      </div>
      <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
        <li class="mx-6">
           <p class="text-xl">Welcome to Farma Live <b>{{auth()->user()->name}}</b></p>
        </li>  
        <li>
           <a href="{{route('login.destroy')}}" class="font-bold py-2 px-4 rounded-md bg-red-500 hover:bg-stone-300">Log Out</a>
        </li>
        <!--@else
        <li class="mx-6">
           <a href="{{route('login.index')}}" class="font-semibold hover:bg-white-700 py-3 px-4 rounded-md">Log in</a>
        </li>  
        <li>
           <a href="{{route('register.index')}}" class="font-semibold border-2 border-yellow py-2 px-4 rounded-md hover:bg-black hover:text-white-700">Register</a>
        </li>
        @endif-->
      </ul>
    </nav>
    @yield('content')
  </body>
</html>