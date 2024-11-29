<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        .div_des {
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

        .order_table td {
            color: antiquewhite;
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
                                <th>Change Status</th>
                                <th>Print PDF</th>
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
                                <td>
                                    @if ($data->status == 'On the way')
                                    <span style="color:yellow">{{$data->status}}</span>
                                    
                                    @elseif($data->status == 'Delivered')
                                    <span style="color:green">{{$data->status}}</span>

                                    @else
                                    <span style="color:red">{{$data->status}}</span>
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="{{url('on_the_way',$data->id)}}">On the way</a>
                                    <a class="btn btn-success" href="{{url('delivered',$data->id)}}">Delivered</a>
                                </td>
                                <td><a class="btn btn-secondary" href="{{url('print_pdf',$data->id)}}">Print PDF</a></td>
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