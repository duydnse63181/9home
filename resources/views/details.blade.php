@extends('layouts.master')

@section('content')
<!-- ===== Open blog-box ===== -->
<style type="text/css">
    .w100 {
        width: 100%;
    }
    .w-auto {
        width: auto;
    }

    .h35rem {
        height: 35rem;
    }

    .m_t_15px {
        margin-top: 15px;
    }

    .m_r_0 {
        margin-right: 0px;
    }

    .m_l_0 {
        margin-left: 0px;
    }

    .p_l_0 {
        padding-left: 0px;
    }

    .p_r_0 {
        padding-right: 0px;
    }

    .font_Alata {
        font-family: 'Alata', sans-serif;
    }

    .f_color_black {
        color: black;
    }

    .f_color_gray {
        color: gray;
    }

    .f_color_white {
        color: white;
    }

    .f_14px {
        font-size: 14px;
    }

    .child_img_100 img {
        width: 100%;
        height: auto;
    }

    .tag {
        background: #eee;
        border-radius: 3px 0 0 3px;
        color: #999;
        display: inline-block;
        height: 26px;
        line-height: 26px;
        padding: 0 20px 0 23px;
        position: relative;
        margin: 0 10px 10px 0;
        text-decoration: none;
        -webkit-transition: color 0.2s;
    }

    .tag::before {
        background: #fff;
        border-radius: 10px;
        box-shadow: inset 0 1px rgba(0, 0, 0, 0.25);
        content: '';
        height: 6px;
        left: 10px;
        position: absolute;
        width: 6px;
        top: 10px;
    }

    .tag::after {
        background: #fff;
        border-bottom: 13px solid transparent;
        border-left: 10px solid #eee;
        border-top: 13px solid transparent;
        content: '';
        position: absolute;
        right: 0;
        top: 0;
    }

    .tag:hover {
        background-color: crimson;
        color: white;
    }

    .tag:hover::after {
        border-left-color: crimson;
    }

    @media (max-width: 767px) {
        .h80px_xs {
            height: 80px;
        }
    }

    @media (min-width: 767px) {
        .h180px_sm {
            height: 180px;
        }
    }
