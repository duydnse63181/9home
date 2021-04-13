<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>9Home | Mua bán cho thuê bất động sản</title>
  <link rel="shortcut icon" href="{{URL::asset('img/Logo.png')}}" type="image/png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ===== Open BLock Link ===== -->
  <!-- Link style css -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">

  <!-- Link lib bootstrap 4 -->
  <link rel="stylesheet" href="{{ URL::asset('lib/bootstrap-4.3.1/dist/css/bootstrap.css') }}">

  <!-- Link lib fontawsome -->
  <link rel="stylesheet" href="{{ URL::asset('lib/fontawesome-free-5.14.0-web/css/all.css') }}">

  <!-- Link lib slick  -->
  <link rel="stylesheet" href="{{ URL::asset('lib/slick-1.8.1/slick/slick.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('lib/slick-1.8.1/slick/slick-theme.css') }}">
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('lib/slick-1.8.1/slick/slick.min.js') }}"></script>

  <!-- Link lib model html -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- ===== End Block Link ===== -->
  <style>
    @media (max-width: 426px) {
        .col-10 {
            flex: 0 0 33.333333%;
            max-width: 100%;
        }
        .block_footer--item {
            margin-left: 0;
        }
        .block_footer--item {
            padding: 0;
        }
    }
  </style>

</head>

