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

    

        </div>  --}}

    <!-- Header -->

    <nav class="navbar navbar-expand-lg header">
        <div class="container-fluid">
            <a class="header_logo" href="index.php">
                <img src="{{asset('asset/image/logovorke.png') }}" alt="">
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
              <a class="nav-link" href="/dienthoai">Điện thoại</a>
              <a class="nav-link" href="#">Giỏ hàng</a>
              <a class="nav-link" href="#">Contact</a>
              <a class="nav-link">Đăng nhập/Đăng ký</a>
            </div>
          </div>
        </div>
      </nav>