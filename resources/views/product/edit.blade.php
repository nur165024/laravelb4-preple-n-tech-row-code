<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Page</title>
</head>
<body>
    <h1>Edit Page</h1>
    <a href="{{ route('product.index') }}">Product List</a>
    <hr>
    <form action="{{ route('product.update', $product->id) }}" method="post">

        @csrf
        @method('put')

        <input name="product_name" value="{{ $product->product_name }}" type="text" placeholder="Product Name">
        <br>
        <br>
        <input name="product_count" value="{{ $product->product_count }}" type="number" placeholder="Product Count">
        <br>
        <br>
        <textarea name="product_details" placeholder="Product Details" rows="5">{{ $product->product_details }}</textarea>
        <br>
        <br>
        <button>Save</button>
    </form>

</body>
</html>
