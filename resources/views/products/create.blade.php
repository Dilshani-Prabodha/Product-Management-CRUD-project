<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
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
</body>
</html>