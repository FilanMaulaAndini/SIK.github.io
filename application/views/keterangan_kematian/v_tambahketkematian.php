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
                        <h3 class="mb-0">Tambah Surat Keterangan Kematian</h3>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <form method="post" action="<?php echo base_url() . 'Surat_KetKematian/tambah_data'; ?>">
                            <input type="hidden" name="jenis_surat" class="form-control" value="Surat Keterangan Kematian">
                            <input type="hidden" name="Status_keberadaan" class="form-control" value="Meninggal">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-nik">NIK Pemohon</label>
                                        <input type="number" name="NIK" class="form-control" value="<?php echo set_value('NIK'); ?>" required>
                                        <div class="headline text-red"> <?php echo validation_errors(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <h6 class="heading-small text-muted mb-4">Data Kematian</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-hari">Hari</label>
                                            <select name="Hari_mati" class="form-control">
                                                <option value="" selected>-pilih-</option>
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
                                            <input type="date" name="Tanggal_kematian" class="form-control" value="<?php echo set_value('Tanggal_kematian'); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-sebab">Disebabkan oleh karena</label>
                                            <input type="text" name="Sebab_kematian" class="form-control" value="<?php echo set_value('Sebab_kematian'); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-lokasi">Di</label>
                                            <input type="text" name="Lokasi_kematian" class="form-control" value="<?php echo set_value('Lokasi_kematian'); ?>" required>
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