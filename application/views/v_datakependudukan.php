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
                <?php echo form_open('Data_kependudukan/search') ?>
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
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>Data_kependudukan"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Kependudukan</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <div class="media-body  ml-2  d-none d-lg-block">
                  <a class="mb-0 text-sm  btn btn-sm btn-neutral" href="<?= base_url(); ?>Data_kependudukan/btn_tambah">Tambah</a>
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
            <h3 class="mb-0">Daftar Data Kependudukan</h3>
          </div>
          <!-- Light table -->

          <?= $this->session->flashdata('success'); ?>
          <?= $this->session->flashdata('hapus'); ?>

          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="nomor">Nomor</th>
                  <th scope="col" class="sort" data-sort="nokk">Nomor KK</th>
                  <th scope="col" class="sort" data-sort="nik">NIK</th>
                  <th scope="col" class="sort" data-sort="alamat">Nama Lengkap</th>
                  <th scope="col" class="sort" data-sort="jk">Jenis Kelamin</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                <?php
                // $No = 1;
                $No = $this->uri->segment('3') + 1;
                foreach ($kependudukan as $data_penduduk) : ?>
                  <tr>
                    <td><?php echo $No++ ?></td>
                    <td><?php echo $data_penduduk->No_KK ?></td>
                    <td><?php echo $data_penduduk->NIK ?></td>
                    <td><?php echo $data_penduduk->Nama_Lengkap ?></td>
                    <td><?php echo $data_penduduk->Jenis_Kelamin ?></td>
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <!-- <a class="dropdown-item" href="<?= base_url(); ?>Data_kependudukan/detil_data">Lihat</a> -->
                          <a class="dropdown-item" href="<?php echo base_url() . 'Data_kependudukan/lihat_data/' . $data_penduduk->NIK ?>">Lihat</a>
                          <a class="dropdown-item" href="<?php echo base_url() . 'Data_kependudukan/sunting_data/' . $data_penduduk->NIK ?>">Sunting</a>
                          <!-- <a class="dropdown-item" href="<?php echo base_url() . 'Data_kependudukan/hapus_data/' . $data_penduduk->NIK ?>">Hapus</a> -->
                          <a class="dropdown-item" data-toggle="modal" href="#modal_hapus<?php echo $data_penduduk->NIK; ?>">Hapus</a>
                        </div>
                      </div>
                      <div class="modal fade bd-example-modal-sm" id="modal_hapus<?php echo $data_penduduk->NIK ?>" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role=document>
                          <div class="modal-content">
                            <form class="form-horizontal" method="post" action="<?php echo base_url() . 'Data_kependudukan/hapus_data/' . $data_penduduk->NIK ?>">
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
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <div class="row">
              <div class="col">
                <!--Tampilkan pagination-->
                <?php echo $pagination; ?>
              </div>
            </div>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
            </nav>
          </div>
        </div>
      </div>
    </div>