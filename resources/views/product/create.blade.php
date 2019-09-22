<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Create</title>
</head>
<body>
    <h1>Product Create</h1>
    <a href="#">Product List</a>
    <hr>
    <form action="{{ route('product.store') }}" method="post">

        @csrf

        <input name="product_name" type="text" placeholder="Product Name">
        <br>
        <br>
        <input name="product_count" type="number" placeholder="Product Count">
        <br>
        <br>
        <textarea name="product_details" placeholder="Product Details" rows="5"></textarea>
        <br>
        <br>
        <button>Save</button>
    </form>
</body>
</html>
