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
              <h3 class="mb-0">Lihat Surat Keterangan Kematian</h3>
            </div>    
            <!-- Card footer -->
            <div class="card-footer py-4">
              <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <tbody class="list">
                    <tr>
                      <th scope="row">
                        <div class="media align-items-center">
                          <a href="#" class="avatar rounded-circle mr-3">
                          </a>
                          <div class="media-body">
                            <span class="name mb-0 text-sm"><?php echo $detail->NIK_pemohon ?></span>
                            <br><span class="name mb-0 text-sm"><?php echo $detail->Nama_Lengkap ?></span>
                          </div>
                        </div>
                      </th>
                      <td class="text-right">
                      <?php echo anchor('Surat_KetKematian/cetak/' . $detail->No_surat, '<div class="btn btn-primary my-2">Cetak</div>') ?>
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
                          <label class="form-control-label" for="input-tempatlahir">Tempat Lahir</label>
                          <input type="text" name="Tempat_Lahir" class="form-control" disabled value="<?php echo $detail->Tempat_Lahir ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tanggallahir">Tanggal Lahir</label>
                          <input type="date" name="Tanggal_Lahir" class="form-control" disabled value="<?php echo $detail->Tanggal_Lahir ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-jk">Jenis Kelamin</label>
                          <input type="text" name="Jenis_Kelamin" class="form-control" disabled value="<?php echo $detail->Jenis_Kelamin ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-agama">Agama</label>
                          <input type="text" name="Agama" class="form-control" disabled value="<?php echo $detail->Agama ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pekerjaan">Pekerjaan Terakhir</label>
                          <input type="text" name="Pekerjaan" class="form-control" disabled value="<?php echo $detail->Pekerjaan ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-alamat">Alamat</label>
                          <input type="text" name="Dusun" class="form-control" disabled value="RT. 0<?php echo $detail->No_RT ?> RW. 0<?php echo $detail->No_RW ?> Dusun <?php echo $detail->Dusun ?> Desa Gondowangi">
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
                          <input type="text" name="Hari_mati" class="form-control" disabled value="<?php echo $detail->Hari_mati ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tanggal">Tanggal</label>
                          <input type="date" name="Tanggal_kematian" class="form-control" disabled value="<?php echo $detail->Tanggal_kematian ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-sebab">Disebabkan oleh karena</label>
                          <input type="text" name="Sebab_kematian" class="form-control" disabled value="<?php echo $detail->Sebab_kematian ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-lokasi">Di</label>
                          <input type="text" name="Lokasi_kematian" class="form-control" disabled value="<?php echo $detail->Lokasi_kematian ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
