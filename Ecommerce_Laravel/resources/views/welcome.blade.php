
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vorke</title>
    <link rel="icon" href="asset/image/logoicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet"/>
 <link rel="stylesheet" href="asset/css_frontend/index.css"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
</head>

<body>
    <!-- Header -->
{{--    
        <div class="container header d-flex align-items-center justify-content-between">
            <a class="header_logo" href="index.php">
                <img src="asset/image/logovorke1231.png" alt="">
            </a>
            <div class="header_nav d-none d-xl-flex">
                <a class="header_name" href="">Điện Thoại</a>
                <a class="header_name" href="#">Sản phẩm IoT</a>
                <a class="header_name" href="#">Về Vorke</a>
                <a href="cart.php" class="header_name header_nav-btn position-relative">Giỏ Hàng
                    <span class="position-absolute top-10 start-100 translate-middle badge rounded-pill bg-secondary cart_count"><?php
                                                                                                                                    if (isset($_SESSION['cart'])) {
                                                                                 }
                                                                                                                                    ?>
                        <span class="visually-hidden">unread messages</span></span>
                </a>
                <?php
                if (isset($_SESSION['auth'])) {
                ?>
                    <div class="dropdown header_name dropdown-profile">
                        <button class="btn btn-secondary dropdown-toggle profile" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['auth_user']['username']; ?>
                            <i class="fa-regular fa-user"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="profile.php">Thông tin cá nhân</a></li>
                            <li><a class="dropdown-item" href="order.php">Đơn hàng</a></li>
                            <li><a class="dropdown-item" id="logout" href="#">Đăng xuất</a></li>
                        </ul>
                    </div>
                <?php
                } else {
                ?>
                
                    <a class="header_name" id="login-register" href="#">Đăng ký/ Đăng nhập</a>
                <?php
                } ?>
            </div>

    

        </div> --}}

    <!-- Header -->
    <!-- Modal -->
    <!-- Button trigger modal -->

    <nav class="navbar navbar-expand-lg header">
        <div class="container-fluid">
            <a class="header_logo" href="index.php">
                <img src="asset/image/logovorke1231.png" alt="">
            </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="#">Điện thoại</a>
              <a class="nav-link" href="#">Giỏ hàng</a>
              <a class="nav-link" href="#">Contact</a>
              <a class="nav-link">Đăng nhập/Đăng ký</a>
            </div>
          </div>
        </div>
      </nav>

<section class="slide">
    <div class="position-relative">
        <img src="//image.oppo.com/content/dam/oppo/common/mkt/v2-2/a77s-en/topbanner/a77s-blue-2880_1440-v2.jpg.thumb.webp" alt="" height="700px" width="100%">
        <div class="slider_content">
            <h3 class="slider_title position-absolute">OPPO A77s</h3>
            <p class="slider_desc position-absolute">Cool miễn bàn, Cân ngàn tác vụ</p>
            <button type="button" class="btn slider_btn position-absolute">Tìm hiểu thêm</button>
        </div>
    </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!--Grid column-->
                
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2024
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>