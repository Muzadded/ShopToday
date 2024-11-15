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

        label {
            display: inline-block;
            width: 150px;
            font-size: 18px !important;
            color: #DB6574 !important;
            font-weight: bold;
        }

        input[type='text'] {
            width: 200px;
            height: 50px;
        }

        textarea {
            width: 300px;
            height: 80px;
        }

        .input_field {
            padding: 15px;
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
                    <h1>Add Product</h1>
                    <div class="div_des">
                        <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                            @csrf

                            <div class="input_field">
                                <label for="">Product Title</label>
                                <input type="text" name="title" required>
                            </div>
                            <div class="input_field">
                                <label for="">Description</label>
                                <textarea name="description" id="" required></textarea>
                            </div>
                            <div class="input_field">
                                <label for="">Price</label>
                                <input type="text" name="price" required>
                            </div>
                            <div class="input_field">
                                <label for="">Quantity</label>
                                <input type="number" name="qty" required>
                            </div>
                            <div class="input_field">
                                <label for="">Product Category</label>
                                <select name="cat" required>
                                    <option>Select a Option</option>

                                    @foreach ($category as $category)
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="input_field">
                                <label for="">Product Image</label>
                                <input type="file" name="p_image" required>
                            </div>

                            <div class="input_field">
                                <input class="btn btn-danger" type="submit" value="submit">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('adminCss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('adminCss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('adminCss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminCss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('adminCss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('adminCss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('adminCss/js/charts-home.js')}}"></script>
    <script src="{{asset('adminCss/js/front.js')}}"></script>
</body>

</html>