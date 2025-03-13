<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="sign-in-style.css" />
    <title>Document</title>
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
            <li id="in"><a href="{{ route('sign-in') }}">Sign in</a></li>
            <li id="up"><a href="{{ route('sign-up') }}">Sign up</a></li>
          </ul>
        </nav>
      </div>
      <form action="{{ route('sign-in') }}" method="POST">
    @csrf
    <label>Email:</label>
    <input type="email" name="email" required>
    
    <label>Password:</label>
    <input type="password" name="password" required>
    
    <button type="submit">Login</button>
</form>

<p>Don't have an account? <a href="{{ route('sign-up') }}">Sign up here</a></p>
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
    <script>
      const { createClient } = supabase;
      const supabaseUrl = "https://scimgaibxvhvhahaaguu.supabase.co";
      const supabaseKey =
        "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6InNjaW1nYWlieHZodmhhaGFhZ3V1Iiwicm9sZSI6InNlcnZpY2Vfcm9sZSIsImlhdCI6MTcyNzU2MjA3NiwiZXhwIjoyMDQzMTM4MDc2fQ.dvtiWacoXncr7NvnB-IR4LGg-GpBRC2E6JtHd1TXXf4";
      const _supabase = createClient(supabaseUrl, supabaseKey);
      function ValidateEmail(input) {
        var validRegex =
          /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

        if (input.match(validRegex)) {
          return true;
        } else {
          return false;
        }
      }
      //login
      document
        .querySelector("#form-login .form-submit#login")
        .addEventListener("click", async (e) => {
          e.preventDefault();
          let email = document.querySelector("#form-login #user").value;
          let password = document.querySelector("#form-login #password").value;

          if (email == null || !ValidateEmail(email)) {
            alert("Vui long nhap email");
            return;
          }
          if (password === null || password === "") {
            alert("Vui long nhap password");
            return;
          }
          //Gui request len server
          const { data, error } = await _supabase
            .from("user")
            .select()
            .eq("email", email)
            .eq("password", password);
          if (data.length == 0) {
            alert("Email hoặc password không chính xác!");
            return;
          }
          localStorage.setItem("user", JSON.stringify(data[0]));

          window.location.href = "{{ route('home') }}";
        });
    </script>
  </body>
</html>
