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
                        <h3 class="mb-0">Tambah Surat Permohonan KTP</h3>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <div class="table-responsive">
                            <form method="post" action="<?php echo base_url() . 'Surat_PermohonanKTP/tambah_data'; ?>">
                                <input type="hidden" name="jenis_surat" class="form-control" value="Surat Permohonan KTP">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-nik">NIK Pemohon</label>
                                        <input type="number" name="NIK_pemohon" class="form-control" required>
                                        <div class="headline text-red"> <?php echo validation_errors(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <input type="button" class="btn btn-secondary" value="Batal" onclick="history.back(-1)" />
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>