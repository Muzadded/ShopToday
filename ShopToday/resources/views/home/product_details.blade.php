<!DOCTYPE html>
<html>

<head>
    @include('home.css');

    <style type="text/css">
        .div_img {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }
        .detail_div{
            margin-left: 420px;
            align-items: center;
            padding: 30px;
        }
    </style>
</head>

<body>
    <div class="hero_area">

        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->
    </div>

    <!--Product Details Start -->


    <section class="shop_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Product Detail
                </h2>
            </div>
            <div class="row">


                <div class="col-md-12">
                    <div class="box">

                        <div class="div_img">
                            <img width="400" src="/products/{{$product->image}}" alt="">
                        </div>
                        <div class="detail_div">
                            <p>
                                {{$product->description}}
                            </p>
                            <h6>
                                Product Name: {{$product->title}}
                            </h6>
                            <h6>
                                Price: {{$product->price}}
                            </h6>
                            <h6>
                                Product Category: {{$product->category}}
                            </h6>
                            <h6>
                                Available: {{$product->quantity}}
                            </h6>
                            <a style="margin-top: 20px;" class="btn btn-primary" href="{{url('add_cart',$product->id)}}">Add to Cart</a>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </section>

    <!--Product Details End -->


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