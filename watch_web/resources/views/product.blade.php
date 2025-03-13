<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="product_style.css">
    <link rel="stylesheet" href="./index.css" />
</head>
<body>
    <div id="wrapper">
        <div id="header">
          <nav class="container">
            <a href="" id="logo">
              <img src="picture/logo.png" alt="">
            </a>
            <ul id="main-menu">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('product') }}">Products</a>
                <ul class="sub-menu">
                    <li><a href="">Dress Watch</a></li>
                   <li><a href="">Field Watch</a></li>
                   <li><a href="">Calendar Watch</a></li>
                   <li><a href="">Chronograph Watch</a></li>
                   <li><a href="">Travel Watch</a></li>
                   <li><a href="">Moon-Phase Watch</a></li>          
                </ul>
              </li>
              <li><a href="{{ route('collection') }}">Collections</a></li>
              <li><a href="{{ route('contact') }}">Contact us</a></li>     
            </ul>
          </nav>
        </div>

        <ul class="products">
    @foreach($watches as $watch)
        <li>
            <div class="product-item">
                <div class="product-top">
                    <a href="" class="product-img">
                        <img src="{{ asset('picture/' . $watch->image) }}" alt="{{ $watch->name }}">
                    </a>
                    <a href="" class="buy-now">Buy now</a>
                </div>
                <div class="product-inf">
                    <a href="" class="product-cat">{{ $watch->category->name ?? 'No Category' }}</a>
                    <a href="" class="product-name">{{ $watch->name }}</a>
                    <div class="product-price">${{ number_format($watch->price, 2) }}</div>
                    <div class="product-stock">Stock: {{ $watch->stock }}</div>
                    <p class="product-description">{{ $watch->description }}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>



    <footer>
        <div class="row">
            <div class="col">
                <h3>Home</h3>
            </div>
            <div class="col">
                <h3>Products</h3>
                <ul>
                    <li><a href="">Dress Watch</a></li>
                    <li><a href="">Field Watch</a></li>
                    <li><a href="">Calendar Watch</a></li>
                    <li><a href="">Chronograph Watch</a></li>
                    <li><a href="">Travel Watch</a></li>
                    <li><a href="">Moon-Phase Watch</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Collection</h3>
                <ul>
                    <li><a href="">Manufacture</a></li>
                    <li><a href="">Classic</a></li>
                    <li><a href="">Worldtimer</a></li>
                    <li><a href="">Heart Beat</a></li>
                    <li><a href="">Slimline</a></li>
                    <li><a href="">Moonphase</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Contact Us</h3>
                <ul>
                   <li><a href="">Customer policy</a></li>
                   <li><a href="">Delivery & Packaging</a></li>
                   <li><a href="">Western restaurant</a></li>
                   <li><a href="">Become a reseller</a></li>              
                </ul>
            </div>
            <div class="footer-widget">            
                <h3>Đăng ký nhận tin</h3>
                <p>Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.</p>
                <div class="email-input">
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                    <button type="submit">Enter</button>
                </div> 
                <div class="footer-payment">
                    <ul class="list-payment">
                        <li class="item">
                            <img src="./picture/pay1.jpg" alt="">
                        </li>
                        <li class="item">
                            <img src="./picture/pay2.jpg" alt="">
                        </li>
                        <li class="item">
                            <img src="./picture/pay3.jpg" alt="">
                        </li>
                        <li class="item">
                            <img src="./picture/pay4.jpg" alt="">
                        </li>
                        <li class="item">
                            <img src="./picture/pay5.jpg" alt="">
                        </li>
                    </ul>
                </div>                   
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/@supabase/supabase-js@2"></script>
    <script src="./index.js"></script>
</body>
</html>