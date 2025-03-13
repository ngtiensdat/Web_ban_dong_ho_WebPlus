<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style_home.css" />
  <link rel="stylesheet" href="slide.css" />
  <link rel="stylesheet" href="./index.css" />
  <title>INTERIOR WEBSITE</title>
</head>

<body>
  <div id="wrapper">
    <div id="header">
      <nav class="container">
        <a href="" id="logo">
          <img src="picture/logo.png" alt="" />
        </a>
        <ul id="main-menu">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>
            <a href="{{ route('product') }}">Products</a>
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
          @if(Auth::check())
          <p>Welcome, {{ Auth::user()->name }}!</p>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
          </form>
          @else
          <p><a href="{{ route('sign-in') }}">Login</a> | <a href="{{ route('sign-up') }}">Sign Up</a></p>
          @endif

        </ul>
      </nav>
    </div>
  </div>

  <div id="main">
    <div class="slider">
      <div class="list">
        <div class="item">
          <img src="picture/1.png" alt="" />
        </div>
        <div class="item">
          <img src="picture/2.png" alt="" />
        </div>
        <div class="item">
          <img src="picture/3.png" alt="" />
        </div>
        <div class="item">
          <img src="picture/4.png" alt="" />
        </div>
        <div class="item">
          <img src="picture/5.png" alt="" />
        </div>
      </div>
      <div class="buttons">
        <button id="prev">></button>
        <button id="next">
          << /button>
      </div>
      <ul class="dots">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>

    <div class="container">
      <button>
        <div class="section">
          <a href="{{ route('product') }}">
            <img src="picture/en1.jpg" alt="Datejust" />
          </a>
          <h2>Datejust</h2>
        </div>
      </button>

      <button>
        <div class="section">
          <a href="{{ route('product') }}">
            <img src="picture/en2.jpg" alt="Day-Date" />
          </a>
          <h2>Day-Date</h2>
        </div>
      </button>

      <button>
        <div class="section">
          <a href="{{ route('product') }}">
            <img src="picture/en3.jpg" alt="See more" />
          </a>
          <h2>See more</h2>
        </div>
      </button>
    </div>
    <div class="new">NEW RELEASE</div>

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
          <p>
            Nhận thông tin sản phẩm mới nhất, tin khuyến mãi và nhiều hơn nữa.
          </p>
          <div class="email-input">
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email" />
            <button type="submit">Enter</button>
          </div>
          <div class="footer-payment">
            <ul class="list-payment">
              <li class="item">
                <img src="./picture/pay1.jpg" alt="" />
              </li>
              <li class="item">
                <img src="./picture/pay2.jpg" alt="" />
              </li>
              <li class="item">
                <img src="./picture/pay3.jpg" alt="" />
              </li>
              <li class="item">
                <img src="./picture/pay4.jpg" alt="" />
              </li>
              <li class="item">
                <img src="./picture/pay5.jpg" alt="" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://unpkg.com/@supabase/supabase-js@2"></script>
    <script src="slide.js"></script>
    <script src="./index.js"></script>
</body>

</html>