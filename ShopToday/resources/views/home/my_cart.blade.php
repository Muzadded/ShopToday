<!DOCTYPE html>
<html>

<head>
    @include('home.css');

    <style type="text/css">
        .div_des {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        .cart_table {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        .cart_table th {
            border: 2px solid black;
            text-align: center;
            color: white;
            font: 20px;
            font-weight: bold;
            background-color: grey;
        }

        .cart_table td {
            border: 1px solid skyblue;
        }
        .order_des{
            padding-right: 150px;
            margin-top: -100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .div_gap{
            padding: 5px;
        }
        .div_gap label{
            display: inline-block;
            width:150px;
        }
    </style>
</head>

<body>
    <div class="hero_area">

        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

    </div>
    <!-- end hero area -->

    <h1 style="text-align: center; margin-top:30px">Product Added to Cart</h1>

    <div class="div_des">

    
        <table class="cart_table">
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            <?php
            $value = 0;
            ?>

            @foreach ($cart as $cart)

            <tr>
                <td>{{$cart->product->title}}</td>
                <td>{{$cart->product->price}}</td>
                <td>
                    <img width="150" src="/products/{{$cart->product->image}}" alt="">
                </td>
                <td><a class="btn btn-danger" href="">Remove</a></td>
            </tr>

            <?php
            $value = $value + $cart->product->price;
            ?>

            @endforeach
        </table>
    </div>

    <div style="text-align: center; margin-bottom:70px;">
        <h3>Total Value of Cart is: ${{$value}}</h3>
    </div>
<br><br><br>
    <div class="order_des">
        <form action="{{url('confirm_order')}}" method="Post">
            @csrf

            <div class="div_gap">
                <label for="">Receiver Name</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
            </div>
            <div class="div_gap">
                <label for="">Receiver Address</label>
                <textarea name="address" id="" >{{Auth::user()->address}}</textarea>
            </div>
            <div class="div_gap">
                <label for="">Receiver Phone</label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}">
            </div>
            <div class="div_gap">
                <input class="btn btn-primary" type="submit" value="Cash on Delivery">
                <a class="btn btn-success" href="{{url('stripe',$value)}}">Pay With Card</a>
            </div>
        </form>
    </div>
    <!-- info section -->
    @include('home.footer');

    <!-- end info section -->


    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>