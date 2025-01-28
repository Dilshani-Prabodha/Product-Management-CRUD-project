<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        /* General body and page styling */
        body {
            font-family: Arial, sans-serif;
            background-image: url('/images/view_page_bg.jpg'); /* replace with your image URL */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #ffffff;
            margin-top: 30px;
        }

        /* Success message styling */
        div > div {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin: 10px;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
        }

        /* Styling for Create Product link */
        .create-product {
            text-align: center;
            margin: 20px;
        }

        .create-product a {
            font-weight: bold;
            text-align: center;
            font-size: 16px;
            color: #007bff;
            text-decoration: none;
            border: 1px solid #007bff;
            padding: 8px 10px;
            border-radius: 4px;
        }

        .create-product a:hover {
            background-color: #007bff;
            color: white;
        }

        /* Table styling */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            opacity: 0.7;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        td {
            color: #555;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Button and form styling */
        input[type="submit"] {
            background-color: #dc3545;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #c82333;
        }

    </style>

</head>
<body>
    <h1>Product</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('products.create')}}">Create a Product</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
             @foreach ($viewProducts as $product )
                 <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{route('products.edit',['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="POST" action="{{route('products.delete',['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>

                 </tr>
             @endforeach
        </table>
    </div>
    <div class="dashButton">
        <input type="button" value="Dashboard" onclick="window.location='{{ route('dashboard') }}'" style="background-color: black; color: white; position: absolute; top: 5%; left: 90%; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
    </div>
</body>
</html>