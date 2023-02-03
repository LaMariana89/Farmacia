@extends('layouts.designHomeAdmin')

@section('title', 'Home')

@section('content')
<div class="bg-white w-1/3 p-4 border-green-100 shadow-x1 rounded-lg">
    <form action="{{route('products.index')}}" class="bg-white w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">

    <h1 class="text-5xl text-center pt-24">Welcome to my Farmacy</h1>
    <p>
    <h1 class="text-6xl text-green-300 text-center">FARMA LIVE</h1>

    <button type="submit" class="my-3 w-full bg-red-500 p-2 font-semibold rounded text-white hover:bg-stone-300">Send</button>
    
</div>
@endsection