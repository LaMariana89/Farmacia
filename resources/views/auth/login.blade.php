@extends('layouts.designLogin')

@section('title', 'Login')

@section('content')

<div class="block mx-auto my-12 p-8 bg-slate-50 w-1/3 border border-slate-50 rounded-lg shadow-lg">
    <div class="rounded-lg">
        <img class="w-2/3 block mx-auto" src="{!! asset('farmaLive.png') !!}">
    </div>
    <form class="mt-4" method="POST" action="">
    @csrf

        <input type="email" class="border border-gray-300 rounded-md bg-red-400 w-full text-lg placeholder-slate-900 p-2 my-2 focus:bg-red"
        placeholder="Email con cambios" id="email" name="email">

        <input type="password" class="border border-gray-300 rounded-md bg-red-400 w-full text-lg placeholder-slate-900 p-2 my-2 focus:bg-red"
        placeholder="Password con cambios" id="password" name="password">

        @error('message')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* Error</p>
        @enderror

        <button type="submit" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-purple-200 text-gray-800 font-bold rounded-full w-full mt-4 lg:mt-0 py-4 px-20 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:bg-cyan-100 duration-300 ease-in-out">Send</button>

    </form>
    <div class="tracking-wide underline w-1/3 block mx-auto">
        <a href="{{route('register.index')}}">Registrate ¡¡Ya!! Con cambios</a>
    </div>
</div>
@endsection
