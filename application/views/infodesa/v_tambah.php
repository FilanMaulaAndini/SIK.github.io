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
                        <h3 class="mb-0">Tambah Informasi Desa</h3>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <form method="post" action="<?php echo base_url() . 'Informasi_desa/tambah_data'; ?>">
                            <!-- <input type="hidden" name="jenis_surat" class="form-control" value="Surat Pengantar SKCK"> -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-nik">Judul</label>
                                        <input type="text" name="Judul" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-nik">Isi</label>
                                        <textarea rows="12" name="Isi" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <input type="button" class="btn btn-secondary" value="Batal" onclick="history.back(-1)" />
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>