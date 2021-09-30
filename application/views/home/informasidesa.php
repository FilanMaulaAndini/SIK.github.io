    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Informasi Desa</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url() ?>assets/assets/img/blog/pendudukmiskin.jpg" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>1</h3>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo base_url() . 'Home/lihat_kategori/'?>">
                                    <h2>Kategori Penduduk Miskin</h2>
                                </a>
                                <p style='text-align:justify;'>Ini merupakan grafik dari penduduk miskin Desa Gondowangi yang telah dikategorikan berdarsarkan 
                                    pada poin yang ditetapkan oleh BPS.</p>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo base_url() ?>assets/assets/img/blog/ringkasan.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>2</h3>

                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo base_url() . 'Home/lihat_ringkasan/'?>">
                                    <h2>Ringkasan Data Penduduk</h2>
                                </a>
                                <p style='text-align:justify;'>Ini berisikan ringkasan data dari penduduk Desa Gondowangi yang telah dikategorikan berdasarakan parameter tertentu
                                    yang mana hasil visualisasi diberikan dalam bentuk grafik.</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Informasi Tebaru</h3>
                            <?php
                                foreach ($kependudukan as $info) : ?>
                            <div class="media post_item">
                                <img src="<?php echo base_url() ?>assets/assets/img/post/post_5.png" alt="post">
                                <div class="media-body">
                                    <a href="<?php echo base_url() . 'Home/lihat_info/' . $info->id_info ?>">
                                        <h3><?php echo $info->Judul ?></h3>
                                    </a>
                                    <p><?php echo $info->Tanggal_post ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    
        <!-- jquery plugins here-->
        <script src="<?php echo base_url() ?>assets/assets/js/jquery-1.12.1.min.js"></script>
        <!-- popper js -->
        <script src="<?php echo base_url() ?>assets/assets/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="<?php echo base_url() ?>assets/assets/js/bootstrap.min.js"></script>
        <!-- easing js -->
        <script src="<?php echo base_url() ?>assets/assets/js/jquery.magnific-popup.js"></script>
        <!-- swiper js -->
        <script src="<?php echo base_url() ?>assets/assets/js/swiper.min.js"></script>
        <!-- swiper js -->
        <script src="<?php echo base_url() ?>assets/assets/js/masonry.pkgd.js"></script>
        <!-- particles js -->
        <script src="<?php echo base_url() ?>assets/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/assets/js/jquery.nice-select.min.js"></script>
        <!-- slick js -->
        <script src="<?php echo base_url() ?>assets/assets/js/slick.min.js"></script>
        <script src="<?php echo base_url() ?>assets/assets/js/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url() ?>assets/assets/js/waypoints.min.js"></script>
        <script src="<?php echo base_url() ?>assets/assets/js/contact.js"></script>
        <script src="<?php echo base_url() ?>assets/assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?php echo base_url() ?>assets/assets/js/jquery.form.js"></script>
        <script src="<?php echo base_url() ?>assets/assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>assets/assets/js/mail-script.js"></script>
        <!-- custom js -->
        <script src="<?php echo base_url() ?>assets/assets/js/custom.js"></script>
    </body>