@extends('layouts.app')
@section('title', 'Create Category')
@section('content')
<form action="{{route('category.store')}}" method="POST">
    @csrf
    <input type="text" name="Priority" placeholder="Priority" class="border border-gray-300 p-2 rounded mb-4 w-full">
    <input type="text" name="Name" placeholder="Category Name" class="border border-gray-300 p-2 rounded mb-4 w-full">
    <div class="flex justify-end my-4">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded lg">Create Category</button>
        <a href="{{route('category.index')}}" class="bg-red-600 text-white px-4 py-2 rounded lg">Back</a>
    </div>
</form>
@endsection

