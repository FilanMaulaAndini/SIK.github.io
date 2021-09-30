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
              <h3 class="mb-0">Lihat Surat Permohonan KK (KK Baru)</h3>
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
                      <?php echo anchor('Surat_PermohonanKK/cetak/' . $detail2->No_surat, '<div class="btn btn-primary my-2">Cetak</div>') ?>
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
                                        <label class="form-control-label" for="input-nik">Nomor KK Lama</label>
                                        <input type="number" name="KK_Lama" class="form-control" disabled value="<?php echo $detail2->KK_Lama ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-tanggallahir">NIK Kepala Keluarga Lama</label>
                                        <input type="number" name="NIK_KK_Lama" class="form-control" disabled value="<?php echo $detail2->NIK_KK_Lama ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-tanggallahir">Alasan Permohonan</label>
                                        <input type="text" name="Alasan" class="form-control" disabled value="<?php echo $detail2->Alasan ?>">
                                    </div>
                                </div>
                            </div>
                            <?php
                            $No = 1;
                            foreach ($detail as $surat) : ?>
                                <div id="fielda">
                                    <div id="fielda0">
                                        <!-- Text input-->
                                        <hr class="my-4" />
                                        <div class="pl-lg-4">
                                        <h6 class="heading-small text-muted mb-4">Daftar Anggota Keluarga Pemohon</h6>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Nama Lengkap</label>
                                                    <input type="text" name="nama[]" class="form-control" disabled value="<?php echo $surat['nama'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Jenis Kelamin</label>
                                                    <input type="text" name="jk[]" class="form-control" disabled value="<?php echo $surat['jk'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir[]" class="form-control" disabled value="<?php echo $surat['tempat_lahir'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir[]" class="form-control" disabled value="<?php echo $surat['tanggal_lahir'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Agama</label>
                                                    <input type="text" name="agama[]" class="form-control" disabled value="<?php echo $surat['agama'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Pendidikan Terakhir</label>
                                                    <input type="text" name="pendidikan[]" class="form-control" disabled value="<?php echo $surat['pendidikan'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Pekerjaan</label>
                                                    <input type="text" name="pekerjaan[]" class="form-control" disabled value="<?php echo $surat['pekerjaan'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Status Kawin</label>
                                                    <input type="text" name="status_kawin[]" class="form-control" disabled value="<?php echo $surat['status_kawin'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Status Hubungan dalam Keluarga</label>
                                                    <input type="text" name="shdk[]" class="form-control" disabled value="<?php echo $surat['shdk'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="heading-small text-muted mb-4">Dokumen Imigrasi</h6>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">No. Paspor</label>
                                                    <input type="number" name="paspor[]" class="form-control" disabled value="<?php echo $surat['paspor'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">KITAS/KIT AP</label>
                                                    <input type="text" name="kitas[]" class="form-control" disabled value="<?php echo $surat['kitas'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="heading-small text-muted mb-4">Data Orang Tua</h6>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Nama Ayah</label>
                                                    <input type="text" name="ayah[]" class="form-control" disabled value="<?php echo $surat['ayah'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-nik">Nama Ibu</label>
                                                    <input type="text" name="ibu[]" class="form-control" disabled value="<?php echo $surat['ibu'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end field0-->
                                </div>
                                </div>
                            <?php endforeach; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>