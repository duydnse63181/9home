        <!-- ===== Open blog-box ===== -->
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
                                            <div class="news-blog_top blog_top">
                                                <!-- <a href="<?php echo base_url() ?>handling/detail/<?php echo $blog[0]['id'] ?>" class="nav-link"> -->
                                                <a href="<?php echo base_url() ?>detail/<?php echo $blog[0]['id'] ?>-<?php $text = preg_replace('~[^\pL\d]+~u', '-', $blog[0]['name']);
                                                                                                                $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                                                                                                                $text = preg_replace('~[^-\w]+~', '', $text);
                                                                                                                $text = trim($text, '-');
                                                                                                                $text = preg_replace('~-+~', '-', $text);
                                                                                                                echo strtolower($text); ?>" class="nav-link">
                                                    <div class="news-blog_top-img blog_top-img">
                                                        <!-- <img src="assets/img/header-blog_top-img.jpg" alt="#"> -->
                                                        <img src="<?php print_r($blog[0]['image']) ?>" alt="#">
                                                    </div>
                                                    <div class="news-blog_top-text blog_top-text">
                                                        <!-- <h2>G???i ?? 13 ?? t?????ng thi???t k??? wc nh??? d?????i 3m2, v???a ?????y ????? ti???n nghi, l???i v???n ph??n chia khu v???c kh?? - ?????t ri??ng bi???t</h2> -->
                                                        <h2><?php print_r($blog[0]['name']) ?></h2>
                                                    </div>
                                                </a>
                                            </div>                                            
                                            <!-- End blog_top -->

                                            <!-- Open news-blog_bottom -->
                                            <div class="news-blog_bottom blog_bottom">
                                                <?php for($i = 1; $i < count($blog); $i++) {?>
                                                <div class="news-blog_bottom--item blog_bottom--item">
                                                    <a href="<?php echo base_url() ?>detail/<?php echo $blog[$i]['id'] ?>-<?php $text = preg_replace('~[^\pL\d]+~u', '-', $blog[$i]['name']);
                                                                                                                $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                                                                                                                $text = preg_replace('~[^-\w]+~', '', $text);
                                                                                                                $text = trim($text, '-');
                                                                                                                $text = preg_replace('~-+~', '-', $text);
                                                                                                                echo strtolower($text); ?>" class="nav-link">
                                                        <div class="row">
                                                            <div class="col-12 col-md-4 col-lg-4">
                                                                <div class="news-blog_bottom--item-img blog_bottom--item-img">
                                                                    <img src="<?php echo $blog[$i]['image'] ?>" alt="#">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-8 col-lg-8">
                                                                <div class="news-blog_bottom--item-content blog_bottom--item-content">
                                                                    <h3><?php echo $blog[$i]['name'] ?></h3>
                                                                    <p><?php echo $blog[$i]['short_desc'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <?php } ?>
                                            </div>
                                            <!-- End news-blog_bottom -->

                                            <!-- Open news-blog_slick -->
                                            <div class="news-blog_slick blog_slick">
                                                <div class="news-blog_slick--title blog_slick--title">
                                                    <h1>Phong c??ch decor</h1>
                                                </div>
                                                <div class="news-blog_slick--content blog_slick--content">
                                                    <?php foreach ($decor as $key) { ?>
                                                    <div class="news-blog_slick--content_item blog_slick--content_item">
                                                        <a href="<?php echo base_url() ?>detail/<?php echo $key['id'] ?>-<?php $text = preg_replace('~[^\pL\d]+~u', '-', $key['name']);
                                                                                                                $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                                                                                                                $text = preg_replace('~[^-\w]+~', '', $text);
                                                                                                                $text = trim($text, '-');
                                                                                                                $text = preg_replace('~-+~', '-', $text);
                                                                                                                echo strtolower($text); ?>" class="nav-link">
                                                            <div class="slick--content_item-img">
                                                                <img src="<?php echo $key['image'] ?>" alt="#">
                                                            </div>
                                                            <div class="slick--content_item-text">
                                                                <p><?php echo $key['name'] ?></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <!-- End news-blog_slick -->
                                        </div>
                                        <!-- ..... End content-blog--left-news ..... -->

                                        <!-- ..... Open content-blog--left-notion ..... -->
                                        <div class="content-blog--left-notion">
                                            <div class="notion-blog_title">
                                                <h1 class="title-blog">?? t?????ng cho ng??i nh?? c???a b???n</h1>
                                            </div>

                                            <!-- Open notion-blog_top -->
                                            <div class="notion-blog_top blog_top" style="padding-bottom: 15px;">
                                                <a href="<?php echo base_url() ?>detail/<?php echo $idea[0]['id'] ?>-<?php $text = preg_replace('~[^\pL\d]+~u', '-', $idea[0]['name']);
                                                                                                                $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                                                                                                                $text = preg_replace('~[^-\w]+~', '', $text);
                                                                                                                $text = trim($text, '-');
                                                                                                                $text = preg_replace('~-+~', '-', $text);
                                                                                                                echo strtolower($text); ?>" class="nav-link">
                                                    <div class="notion-blog_top-img blog_top-img">
                                                        <img src="<?php echo $idea[0]['image'] ?>" alt="#">
                                                    </div>
                                                    <div class="notion-blog_top-text blog_top-text">
                                                        <h2><?php echo $idea[0]['name'] ?></h2>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- End notion-blog_top -->

                                            <!-- End notion-blog_center -->
                                            <div class="notion-blog_center">
                                                <div class="row">
                                                    <div class="col-12 col-md-4 col-lg-4">
                                                        <div class="notion-blog_center--item">
                                                            <a href="<?php echo base_url() ?>detail/<?php echo $idea[1]['id'] ?>-<?php $text = preg_replace('~[^\pL\d]+~u', '-', $idea[1]['name']);
                                                                                                                $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                                                                                                                $text = preg_replace('~[^-\w]+~', '', $text);
                                                                                                                $text = trim($text, '-');
                                                                                                                $text = preg_replace('~-+~', '-', $text);
                                                                                                                echo strtolower($text); ?>" class="nav-link">
                                                                <div class="notion-blog_center--item_img">
                                                                    <img src="<?php echo $idea[1]['image'] ?>" alt="#">
                                                                </div>
                                                                <div class="notion-blog_center--item_text">
                                                                    <h4><?php echo $idea[1]['name'] ?></h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4 col-lg-4">
                                                        <div class="notion-blog_center--item">
                                                            <a href="<?php echo base_url() ?>detail/<?php echo $idea[2]['id'] ?>-<?php $text = preg_replace('~[^\pL\d]+~u', '-', $idea[2]['name']);
                                                                                                                $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                                                                                                                $text = preg_replace('~[^-\w]+~', '', $text);
                                                                                                                $text = trim($text, '-');
                                                                                                                $text = preg_replace('~-+~', '-', $text);
                                                                                                                echo strtolower($text); ?>" class="nav-link">
                                                                <div class="notion-blog_center--item_img">
                                                                    <img src="<?php echo $idea[2]['image'] ?>" alt="#">
                                                                </div>
                                                                <div class="notion-blog_center--item_text">
                                                                    <h4><?php echo $idea[2]['name'] ?></h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-4 col-lg-4">
                                                        <div class="notion-blog_center--item">
                                                            <a href="<?php echo base_url() ?>detail/<?php echo $idea[3]['id'] ?>-<?php $text = preg_replace('~[^\pL\d]+~u', '-', $idea[3]['name']);
                                                                                                                $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                                                                                                                $text = preg_replace('~[^-\w]+~', '', $text);
                                                                                                                $text = trim($text, '-');
                                                                                                                $text = preg_replace('~-+~', '-', $text);
                                                                                                                echo strtolower($text); ?>" class="nav-link">
                                                                <div class="notion-blog_center--item_img">
                                                                    <img src="<?php echo $idea[3]['image'] ?>" alt="#">
                                                                </div>
                                                                <div class="notion-blog_center--item_text">
                                                                    <h4><?php echo $idea[3]['name'] ?>
                                                                    </h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End notion-blog_center -->

                                            <!-- Open notion-blog_bottom -->
                                            <div class="notion-blog_bottom blog_bottom">
                                                <?php for ($i = 4; $i < count($idea); $i++) { ?>
                                                <div class="notion-blog_bottom--item blog_bottom--item">
                                                    <a href="<?php echo base_url() ?>detail/<?php echo $idea[$i]['id'] ?>-<?php $text = preg_replace('~[^\pL\d]+~u', '-', $idea[$i]['name']);
                                                                                                                $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                                                                                                                $text = preg_replace('~[^-\w]+~', '', $text);
                                                                                                                $text = trim($text, '-');
                                                                                                                $text = preg_replace('~-+~', '-', $text);
                                                                                                                echo strtolower($text); ?>" class="nav-link">
                                                        <div class="row">
                                                            <div class="col-12 col-md-4 col-lg-4">
                                                                <div class="notion-blog_bottom--item-img blog_bottom--item-img">
                                                                    <img src="<?php echo $idea[$i]['image'] ?>" alt="#">
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-md-8 col-lg-8">
                                                                <div class="notion-blog_bottom--item-content blog_bottom--item-content">
                                                                    <h3><?php echo $idea[$i]['name'] ?></h3>
                                                                    <p><?php echo $idea[$i]['short_desc'] ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <hr>
                                                <?php } ?>
                                            </div>
                                            <!-- End notion-blog_bottom -->

                                            <!-- Open notion-blog_slick -->
                                            <div class="notion-blog_slick blog_slick">
                                                <div class="notion-blog_slick--title blog_slick--title">
                                                    <h1>Xu th??? thi???t k???</h1>
                                                </div>
                                                <div class="notion-blog_slick--content blog_slick--content">
                                                    <div class="notion-blog_slick--content_item blog_slick--content_item">
                                                        <a href="#" class="nav-link">
                                                            <div class="slick--content_item-img">
                                                                <img src="assets/img/header-blog_bottom--slick_item.jpg" alt="#">
                                                            </div>
                                                            <div class="slick--content_item-text">
                                                                <p>Ch??? c???i t???o l???i m???t sau v?? thay ?????i v??i chi ti???t</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notion-blog_slick--content_item blog_slick--content_item">
                                                        <a href="#" class="nav-link">
                                                            <div class="slick--content_item-img">
                                                                <img src="assets/img/header-blog_bottom--slick_item.jpg" alt="#">
                                                            </div>
                                                            <div class="slick--content_item-text">
                                                                <p>Ch??? c???i t???o l???i m???t sau v?? thay ?????i v??i chi ti???t</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notion-blog_slick--content_item blog_slick--content_item">
                                                        <a href="#" class="nav-link">
                                                            <div class="slick--content_item-img">
                                                                <img src="assets/img/header-blog_bottom--slick_item.jpg" alt="#">
                                                            </div>
                                                            <div class="slick--content_item-text">
                                                                <p>Ch??? c???i t???o l???i m???t sau v?? thay ?????i v??i chi ti???t</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="notion-blog_slick--content_item blog_slick--content_item">
                                                        <a href="#" class="nav-link">
                                                            <div class="slick--content_item-img">
                                                                <img src="assets/img/header-blog_bottom--slick_item.jpg" alt="#">
                                                            </div>
                                                            <div class="slick--content_item-text">
                                                                <p>Ch??? c???i t???o l???i m???t sau v?? thay ?????i v??i chi ti???t</p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End notion-blog_slick -->
                                        </div>
                                        <!-- ..... End content-blog--left-notion ..... -->
                                    </div>
                                </div>
                                <!-- +++++ End content-blog--left +++++ -->

                                <!-- +++++ Open content-blog--right +++++ -->
                                <div class="col-12 col-lg-4">
                                    <div class="content-blog--right">
                                        <!-- ----- Open content-blog--right_top ----- -->
                                        <div class="content-blog--right_top">
                                            <div class="content-blog--right_top--title">
                                                <h1>T??m nhanh</h1>
                                            </div>
                                            <div class="content-blog--right_top--block_item d-flex">
                                                <div class="block_item-link">
                                                    <button class="item-link active" onclick="openForm(event,'item-link--lease')">Cho
                                                        thu??</button>
                                                </div>
                                                <div class="block_item-link">
                                                    <button class="item-link" onclick="openForm(event,'item-link--shell')">Nh??
                                                        b??n</button>
                                                </div>
                                            </div>
                                            <div class="content-blog--right_top--form-load">
                                                <form id="item-link--lease" class="tabcontent form-load_lease" style="display: block;">
                                                    <div class="tabcontent-item d-flex" style="justify-content: space-between;">
                                                        <label for="#">Lo???i h??nh</label>
                                                        <select id="#" name="#" style="width: 75%;">
                                                            <option value="#">Nh?? m???t ti???n</option>
                                                            <option value="#">Nh?? m???t ti???n</option>
                                                            <option value="#">Nh?? m???t ti???n</option>
                                                            <option value="#">Nh?? m???t ti???n</option>
                                                        </select>
                                                    </div>
                                                    <div class="tabcontent-item">
                                                        <select id="#" name="#">
                                                            <option value="#">TP H??? Ch?? Minh</option>
                                                            <option value="#">TP H??? Ch?? Minh</option>
                                                            <option value="#">TP H??? Ch?? Minh</option>
                                                            <option value="#">TP H??? Ch?? Minh</option>
                                                        </select>
                                                    </div>
                                                    <div class="tabcontent-item">
                                                        <select id="#" name="#">
                                                            <option value="#">Qu???n 9</option>
                                                            <option value="#">Qu???n 9</option>
                                                            <option value="#">Qu???n 9</option>
                                                        </select>
                                                    </div>
                                                    <div class="tabcontent-item">
                                                        <select id="#" name="#">
                                                            <option value="#">Ph?????ng Long Tr?????ng</option>
                                                            <option value="#">Ph?????ng Long Tr?????ng</option>
                                                            <option value="#">Ph?????ng Long Tr?????ng</option>
                                                        </select>
                                                    </div>
                                                    <div class="tabcontent-item">
                                                        <select id="#" name="#">
                                                            <option value="#">???????ng</option>
                                                            <option value="#">???????ng</option>
                                                        </select>
                                                    </div>
                                                    <div class="tabcontent-btn">
                                                        <button>T??M</button>
                                                    </div>
                                                </form>

                                                <form id="item-link--shell" class="tabcontent form-load_shell">
                                                    <div class="tabcontent-item d-flex" style="justify-content: space-between;">
                                                        <label for="#">Lo???i h??nh</label>
                                                        <select id="#" name="#" style="width: 75%;">
                                                            <option value="#">C??n h??? chung c??</option>
                                                            <option value="#">C??n h??? chung c??</option>
                                                            <option value="#">C??n h??? chung c??</option>
                                                            <option value="#">C??n h??? chung c??</option>
                                                        </select>
                                                    </div>
                                                    <div class="tabcontent-item">
                                                        <select id="#" name="#">
                                                            <option value="#">H?? N???i</option>
                                                            <option value="#">H?? N???i</option>
                                                            <option value="#">H?? N???i</option>
                                                            <option value="#">H?? N???i</option>
                                                        </select>
                                                    </div>
                                                    <div class="tabcontent-item">
                                                        <select id="#" name="#">
                                                            <option value="#">Long Bi??n</option>
                                                            <option value="#">Qu???n 9</option>
                                                            <option value="#">Qu???n 9</option>
                                                        </select>
                                                    </div>
                                                    <div class="tabcontent-item">
                                                        <select id="#" name="#">
                                                            <option value="#">Ph?????ng Long Tr?????ng</option>
                                                            <option value="#">Ph?????ng Long Tr?????ng</option>
                                                            <option value="#">Ph?????ng Long Tr?????ng</option>
                                                        </select>
                                                    </div>
                                                    <div class="tabcontent-item">
                                                        <select id="#" name="#">
                                                            <option value="#">???????ng</option>
                                                            <option value="#">???????ng</option>
                                                        </select>
                                                    </div>
                                                    <div class="tabcontent-btn">
                                                        <button>T??M</button>
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
                                                    <h1 class="title-blog">Nh?? cho thu??</h1>
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
                                                </div>
                                            </div>
                                            <!-- End content-blog--right_center-lease -->

                                            <!-- Open content-blog--right_center-shell -->
                                            <div class="content-blog--right_center-item content-blog--right_center-shell">
                                                <div class="content-blog--right_center-item--title">
                                                    <h1 class="title-blog">Nh?? b??n</h1>
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
                                                </div>
                                            </div>
                                            <!-- End content-blog--right_center-shell -->
                                        </div>
                                        <!-- ----- End content-blog--right_center ----- -->

                                        <!-- ----- Open content-blog--right_bottom ----- -->
                                        <div class="content-blog--right_bottom">
                                            <!-- End content-blog--right_bottom-development_projects -->
                                            <div class="content-blog--right_bottom-item content-blog--right_bottom-development_projects">
                                                <div class="right_bottom-item--title d-flex">
                                                    <span>D??? ??n ??ang ph??t tri???n</span>
                                                </div>
                                                <div class="right_bottom-item--content">
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End content-blog--right_bottom-development_projects -->

                                            <!-- Open content-blog--right_bottom-outstanding_project -->
                                            <div class="content-blog--right_bottom-item content-blog--right_bottom-outstanding_project">
                                                <div class="right_bottom-item--title d-flex">
                                                    <span>D??? ??n n???i b???t</span>
                                                </div>
                                                <div class="right_bottom-item--content">
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                    <div class="right_bottom-item--content_link">
                                                        <a href="#" class="nav-link d-flex">
                                                            <p class="sector d-flex">HCM</p>
                                                            <p class="news d-flex">Chung c?? Celladon qu???n T??n Ph??</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End content-blog--right_bottom-outstanding_project -->
                                        </div>
                                        <!-- ----- End content-blog--right_bottom ----- -->
                                    </div>
                                    <!-- +++++ End header-blog--right +++++ -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ----- End block_blog--content-blog ----- -->

                    <!-- ----- Open block_blog--featured-article ----- -->
                    <div class="block_blog--featured-article">
                        <div class="container">
                            <div class="featured-article_title">
                                <h1 class="title-blog">B??i vi???t n???i b???t</h1>
                            </div>
                        </div>
                        <div class="featured-article_content">
                            <div class="row">
                                <!-- +++++ Open featured-article_content--left +++++ -->
                                <div class="col-md-12 col-lg-6" style="margin: 2px 0; padding: 0 2px">
                                    <div class="featured-article_content--left">
                                        <div class="featured-article_item">
                                            <a href="#" class="nav-link">
                                                <div class="featured-article_item--img">
                                                    <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                </div>
                                                <div class="featured-article_item--content d-flex">
                                                    <div class="featured-article_item--content-text">
                                                        <span>
                                                            <i class="far fa-images"></i>
                                                        </span>
                                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Sunt alias laudantium praesentium exercitationem veniam
                                                        </span>
                                                    </div>
                                                    <div class="featnured-article_item--content-commemt d-flex">
                                                        <ul class="d-flex">
                                                            <li class="d-flex">
                                                                <span class="fas fa-heart"></span>
                                                                5
                                                            </li>
                                                            <li class="d-flex">
                                                                <span class="fas fa-comment"></span>
                                                                0
                                                            </li>
                                                            <li>11291</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- +++++ End featured-article_content--left +++++ -->

                                <!-- +++++ Open featured-article_content--right +++++ -->
                                <div class="col-md-12 col-lg-6">
                                    <div class="featured-article_content--right">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6" style="margin: 2px 0; padding: 0 2px">
                                                <div class="featured-article_item">
                                                    <a href="#" class="nav-link">
                                                        <div class="featured-article_item--img">
                                                            <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                        </div>
                                                        <div class="featured-article_item--content d-flex">
                                                            <div class="featured-article_item--content-text">
                                                                <span>
                                                                    <i class="far fa-images"></i>
                                                                </span>
                                                                <span>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Sunt alias laudantium praesentium
                                                                    exercitationem veniam </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6" style="margin: 2px 0; padding: 0 2px">
                                                <div class="featured-article_item">
                                                    <a href="#" class="nav-link">
                                                        <div class="featured-article_item--img">
                                                            <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                        </div>
                                                        <div class="featured-article_item--content d-flex">
                                                            <div class="featured-article_item--content-text">
                                                                <span>
                                                                    <i class="far fa-images"></i>
                                                                </span>
                                                                <span>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Sunt alias laudantium praesentium
                                                                    exercitationem veniam </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6" style="margin: 2px 0; padding: 0 2px">
                                                <div class="featured-article_item">
                                                    <a href="#" class="nav-link">
                                                        <div class="featured-article_item--img">
                                                            <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                        </div>
                                                        <div class="featured-article_item--content d-flex">
                                                            <div class="featured-article_item--content-text">
                                                                <span>
                                                                    <i class="far fa-images"></i>
                                                                </span>
                                                                <span>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Sunt alias laudantium praesentium
                                                                    exercitationem veniam </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6" style="margin: 2px 0; padding: 0 2px">
                                                <div class="featured-article_item">
                                                    <a href="#" class="nav-link">
                                                        <div class="featured-article_item--img">
                                                            <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                        </div>
                                                        <div class="featured-article_item--content d-flex">
                                                            <div class="featured-article_item--content-text">
                                                                <span>
                                                                    <i class="far fa-images"></i>
                                                                </span>
                                                                <span>Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Sunt alias laudantium praesentium
                                                                    exercitationem veniam </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- +++++ End featured-article_content--right +++++ -->
                            </div>
                        </div>
                    </div>
                    <!-- ----- End block_blog--featured-article ----- -->

                    <!-- ----- Open block_blog--store ----- -->
                    <div class="block_blog--store">
                        <div class="container">
                            <div class="blog_block-store">
                                <div class="row">
                                    <!-- Open block_blog--store-left -->
                                    <div class="col-12 col-md-12 col-lg-8">
                                        <div class="block_blog--store-left">
                                            <div class="store-left--title">
                                                <h1 class="title-blog">V???t li???u n???i th???t</h1>
                                            </div>
                                            <div class="store-left--content">
                                                <div class="row">
                                                    <div class="col-6 col-md-3 col-lg-3" style="padding: 10px;">
                                                        <div class="store-left--content_item">
                                                            <a href="#" class="nav-link">
                                                                <div class="store-left--content_item-img">
                                                                    <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                </div>
                                                                <div class="store-left--content_item-text">
                                                                    <h4>Sofa b??ng x??m</h4>
                                                                    <h4>ZB174</h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3" style="padding: 10px;">
                                                        <div class="store-left--content_item">
                                                            <a href="#" class="nav-link">
                                                                <div class="store-left--content_item-img">
                                                                    <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                </div>
                                                                <div class="store-left--content_item-text">
                                                                    <h4>Sofa b??ng x??m</h4>
                                                                    <h4>ZB174</h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3" style="padding: 10px;">
                                                        <div class="store-left--content_item">
                                                            <a href="#" class="nav-link">
                                                                <div class="store-left--content_item-img">
                                                                    <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                </div>
                                                                <div class="store-left--content_item-text">
                                                                    <h4>Sofa b??ng x??m</h4>
                                                                    <h4>ZB174</h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3" style="padding: 10px;">
                                                        <div class="store-left--content_item">
                                                            <a href="#" class="nav-link">
                                                                <div class="store-left--content_item-img">
                                                                    <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                </div>
                                                                <div class="store-left--content_item-text">
                                                                    <h4>Sofa b??ng x??m</h4>
                                                                    <h4>ZB174</h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3" style="padding: 10px;">
                                                        <div class="store-left--content_item">
                                                            <a href="#" class="nav-link">
                                                                <div class="store-left--content_item-img">
                                                                    <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                </div>
                                                                <div class="store-left--content_item-text">
                                                                    <h4>Sofa b??ng x??m</h4>
                                                                    <h4>ZB174</h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3" style="padding: 10px;">
                                                        <div class="store-left--content_item">
                                                            <a href="#" class="nav-link">
                                                                <div class="store-left--content_item-img">
                                                                    <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                </div>
                                                                <div class="store-left--content_item-text">
                                                                    <h4>Sofa b??ng x??m</h4>
                                                                    <h4>ZB174</h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3" style="padding: 10px;">
                                                        <div class="store-left--content_item">
                                                            <a href="#" class="nav-link">
                                                                <div class="store-left--content_item-img">
                                                                    <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                </div>
                                                                <div class="store-left--content_item-text">
                                                                    <h4>Sofa b??ng x??m</h4>
                                                                    <h4>ZB174</h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-md-3 col-lg-3" style="padding: 10px;">
                                                        <div class="store-left--content_item">
                                                            <a href="#" class="nav-link">
                                                                <div class="store-left--content_item-img">
                                                                    <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                </div>
                                                                <div class="store-left--content_item-text">
                                                                    <h4>Sofa b??ng x??m</h4>
                                                                    <h4>ZB174</h4>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End block_blog--store-left -->

                                    <!-- Open block_blog--store-right -->
                                    <div class="col-12 col-lg-4">
                                        <div class="block_blog--store-right">
                                            <div class="store-right--title">
                                                <h1 class="title-blog">C???a h??ng n???i th???t</h1>
                                            </div>
                                            <div class="store-right--content">
                                                <div class="row">
                                                    <div class="col-md-6 col-lg-12">
                                                        <div class="store-right--content-item">
                                                            <a href="#" class="nav-link">
                                                                <div class="row">
                                                                    <div class="col-4 col-lg-4">
                                                                        <div class="store-right--content-item_img">
                                                                            <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-8 col-lg-8 d-flex">
                                                                        <div class="store-right--content-item_text">
                                                                            <h3>C???a h??ng vlxd h???ng ph??t</h3>
                                                                            <p>
                                                                                <i>26 Nguy???n Ch?? Thanh, P.10, Q.B??nh
                                                                                    Th???nh,
                                                                                    Tp.H??? Ch?? Minh</i>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-12">
                                                        <div class="store-right--content-item">
                                                            <a href="#" class="nav-link">
                                                                <div class="row">
                                                                    <div class="col-4 col-lg-4">
                                                                        <div class="store-right--content-item_img">
                                                                            <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-8 col-lg-8 d-flex">
                                                                        <div class="store-right--content-item_text">
                                                                            <h3>C???a h??ng vlxd h???ng ph??t</h3>
                                                                            <p>
                                                                                <i>26 Nguy???n Ch?? Thanh, P.10, Q.B??nh
                                                                                    Th???nh,
                                                                                    Tp.H??? Ch?? Minh</i>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-12">
                                                        <div class="store-right--content-item">
                                                            <a href="#" class="nav-link">
                                                                <div class="row">
                                                                    <div class="col-4 col-lg-4">
                                                                        <div class="store-right--content-item_img">
                                                                            <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-8 col-lg-8 d-flex">
                                                                        <div class="store-right--content-item_text">
                                                                            <h3>C???a h??ng vlxd h???ng ph??t</h3>
                                                                            <p>
                                                                                <i>26 Nguy???n Ch?? Thanh, P.10, Q.B??nh
                                                                                    Th???nh,
                                                                                    Tp.H??? Ch?? Minh</i>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-lg-12">
                                                        <div class="store-right--content-item">
                                                            <a href="#" class="nav-link">
                                                                <div class="row">
                                                                    <div class="col-4 col-lg-4">
                                                                        <div class="store-right--content-item_img">
                                                                            <img src="assets/img/header-blog--right_bottom--content.jpg" alt="#">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-8 col-lg-8 d-flex">
                                                                        <div class="store-right--content-item_text">
                                                                            <h3>C???a h??ng vlxd h???ng ph??t</h3>
                                                                            <p>
                                                                                <i>26 Nguy???n Ch?? Thanh, P.10, Q.B??nh
                                                                                    Th???nh,
                                                                                    Tp.H??? Ch?? Minh</i>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="store-right--btn">
                                                    <a href="#" class="nav-link">
                                                        <i>Xem th??m >></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Open block_blog--store-right -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ----- End block_blog--store ----- -->
                    </div>
        </section>
        <!-- ===== End blog-box ===== -->
        