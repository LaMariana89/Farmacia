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

    <nav class="h-16 flex justify-end py-4 px-16">
      <a href="{{route('products.index')}}" class="border border-yellow-500 rounded px-4 pt-1 h-10 bg-white text-yellow-500
      font semibold mx-2">Products</a>

      <a href="{{route('products.create')}}" class="text-white rounded px-4 pt-1 h-10 bg-yellow-500 font-semibold mx-2 hover:bg-gray-600">Create</a>
    </nav>

    <main class="p-16 flex justify-center">
        @yield('content')
    </main>

  </body>
</html>