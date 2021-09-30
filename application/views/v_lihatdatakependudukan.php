  <!-- Main content -->
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
              <h3 class="mb-0">Lihat Data Kependudukan</h3>
            </div>    
            <!-- Card footer -->
            <div class="card-footer py-4">
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <tbody class="list">
                    <tr>
                      <th scope="row">
                        <div class="media align-items-center">
                          <div class="avatar rounded-circle mr-3">
                          </div>
                          <div class="media-body">
                            <span class="name mb-0 text-sm"><?php echo $detail->NIK?></span>
                            <br><span class="name mb-0 text-sm"><?php echo $detail->Nama_Lengkap ?></span></br>
                          </div>
                        </div>
                      </th>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!-- Page content -->
       <div class="row">
        <div class="col">
          <div class="card">    
            <!-- Card footer -->
            <div class="card-footer py-4">
                <form>
                  <h6 class="heading-small text-muted mb-4">Data Individu</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nokk">Nomor Kartu Keluarga</label>
                          <input type="number" id="No_KK" class="form-control" disabled value="<?php echo $detail->No_KK ?>">
                        </div>
                      </div>
                      <tr>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-jk">Jenis Kelamin</label>
                          <input type="text" id="NIK" class="form-control" disabled value="<?php echo $detail->Jenis_Kelamin ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tempatlahir">Tempat Lahir</label>
                          <input type="text" id="Tempat_Lahir" class="form-control" disabled value="<?php echo $detail->Tempat_Lahir ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tanggallahir">Tanggal Lahir</label>
                          <input type="date" id="Tanggal_Lahir" class="form-control" disabled value="<?php echo $detail->Tanggal_Lahir ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-agama">Agama</label>
                          <input type="text" id="Agama" class="form-control" disabled value="<?php echo $detail->Agama ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tel">Telepon</label>
                          <input type="number" id="No_Telp" class="form-control" disabled value="<?php echo $detail->No_Telp ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pendidikan">Pendidikan</label>
                          <input type="text" id="Pendidikan" class="form-control" disabled value="<?php echo $detail->Pendidikan ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pekerjaan">Pekerjaan</label>
                          <input type="text" id="Pekerjaan" class="form-control" disabled value="<?php echo $detail->Pekerjaan ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-goldar">Golongan Darah</label>
                          <input type="text" id="Gol_darah" class="form-control" disabled value="<?php echo $detail->Gol_darah ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-status">Status Kawin</label>
                          <input type="text" id="Status_kawin" class="form-control" disabled value="<?php echo $detail->Status_kawin ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tglkawin">Tanggal Kawin</label>
                          <input type="date" id="Tanggal_kawin" class="form-control" disabled value="<?php echo $detail->Tanggal_kawin ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-sdhk">Status Hubungan Dalam Keluarga</label>
                          <input type="text" id="SHDK" class="form-control" disabled value="<?php echo $detail->SHDK ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-sk">Status Keberadaan</label>
                          <input type="text" id="Status_keberadaan" class="form-control" disabled value="<?php echo $detail->Status_keberadaan ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr class="my-4" />
                  <!-- Address -->
                  <h6 class="heading-small text-muted mb-4">Alamat</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-4">
                      <tr>
                        <div class="form-group">
                          <label class="form-control-label" for="input-rt">No RT</label>
                          <input type="number" id="No_RT" class="form-control" disabled value="<?php echo $detail->No_RT ?>">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label" for="input-rw">No RW</label>
                          <input type="number" id="No_RW" class="form-control" disabled value="<?php echo $detail->No_RW ?>">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                          <label class="form-control-label" for="input-kodepos">Kode Pos</label>
                          <input type="number" id="Kode_pos" class="form-control" disabled value="<?php echo $detail->Kode_pos ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-dusun">Dusun</label>
                          <input id="Dusun" class="form-control" disabled value="<?php echo $detail->Dusun ?>">
                        </div>
                      </div>
                    </div> 
                  </div>
                  <hr class="my-4" />
                  <!-- Kategori Penduduk -->
                  <h6 class="heading-small text-muted mb-4">Kategori Penduduk</h6> 
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-6">
                      <tr>
                        <div class="form-group">
                          <label class="form-control-label" for="input-rt">Luas Lantai Bangunan Tempat Tinggal </label>
                          <input type="text" id="Luas_lantai" class="form-control" disabled value="<?php echo $detail->Luas_lantai ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-jenislantai">Jenis Lantai Tempat Tinggal Terbuat dari</label>
                          <input type="text" id="Jenis_lantai" class="form-control" disabled value="<?php echo $detail->Jenis_lantai ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-jenisdinding">Jenis Dinding Tempat Tinggal dari</label>
                          <input type="text" id="Jenis_dinding" class="form-control" disabled value="<?php echo $detail->Fasilitas_buang_air ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-fasbab">Fasilitas Buang Air Besar</label>
                          <input type="text" id="Fasilitas_buang_air" class="form-control" disabled value="<?php echo $detail->Fasilitas_buang_air ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-listrik">Sumber Penerangan Rumah Tangga</label>
                          <input type="text" id="Sumber_penerangan" class="form-control" disabled value="<?php echo $detail->Sumber_penerangan ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-sumberair">Sumber Air Minum berasal dari </label>
                          <input type="text" id="Sumber_air_minum" class="form-control" disabled value="<?php echo $detail->Sumber_air_minum ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-bahanbakar">Bahan Bakar untuk Memasak sehari-hari</label>
                          <input type="text" id="BB_memasak" class="form-control" disabled value="<?php echo $detail->BB_memasak ?>">
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-konsumsi">Hanya Mengkonsumsi Daging/Susu/Ayam dalam satu kali Seminggu</label>
                          <input type="text" id="Konsumsi_daging" class="form-control" disabled value="<?php echo $detail->Konsumsi_daging ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pakaian">Hanya Membeli Satu Stel Pakaian Baru dalam Setahun</label>
                          <input type="text" id="Satu_pakaian_pertahun" class="form-control" disabled value="<?php echo $detail->Satu_pakaian_pertahun ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-makan">Hanya Sanggup Makan Sebanyak Satu/Dua Kali dalam Sehari</label>
                          <input type="text" id="Satudua_kali_makan" class="form-control" disabled value="<?php echo $detail->Satudua_kali_makan ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-berobat">Tidak Sanggup Membayar Biaya Pengobatan di Puskesmas/Poliklinik</label>
                          <input type="text" id="Bayar_pengobatan" class="form-control" disabled value="<?php echo $detail->Bayar_pengobatan ?>">
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-penghasilan">Sumber Penghasilan Kepala Rumah Tangga adalah</label>
                          <input type="text" id="Sumber_penghasilan_Kepala_RT" class="form-control" disabled value="<?php echo $detail->Sumber_penghasilan_Kepala_RT ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pendidikan">Pendidikan Tertinggi Kepala Rumah Tangga</label>
                          <input type="text" id="Pendidikan_tertinggi_Kepala_RT" class="form-control" disabled value="<?php echo $detail->Pendidikan_tertinggi_Kepala_RT ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tabungan">Tidak Memiliki Tabungan/Barang yang Mudah dijual dengan Minimal Rp. 500.000,- seperti Sepeda Motor Kredit/Non Kredit, Emas, Ternak, Kapal Motor, atau Barang Modal Lainnya</label>
                          <input type="text" id="TabunganBarang_Jual" class="form-control" disabled value="<?php echo $detail->TabunganBarang_Jual?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
