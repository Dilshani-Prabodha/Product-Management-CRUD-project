<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-image: url('/images/add_products.jpg'); /* replace with your image URL */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            margin-left: 180px;
            text-align: left;
            margin-top: 30px;
            color: #333;
        }

        /* Styling for the error messages */
        .errors ul {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 4px;
            margin: 0 20px;
            border: 1px solid #f5c6cb;
        }

        .errors li {
            list-style-type: none;
        }

        /* Form container */
        form {
            align-content: left;
            max-width: 500px;
            margin: 30px;
            background-color: rgb(16, 9, 107);
            opacity: 0.5;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Styling for form labels */
        label {
            display: block;
            margin: 10px 0 5px;
            color: #ffffff;
        }

        /* Styling for form input fields */
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            color: #333;
        }

        /* Submit button styling */
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 20px;
        }

        /* Hover effect for submit button */
        input[type="submit"]:hover {
            background-color: #3eae22;
        }

        /* Styling for the container div */
        .form-container {
            margin: 10px;
        }
    </style>

</head>
<body>
    <h1>Edit Product</h1>
    <div>
        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="POST" action="{{route('products.update',['product' => $product->id])}}">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" id="Name" value="{{$product->name}}">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" id="Qty" value="{{$product->qty}}">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" id="Price" value="{{$product->price}}">
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" id="Description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
    <div class="dashButton">
        <input type="button" value="Dashboard" onclick="window.location='{{ route('dashboard') }}'" style="background-color: black; color: white; position: absolute; top: 5%; left: 90%; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    </div>
</body>
</html>