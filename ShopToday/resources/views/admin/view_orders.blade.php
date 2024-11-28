<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">

        .div_des{
            display: flex;
            justify-content: center;
        }
        .order_table {
            border: 2px solid grey;
            text-align: center;
            align-items: center;
        }

        .order_table th {
            background-color: #DB6574;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: white;
        }
        .order_table td{
            color:antiquewhite;
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div class="div_des">
                        <table class="order_table">
                            <tr>
                                <th>Customer Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Product Title</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Status</th>
                            </tr>
                            @foreach ($data as $data)
                            
                            
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->rec_address}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->product->title}}</td>
                                <td>{{$data->product->price}}</td>
                                <td>
                                    <img width="150" src="products/{{$data->product->image}}" alt="">
                                </td>
                                <td>{{$data->status}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js');
</body>

</html>