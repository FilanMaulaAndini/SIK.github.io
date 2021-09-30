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
                        <h3 class="mb-0">Sunting Informasi Desa</h3>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <form method="post" action="<?php echo base_url() . 'Informasi_desa/update_data' ?>">
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="hidden" name="id_info" class="form-control" value="<?php echo $info->id_info ?>">
                                <input type="text" name="Judul" class="form-control" value="<?php echo $info->Judul ?>">
                            </div>
                            <div class="form-group">
                                <label>Isi</label>
                                <textarea rows="12" name="Isi" class="form-control"><?php echo $info->Isi ?></textarea>
                                <!-- <input type="hidden" name="id_info" class="form-control" value="<?php echo $kependudukan->id_info ?>">
                                <input type="text" name="Judul" class="form-control" value="<?php echo $kependudukan->Judul ?>"> -->
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