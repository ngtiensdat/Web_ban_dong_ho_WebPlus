<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="contact_style.css">
</head>
<body>

    <div id = "wrapper">
        <div id="header">
            <nav class="container">
              <a href="" id="logo">
                <img src="picture/logo.png" alt="">
              </a>
              <ul id="main-menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('product') }}">Products</a>
                  <ul class="sub-menu">
                      <li><a href="{{ route('product') }}">Dress Watch</a></li>
                      <li><a href="{{ route('product') }}">Field Watch</a></li>
                      <li><a href="{{ route('product') }}">Calendar Watch</a></li>
                      <li><a href="{{ route('product') }}">Chronograph Watch</a></li>
                      <li><a href="{{ route('product') }}">Travel Watch</a></li>  
                      <li><a href="{{ route('product') }}">Moon-Phase Watch</a></li>                
                  </ul>
                </li>
                <li><a href="{{ route('collection') }}">Collections</a></li>
                <li><a href="{{ route('contact') }}">Contact us</a></li>
                <li id="in"><a href= "{{ route('sign-in') }}">Sign in</a></li>
              <li id="up"><a href= "{{ route('sign-up') }}">Sign up</a></li>           
              </ul>
      
            </nav>
          </div>

          <div id = "container">
            <div style="width: 100%; height: 100%; padding-top: 60px; padding-bottom: 289px; background: #EAEAEA; justify-content: center; align-items: center; display: inline-flex">
                <div style="flex: 1 1 0; align-self: stretch; padding: 10px; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                    <div style="height: 403px; padding-left: 141px; padding-right: 141px; padding-top: 16px; padding-bottom: 16px; background: white; border: 0.50px black solid; flex-direction: column; justify-content: center; align-items: center; gap: 32px; display: flex">
                        <div style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                            <div style="color: black; font-size: 14px; font-family: Source Sans Pro; font-weight: 700; word-wrap: break-word">Hotline</div>
                            <div style="flex-direction: column; justify-content: center; align-items: center; gap: 8px; display: flex">
                                <div style="color: black; font-size: 12px; font-family: Source Sans Pro; font-weight: 400; word-wrap: break-word">+84 337 593 138 (VI)</div>
                                <div style="color: black; font-size: 12px; font-family: Source Sans Pro; font-weight: 400; word-wrap: break-word">+34 8693 034 225 (UK)</div>
                            </div>
                        </div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 16px; display: flex">
                            <div style="color: black; font-size: 14px; font-family: Source Sans Pro; font-weight: 700; word-wrap: break-word">Email</div>
                            <div style="color: black; font-size: 12px; font-family: Source Sans Pro; font-weight: 400; word-wrap: break-word">ABC.XYZ@gmail.com</div>
                        </div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div style="color: black; font-size: 14px; font-family: Source Sans Pro; font-weight: 700; word-wrap: break-word">Telegram</div>
                            <div style="color: black; font-size: 12px; font-family: Source Sans Pro; font-weight: 400; word-wrap: break-word">HOCAS DANIEL</div>
                        </div>
                        <div style="flex-direction: column; justify-content: center; align-items: center; gap: 16px; display: flex">
                            <div style="color: black; font-size: 14px; font-family: Source Sans Pro; font-weight: 700; word-wrap: break-word">Twitter/X</div>
                            <div style="color: black; font-size: 12px; font-family: Source Sans Pro; font-weight: 400; word-wrap: break-word">SHALMAN.ALPHA</div>
                        </div>
                        <div style="justify-content: flex-start; align-items: center; gap: 8px; display: inline-flex">
                            <div style="width: 24px; height: 24px; padding-top: 1px; padding-bottom: 1.99px; padding-left: 4px; padding-right: 4px; justify-content: center; align-items: center; display: flex">
                                <div style="width: 16px; height: 21.01px; border: 1.50px #3B3B3B solid"></div>
                            </div>
                            <div style="color: #3B3B3B; font-size: 12px; font-family: Source Sans Pro; font-weight: 400; word-wrap: break-word">@Seattle, Inc.4892 28th St Unit San Francisco, CA 33205</div>
                        </div>
                    </div>
                </div>
            </div>
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
   
</body>
</html>