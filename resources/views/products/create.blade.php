<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>    
                @endforeach
            </ul>
        </div>
    @endif
    <form  method="post" action="{{route('products.store')}}">
        @csrf
        @method('POST')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="name">
        </div>
        <div>
            <label >Qty</label>
            <input type="text" name="qty" placeholder="qty">
        </div>
        <div>
            <label for="">price</label>
            <input type="text" name="price" placeholder="price">
        </div>
        <div>
            <label for="">description</label>
            <input type="text" name="description" placeholder="description">
        </div>
        <div>
            <input type="submit" value="Save a New Product" name="submit">
        </div>
    </form>
</body>
</html>