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

      img{
        width: 80%;
        height: 80%;
        align-content: center;
      }
    </style>
 
  </head>
  <body class="gradient text-gray-800">
    @yield('content')

  </body>
</html>