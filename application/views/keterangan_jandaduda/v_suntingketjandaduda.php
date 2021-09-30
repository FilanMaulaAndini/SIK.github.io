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
                        <h3 class="mb-0">Sunting Surat Keterangan Janda/Duda</h3>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <div class="table-responsive">
                            <form method="post" action="<?php echo base_url() . 'Surat_KetJandaDuda/update_data' ?>">
                                <!-- <h6 class="heading-small text-muted mb-4">Data Individu</h6> -->
                                <div class="form-group">
                                    <label>NIK Pemohon</label>
                                    <input type="hidden" name="No_surat" class="form-control" value="<?php echo $surat->No_surat ?>">
                                    <input type="number" name="NIK_pemohon" class="form-control" value="<?php echo $surat->NIK_pemohon ?>">
                                </div>
                                <div class="form-group">
                                    <label>Status Kawin</label>
                                    <select name="Status_perceraian" class="form-control">
                                        <option value="<?php echo $surat->Status_perceraian ?>"><?php echo $surat->Status_perceraian ?></option>
                                        <option value="Janda (CERAI MATI)">Janda (CERAI MATI)</option>
                                        <option value="Janda (CERAI HIDUP)">Janda (CERAI HIDUP)</option>
                                        <option value="Duda (CERAI MATI)">Duda (CERAI MATI)</option>
                                        <option value="Duda (CERAI HIDUP)">Duda (CERAI HIDUP)</option>
                                    </select>
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
        </div>
