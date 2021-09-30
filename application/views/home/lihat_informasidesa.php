<body>
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
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="<?php echo base_url() ?>assets/assets/img/blog/news.jpg" alt="">
                  </div>
                  <div class="blog_details">
                     <h2><?php echo $detail->Judul ?>
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="far fa-user"></i><?php echo $detail->Tanggal_post ?></a></li>
                        <li><a href="#"><i class="far fa-comments"></i>Informasi Desa</a></li>
                     </ul>
                     <p class="excert" style='text-align:justify;'>
                     <?php echo $detail->Isi?>
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
               <aside class="single_sidebar_widget popular_post_widget">
                  <h3 class="widget_title">Informasi Desa</h3>
                     <div class="media post_item">
                        <img src="<?php echo base_url() ?>assets/assets/img/blog/pendudukmiskin.jpg" alt="post">
                           <div class="media-body">
                              <a href="<?php echo base_url() . 'Home/lihat_kategori/'?>">
                                 <h3>1</h3>
                                 <p>Kategori Penduduk Miskin</p>
                              </a>
                            </div>
                     </div>
                     <div class="media post_item">
                        <img src="<?php echo base_url() ?>assets/assets/img/blog/ringkasan.png" alt="post">
                           <div class="media-body">
                              <a href="<?php echo base_url() . 'Home/lihat_ringkasan/'?>">
                                 <h3>2</h3>
                                 <p>Ringkasan Data Penduduk</p>
                              </a>
                            </div>
                     </div>
               </aside>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
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