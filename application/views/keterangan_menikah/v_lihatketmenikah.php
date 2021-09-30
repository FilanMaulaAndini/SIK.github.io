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
              <h3 class="mb-0">Lihat Surat Keterangan Menikah</h3>
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
                            <span class="name mb-0 text-sm"><?php echo $detail->Nama_Lengkap ?></span>
                            <br><span class="name mb-0 text-sm"><?php echo $detail2->Nama_Lengkap ?></span>
                            <br><span class="name mb-0 text-sm"><?php echo $detail2->Tanggal_menikah ?></span>
                          </div>
                        </div>
                      </th>
                      <td class="text-right">
                      <?php echo anchor('Surat_KetMenikah/cetak/' . $detail->No_surat, '<div class="btn btn-primary my-2">Cetak</div>') ?>
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
                          <h6 class="heading-small text-muted mb-4">Data Suami</h6>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <h6 class="heading-small text-muted mb-4">Data Istri</h6>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-niksuami">NIK</label>
                          <input type="number" id="input-niksuami" class="form-control" disabled value="<?php echo $detail->NIK_suami ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-nikistri">NIK</label>
                          <input type="number" id="input-nikistri" class="form-control" disabled value="<?php echo $detail2->NIK_istri ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-namalengkapsuami">Nama Lengkap</label>
                          <input type="text" id="input-namalengkapsuami" class="form-control" disabled value="<?php echo $detail->Nama_Lengkap ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-namalengkapistri">Nama Lengkap</label>
                          <input type="text" id="input-namalengkapistri" class="form-control" disabled value="<?php echo $detail2->Nama_Lengkap ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tempatlahirsuami">Tempat Lahir</label>
                          <input type="text" id="input-tempatlahirsuami" class="form-control" disabled value="<?php echo $detail->Tempat_Lahir ?>">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tanggallahirsuami">Tanggal Lahir</label>
                          <input type="date" id="input-tanggallahirsuami" class="form-control" disabled value="<?php echo $detail->Tanggal_Lahir ?>">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tempatlahiristri">Tempat Lahir</label>
                          <input type="text" id="input-tempatlahiristri" class="form-control" disabled value="<?php echo $detail2->Tempat_Lahir ?>">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group">
                          <label class="form-control-label" for="input-tanggallahiristri">Tanggal Lahir</label>
                          <input type="date" id="input-tanggallahiristri" class="form-control" disabled value="<?php echo $detail2->Tanggal_Lahir ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-agamasuami">Agama</label>
                          <input type="text" id="input-agamasuami" class="form-control" disabled value="<?php echo $detail->Agama ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-agamaistri">Agama</label>
                          <input type="text" id="input-agamaistri" class="form-control" disabled value="<?php echo $detail2->Agama ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-statussuami">Status Kawin</label>
                          <input type="text" id="input-statussuami" class="form-control" disabled value="<?php echo $detail->Status_kawin ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-statusistri">Status Kawin</label>
                          <input type="text" id="input-statusistri" class="form-control" disabled value="<?php echo $detail2->Status_kawin ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pekerjaansuami">Pekerjaan</label>
                          <input type="text" id="input-pekerjaansuami" class="form-control" disabled value="<?php echo $detail->Pekerjaan ?>">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-pekerjaanistri">Pekerjaan</label>
                          <input type="text" id="input-pekerjaanistri" class="form-control" disabled value="<?php echo $detail2->Pekerjaan ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-alamatsuami">Alamat</label>
                          <input type="text" id="input-alamatsuami" class="form-control" disabled value="RT. 0<?php echo $detail->No_RT ?> RW. 0<?php echo $detail->No_RW ?> Dusun <?php echo $detail->Dusun ?> Desa Gondowangi">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label class="form-control-label" for="input-alamatistri">Alamat</label>
                          <input type="text" id="input-alamatistri" class="form-control" disabled value="RT. 0<?php echo $detail2->No_RT ?> RW. 0<?php echo $detail2->No_RW ?> Dusun <?php echo $detail2->Dusun ?> Desa Gondowangi">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
