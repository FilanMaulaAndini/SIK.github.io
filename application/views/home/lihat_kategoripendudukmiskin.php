<body>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Informasi Desa</h2>
                            <h5>Informasi Desa<span></span>Kategori Penduduk Miskin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading"><b>Kategori Penduduk Miskin<img src="<?php echo base_url() ?>assets/assets/img/animate_icon/Ellipse_5.png" alt="" class="feature_icon_2 custom-animation2"></h3>
            <p class="sample-text" style='text-align:justify;'>
                Kemiskinan merupakan suatu kondisi dimana memiliki <b>keterbatasan</b> atau <b>ketidakmampuan</b> dalam memenuhi kebutuhan
                pokok layaknya makanan, pakaian, tempat berlindung, pendidikan, dan kesehatan. <i>Faktor</i> yang mempengaruhi
                kemiskinan seperti adanya kelangkaan alat pemenuh kebutuhan pokok maupun sulitnya akses terhadap pendidikan
                dan pekerjaan.
            </p>
            <p class="sample-text" style='text-align:justify;'>
                Oleh karena itu untuk memudahkan pendataan terkait penduduk miskin, BPS <i>(Badan Pusat Statistika)</i> telah menetapkan
                kriteria penduduk miskin. Berdasarkan <u>Keputusan Menteri Sosial Republik Indonesia Nomor : 146/HUK/2013 tentang
                    Penetapan Kriteria dan Pendataan Fakir Miskin dan Orang Tidak Mampu</u>, terdiri atas <b>14 Kriteria Kemiskinan</b>.
                14 Kriteria Kemiskinan Menurut KEMENSOS RI, meliputi:
                <ol><br>
                    <li>Luas Lantai Bangunan Tempat Tinggal Kurang dari 8 m2 per Orang.</li>
                    <li>Jenis Lantai Tempat Tinggal Terbuat dari Tanah/Bambu/Kayu Murahan.</li>
                    <li>Jenis Dinding Tempat Tinggal dari Bambu/Rumbia/Kayu Berkualitas Rendah/Tembok Tanpa Diplester.</li>
                    <li>Tidak Memiliki Fasilitas Buang Air Besar/Bersama-sama dengan Rumah Tangga Lain.</li>
                    <li>Sumber Penerangan Rumah Tangga tidak Menggunakan Listrik.</li>
                    <li>Sumber Air Minum berasal dari Sumur/Mata Air tidak terlindung/Sungai/Air Hujan.</li>
                    <li>Bahan Bakar untuk Memasak sehari-hari adalah Kayu Bakar/Arang/Minyak Tanah.</li>
                    <li>Hanya Mengkonsumsi Daging/Susu/Ayam dalam satu kali Seminggu.</li>
                    <li>Hanya Membeli Satu Stel Pakaian Baru dalam Setahun.</li>
                    <li>Hanya Sanggup Makan Sebanyak Satu/Dua Kali dalam Sehari.</li>
                    <li>Tidak Sanggup Membayar Biaya Pengobatan di Puskesmas/Poliklinik.</li>
                    <li>Sumber Penghasilan Kepala Rumah Tangga adalah : Petani dengan Luas Lahan 500 m2,
                        Buruh Tani, Nelayan, Buruh Bangunan, Buruh Perkebunan dan atau Pekerjaan Lainnya
                        dengan Pendapatan dibawah Rp. 600.000,- per Bulan.</li>
                    <li>Pendidikan Tertinggi Kepala Rumah Tangga : Tidak Sekolah/Tidak Tamat SD/Tamat SD.</li>
                    <li>Tidak Memiliki Tabungan/Barang yang Mudah dijual dengan Minimal Rp. 500.000,-
                        seperti Sepeda Motor Kredit/Non Kredit, Emas, Ternak, Kapal Motor, atau Barang Modal Lainnya.</li>
                </ol>
            </p>
            <img src="<?php echo base_url() ?>assets/assets/img/animate_icon/Ellipse_4.png" alt="" class="feature_icon_1 custom-animation1">
            <h3 class="text-heading"><b>Grafik Penduduk Miskin Desa Gondowangi<img src="<?php echo base_url() ?>assets/assets/img/animate_icon/Ellipse_1.png" alt="" class="feature_icon_2 custom-animation2"></h3>
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
                            backgroundColor: ['#A5C8E1', '#B5A5E1'],
                            borderColor: '##11AA22',
                            data: [<?php echo ($penduduk->Jumlah_Penduduk - $katmiskin->Jumlah_Pendudukmiskin) ?>, <?php echo $katmiskin->Jumlah_Pendudukmiskin ?>]
                        }]
                    },
                    // options: {
                    //     layout: {
                    //         padding: {
                    //             left: 50,
                    //             right: 50,
                    //             top: -10,
                    //             bottom: 30
                    //         }
                    //     }
                        // title: {
                        //     display: true,
                        //     fontSize: 25,
                        //     text: 'Kategori Penduduk Miskin'
                        // }

                    // }

                });
            </script>

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