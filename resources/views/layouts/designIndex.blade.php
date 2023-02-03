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
      .work-sans {
          font-family: 'Work Sans', sans-serif;
      }
              
      #menu-toggle:checked + #menu {
          display: block;
      }
      
      .hover\:grow {
          transition: all 0.3s;
          transform: scale(1);
      }
      
      .hover\:grow:hover {
          transform: scale(1.02);
      }
      
      .carousel-open:checked + .carousel-item {
          position: static;
          opacity: 100;
      }
      
      .carousel-item {
          -webkit-transition: opacity 0.6s ease-out;
          transition: opacity 0.6s ease-out;
      }
      
      #carousel-1:checked ~ .control-1,
      #carousel-2:checked ~ .control-2,
      #carousel-3:checked ~ .control-3 {
          display: block;
      }
      
      .carousel-indicators {
          list-style: none;
          margin: 0;
          padding: 0;
          position: absolute;
          bottom: 2%;
          left: 0;
          right: 0;
          text-align: center;
          z-index: 10;
      }
      
      #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
      #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
      #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
          color: #000;
          /*Set to match the Tailwind colour you want the active one to be */
      }

      .gradient {
          background-image: linear-gradient(-100deg, #d65ad685 0%, #52cdec59 100%);
      }

      .imagen{
        width: 400px;
        height: 300px;
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
             <a href="{{route('login.index')}}" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-purple-200 text-gray-800 font-bold rounded-full w-full mt-4 lg:mt-0 py-4 px-5 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:bg-cyan-100 duration-300 ease-in-out">To Return</a>
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