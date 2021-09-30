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
                        <h3 class="mb-0">Tambah Data Kependudukan</h3>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <form method="post" action="<?php echo base_url() . 'Data_kependudukan/tambah_data'; ?>">
                            <!-- <form method="post" action=""> -->
                            <h6 class="heading-small text-muted mb-4">Data Individu</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nokk">Nomor Kartu Keluarga</label>
                                            <input type="number" name="No_KK" class="form-control" value="<?php echo set_value('No_KK'); ?>" required>
                                            <div class="headline text-red"> <?php echo form_error('No_KK'); ?>
                                            </div>
                                            <!-- <?php echo validation_errors(); ?> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nik">NIK</label>
                                            <input type="number" name="NIK" class="form-control" value="<?php echo set_value('NIK'); ?>" required>
                                            <div class="headline text-red"> <?php echo form_error('NIK'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-nama">Nama Lengkap</label>
                                            <input type="text" name="Nama_Lengkap" class="form-control" value="<?php echo set_value('Nama_Lengkap'); ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Jenis Kelamin</label>
                                    <select name="Jenis_Kelamin" class="form-control" value="<?php echo set_value('Jenis_Kelamin'); ?>" required>
                                        <option value="" selected disabled>- pilih -</option>
                                        <option value="Laki-Laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class=" row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tempatlahir">Tempat Lahir</label>
                                            <input type="text" name="Tempat_Lahir" class="form-control"value="<?php echo set_value('Tempat_lahir'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tanggallahir">Tanggal Lahir</label>
                                            <input type="date" name="Tanggal_Lahir" class="form-control" value="<?php echo set_value('Tanggal_Lahir'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-agama">Agama</label>
                                            <select name="Agama" class="form-control" value="<?php echo set_value('Agama'); ?>">
                                                <option value="" selected disabled>- pilih -</option>
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
                                            <label class="form-control-label" for="input-tel">Telepon</label>
                                            <input type="number" name="No_Telp" class="form-control" value="<?php echo set_value('No_Telp'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-pendidikan">Pendidikan</label>
                                            <select name="Pendidikan" class="form-control" value="<?php echo set_value('Pendidikan'); ?>"required>
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                                <option value="SD/Sederajat">SD/Sederajat</option>
                                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                                <option value="Diploma I/II">Diploma I/II</option>
                                                <option value="Akademi/Diploma III/S. Muda">Akademi/Diploma III/S. Muda</option>
                                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                                <option value="Strata II">Strata II</option>
                                                <option value="Strata III">Strata III</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-pekerjaan">Pekerjaan</label>
                                            <input type="text" name="Pekerjaan" class="form-control" value="<?php echo set_value('Pekerjaan'); ?>"required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-goldar">Golongan Darah</label>
                                            <select name="Gol_darah" class="form-control" value="<?php echo set_value('Gol_darah'); ?>">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="O">O</option>
                                                <option value="AB">AB</option>
                                                <option value="Tidak Tahu">Tidak Tahu</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-status">Status Kawin</label>
                                            <select name="Status_kawin" class="form-control" value="<?php echo set_value('Status_kawin'); ?>">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Belum Kawin">Belum Kawin</option>
                                                <option value="Pernah Kawin">Pernah Kawin</option>
                                                <option value="Sudah Kawin">Sudah Kawin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tglkawin">Tanggal Kawin</label>
                                            <input type="date" name="Tanggal_kawin" class="form-control" value="<?php echo set_value('Tanggal_kawin'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-sdhk">Status Hubungan Dalam Keluarga</label>
                                            <select name="SHDK" class="form-control" value="<?php echo set_value('SHDK'); ?>">
                                                <option value="" selected disabled>- pilih -</option>
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
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-sk">Status Keberadaan</label>
                                            <input type="text" name="Status_keberadaan" class="form-control"value="<?php echo set_value('Status_keberadaan'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Address -->
                            <hr class="my-4" />
                            <h6 class="heading-small text-muted mb-4">Alamat</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-rt">No RT</label>
                                            <input type="number" name="No_RT" class="form-control" value="<?php echo set_value('No_RT'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-rw">No RW</label>
                                            <input type="number" name="No_RW" class="form-control" value="<?php echo set_value('No_RW'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-kodepos">Kode Pos</label>
                                            <input type="number" name="Kode_pos" class="form-control" value="<?php echo set_value('Kode_pos'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-dusun">Dusun</label>
                                            <input name="Dusun" class="form-control" value="<?php echo set_value('Dusun'); ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Kategori Penduduk -->
                            <hr class="my-4" />
                            <h6 class="heading-small text-muted mb-4">Kategori Penduduk</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-rt">Luas Lantai Bangunan Tempat Tinggal </label>
                                            <select name="Luas_lantai" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Kurang dari 8 meter persegi">Kurang dari 8 meter persegi</option>
                                                <option value="Sama dengan 8 meter persegi">Sama dengan 8 meter persegi</option>
                                                <option value="Lebih dari 8 meter persegi">Lebih dari 8 meter persegi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jenislantai">Jenis Lantai Tempat Tinggal Terbuat dari</label>
                                            <select name="Jenis_lantai" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Tanah">Tanah</option>
                                                <option value="Bambu">Bambu</option>
                                                <option value="Kayu Murahan">Kayu Murahan</option>
                                                <option value="Ubin Keramik">Ubin Keramik</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-jenisdinding">Jenis Dinding Tempat Tinggal dari</label>
                                            <select name="Jenis_dinding" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Bambu">Bambu</option>
                                                <option value="Rumbia">Rumbia</option>
                                                <option value="Kayu Berkualitas Rendah">Kayu Berkualitas Rendah</option>
                                                <option value="Tembok Tanpa Diplester">Tembok Tanpa Diplester</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-fasbab">Fasilitas Buang Air Besar</label>
                                            <select name="Fasilitas_buang_air" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Milik Sendiri">Milik Sendiri</option>
                                                <option value="Tidak memiliki">Tidak memiliki</option>
                                                <option value="Bersama sama RT lain">Bersama sama RT lain</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-listrik">Sumber Penerangan Rumah Tangga</label>
                                            <select name="Sumber_penerangan" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Dengan Listrik">Dengan Listrik</option>
                                                <option value="Tanpa Listrik">Tanpa Listrik</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-sumberair">Sumber Air Minum berasal dari </label>
                                            <select name="Sumber_air_minum" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Sumur/Mata Air tidak terlindung">Sumur/Mata Air tidak terlindung</option>
                                                <option value="Sungai">Sungai</option>
                                                <option value="Air Hujan">Air Hujan</option>
                                                <option value="PDAM">PDAM</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-bahanbakar">Bahan Bakar untuk Memasak sehari-hari</label>
                                            <select name="BB_memasak" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Kayu Bakar">Kayu Bakar</option>
                                                <option value="Arang">Arang</option>
                                                <option value="Minyak Tanah">Minyak Tanah</option>
                                                <option value="Gas/Elpiji">Gas/Elpiji</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-konsumsi">Hanya Mengkonsumsi Daging/Susu/Ayam dalam satu kali Seminggu</label>
                                            <select name="Konsumsi_daging" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-pakaian">Hanya Membeli Satu Stel Pakaian Baru dalam Setahun</label>
                                            <select name="Satu_pakaian_pertahun" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-makan">Hanya Sanggup Makan Sebanyak Satu/Dua Kali dalam Sehari</label>
                                            <select name="Satudua_kali_makan" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-berobat">Tidak Sanggup Membayar Biaya Pengobatan di Puskesmas/Poliklinik</label>
                                            <select name="Bayar_pengobatan" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-penghasilan">Sumber Penghasilan Kepala Rumah Tangga adalah</label>
                                            <select name="Sumber_penghasilan_Kepala_RT" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Petani dengan Luas Lahan 500 m2">Petani dengan Luas Lahan 500 m2</option>
                                                <option value="Buruh Tani/Nelayan">Buruh Tani/Nelayan</option>
                                                <option value="Buruh Bangunan/Perkebunan">Buruh Bangunan/Perkebunan</option>
                                                <option value="Pendapatan dibawah Rp. 600.000,- per Bulan">Pendapatan dibawah Rp. 600.000,- per Bulan</option>
                                                <option value="Lain-lain">Lain-lain</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-pendidikan">Pendidikan Tertinggi Kepala Rumah Tangga</label>
                                            <select name="Pendidikan_tertinggi_Kepala_RT" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                                                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                                                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                                                <option value="SD/Sederajat">SD/Sederajat</option>
                                                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                                                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                                                <option value="Diploma I/II">Diploma I/II</option>
                                                <option value="Akademi/Diploma III/S. Muda">Akademi/Diploma III/S. Muda</option>
                                                <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                                                <option value="Strata II">Strata II</option>
                                                <option value="Strata III">Strata III</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-tabungan">Tidak Memiliki Tabungan/Barang yang Mudah dijual dengan Minimal Rp. 500.000,- seperti Sepeda Motor Kredit/Non Kredit, Emas, Ternak, Kapal Motor, atau Barang Modal Lainnya</label>
                                            <select name="TabunganBarang_Jual" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
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
                </form>
            </div>
        </div>