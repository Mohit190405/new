<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        @foreach($products as $product)
            <li>{{ $product['name'] }}: ${{ $product['price'] }}</li>
        @endforeach
    </ul>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="number" name="price" placeholder="Product Price" required>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>
