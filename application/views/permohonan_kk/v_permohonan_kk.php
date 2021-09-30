    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Search form -->
                <div class="navbar-form navbar-right">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-0">
                                <?php echo form_open('Surat_PermohonanKK/search') ?>
                                <input type="text" name="keyword" class="form-control" placeholder="Search">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary ">Cari</button>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navbar links -->
                <ul class="navbar-nav align-items-center  ml-md-auto ">
                    <li class="nav-item d-xl-none">
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
                        <h6 class="h2 text-white d-inline-block mb-0">SIK</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>Surat_PermohonanKK"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Surat Permohonan Kartu Keluarga</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <div class="media-body  ml-2  d-none d-lg-block">
                                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media align-items-center">
                                            <div class="media-body  ml-2  d-none d-lg-block">
                                                <span class="mb-0 text-sm  btn btn-sm btn-neutral">Tambah</span>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu  dropdown-menu-right ">
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow m-0">Jenis Permohonan</h6>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a href="<?php echo base_url() . 'Surat_PermohonanKK/btn_tambah_menumpang' ?>" class="dropdown-item">
                                            <span>Menumpang KK</span>
                                        </a>
                                        <a href="<?php echo base_url() . 'Surat_PermohonanKK/btn_tambah_kk' ?>" class="dropdown-item">
                                            <span>KK Baru</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Daftar Surat Permohonan Kartu Keluarga</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="nomor">Nomor</th>
                                    <th scope="col" class="sort" data-sort="namaP">Nomor Surat</th>
                                    <th scope="col" class="sort" data-sort="namaP">Tanggal Pengajuan</th>
                                    <th scope="col" class="sort" data-sort="nama">Tanggal Terima</th>
                                    <th scope="col" class="sort" data-sort="jenis">Jenis Permohonan</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php
                                $No = 1;
                                foreach ($kependudukan as $surat) : ?>
                                    <tr>
                                        <td><?php echo $No++ ?></td>
                                        <td><?php echo $surat->No_surat ?></td>
                                        <td><?php echo $surat->tanggal_pengajuan ?></td>
                                        <td><?php echo $surat->tanggal_terima ?></td>
                                        <td><?php echo $surat->jenis_surat ?></td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="<?php echo base_url() . 'Surat_PermohonanKK/lihat_data/' . $surat->No_surat ?>">Lihat</a>
                                                    <a class="dropdown-item" href="<?php echo base_url() . 'Surat_PermohonanKK/sunting_data/' . $surat->No_surat ?>">Sunting</a>
                                                    <a class="dropdown-item" data-toggle="modal" href="#modal_hapus<?php echo $surat->No_surat; ?>">Hapus</a>
                                                </div>
                                            </div>
                                            <div class="modal fade bd-example-modal-sm" id="modal_hapus<?php echo $surat->No_surat; ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role=document>
                                                    <div class="modal-content">
                                                        <form class="form-horizontal" method="post" action="<?php echo base_url() . 'Surat_PermohonanKK/hapus_data/' . $surat->No_surat ?>">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h4>Apakah anda yakin ingin menghapus data ini? </h4>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn" data-dismiss="modal" aria-hidden="true">Batal</button>
                                                                <button class="btn btn-danger">Hapus</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <!-- </td> -->
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                        </nav>
                    </div>
                </div>
            </div>
        </div>