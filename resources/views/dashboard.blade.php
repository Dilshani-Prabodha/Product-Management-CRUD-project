<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>

        <!-- Link to your CSS file -->
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    </head>

    <div class="body">
    <x-slot name="header" style="background-color: #222224;">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background-color: #2a2b2c;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <div class="button">
                    <br>
                    <a href="{{route('products.create')}}" class="text-blue-500" id="addButton">Add Product</a>
                    <br>
                    <a href="{{route('products.index')}}" class="text-blue-500 hover:text-yellow-950" id="viewButton">View Product</a>
                    <br>
                    <a href="{{route('products.index')}}" class="text-blue-500 hover:text-green-950" id="updateButton">Update Product</a>
                    <br>
                    <a href="{{route('products.index')}}" class="text-blue-500 hover:text-red-950" id="deleteButton">Delete Product</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</div>