</style>
<section class="blog-box">
    <div class="block_blog">
        <!-- ----- Open block_blog--content-blog ----- -->
        <div class="block_blog--content-blog">
            <div class="container">
                <div class="block--content-blog">
                    <div class="row">
                        <!-- +++++ Open content-blog--left +++++ -->
                        <div class="col-12 col-lg-8">
                            <div class="content-blog--left">
                                <!-- ..... Open content-blog--left-news ..... -->
                                <div class="content-blog--left-news">
                                    <!-- Open blog_top -->
                                    <div class="news-blog_top" style="overflow: hidden;">
                                        <?php
                                        echo "$blog->content";
                                        ?>
                                    </div>
                                    <!-- End blog_top -->
                                </div>
                                <!-- ..... End content-blog--left-news ..... -->
                            </div>
                        </div>
                        <!-- +++++ End content-blog--left +++++ -->

                        <!-- +++++ Open content-blog--right +++++ -->
                        <div class="col-12 col-lg-4">
                            <div class="content-blog--right">
                                <!-- ----- Open content-blog--right_detail-top ----- -->
                                <div class="content-blog--right_detail-top">
                                    <div class="right_detail-top--title">
                                        <h1 class="f_color_white">Đăng ký tư vấn</h1>
                                    </div>
                                    <div class="right_detail-top--content">
                                        <form action="#" class="form-load" method="post">
                                            <div class="form-load--item">
                                                <input type="text" name="name" placeholder="Họ tên *" required>
                                            </div>
                                            <div class="form-load--item">
                                                <input type="text" name="phone" placeholder="Số điện thoại *" required>
                                            </div>
                                            <div class="form-load--item">
                                                <input type="text" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-load--item">
                                                <input type="text" name="note" placeholder="Ghi chú">
                                            </div>
                                            <div class="form-load--btn">
                                                <button class="f_color_white">GỬI</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- ----- End content-blog--right_detail-top ----- -->

                                <!-- ----- Open content-blog--right_top ----- -->
                                <div class="content-blog--right_top">
                                    <div class="content-blog--right_top--title">
                                        <h1>Tìm nhanh</h1>
                                    </div>
                                    <div class="content-blog--right_top--block_item d-flex">
                                        <div class="block_item-link">
                                            <button class="item-link active" onclick="openForm(event,'item-link--lease')">Cho
                                                thuê</button>
                                        </div>
                                        <div class="block_item-link">
                                            <button class="item-link" onclick="openForm(event,'item-link--shell')">Nhà
                                                bán</button>
                                        </div>
                                    </div>
                                    <div class="content-blog--right_top--form-load">
                                        <form id="item-link--lease" class="tabcontent form-load_lease" style="display: block;">
                                            <div class="tabcontent-item d-flex" style="justify-content: space-between;">
                                                <label for="#">Loại hình</label>
                                                <select id="#" name="#" style="width: 75%;">
                                                    <option value="#">Nhà mặt tiền</option>
                                                    <option value="#">Nhà mặt tiền</option>
                                                    <option value="#">Nhà mặt tiền</option>
                                                    <option value="#">Nhà mặt tiền</option>
                                                </select>
                                            </div>
                                            <div class="tabcontent-item">
                                                <select id="#" name="#">
                                                    <option value="#">TP Hồ Chí Minh</option>
                                                    <option value="#">TP Hồ Chí Minh</option>
                                                    <option value="#">TP Hồ Chí Minh</option>
                                                    <option value="#">TP Hồ Chí Minh</option>
                                                </select>
                                            </div>
                                            <div class="tabcontent-item">
                                                <select id="#" name="#">
                                                    <option value="#">Quận 9</option>
                                                    <option value="#">Quận 9</option>
                                                    <option value="#">Quận 9</option>
                                                </select>
                                            </div>
                                            <div class="tabcontent-item">
                                                <select id="#" name="#">
                                                    <option value="#">Phường Long Trường</option>
                                                    <option value="#">Phường Long Trường</option>
                                                    <option value="#">Phường Long Trường</option>
                                                </select>
                                            </div>
                                            <div class="tabcontent-item">
                                                <select id="#" name="#">
                                                    <option value="#">Đường</option>
                                                    <option value="#">Đường</option>
                                                </select>
                                            </div>
                                            <div class="tabcontent-btn">
                                                <button>TÌM</button>
                                            </div>
                                        </form>

                                        <form id="item-link--shell" class="tabcontent form-load_shell">
                                            <div class="tabcontent-item d-flex" style="justify-content: space-between;">
                                                <label for="#">Loại hình</label>
                                                <select id="#" name="#" style="width: 75%;">
                                                    <option value="#">Căn hộ chung cư</option>
                                                    <option value="#">Căn hộ chung cư</option>
                                                    <option value="#">Căn hộ chung cư</option>
                                                    <option value="#">Căn hộ chung cư</option>
                                                </select>
                                            </div>
                                            <div class="tabcontent-item">
                                                <select id="#" name="#">
                                                    <option value="#">Hà Nội</option>
                                                    <option value="#">Hà Nội</option>
                                                    <option value="#">Hà Nội</option>
                                                    <option value="#">Hà Nội</option>
                                                </select>
                                            </div>
                                            <div class="tabcontent-item">
                                                <select id="#" name="#">
                                                    <option value="#">Long Biên</option>
                                                    <option value="#">Quận 9</option>
                                                    <option value="#">Quận 9</option>
                                                </select>
                                            </div>
                                            <div class="tabcontent-item">
                                                <select id="#" name="#">
                                                    <option value="#">Phường Long Trường</option>
                                                    <option value="#">Phường Long Trường</option>
                                                    <option value="#">Phường Long Trường</option>
                                                </select>
                                            </div>
                                            <div class="tabcontent-item">
                                                <select id="#" name="#">
                                                    <option value="#">Đường</option>
                                                    <option value="#">Đường</option>
                                                </select>
                                            </div>
                                            <div class="tabcontent-btn">
                                                <button>TÌM</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- ----- End content-blog--right_top ----- -->

                                <!-- ----- Open content-blog--right_center ----- -->
                                <div class="content-blog--right_center">
                                    <!-- Open content-blog--right_center-lease -->
                                    <div class="content-blog--right_center-item content-blog--right_center-lease">
                                        <div class="content-blog--right_center-item--title">
                                            <h1 class="title-blog">Nhà cho thuê</h1>
                                        </div>
                                        <div class="content-blog--right_center--content">
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-btn ">
                                                <a href="#" class="nav-link">
                                                    <i>Xem thêm >></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End content-blog--right_center-lease -->

                                    <!-- Open content-blog--right_center-shell -->
                                    <div class="content-blog--right_center-item content-blog--right_center-shell">
                                        <div class="content-blog--right_center-item--title">
                                            <h1 class="title-blog">Nhà bán</h1>
                                        </div>
                                        <div class="content-blog--right_center--content">
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-item">
                                                <a href="#" class="nav-link" style="padding: 0;">
                                                    <div class="row">
                                                        <div class="col-5" style="padding: 5px;">
                                                            <div class="right_center--content-item_img">
                                                                <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                            </div>
                                                        </div>
                                                        <div class="col-7" style="padding: 5px;">
                                                            <div class="right_center--content-item_text">
                                                                <h4>Lorem, ipsum dolor sit amet consec
                                                                    adipisicing
                                                                    elit.</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="right_center--content-btn ">
                                                <a href="#" class="nav-link">
                                                    <i>Xem thêm >></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End content-blog--right_center-shell -->
                                </div>
                                <!-- ----- End content-blog--right_center ----- -->
                            </div>
                            <!-- +++++ End header-blog--right +++++ -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== End blog-box ===== -->
@endsection
