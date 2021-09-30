<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->



</head>

<body>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <div class="main-content" id="panel">
            <!-- Topnav -->
            <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Search form -->
                        <div class="navbar-form navbar-right">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mb-0">
                                        <?php echo form_open('Surat_PermohonanKTP/search') ?>
                                        <input type="text" name="keyword" class="form-control" placeholder="Search">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                        <?php echo form_close() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Navbar links -->
                        <ul class="navbar-nav align-items-center  ml-md-auto ">
                            <li class="nav-item d-xl-none">
                                <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                            <li class="nav-item dropdown">
                                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media align-items-center">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img alt="Image placeholder" src="<?php echo base_url() ?>assets/assets/img/brand/favicon.png">
                                        </span>
                                        <div class="media-body  ml-2  d-none d-lg-block">
                                            <span class="mb-0 text-sm  font-weight-bold">Operator</span>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu  dropdown-menu-right ">
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Selamat Datang!</h6>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="<?= base_url(); ?>Login/logout" class="dropdown-item">
                                        <i class="ni ni-user-run"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">
                            </div>
                            <div class="col-lg-6 col-5 text-right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--6">
                <div class="col">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Jumlah KK</h5>
                        </div>
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            <div class="container">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="nomor">Nomor</th>
                                                <th scope="col" class="sort" data-sort="namaP">Nomor KK</th>
                                                <th scope="col" class="sort" data-sort="namaP">Nama Kepala Keluarga</th>
                                                <th scope="col" class="sort" data-sort="nama">Jumlah Anggota KK</th>
                                                <th scope="col" class="sort" data-sort="statuskawin"></th>
                                                <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <?php
                                            $No = $this->uri->segment('3') + 1;
                                            foreach ($KK as $data) : ?>
                                                <tr>
                                                    <td><?php echo $No++ ?></td>
                                                    <td><?php echo $data->No_KK ?></td>
                                                    <td><?php echo $data->Nama_KepalaKeluarga ?></td>
                                                    <td><?php echo $data->Jumlah_KK ?></td>
                                                    <td><?php echo anchor('Ringkasan_penduduk/lihat_kk/' . $data->No_KK, '<div class="btn btn-sm btn-neutral">Lihat Anggota</div>') ?>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <h7 class="mb-5">Total <?php echo $jumlahKK ?> KK dari <?php echo $penduduk->Jumlah_Penduduk ?> penduduk</h7>
                                    <div class="row">
                                        <div class="col">
                                            <!--Tampilkan pagination-->
                                            <?php echo $pagination; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <!-- Card footer -->
                        <div class="card-footer py-4">
                            <div class="container">
                                <div class="col-md-10 center">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <!-- <div class="d-block"> -->
                                                <div class="chart-container" style="width:100%;margin:15px auto">
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
                                                                // boxWidth : 20,
                                                                data: [
                                                                    <?php
                                                                    if (count($agama) > 0) {
                                                                        foreach ($agama as $data) {
                                                                            echo $data->Jumlah_Agama . ", ";
                                                                        }
                                                                    }
                                                                    ?>
                                                                ]
                                                            }],
                                                        },
                                                        options: {
                                                            layout: {
                                                                padding: {
                                                                    left: 50,
                                                                    right: 30,
                                                                    top: 0,
                                                                    bottom: 0
                                                                }
                                                            },
                                                            title: {
                                                                display: true,
                                                                fontSize: 20,
                                                                text: 'Grafik Persebaran Agama',
                                                            },
                                                        }

                                                    });
                                                </script>
                                                <!-- </div> -->
                                            </div>
                                            <div class="carousel-item">
                                                <div class="chart-container" style="width:100%;margin:15px auto">
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
                                                                    left: 20,
                                                                    right: 50,
                                                                    top: 0,
                                                                    bottom: 0
                                                                }
                                                            },
                                                            title: {
                                                                display: true,
                                                                fontSize: 20,
                                                                text: 'Grafik Persebaran Jenis Kelamin'
                                                            }

                                                        }
                                                    });
                                                </script>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="chart-container" style="width:100%;margin:15px auto">
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
                                                                    left: 20,
                                                                    right: 50,
                                                                    top: 0,
                                                                    bottom: 0
                                                                }
                                                            },
                                                            title: {
                                                                display: true,
                                                                fontSize: 20,
                                                                text: 'Grafik Persebaran Pendidikan'
                                                            }

                                                        }

                                                    });
                                                </script>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="chart-container" style="width:100%;margin:15px auto">
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
                                                                    top: 0,
                                                                    bottom: 0
                                                                }
                                                            },
                                                            title: {
                                                                display: true,
                                                                fontSize: 20,
                                                                text: 'Grafik Persebaran Pekerjaan'
                                                            }

                                                        }

                                                    });
                                                </script>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="chart-container" style="width:100%;margin:15px auto">
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
                                                                    left: 20,
                                                                    right: 50,
                                                                    top: 0,
                                                                    bottom: 0
                                                                }
                                                            },
                                                            title: {
                                                                display: true,
                                                                fontSize: 20,
                                                                text: 'Kategori Penduduk Miskin'
                                                            }

                                                        }

                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>