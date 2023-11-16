<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
</head>
<body>
    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>  
        @endif
    </div>
    <h1>products table</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>qty</th>
                <th>price</th>
                <th>description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('products.edit', ['product' => $product])}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('products.delete', ['product' => $product])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach 
        </table>
    </div>
</body>
</html>