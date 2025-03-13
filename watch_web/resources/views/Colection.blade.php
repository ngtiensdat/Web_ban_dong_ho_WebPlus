<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image Gallery</title>
    <link rel="stylesheet" href="./Colection_style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./index.css" />
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
                <li><a href=""></a></li>
                <li><a href="">Dress Watch</a></li>
                <li><a href="">Field Watch</a></li>
                <li><a href="">Calendar Watch</a></li>
                <li><a href="">Chronograph Watch</a></li>
                <li><a href="">Travel Watch</a></li>
                <li><a href="">Moon-Phase Watch</a></li>
              </ul>
            </li>
            <li><a href="{{ route('collection') }}">Colection</a></li>
            <li><a href="{{ route('contact') }}">Contact us</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="wrapper">
      <div class="gallery">
        <div class="gallery__item gallery__item--1">
          <a href="{{ route('workspace') }}" class="gallery__link">
            <img src="picture/anh_clt_1.jpg" class="gallery__image" />
            <div class="gallery__overlay">
              <span>Manufacture</span>
            </div>
          </a>
        </div>
        <div class="gallery__item gallery__item--2">
          <a href="{{ route('workspace') }}" class="gallery__link">
            <img src="picture/anh_clt_2.jpeg" class="gallery__image" />
            <div class="gallery__overlay">
              <span>Classic</span>
            </div>
          </a>
        </div>
        <div class="gallery__item gallery__item--3">
          <a href="{{ route('workspace') }}" class="gallery__link">
            <img src="picture/anh_clt_3.jpeg" class="gallery__image" />
            <div class="gallery__overlay">
              <span>Worldtimer</span>
            </div>
          </a>
        </div>
        <div class="gallery__item gallery__item--4">
          <a href="{{ route('workspace') }}" class="gallery__link">
            <img src="picture/anh_clt_4.jpeg" class="gallery__image" />
            <div class="gallery__overlay">
              <span>Heart Beat</span>
            </div>
          </a>
        </div>
        <div class="gallery__item gallery__item--5">
          <a href="{{ route('workspace') }}" class="gallery__link">
            <img src="picture/anh_clt_5.jpeg" class="gallery__image" />
            <div class="gallery__overlay">
              <span>Slimline</span>
            </div>
          </a>
        </div>
        <div class="gallery__item gallery__item--6">
          <a href="{{ route('workspace') }}" class="gallery__link">
            <img src="picture/anh_clt_6.jpeg" class="gallery__image" />
            <div class="gallery__overlay">
              <span>Moonphase</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <script></script>

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
              placeholder="Enter your email"
            />
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
    <script src="./index.js"></script>
  </body>
</html>
