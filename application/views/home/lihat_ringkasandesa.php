<body>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Informasi Desa</h2>
                            <h5>Informasi Desa<span></span>Ringkasan Data PEnduduk</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading"><b>Ringkasan Data Penduduk<img src="<?php echo base_url() ?>assets/assets/img/animate_icon/Ellipse_5.png" alt="" class="feature_icon_2 custom-animation2"></h3>
            <p class="sample-text" style='text-align:justify;'>
                Ringkasan data penduduk berisi <b>visualisasi</b> data penduduk Desa Gondowangi yang 
                digambarkan dalam bentuk <i>data grafik</i> untuk memudahkan penduduk dalam mengetahui
                data penduduk berdasarkan kategori tertentu.
            </p>
            <img src="<?php echo base_url() ?>assets/assets/img/animate_icon/Ellipse_4.png" alt="" class="feature_icon_1 custom-animation1">
            <h3 class="text-heading"><b>Grafik <img src="<?php echo base_url() ?>assets/assets/img/animate_icon/Ellipse_1.png" alt="" class="feature_icon_2 custom-animation2"></h3>
            <div class="col-md-12 center">
                <div class="container">
                    <canvas id="myChart"></canvas>
                </div>
                <script src="<?php echo base_url() . 'assets/package/dist/chart.js' ?>"></script>
                <script type="text/javascript">
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: [
                                <?php
                                if (count($agama) > 0) {
                                    foreach ($agama as $data) {
                                        echo "'" . $data->Agama . "',";
                                    }
                                }
                                ?>
                            ],
                            datasets: [{
                                label: 'Jumlah Penduduk',
                                backgroundColor: '#ADD8E6',
                                borderColor: '##93C3D2',
                                data: [
                                    <?php
                                    if (count($agama) > 0) {
                                        foreach ($agama as $data) {
                                            echo $data->Jumlah_Agama . ", ";
                                        }
                                    }
                                    ?>
                                ]
                            }]
                        },
                        options: {
                            layout: {
                                padding: {
                                    left: 50,
                                    right: 50,
                                    top: -10,
                                    bottom: 30
                                }
                            },
                            title: {
                                display: true,
                                fontSize: 25,
                                text: 'Data Agama Warga...',
                            },
                        }

                    });
                </script>
                <div class="container">
                    <canvas id="myPie"></canvas>
                </div>
                <script src="<?php echo base_url() . 'assets/package/dist/chart.js' ?>"></script>
                <script type="text/javascript">
                    var ctx2 = document.getElementById('myPie').getContext('2d');
                    var chart2 = new Chart(ctx2, {
                        type: 'pie',
                        data: {
                            labels: [
                                <?php
                                if (count($jk) > 0) {
                                    foreach ($jk as $data) {
                                        echo "'" . $data->Jenis_Kelamin . "',";
                                    }
                                }
                                ?>
                            ],
                            datasets: [{
                                label: 'Jumlah Penduduk',
                                backgroundColor: ['#ADD8E6'],
                                borderColor: '##93C3D2',
                                data: [
                                    <?php
                                    if (count($jk) > 0) {
                                        foreach ($jk as $data) {
                                            echo $data->Jumlah . ", ";
                                        }
                                    }
                                    ?>
                                ]
                            }]
                        },
                        options: {
                            layout: {
                                padding: {
                                    left: 50,
                                    right: 50,
                                    top: -10,
                                    bottom: 30
                                }
                            },
                            title: {
                                display: true,
                                fontSize: 25,
                                text: 'Data Jenis Kelamin Warga...'
                            }

                        }
                    });
                </script>
                <div class="container">
                    <canvas id="myChart4"></canvas>
                </div>
                <script src="<?php echo base_url() . 'assets/package/dist/chart.js' ?>"></script>
                <script type="text/javascript">
                    var ctx4 = document.getElementById('myChart4').getContext('2d');
                    var chart3 = new Chart(ctx4, {
                        type: 'pie',
                        data: {
                            labels: [
                                <?php
                                if (count($pendidikan) > 0) {
                                    foreach ($pendidikan as $data) {
                                        echo "'" . $data->Pendidikan . "',";
                                    }
                                }
                                ?>
                            ],
                            datasets: [{
                                label: 'Jumlah Penduduk',
                                backgroundColor: ['#ADD8E6', '#93C3D2', '#75DDD2', '#ADB1A0'],
                                borderColor: '##93C3D2',
                                data: [
                                    <?php
                                    if (count($pendidikan) > 0) {
                                        foreach ($pendidikan as $data) {
                                            echo $data->Jumlah_Pendidikan . ", ";
                                        }
                                    }
                                    ?>
                                ]
                            }]
                        },
                        options: {
                            layout: {
                                padding: {
                                    left: 50,
                                    right: 50,
                                    top: -10,
                                    bottom: 30
                                }
                            },
                            title: {
                                display: true,
                                fontSize: 25,
                                text: 'Data Pendidikan Warga...'
                            }

                        }

                    });
                </script>
                <div class="container">
                    <canvas id="myChart5"></canvas>
                </div>
                <script src="<?php echo base_url() . 'assets/package/dist/chart.js' ?>"></script>
                <script type="text/javascript">
                    var ctx5 = document.getElementById('myChart5').getContext('2d');
                    var chart3 = new Chart(ctx5, {
                        type: 'bar',
                        data: {
                            labels: [
                                <?php
                                if (count($pekerjaan) > 0) {
                                    foreach ($pekerjaan as $data) {
                                        echo "'" . $data->Pekerjaan . "',";
                                    }
                                }
                                ?>
                            ],
                            datasets: [{
                                label: 'Jumlah Penduduk',
                                backgroundColor: '#ADD8E6',
                                borderColor: '##93C3D2',
                                data: [
                                    <?php
                                    if (count($pekerjaan) > 0) {
                                        foreach ($pekerjaan as $data) {
                                            echo $data->Jumlah_Pekerjaan . ", ";
                                        }
                                    }
                                    ?>
                                ]
                            }]
                        },
                        options: {
                            layout: {
                                padding: {
                                    left: 20,
                                    right: 50,
                                    top: -10,
                                    bottom: 30
                                }
                            },
                            title: {
                                display: true,
                                fontSize: 25,
                                text: 'Data Pekerjaan Warga...'
                            }

                        }

                    });
                </script>
                <div class="container">
                    <canvas id="myChart6"></canvas>
                </div>
                <script src="<?php echo base_url() . 'assets/package/dist/chart.js' ?>"></script>
                <script type="text/javascript">
                    var ctx6 = document.getElementById('myChart6').getContext('2d');
                    var chart3 = new Chart(ctx6, {
                        type: 'pie',
                        data: {
                            labels: [
                                'Penduduk Tidak Miskin', 'Penduduk Miskin'
                            ],
                            datasets: [{
                                backgroundColor: ['#75DDD2', '#ADB1A0'],
                                borderColor: '##93C3D2',
                                data: [<?php echo ($penduduk->Jumlah_Penduduk - $katmiskin->Jumlah_Pendudukmiskin) ?>, <?php echo $katmiskin->Jumlah_Pendudukmiskin ?>]
                            }]
                        },
                        options: {
                            layout: {
                                padding: {
                                    left: 50,
                                    right: 50,
                                    top: -10,
                                    bottom: 30
                                }
                            },
                            title: {
                                display: true,
                                fontSize: 25,
                                text: 'Kategori Penduduk Miskin'
                            }

                        }

                    });
                </script>
                <!-- <div class="carousel-item">
                                            <img src="..." class="d-block w-100" alt="...">
                                        </div> -->
            </div>
    </section>

</body>
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
<script type="text/javascript" src="<?php echo base_url() ?>assets/assets/js/Chart.min.js"></script>
</body>