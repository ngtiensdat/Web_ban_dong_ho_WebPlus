<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="themSP.css" />
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
          </ul>
        </nav>
      </div>
    </div>

    <div id="main">
        <!-- Other existing sections like sliders, product listings, etc. -->
      
        <!-- Admin Interface for Managing Products -->
        <div id="admin-wrapper">
          <h2>Product Management</h2>
      
          <!-- Form to Add/Edit Products -->
          <form id="product-form">
        
            <label for="">Product Name:</label>
            <label for="product-name">Tên sản phẩm:</label>
            <input type="text" id="product-name" name="product-name" required><br>
      
            <label for="product-price">Giá bán:</label>
            <input type="text" id="product-price" name="product-price" required><br>
      
            <label for="product-category">Phân loại:</label>
            <input type="text" id="product-category" name="product-category" required><br>
      
            <label for="product-image">Link Ảnh:</label>
            <input type="text" id="product-image" name="product-image" required><br>
      
            <button type="submit">Add/Update Sản phẩm</button>
          </form>
      
          <!-- Product Management Table -->
          <table id="product-table">
            <thead>
              <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Phân loại</th>
                <th>Ảnh</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- Dynamic product rows will be inserted here -->
            </tbody>
          </table>
        </div>
      </div>
      

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
    <script src="slide.js"></script>
    <script src="./index.js"></script>
  </body>
</html>
