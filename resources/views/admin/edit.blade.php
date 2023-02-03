@extends('layouts.designEditAdmin')

@section('title', 'Edit')

@section('content')

<form action="{{route('admin.update', $product->id)}}" method="POST" 
    class="bg-slate-50 w-1/3 p-4 border-gray-100 shadow-x1 rounded-lg">
    @csrf

    @method('put')
    <h2 class="text-2x1 text-gray-900 text-center py-4 mb-4 font-semibold">
        <h1 class="text-3xl text-gray-900 text-center tracking-widest font-bold">Edit Products</h1>
        <br>
        Id = {{$product->id}}
        <br>
        Name = {{$product->title}}
        <br>
    </h2>
    <br>
    <input class="my-2 w-full bg-gray-100 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Products" name="title" value="{{$product->title}}">

    <input class="my-2 w-full bg-gray-100 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Miligram" name="country" value="{{$product->country}}">

    <input class="my-2 w-full bg-gray-100 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Price" name="price" value="{{$product->price}}">

    <input class="my-2 w-full bg-gray-100 p-2 text-lg rounded placeholder-gray-900"
    placeholder="Link image" name="image" value="{{$product->image}}">
    <br>
    <br>
    <button type="submit" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-purple-200 text-gray-800 font-bold rounded-full w-full mt-4 lg:mt-0 py-4 px-20 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:bg-cyan-100 duration-300 ease-in-out">Update</button>
@endsection