<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
            
        @endif
    </div>
    <form method="POST" action={{route('products.store')}}>
        @csrf
        @method('POST')
        <div>
            <label>Name</label>
            <input type="text" name="name" id="Name">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" id="Qty">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" id="Price">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" id="Description">
        </div>
        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>
    <div class="dashButton">
        <input type="button" value="Dashboard" onclick="window.location='{{ route('dashboard') }}'" style="background-color: black; color: white; position: absolute; top: 5%; left: 90%; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    </div>
</body>
</html>