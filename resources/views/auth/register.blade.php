@extends('layouts.designRegister')

@section('title', 'Register')

@section('content')

<div class="block mx-auto my-12 p-8 bg-slate-50 w-1/3 border border-slate-50 rounded-lg shadow-lg">
    <h1 class="text-3xl text-gray-900 text-center tracking-widest font-bold">Register</h1>
    <form class="mt-4" method="POST" action="">
        @csrf

        <input type="text" class="border border-gray-100 rounded-md bg-gray-100 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        placeholder="Name" id="name" name="name">

        @error('name')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{$message}}</p>
        @enderror

        <input type="email" class="border border-gray-100 rounded-md bg-gray-100 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        placeholder="Email" id="email" name="email">

        @error('email')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{$message}}</p>
        @enderror

        <input type="password" class="border border-gray-100 rounded-md bg-gray-100 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        placeholder="Password" id="password" name="password">

        @error('password')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{$message}}</p>
        @enderror

        <input type="password" class="border border-gray-100 rounded-md bg-gray-100 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
        placeholder="Password_confirmation" id="password_confirmation" name="password_confirmation">

        <button type="submit" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-purple-200 text-gray-800 font-bold rounded-full w-full mt-4 lg:mt-0 py-4 px-20 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:bg-cyan-100 duration-300 ease-in-out">Sign Up</button>
    </form>
</div>

@endsection