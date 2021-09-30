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
              <h3 class="mb-0">Lihat Surat Permohonan KK (Menumpang KK)</h3>
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
                            <span class="name mb-0 text-sm"><?php echo $detail2->No_surat ?></span>
                          </div>
                        </div>
                      </th>
                      <td class="text-right">
                      <?php echo anchor('Surat_PermohonanKK/cetak2/' . $detail2->No_surat, '<div class="btn btn-primary my-2">Cetak</div>') ?>
                      </td>
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
                  <div class="pl-lg-2">
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nokklama">Nomor KK Lama</label>
                          <input type="number" id="input-nokklama" class="form-control" disabled value="<?php echo $detail2->KK_Lama ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-niklama">NIK Kepala Keluarga Lama</label>
                          <input type="number" id="input-niklama" class="form-control" disabled value="<?php echo $detail2->NIK_KK_Lama ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nokkditempati">Nomor KK yang Ditempati</label>
                          <input type="number" id="input-nokkditempati" class="form-control" disabled value="<?php echo $detail2->KK_ditempati ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nikditempati">NIK Kepala Keluarga yang Ditempati</label>
                          <input type="number" id="input-nikditempati" class="form-control" disabled value="<?php echo $detail2->NIK_KK_ditempati ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-alasan">Alasan Menumpang KK</label>
                          <input type="text" id="input-alasan" class="form-control" disabled value="<?php echo $detail2->Alasan ?>">
                        </div>
                      </div>
                    </div>
                    <?php
                    $No = 1;
                    foreach ($detail as $surat) : ?>
                  <hr class="my-4" />
                  <h6 class="heading-small text-muted mb-4">Daftar Anggota Keluarga Pemohon</h6>
                  <div class="pl-lg-4">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nama">Nama Lengkap</label>
                          <input type="text" id="nama[]" class="form-control" disabled value="<?php echo $surat['nama'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-jk">Jenis Kelamin</label>
                          <input type="text" id="jk[]" class="form-control" disabled value="<?php echo $surat['jk'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tempatlahir">Tempat Lahir</label>
                          <input type="text" id="tempat_lahir[]" class="form-control" disabled value="<?php echo $surat['tempat_lahir'] ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tanggallahir">Tanggal Lahir</label>
                          <input type="date" id="tanggal_lahir[]" class="form-control" disabled value="<?php echo $surat['tanggal_lahir'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-agama">Agama</label>
                          <input type="text" id="agama[]" class="form-control" disabled value="<?php echo $surat['agama'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pendidikan">Pendidikan Terakhir</label>
                          <input type="text" id="pendidikan[]" class="form-control" disabled value="<?php echo $surat['pendidikan'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pekerjaan">Pekerjaan</label>
                          <input type="text" id="pekerjaan[]" class="form-control" disabled value="<?php echo $surat['pekerjaan'] ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-status">Status Kawin</label>
                          <input type="text" id="status_kawin[]" class="form-control" disabled value="<?php echo $surat['status_kawin'] ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-sdhk">Status Hubungan Dalam Keluarga</label>
                          <input type="text" id="shdk[]" class="form-control" disabled value="<?php echo $surat['shdk'] ?>">
                        </div>
                      </div>
                    </div>
                    <h6 class="heading-small text-muted mb-4">Dokumen Imigrasi</h6>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-imigrasi1">No. Paspor</label>
                          <input type="number" id="paspor[]" class="form-control" disabled value="<?php echo $surat['paspor'] ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-imigrasi2">KITAS/KIT AP</label>
                          <input type="number" id="kitas[]" class="form-control" disabled value="<?php echo $surat['kitas'] ?>">
                        </div>
                      </div>
                    </div>          
                    <h6 class="heading-small text-muted mb-4">Nama Orang Tua</h6>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-ayah">Nama Ayah</label>
                          <input type="text" id="ayah[]" class="form-control" disabled value="<?php echo $surat['ayah'] ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-ibu">Nama Ibu</label>
                          <input type="text" id="ibu[]" class="form-control"disabled value="<?php echo $surat['ibu'] ?>">
                        </div>
                      </div>
                    </div>               
                    </div>

                  <?php endforeach; ?>
                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>