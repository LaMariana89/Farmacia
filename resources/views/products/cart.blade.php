@extends('layouts.designCart')

@section('title', 'ShoppingCar')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        .imagen{
            width: 100px;
            height: 100px;
        }
        
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<br>
<br>
    <body class="bg-white font-family-karla">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="text-4xl w-full md:w-2/2 flex flex-col items-center px-3 underline decoration-indigo-500">
            <h1>SATISFIED PURCHASE</h1>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="w-full md:w-2/2 flex flex-col items-center px-8 p-10">
            <section>
                <article>
                        <a href="{{route('products.index')}}" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-purple-200 text-gray-800 font-bold rounded-full w-full mt-4 lg:mt-0 py-4 px-10 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:bg-cyan-100 duration-300 ease-in-out">Return</a>
                </article>
            </section>
        </div> 
    </body>
</html>

@endsection