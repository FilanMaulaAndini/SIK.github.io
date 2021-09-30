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
                        <h3 class="mb-0">Sunting Surat Permohonan KK (Menumpang)</h3>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                            <form method="post" action="<?php echo base_url() . 'Surat_PermohonanKK/update_data_menumpang' ?>">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nik">Nomor KK Lama</label>
                                            <input type="hidden" name="No_surat" class="form-control" value="<?php echo $kependudukan2->No_surat ?>">
                                            <input type="hidden" name="jenis_surat" class="form-control" value="<?php echo $kependudukan2->jenis_surat ?>">
                                            <input type="number" name="KK_Lama" class="form-control" value="<?php echo $kependudukan2->KK_Lama ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tanggallahir">NIK Kepala Keluarga Lama</label>
                                            <input type="number" name="NIK_KK_Lama" class="form-control" value="<?php echo $kependudukan2->NIK_KK_Lama ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nik">Nomor KK yang ditempati</label>
                                            <input type="number" name="KK_ditempati" class="form-control" value="<?php echo $kependudukan2->KK_ditempati ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tanggallahir">NIK Kepala Keluarga yang ditempati</label>
                                            <input type="number" name="NIK_KK_ditempati" class="form-control" value="<?php echo $kependudukan2->NIK_KK_ditempati ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tanggallahir">Alasan Permohonan</label>
                                            <input type="text" name="Alasan" class="form-control" value="<?php echo $kependudukan2->Alasan ?>">
                                        </div>
                                    </div>
                                </div>

                                <?php
                                $No = 1;
                                foreach ($kependudukan as $surat) : ?>

                                    <div id="fielda">
                                        <div id="fielda0">
                                            <!-- Text input-->
                                            <hr class="my-4" />
                                            <h6 class="heading-small text-muted mb-4">Daftar Anggota Keluarga Pemohon</h6>
                                            <div class="pl-lg-4">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Nama Lengkap</label>
                                                        <input type="hidden" name="id[]" class="form-control" value="<?php echo $surat['id'] ?>">
                                                        <input type="text" name="nama[]" class="form-control" value="<?php echo $surat['nama'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Jenis Kelamin</label>
                                                        <select name="jk[]" class="form-control">
                                                            <option value="<?php echo $surat['jk'] ?>"><?php echo $surat['jk'] ?></option>
                                                            <option value="Laki Laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Tempat Lahir</label>
                                                        <input type="text" name="tempat_lahir[]" class="form-control" value="<?php echo $surat['tempat_lahir'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Tanggal Lahir</label>
                                                        <input type="date" name="tanggal_lahir[]" class="form-control" value="<?php echo $surat['tanggal_lahir'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Agama</label>
                                                        <select name="agama[]" class="form-control">
                                                            <option value="<?php echo $surat['agama'] ?>"><?php echo $surat['agama'] ?></option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen">Kristen</option>
                                                            <option value="Katholik">Katholik</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Budha">Budha</option>
                                                            <option value="Aliran Kepercayaan">Aliran Kepercayaan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Pendidikan Terakhir</label>
                                                        <select name="pendidikan[]" class="form-control">
                                                            <option value="<?php echo $surat['pendidikan'] ?>"><?php echo $surat['pendidikan'] ?></option>
                                                            <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                                            <option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option>
                                                            <option value="SD/Sederajat">SD/Sederajat</option>
                                                            <option value="SMP/Sederajat">SMP/Sederajat</option>
                                                            <option value="SMA/Sederajat">SMA/Sederajat</option>
                                                            <option value="D1">D1</option>
                                                            <option value="D2">D2</option>
                                                            <option value="D3">D3</option>
                                                            <option value="S1">S1</option>
                                                            <option value="S2">S2</option>
                                                </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Pekerjaan</label>
                                                        <input type="text" name="pekerjaan[]" class="form-control" value="<?php echo $surat['pekerjaan'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Status Kawin</label>
                                                        <select name="status_kawin[]" class="form-control">
                                                            <option value="<?php echo $surat['status_kawin'] ?>"><?php echo $surat['status_kawin'] ?></option>
                                                            <option value="Menikah">Menikah</option>
                                                            <option value="Belum Menikah">Belum Menikah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Status Hubungan dalam Keluarga</label>
                                                        <select name="shdk[]" class="form-control">
                                                            <option value="<?php echo $surat['shdk'] ?>"><?php echo $surat['shdk'] ?></option>
                                                            <option value="Kepala Keluarga">Kepala Keluarga</option>
                                                            <option value="Istri">Istri</option>
                                                            <option value="Anak">Anak</option>
                                                            <option value="Menantu">Menantu</option>
                                                            <option value="Mertua">Mertua</option>
                                                            <option value="Orang Tua">Orang Tua</option>
                                                            <option value="Suami">Suami</option>
                                                            <option value="Cucu">Cucu</option>
                                                            <option value="Famili Lain">Famili Lain</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="heading-small text-muted mb-4">Dokumen Imigrasi</h6>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">No. Paspor</label>
                                                        <input type="number" name="paspor[]" class="form-control" value="<?php echo $surat['paspor'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">KITAS/KIT AP</label>
                                                        <input type="text" name="kitas[]" class="form-control" value="<?php echo $surat['kitas'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="heading-small text-muted mb-4">Data Orang Tua</h6>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Nama Ayah</label>
                                                        <input type="text" name="ayah[]" class="form-control" value="<?php echo $surat['ayah'] ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="input-nik">Nama Ibu</label>
                                                        <input type="text" name="ibu[]" class="form-control" value="<?php echo $surat['ibu'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end field0-->
                                    </div>
                                </div>
                                <?php endforeach; ?>

                                <div class="text-right">
                                    <input type="button" class="btn btn-secondary" value="Batal" onclick="history.back(-1)" />
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

