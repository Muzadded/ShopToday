<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>SHOPTODAY</h1>
        <h2>Product Details</h2>
        <h3>Customer Name: {{$data->name}}</h3>
        <h3>Customer Address: {{$data->rec_address}}</h3>
        <h3>Customer Phone: {{$data->phone}}</h3>
        <h3>Product title: {{$data->product->title}}</h3>
        <h3>Product price: {{$data->product->price}}</h3>
        <img height="250" width="300" src="products/{{$data->product->image}}" alt="">
        <h2>Product Status: {{$data->status}}</h2>
    </center>
</body>
</html>