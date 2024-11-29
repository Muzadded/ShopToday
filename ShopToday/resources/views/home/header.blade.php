<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="">
            <span>
                Shop Today
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{'/'}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="shop.html">
                        Shop
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="why.html">
                        Why Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testimonial.html">
                        Testimonial
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
            </ul>
            <div class="user_option">
                @if (Route::has('login'))

                @auth

                <a href="{{url('my_orders')}}">
                    My Orders
                </a>

                <a href="{{url('my_cart')}}">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    {{$count}}
                </a>


                <form style="padding-left: 10px;" method="POST" action="{{ route('logout') }}">
                    @csrf

                    <input class="btn btn-secondary" type="submit" value="logout">
                </form>

                @else
                <a href="{{url('/login')}}">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>
                        Login
                    </span>
                </a>

                <a href="{{url('/register')}}">
                    <i class="fa fa-vcard" aria-hidden="true"></i>
                    <span>
                        Registration
                    </span>
                </a>
                @endauth

                @endif

            </div>
        </div>
    </nav>
</header>