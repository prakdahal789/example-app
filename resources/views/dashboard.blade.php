@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')

<div class="grid grid-cols-3 gap-5">
    <div class="bg-blue-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold"> Total Products</h2>
        <p class="text-3xl font-bold">150</p>
    </div>
    <div class="bg-blue-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold"> Pending Orders</h2>
        <p class="text-3xl font-bold">200</p>
    </div>
    <div class="bg-blue-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold"> Processing Products</h2>
        <p class="text-3xl font-bold">300</p>
    </div>
    <div class="bg-blue-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold"> Total Users</h2>
        <p class="text-3xl font-bold">400</p>
    </div>
    <div class="bg-blue-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold"> Total Categories</h2>
        <p class="text-3xl font-bold">500</p>
    </div>
    <div class="bg-blue-50 p-4 rounded-lg shadow-md">
        <h2 class="text-xl font-bold"> Total Sales</h2>
        <p class="text-3xl font-bold">8000</p>
    </div>

</div>

@endsection