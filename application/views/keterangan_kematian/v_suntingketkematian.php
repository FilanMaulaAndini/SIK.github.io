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
                        <h3 class="mb-0">Sunting Surat Keterangan Kematian</h3>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                            <form method="post" action="<?php echo base_url() . 'Surat_KetKematian/update_data' ?>">
                                <!-- <h6 class="heading-small text-muted mb-4">Data Individu</h6> -->
                                <div class="form-group">
                                    <label>NIK Pemohon</label>
                                    <input type="hidden" name="No_surat" class="form-control" value="<?php echo $surat->No_surat ?>">
                                    <input type="number" name="NIK_pemohon" class="form-control" value="<?php echo $surat->NIK_pemohon ?>">
                                </div>
                                <hr class="my-4" />
                            <h6 class="heading-small text-muted mb-4">Data Kematian</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-control-label" for="input-hari">Hari</label>
                                    <select name="Hari_mati" class="form-control">
                                        <option value="<?php echo $surat->Hari_mati ?>"><?php echo $surat->Hari_mati ?></option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jum'at">Jum'at</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>    
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-control-label" for="input-tanggal">Tanggal</label>
                                    <input type="date" name="Tanggal_kematian" class="form-control" value="<?php echo $surat->Tanggal_kematian ?>">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label class="form-control-label" for="input-sebab">Disebabkan oleh karena</label>
                                    <input type="text" name="Sebab_kematian" class="form-control" value="<?php echo $surat->Sebab_kematian ?>">
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label class="form-control-label" for="input-lokasi">Di</label>
                                    <input type="text" name="Lokasi_kematian" class="form-control" value="<?php echo $surat->Lokasi_kematian ?>">
                                    </div>
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

