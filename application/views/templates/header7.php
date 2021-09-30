<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sistem Informasi Kependudukan</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url() ?>assets/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="<?php echo base_url() ?>assets/assets/img/brand/logo.png" class="navbar-brand-img">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() . 'Data_kependudukan/index'; ?>">
               <i class="ni ni-single-02 text-primary"></i>
                <span class="nav-link-text">Data Kependudukan</span>
              </a>
            </li>
            <li class="nav-item">
              <div class="accordion" id="accordionGroup">
                <a class="nav-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <i class="ni ni-tv-2 text-primary"></i>
                  <span class="nav-link-text">Surat Permohonan</span>
                </a>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionGroup">
                  <div class="card-body">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Surat_KetLahir/index'; ?>">
                          <span>Surat Keterangan Lahir</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Surat_KetMenikah/index'; ?>">
                          <span class="nav-link-text">Surat Keterangan Menikah</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Surat_PengantarSKCK/index'; ?>">
                          <span class="nav-link-text">Surat Pengantar SKCK</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Surat_KetWali/index'; ?>">
                          <span class="nav-link-text">Surat Keterangan Wali</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Surat_KetBelumMenikah/index'; ?>">
                          <span class="nav-link-text">Surat Keterangan Belum Menikah</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url() . 'Surat_KetJandaDuda/index'; ?>">
                          <span class="nav-link-text">Surat Keterangan Janda/Duda</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Surat_KetTidakMampu/index'; ?>">
                          <span class="nav-link-text">Surat Keterangan Tidak Mampu</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Surat_PermohonanKTP/index'; ?>">
                          <span class="nav-link-text">Surat Permohonan KTP</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Surat_PermohonanKK/index'; ?>">
                          <span class="nav-link-text">Surat Permohonan KK</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Surat_PermohonanAktaKelahiran/index'; ?>">
                          <span class="nav-link-text">Surat Permohonan Akta Kelahiran</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() . 'Surat_KetKematian/index'; ?>">
                          <span class="nav-link-text">Surat Keterangan Kematian</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() . 'Ringkasan_penduduk/index'; ?>">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Ringkasan Data Penduduk</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() . 'Informasi_desa/index'; ?>">
                <i class="ni ni-tv-2 text-default"></i>
                <span class="nav-link-text">Informasi Desa</span>
              </a>
            </li>
        </div>
      </div>
    </div>
  </nav>
  <div class="main-content" id="panel">
