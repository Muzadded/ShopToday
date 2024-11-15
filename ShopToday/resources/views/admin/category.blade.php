<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        #int_cat {
            width: 300px;
            height: 50px;
        }

        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }

        .sub_btn {
            margin-left: 10px;
            width: 80px;
            height: 36px;
            font-size: 13px;
        }

        .table_dis {
            text-align: center;
            margin: auto;
            border: 2px solid #7ED4AD;
            margin-top: 50px;
            width: 600px;
        }

        .table_dis th {
            background-color: #006A67;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        .table_dis td {
            color: white;
            padding: 10px;
            border: 1px solid skyblue;
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
                    <h1>Add Category</h1>
                    <div class="div_deg">


                        <form action="{{url('add_cat')}}" method="post">
                            @csrf
                            <div>
                                <input type="text" name="category" id="int_cat">

                                <input type="submit" class="btn btn-primary sub_btn" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
                <div>
                    <table class="table_dis">
                        <tr>
                            <th>Category Name</th>
                            <th>Update</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($data as $data)

                        <tr>
                            <td>{{$data->category_name}}</td>

                            <td>{{$data->updated_at}}</td>
                            <td><a class="btn btn-info"  href="{{url('edit_category',$data->id)}}">Edit</a>
                                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a></td>
                        </tr>

                        @endforeach


                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->

    @include('admin.js');

</body>

</html>