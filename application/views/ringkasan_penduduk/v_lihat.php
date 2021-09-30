<div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
            </div>
        </div>
    </nav>
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
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
                        <h3 class="mb-0">Daftar Anggota Keluarga</h3>
                    </div>
                    <!-- Light table -->
                    <?= $this->session->flashdata('success'); ?>
                    <?= $this->session->flashdata('hapus'); ?>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="nomor">Nomor</th>
                                    <th scope="col" class="sort" data-sort="nomor">Nomor KK</th>
                                    <th scope="col" class="sort" data-sort="namaP">NIK</th>
                                    <th scope="col" class="sort" data-sort="nomor">Nama Lengkap</th>
                                    <th scope="col" class="sort" data-sort="namaP">Status Hubungan dalam Keluarga</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php
                                $No = 1;
                                foreach ($detail as $surat) : ?>
                                    <tr>
                                        <td><?php echo $No++ ?></td>
                                        <td><?php echo $surat->No_KK ?></td>
                                        <td><?php echo $surat->NIK ?></td>
                                        <td><?php echo $surat->Nama_Lengkap ?></td>
                                        <td><?php echo $surat->SHDK ?></td>
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