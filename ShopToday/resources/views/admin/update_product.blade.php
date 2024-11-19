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
                    <h1>Update Product</h1>
                    <div class="div_des">
                        <form action="{{url('edit_product',$prod->id)}}" method="Post" enctype="multipart/form-data">
                            @csrf

                            <div class="input_field">
                                <label for="">Product Title</label>
                                <input type="text" name="title" value="{{$prod->title}}" required>
                            </div>
                            <div class="input_field">
                                <label for="">Description</label>
                                <textarea name="description" required>{{$prod->description}}</textarea>
                            </div>
                            <div class="input_field">
                                <label for="">Price</label>
                                <input type="text" name="price" value="{{$prod->price}}" required>
                            </div>
                            <div class="input_field">
                                <label for="">Quantity</label>
                                <input type="number" name="qty" value="{{$prod->quantity}}" required>
                            </div>

                            <div class="input_field">
                                <label for="">Current Image</label>
                                <img width="150" src="/products/{{$prod->image}}" alt="">
                            </div>
                            <div class="input_field">
                                <label for="">New Image</label>
                                <input type="file" name="image">
                            </div>

                            <div class="input_field">
                                <label for="">Category</label>
                                <select name="category">
                                    <option value="{{$prod->category}}">{{$prod->category}}</option>
                                    @foreach ($category as $category)
                                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                    @endforeach
                                    
                                </select>
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
    @include('admin.js');
</body>

</html>