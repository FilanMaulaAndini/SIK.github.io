<div class="main-content" id="panel">
    <!-- Header -->
    <!-- Header -->
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
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Tambah Surat Keterangan Menikah</h3>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <form method="post" action="<?php echo base_url() . 'Surat_KetMenikah/tambah_data'; ?>">
                            <input type="hidden" name="jenis_surat" class="form-control" value="Surat Keterangan Menikah">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <!-- <h6 class="heading-small text-muted mb-4">Data Individu</h6> -->
                                <!-- <div class="pl-lg-4"> -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-niksuami">NIK Suami</label>
                                            <input type="number" name="NIK_suami" class="form-control" required>
                                            <div class="headline text-red"> <?php echo validation_errors(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nama">NIK Istri</label>
                                            <input type="number" name="NIK_istri" class="form-control" required>
                                            <div class="headline text-red"> <?php echo validation_errors(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tanggalmenikah">Tanggal Menikah</label>
                                            <input type="date" name="Tanggal_menikah" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <input type="button" class="btn btn-secondary" value="Batal" onclick="history.back(-1)" />
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                    </div>
                </div>
            </div>
            </form>
        </div>