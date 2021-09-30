<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-1.4.5.min.css" />
<script src="js/jquery-2.1.1.js" type="text/javascript"></script>
<script src="js/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>

<!------ Include the above in your HEAD tag ---------->
<!-- 
<!DOCTYPE html>
<html> -->

<!-- <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Multiple step form</title> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery-1.9.0.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/additional-methods.js"></script> -->
<!-- </head> -->

<!-- <body> -->
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
                    <h3 class="mb-0">Tambah Surat Permohonan KK (Menumpang)</h3>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                        <form method="post" action="<?php echo base_url() . 'Surat_PermohonanKK/tambah_data_menumpang'; ?>">

                            <input type="hidden" name="jenis_surat" class="form-control" value="Surat Permohonan Menumpang KK">
                            <!-- </div> -->
                            <!-- </div>
                        </div> -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-nik">Nomor KK Lama</label>
                                        <input type="number" name="KK_Lama" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-tanggallahir">NIK Kepala Keluarga Lama</label>
                                        <input type="number" name="NIK_KK_Lama" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-nik">Nomor KK yang ditempati</label>
                                        <input type="number" name="KK_ditempati" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-tanggallahir">NIK Kepala Keluarga yang ditempati</label>
                                        <input type="number" name="NIK_KK_ditempati" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-tanggallahir">Alasan Permohonan</label>
                                        <input type="text" name="Alasan" class="form-control">
                                    </div>
                                </div>
                            </div>

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
                                                <input type="text" name="nama[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                            <label class="form-control-label">Jenis Kelamin</label>
                                            <select name="jk[]" class="form-control">
                                                <option value="" selected disabled>- pilih -</option>
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
                                                <input type="text" name="tempat_lahir[]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nik">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nik">Agama</label>
                                                <select name="agama[]" class="form-control">
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
                                                <label class="form-control-label" for="input-nik">Pendidikan Terakhir</label>
                                                <select name="pendidikan[]" class="form-control">
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
                                                <label class="form-control-label" for="input-nik">Pekerjaan</label>
                                                <input type="text" name="pekerjaan[]" class="form-control"> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nik">Status Kawin</label>
                                                <select name="status_kawin[]" class="form-control">
                                                        <option value="" selected disabled>- pilih -</option>
                                                        <option value="Menikah">Menikah</option>
                                                        <option value="Belum Menikah">Belum Menikah</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nik">Status Hubungan dalam Keluarga</label>
                                                <select name="shdk[]" class="form-control">
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
                                    <h6 class="heading-small text-muted mb-4">Dokumen Imigrasi</h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nik">No. Paspor</label>
                                                <input type="number" name="paspor[]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nik">KITAS/KIT AP</label>
                                                <input type="text" name="kitas[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="heading-small text-muted mb-4">Data Orang Tua</h6>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nik">Nama Ayah</label>
                                                <input type="text" name="ayah[]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-nik">Nama Ibu</label>
                                                <input type="text" name="ibu[]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end field0-->
                            </div>
                            <!--end field-->
                            <div class="form-group">
                                <button id="add-more" name="add-more" class="btn btn-primary">Add More</button>
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
    <!-- </body> -->

    <!-- </html> -->
    <script type="text/javascript">
        // $(function() {
        //     // Remove button click
        //     $(document).on(
        //         'click',
        //         '[data-role="dynamic-fields"] > .form-inline [data-role="remove"]',
        //         function(e) {
        //             e.preventDefault();
        //             $(this).closest('.form-inline').remove();
        //         }
        //     );
        //     // Add button click
        //     $(document).on(
        //         'click',
        //         '[data-role="dynamic-fields"] > .form-inline [data-role="add"]',
        //         function(e) {
        //             e.preventDefault();
        //             var container = $(this).closest('[data-role="dynamic-fields"]');
        //             new_field_group = container.children().filter('.form-inline:first-child').clone();
        //             new_field_group.find('input').each(function() {
        //                 $(this).val('');
        //             });
        //             container.append(new_field_group);
        //         }
        //     );
        // });
        $(document).ready(function() {
            //@naresh action dynamic childs
            var next_exp = 0;
            $("#add-more").click(function(e) {

                e.preventDefault();
                var addto = "#fielda" + next_exp;
                var addRemove = "#fielda" + (next_exp);
                next_exp = next_exp + 1;
                var newInp = '<div id="fielda' + next_exp + '" name="field1' + next_exp + '"><hr/><h6 class="heading-small text-muted mb-4">Daftar Anggota Keluarga Pemohon</h6><div class="pl-lg-4"><div class="row"><div class="col-lg-12"><div class="form-group"><label class="form-control-label" for="input-nik">Nama Lengkap</label><input type="text" name="nama[]" class="form-control"></div></div></div><div class="row"><div class="col-lg-12"><div class="form-group"><label class="form-control-label" for="input-nik">Jenis Kelamin</label><select name="jk[]" class="form-control"><option value="" selected disabled>- pilih -</option><option value="Laki Laki">Laki-laki</option><option value="Perempuan">Perempuan</option></select></div></div></div><div class="row"><div class="col-lg-6"><div class="form-group"><label class="form-control-label" for="input-nik">Tempat Lahir</label><input type="text" name="tempat_lahir[]" class="form-control"></div></div><div class="col-lg-6"><div class="form-group"><label class="form-control-label" for="input-nik">Tanggal Lahir</label><input type="date" name="tanggal_lahir[]" class="form-control"></div></div></div><div class="row"><div class="col-lg-12"><div class="form-group"><label class="form-control-label" for="input-nik">Agama</label><select name="agama[]" class="form-control"><option value="" selected disabled>- pilih -</option><option value="Islam">Islam</option><option value="Kristen">Kristen</option><option value="Katholik">Katholik</option><option value="Hindu">Hindu</option><option value="Budha">Budha</option></select></div></div></div><div class="row"><div class="col-lg-12"><div class="form-group"><label class="form-control-label" for="input-nik">Pendidikan Terakhir</label><select name="pendidikan[]" class="form-control"><option value="" selected disabled>- pilih -</option><option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option><option value="Tidak Tamat SD/Sederajat">Tidak Tamat SD/Sederajat</option><option value="SD/Sederajat">SD/Sederajat</option><option value="SMP/Sederajat">SMP/Sederajat</option><option value="SMA/Sederajat">SMA/Sederajat</option><option value="D1">D1</option><option value="D2">D2</option><option value="D3">D3</option><option value="S1">S1</option><option value="S2">S2</option></select></div></div></div><div class="row"><div class="col-lg-12"><div class="form-group"><label class="form-control-label" for="input-nik">Pekerjaan</label><select name="shdk[]" class="form-control"><option value="" selected disabled>- pilih -</option><option value="" selected disabled>- pilih -</option><option value="Apoteker">Apoteker</option><option value="Bidan">Bidan</option><option value="Buruh Tani/Perkebunan/Peternakan">Buruh Tani/Perkebunan/Peternakan</option><option value="Dosen/Guru">Dosen/Guru</option><option value="Industri">Industri</option><option value="Karyawan BUMD/BUMN/Honorer/Swasta">Karyawan BUMD/BUMN/Honorer/Swasta</option><option value="Polisi/TNI">Polisi/TNI</option><option value="Konstruksi/Mekanik">Konstruksi/Mekanik</option><option value="RT">RT</option><option value="Pedagang">Pedagang</option><option value="ASN">ASN</option><option value="Pelajar">Pelajar</option><option value="Wiraswasta">Wiraswasta</option><option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option><option value="Lainnya">Lainnya</option></select></div></div></div><div class="row"><div class="col-lg-6"><div class="form-group"><label class="form-control-label" for="input-nik">Status Kawin</label><select name="status_kawin[]" class="form-control"><option value="" selected disabled>- pilih -</option><option value="Menikah">Menikah</option><option value="Belum Menikah">Belum Menikah</option></select></div></div><div class="col-lg-6"><div class="form-group"><label class="form-control-label" for="input-nik">Status Hubungan dalam Keluarga</label><select name="shdk[]" class="form-control"><option value="" selected disabled>- pilih -</option><option value="Kepala Keluarga">Kepala Keluarga</option><option value="Istri">Istri</option><option value="Anak">Anak</option><option value="Menantu">Menantu</option><option value="Mertua">Mertua</option><option value="Orang Tua">Orang Tua</option><option value="Suami">Suami</option><option value="Cucu">Cucu</option><option value="Famili Lain">Famili Lain</option><option value="Lainnya">Lainnya</option><option value="ASN">ASN</option><option value="Pelajar">Pelajar</option><option value="Wiraswasta">Wiraswasta</option><option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option><option value="Lainnya">Lainnya</option></select></div></div></div><h6 class="heading-small text-muted mb-4">Dokumen Imigrasi</h6><div class="row"><div class="col-lg-6"><div class="form-group"><label class="form-control-label" for="input-nik">No. Paspor</label><input type="number" name="paspor[]" class="form-control"></div></div><div class="col-lg-6"><div class="form-group"><label class="form-control-label" for="input-nik">KITAS/KIT AP</label><input type="text" name="kitas[]" class="form-control"></div></div></div><h6 class="heading-small text-muted mb-4">Data Orang Tua</h6><div class="row"><div class="col-lg-6"><div class="form-group"><label class="form-control-label" for="input-nik">Nama Ayah</label><input type="text" name="ayah[]" class="form-control"></div></div><div class="col-lg-6"><div class="form-group"><label class="form-control-label" for="input-nik">Nama Ibu</label><input type="text" name="ibu[]" class="form-control"></div></div></div></div></div>';
                var newInput = $(newInp);

                var removeBtn = '<div class="form-group"><button id="remove' + (next_exp - 1) + '" class="btn btn-danger remove-me" >Remove</button></div></div></div><div id="field">';
                var removeButton = $(removeBtn);
                $(addto).after(newInput);
                $(addRemove).after(removeButton);
                $("#fielda" + next_exp).attr('data-source', $(addto).attr('data-source'));
                $("#count").val(next_exp);

                $('.remove-me').click(function(e) {
                    e.preventDefault();
                    var fieldNum = this.id.charAt(this.id.length - 1);
                    var fieldID = "#fielda" + fieldNum;
                    $(this).remove();
                    $(fieldID).remove();
                });
            });
        });
    </script>