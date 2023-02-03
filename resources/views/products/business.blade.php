@extends('layouts.designBusiness')

@section('title', 'Business')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Blog Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }

        
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white font-family-karla">

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl">
                {{$product->title}}
            </a>
        </div>
    </header>

    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a class="hover:opacity-75">
                    <img class="imagen" src="{{$product->image}}">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <h1 class="text-2xl font-bold pb-3">${{$product->price}}</h1>
                </div>
            </article>
        </section>

        <section>
        <nav class="h-30 flex justify-end py-4 px-16">
            <a href="{{route('products.detail', $product->id)}}" id="navAction" class="mx-auto lg:mx-0 bg-purple-50 hover:bg-cyan-50 text-gray-800 font-extrabold rounded mt-4 lg:mt-0 py-4 px-8 shadow opacity-75">Add to Car</a>
        </nav>
        </section>

    </div>
</body>
</html>
@endsection