<body>
  <div class="wrapper">
  <!-- ===== Open headerbox ===== -->
    <header class="header-box">
        <!-- ----- Open navbar-box ----- -->
        <nav class="navbar-box">
            <div class="container-fluid">
                <div class="block_navbar">
                    <!-- Open block_navbar--logo -->
                    <div class="block_navbar--logo">
                        <a href="{{url('home')}}">
                            <img src="{{ URL::asset('img/logonha-white.png') }}" alt="#">
                        </a>
                    </div>
                    <!-- End block_navbar--logo -->

                    <!-- Open block_navbar--menu -->
                    <div class="block_toggle--menu toggle-icon">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="block_navbar--menu-content">
                        <ul class="block_navbar--menu">
                            <li class="menu_item">
                                <a href="#" class="menu_item-link nav-link">tin tức</a>
                            </li>
                            <li class="menu_item">
                                <a href="#" class="menu_item-link nav-link">cho thuê</a>
                            </li>
                            <li class="menu_item">
                                <a href="#" class="menu_item-link nav-link">mua bán</a>
                            </li>
                            <li class="menu_item">
                                <a href="#" class="menu_item-link nav-link">vật liệu, nội thất</a>
                            </li>
                            <li class="menu_item">
                                <a href="#" class="menu_item-link nav-link">liên hệ</a>
                            </li>
                            
                        </ul>
                        <!-- Open block_navbar--block-btn -->
                    <ul class="block_navbar--block-btn">
                        
                        @if (Auth::check())
                            
                            <!-- </div> -->
                            @else
                            <li class="block-btn_item">
                                <button type="button" class="block-btn_item-link menu_item-link nav-link" data-toggle="modal" data-target="#loginModel">Đăng nhập</button>
                            </li>
                            <li class="block-btn_item">
                                <button type="button" class="block-btn_item-link menu_item-link nav-link" data-toggle="modal" data-target="#registerModel">Đăng ký</button>
                            </li>

                        @endif
                    </ul>
                    
                    </div>
                    <!-- End block_navbar--menu -->
                    @if (Auth::check())
                            <!-- <div class="block-user d-flex" style="justify-content: center;"> -->
                            <div class="block-user_image" style="width: 60px; height: 60px;">
                                <img src="{{ URL::asset('img/img-user.png') }}" style="width: 80%; height: 80%;">
                            </div>
                            <div class="block-user_info" style="padding: 0px 1.5rem;">
                                <div class="user_info-name">
                                    <a href="#" class="nav-link" style="color: white; font-size: 18px; padding: 0;">
                                        <p style="margin-bottom: 0;"> {{ Auth::user()->name }} </p>
                                    </a>
                                </div>
                                <div class="user_info-logout">
                                    <a href="{{ url('/logout') }}" class="nav-link" style="color: white; padding: 0; font-size: 15px;">Đăng xuất</a>
                                </div>
                            </div>
                    @endif

                    

                    <!-- Open login-model -->
                    


                    <div class="login-model modal fade" id="loginModel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="form-login form" style="width: 34rem;">
                                    <form role="form" action="{{ url('/login') }}" method="POST">
                                            {!! csrf_field() !!}
                                            <fieldset>
                                    <div class="form-title">
                                        <h1>Đăng nhập</h1>
                                        <p>
                                            <i>Đăng nhập để quản lý tài khoản, bài đăng cho thuê/bán nhà, sản phẩm và cửa hàng nội thất của bạn</i>
                                        </p>
                                    </div>

                                    <h4 id="notificationLogin" style="color: red;"></h4>

                                    <div class="form-input_item d-flex" style="justify-content: space-between;">
                                        <p>Email / SĐT</p>
                                        <input type="text" id="email" name="email" placeholder="Nhập email hoặc số điện thoại" required>
                                    </div>
                                    <div class="form-input_item d-flex" style="justify-content: space-between;">
                                        <p>Mật khẩu</p>
                                        <input type="password" id="password" name="password" placeholder="Mật khẩu từ 6 đến 32 ký tự" required>
                                    </div>
                                    <div class="form-login_text">
                                        <p>Quên mật khẩu? Nhấn vào <a href="#">Đây</a> </p>
                                    </div>

                                    <div class="form-input_btn">
                                        <div class="form-input_btn--item">
                                            <input type="submit" class="btn btn-lg btn-primary btn-block" value="Đăng nhập">
                                        </div>
                                    </div>
                                        </fieldset>
					                </form>
                                </div>


                                <div class="form-input_btn--item">
                                    <button onclick='login_facebook()' style="background-color: #2a5297; color: white;">
                                        <i class="fab fa-facebook-f"></i>
                                        Đăng nhập bằng Facebook
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End login-model -->

                    <!-- Open register-model -->
                    <?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
                    <div class="register-model modal fade" id="registerModel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="form" style="width: 44%;">
                                <form role="form" method="POST" action="{{ url('/register') }}">
						            {!! csrf_field() !!}
                                    <div class="form-title">
                                        <h1>Đăng ký</h1>
                                    </div>
                                    <h4 id="notificationRegister" style="color: red;"></h4>
                                    <div class="form-input_item d-flex" style="justify-content: space-between;">
                                        <p>Tên Tài khoản</p>
                                        <input type="text" id="nameRegister" name="name" placeholder="Nhập tên tài khoản" style="width: 30rem;" required>
                                    </div>
                                    <!-- <div class="form-input_item d-flex" style="justify-content: space-between;">
                                        <p>SĐT</p>
                                        <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" style="width: 30rem;" required>
                                    </div> -->
                                    <div class="form-input_item d-flex" style="justify-content: space-between;">
                                        <p>Email</p>
                                        <input type="email" id="email" name="email" placeholder="Nhập email" style="width: 30rem;" required>
                                    </div>
                                    <div class="form-input_item d-flex" style="justify-content: space-between;">
                                        <p>Mật khẩu</p>
                                        <input type="password" id="passwordRegister" name="password" placeholder="Mật khẩu từ 6 đến 32 ký tự" style="width: 30rem;" required>
                                    </div>
                                    <div class="form-input_item d-flex" style="justify-content: space-between;">
                                        <p>Xác nhận lại<br> mật khẩu</p>
                                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Xác nhận lại mật khẩu đã nhập ở trên" style="width: 30rem;" required>
                                    </div>

                                    <div class="form-input_btn">
                                        <div class="form-input_btn--item">
                                        <center><button type="submit" class="btn btn-lg btn-primary btn-block">Đăng ký</button><center>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End register-model -->
                </div>
            </div>
        </nav>
        <!-- ----- End navbar-box ----- -->
        <?php
        function slugify($text)
        {
            // replace non letter or digits by -
            $text = preg_replace('~[^\pL\d]+~u', '-', $text);
            // transliterate
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
            // remove unwanted characters
            $text = preg_replace('~[^-\w]+~', '', $text);
            // trim
            $text = trim($text, '-');
            // remove duplicate -
            $text = preg_replace('~-+~', '-', $text);
            // lowercase
            $text = strtolower($text);
            if (empty($text)) {
                return 'n-a';
            }
            return $text;
        }
        ?>
        <!-- ----- Open title-box ----- -->
        <div class="title-box">
            <div class="container-fluid">
                <!-- <div class="block_toggle--title-content toggle-icon">
                    <i class="fas fa-bars"></i>
                </div> -->

                <div class="block_title-content">
                <ul class="block_title d-flex">  
                        @foreach($cate as $cate)  
                        <li class="block_title-item">
                            <a href="{{ url('/category',['id'=>$cate->id]) }}" class="block_title-link nav-link"> {{$cate->name}} </a>
                        </li>
                        @endforeach
                </ul>
            </div>
                
            </div>
        </div>
        <!-- ----- End title-box ----- -->
    </header>


    @yield('content')                       


    <!-- ===== Open footer-box ===== -->
    <footer class="footer-box">
                <div class="container">
                    <div class="block_footer">
                        <div class="row">
                            <div class="col-11 col-md-6 col-lg-3" style="padding: 0 30px;">
                                <div class="block_footer--contact">
                                    <div class="footer--contact_img">
                                        <img src="{{ URL::asset('img/logo.png') }}" alt="#">
                                    </div>
                                    <div class="footer--contact_social">
                                        <div class="footer--contact_social-title">
                                            <p>contact us</p>
                                        </div>
                                        <ul class="footer--contact_social-item d-flex">
                                            <li>
                                                <a href="#">
                                                    <img src="https://img.icons8.com/color/48/000000/youtube.png" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="https://img.icons8.com/color/48/000000/facebook-new.png" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="https://img.icons8.com/color/48/000000/instagram-new.png" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="https://img.icons8.com/color/48/000000/twitter-circled.png" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-10 col-md-6 col-lg-3">
                                <div class="block_footer--item">
                                    <div class="block_footer--item_title">
                                        <span>Cho thuê</span>
                                    </div>
                                    <ul class="block_footer--item_content">
                                        <li>
                                            <a href="#">Căn hộ cho thuê</a>
                                        </li>
                                        <li>
                                            <a href="#">Bài đăng nổi bật</a>
                                        </li>
                                        <li>
                                            <a href="#">Cho thuê mặt bằng thương mại</a>
                                        </li>
                                        <li>
                                            <a href="#">Liên hệ với các môi giới</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-10 col-md-6 col-lg-3">
                                <div class="block_footer--item">
                                    <div class="block_footer--item_title">
                                        <span>Cho thuê</span>
                                    </div>
                                    <ul class="block_footer--item_content">
                                        <li>
                                            <a href="#">Căn hộ cho thuê</a>
                                        </li>
                                        <li>
                                            <a href="#">Bài đăng nổi bật</a>
                                        </li>
                                        <li>
                                            <a href="#">Cho thuê mặt bằng thương mại</a>
                                        </li>
                                        <li>
                                            <a href="#">Liên hệ với các môi giới</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-10 col-md-6 col-lg-3">
                                <div class="block_footer--item">
                                    <div class="block_footer--item_title">
                                        <span>Cho thuê</span>
                                    </div>
                                    <ul class="block_footer--item_content">
                                        <li>
                                            <a href="#">Căn hộ cho thuê</a>
                                        </li>
                                        <li>
                                            <a href="#">Bài đăng nổi bật</a>
                                        </li>
                                        <li>
                                            <a href="#">Cho thuê mặt bằng thương mại</a>
                                        </li>
                                        <li>
                                            <a href="#">Liên hệ với các môi giới</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        <!-- ===== End footer-box ===== -->

  </div>
  <!-- Link js slick -->
  <script type="text/javascript" src="{{ URL::asset('js/slick.js') }}"></script>
  <!-- Link js tabs -->
  <script type="text/javascript" src="{{ URL::asset('js/tabs.js') }}"></script>
  <!-- Link js toggle -->
  <script type="text/javascript" src="{{ URL::asset('js/toggle.js') }}"></script>
</body>

</html>