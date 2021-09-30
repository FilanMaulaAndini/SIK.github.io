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
                        <h3 class="mb-0">Tambah Surat Keterangan Lahir</h3>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <form method="post" action="<?php echo base_url() . 'Surat_KetLahir/tambah_data'; ?>">
                            <input type="hidden" name="jenis_surat" class="form-control" value="Surat Keterangan Lahir">
                            <div class="pl-lg-2">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nik">NIK Pemohon</label>
                                            <input type="number" name="NIK_pemohon" class="form-control" required>
                                            <div class="headline text-red"> <?php echo validation_errors(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" />
                            <h6 class="heading-small text-muted mb-4">Data Kelahiran</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nama">Nama Lengkap</label>
                                            <input type="text" name="Nama_lahir" class="form-control" value="<?php echo set_value('Nama_lahir'); ?>" required>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jam">Jam Kelahiran</label>
                                            <input type="time" name="Jam_lahir" class="form-control"value="<?php echo set_value('Jam_lahir'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-hari">Hari Kelahiran</label>
                                            <select name="Hari_lahir" class="form-control" required>
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
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tempatlahir">Tempat Lahir</label>
                                            <input type="text" name="Tempat_lahir" class="form-control"value="<?php echo set_value('Tempat_lahir'); ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tanggallahir">Tanggal Lahir</label>
                                            <input type="date" name="Tanggal_lahir" class="form-control"value="<?php echo set_value('Tanggal_Lahir'); ?>" required> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jk">Jenis Kelamin</label>
                                            <select name="Jenis_kelamin" class="form-control" required>
                                                <option value="" selected>-pilih-</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jk">Nama Ayah Kandung</label>
                                            <input type="text" name="Nama_ayah" class="form-control " value="<?php echo set_value('Nama_ayah'); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jk">Nama Ibu Kandung</label>
                                            <input type="text" name="Nama_ibu" class="form-control" value="<?php echo set_value('Nama_ibu'); ?>" required> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jk">Anak ke-</label>
                                            <input type="number" name="Anak_ke" class="form-control" value="<?php echo set_value('Anak_ke'); ?>">
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