@extends('layouts.designIndexAdmin')

@section('title', 'Products')

@section('content')
<br>
<br>
<div class="bg-neutral-200 overflow-hidden shadow-xl sm:rounded-lg">
    <table class="table-fixed w-full">
        <thead>
            <tr class="bg-zinc-100 text-gray-900">
                <th class="w-20 py-4">ID</th>
                <th class="w-1/8 py-4">Products</th>
                <th class="w-1/16 py-4">Amount</th>
                <th class="w-1/16 py-4">Price</th>
                <th class="w-1/16 py-4">Created</th>
                <th class="w-1/16 py-4">Update</th>
                <th class="w-28 py-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $row)          
            <tr>
                <td class="py-3 text-gray-900 px-6">{{$row->id}}</td>
                <td class="p-3 text-gray-900">{{$row->title}}</td>
                <td class="p-3 text-gray-900 text-center">{{$row->country}}</td>
                <td class="p-3 text-gray-900 text-center">${{$row->price}}</td>
                <td class="p-3 text-gray-900 text-center">{{$row->created_at}}</td>
                <td class="p-3 text-gray-900 text-center">{{$row->updated_at}}</td>
                <td class="p-3 text-gray-900 flex justify-center">
                    <form action="{{route('admin.destroy', $row->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                        <i class="fas fa-trash"></i></button>
                    </form>
                    <a href="{{route('admin.edit', $row->id)}}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
                    <i class="fas fa-pen"></i class="fas fa-pen"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection