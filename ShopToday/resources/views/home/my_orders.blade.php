<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>

    @include('home.css');

    <style type="text/css">
        .div_des {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        .order_table {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        .order_table th {
            border: 2px solid black;
            text-align: center;
            color: white;
            font: 20px;
            font-weight: bold;
            background-color: grey;
        }

        .order_table td {
            border: 1px solid skyblue;
        }
    </style>
</head>

<body>
    <div class="hero_area">

        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
    </div>

    <div class="div_des">
        <table class="order_table">
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Delivery Status</th>
                <th>Image</th>
            </tr>


            @foreach ($order as $order)

            <tr>
                <td>{{$order->product->title}}</td>
                <td>{{$order->product->price}}</td>
                <td>{{$order->status}}</td>
                <td>
                    <img width="150" src="/products/{{$order->product->image}}" alt="">
                </td>
            </tr>

            @endforeach
        </table>
    </div>

    <!-- info section -->
    @include('home.footer');

    <!-- end info section -->
</body>

</html>