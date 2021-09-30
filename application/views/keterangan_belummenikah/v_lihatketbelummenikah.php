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
              <h3 class="mb-0">Lihat Surat Keterangan Belum Menikah</h3>
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
                      <?php echo anchor('Surat_KetBelumMenikah/cetak/' . $detail->No_surat, '<div class="btn btn-primary my-2">Cetak</div>') ?>
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
                          <input type="text" id="input-tempatlahir" class="form-control" disabled value="<?php echo $detail->Tempat_Lahir ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tanggallahir">Tanggal Lahir</label>
                          <input type="date" id="input-tanggallahir" class="form-control" disabled value="<?php echo $detail->Tanggal_Lahir ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-jk">Jenis Kelamin</label>
                          <input type="text" id="input-jk" class="form-control" disabled value="<?php echo $detail->Jenis_Kelamin ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-agama">Agama</label>
                          <input type="text" id="input-agama" class="form-control" disabled value="<?php echo $detail->Agama ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-statuskawin">Status Kawin</label>
                          <input type="text" id="input-statuskawin" class="form-control" disabled value="<?php echo $detail->Status_kawin ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pekerjaan">Pekerjaan</label>
                          <input type="text" id="input-pekerjaan" class="form-control" disabled value="<?php echo $detail->Pekerjaan ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label" for="input-alamat">Alamat</label>
                          <input type="text" id="input-alamat" class="form-control" disabled value="RT. 0<?php echo $detail->No_RT ?> RW. 0<?php echo $detail->No_RW ?> Dusun <?php echo $detail->Dusun ?> Desa Gondowangi">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
