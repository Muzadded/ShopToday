<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .div_des {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .tab_des {
            border: 2px solid #7ED4AD;
        }

        .tab_des th {
            background-color: #006A67;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        .tab_des td {
            text-align: center;
            border: 2px solid skyblue;
            color: white;
            padding: 13px;
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
                    <h1>View Products</h1>

                    <div class="div_des">
                        <table class="tab_des">
                            <tr>
                                <th>Product Title</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($product as $products)


                            <tr>
                                <td>{{$products->title}}</td>
                                <td>{!!Str::limit($products->description,20)!!}</td>
                                <td>{{$products->category}}</td>
                                <td>{{$products->price}}</td>
                                <td>{{$products->quantity}}</td>
                                <td>
                                    <img src="products/{{$products->image}}" alt="" height="120" width="120">
                                </td>
                                <td>
                                    <a class="btn btn-info" href="">Update</a>
                                    <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_prod',$products->id)}}">Delete</a>
                                </td>
                            </tr>

                            @endforeach
                        </table>


                    </div>
                    <div class="div_des">
                    {{$product->onEachSide(1)->links()}}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->

    @include('admin.js');
</body>

</html>