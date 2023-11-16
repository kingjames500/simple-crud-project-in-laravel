<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    width: 50%;
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 10px;
    }

input[type="text"], input[type="submit"] {
    margin: 10px;
    padding: 10px;
    border-radius: 5px;
    border: none;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}


    </style>
</head>
<body>
    <h1>edit Product</h1>
    <form  method="post" action="{{route('products.update', ['product' => $product])}}">
        @csrf
        @method('PUT')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}">
        </div>
        <div>
            <label >Qty</label>
            <input type="text" name="qty" placeholder="qty" value="{{$product->qty}}">
        </div>
        <div>
            <label for="">price</label>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}">
        </div>
        <div>
            <label for="">description</label>
            <input type="text" name="description" placeholder="description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update" name="submit">
        </div>
    </form>
</body>
</html>