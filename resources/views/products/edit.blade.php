@extends('layouts.ap')

@section('title', 'Edit')

@section('content')

<form action="{{route('products.update', $product->id)}}" method="POST" 
    class="bg-black w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
    @csrf

    @method('put')
    <h2 class="text-2x1 text-white text-center py-4 mb-4 font-semibold">
        Edit Product {{$product->id}}
    </h2>

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Products" name="title" value="{{$product->title}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Miligram" name="country" value="{{$product->country}}">

    <input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Price" name="price" value="{{$product->price}}">

    <button type="submit" class="my-3 w-full bg-yellow-500 p-2 font-semibold rounded text-white hover:bg-gray-600">Send</button>
@endsection