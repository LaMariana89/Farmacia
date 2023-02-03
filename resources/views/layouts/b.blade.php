<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Products App</title>
    
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/tailwind/2.0.1/tailwind.min.css">
    
    <script src="http://kit.fontawesome.com/a23e6feb03.js"></script>

  </head>
  <body class="bg-gray-100 text-gray-800">
    
    <div class="w-1/2 px-12 mr-auto">
        <li class="mx-6">
           <p class="text-xl">Welcome to Farma Live <b>{{auth()->user()->name}}</b></p>
        </li>  
        <li>
           <a href="{{route('login.destroy')}}" class="font-bold py-2 px-4 rounded-md bg-red-500 hover:bg-red-600">Log Out</a>
        </li>
    </div>

    

    <main class="p-16 flex justify-center">
        @yield('content')
    </main>

  </body>
</html>