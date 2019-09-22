<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="{{ route('product.create') }}">Create page</a>
    <hr>
    <table border>
        <tr>
            <th>Sl</th>
            <th>Product Name</th>
            <th>Product Count</th>
            <th>Product Details</th>
            <th>Action</th>
        </tr>

        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_count }}</td>
                <td>{{ $product->product_details }}</td>
                <td>
                    <a href="#">Edit</a>
                </td>
            </tr>
        @endforeach

    </table>

</body>
</html>
