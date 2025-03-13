<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Image Gallery</title>
    <link rel="stylesheet" href="./cart.css" />
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
    <main>
      <div class="cart_labels">
        <h2 class="label label_name">Sản phẩm</h2>
        <h2 class="label label_quantity">Số lượng</h2>
        <h2 class="label label_total">Giá</h2>
        <button class="btn btn_clear">Xóa giỏ hàng</button>
      </div>
      <div class="cart_items"></div>

      <div class="cart_nav">
        <button class="btn btn-back" onclick="back()">
          Quay lại trang chủ
        </button>
        <button class="btn btn-pay">Thanh toán</button>
      </div>
    </main>
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
    <script>
      async function renderView() {
        var domValue = "";
        const { data, error } = await _supabase
          .from("cart")
          .select()
          .eq("userId", user.id);

        if (data.length == 0) {
          document.querySelector(".cart_items").innerHTML =
            "<h1 class='no-cart'>Giỏ hàng trống</h1>";
        } else {
          data.forEach((el, i) => {
            domValue += `
           <div class="cart_item" id="${el.nameProduct}">
          <div class="item_info">
              <img class="left"  src="${el.img}" alt="">

              <div class="right">
                  <h1>${el.nameProduct}</h1>
              </div>
          </div>

          <div class="item_quantity">
              <span class="minus" onclick='decrease("${
                el.nameProduct
              }")'>-</span>
              <p class="quantity">${el.quantity}</p>
              <span class="plus" onclick='increase("${
                el.nameProduct
              }")'>+</span>
          </div>

          <div class="item_price"><span>${el.price * el.quantity}</span>$</div>

          <div class="item_delete"  onclick='deleteItem("${
            el.nameProduct
          }")'>X</div>

          </div>
          `;
          });
          //render View
          let cartItem = document.querySelector(".cart_items");
          domValue += `<h3 class="total_price">Tổng <span class="total_price_text">${data.reduce(
            (total, el, i) => {
              total += el.price * el.quantity;
              return total;
            },
            0
          )}</span>$</h3>`;
          cartItem.innerHTML = domValue;

          document
            .querySelector(".cart_labels .btn_clear")
            .addEventListener("click", async (e) => {
              user = JSON.parse(localStorage.getItem("user"));
              document.querySelector(`.cart_items`).textContent = "";
              const { data, error } = await _supabase
                .from("cart")
                .delete()
                .eq("userId", user.id);
            });
        }
      }
      renderView();

      async function decrease(id) {
        let app = "";
        let total = "";
        const { data } = await _supabase
          .from("cart")
          .select()
          .eq("userId", user.id)
          .eq("nameProduct", id);

        if (data[0].quantity > 1) {
          data[0].quantity -= 1;
          app = data[0].quantity;
          total = data[0].price * data[0].quantity;
        } else {
          return;
        }

        if (app || total) {
          document.querySelector(`.cart_item#${id} .quantity`).textContent =
            app;
          document.querySelector(
            `.cart_item#${id} .item_price span`
          ).textContent = total;
          let price = document.querySelector('.total_price_text').textContent;
          document.querySelector('.total_price_text').textContent =  parseInt(price) - data[0].price;
        }
        await _supabase
          .from("cart")
          .update({ quantity: app })
          .eq("userId", user.id)
          .eq("nameProduct", id);
      }

      async function increase(id) {
        let app = "";
        let total = "";
        const { data } = await _supabase
          .from("cart")
          .select()
          .eq("userId", user.id)
          .eq("nameProduct", id);

        data[0].quantity += 1;
        app = data[0].quantity;
        total = data[0].price * data[0].quantity;

        if (app || total) {
          document.querySelector(`.cart_item#${id} .quantity`).textContent =
            app;
          document.querySelector(
            `.cart_item#${id} .item_price span`
          ).textContent = total;
          let price = document.querySelector('.total_price_text').textContent;
          document.querySelector('.total_price_text').textContent = parseInt(price) + data[0].price;
        }
        await _supabase
          .from("cart")
          .update({ quantity: app })
          .eq("userId", user.id)
          .eq("nameProduct", id);
      }

      async function deleteItem(id) {
        document.querySelector(`.cart_item#${id}`).remove();
        const { data } = await _supabase
          .from("cart")
          .select()
          .eq("userId", user.id)
          .eq("nameProduct", id);
        let price = document.querySelector('.total_price_text').textContent;
        document.querySelector('.total_price_text').textContent = parseInt(price) - (data[0].price * data[0].quantity);
        const {error } = await _supabase
          .from("cart")
          .delete()
          .eq("userId", user.id)
          .eq("nameProduct", id);
      }

      function transfer(str) {
        let newResul = "";
        str
          .split("")
          .reverse()
          .reduce((result, el, i) => {
            if (i % 3 == 0 && i != 0) {
              newResul = ".".concat(result);
            }
            newResul = el.concat(newResul);

            return newResul;
          }, "");

        return newResul;
      }

      function back() {
        window.location.href = "{{ route('home') }}";
      }
    </script>
  </body>
</html>
