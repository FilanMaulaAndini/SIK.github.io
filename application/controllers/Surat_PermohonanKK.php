<?php

class Surat_PermohonanKK extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    public function index()
    {
        //model
        $this->load->model('M_permohonankk');
        $data['kependudukan'] = $this->M_permohonankk->tampil_data();
        //view
        $this->load->view('templates/header10');
        $this->load->view('permohonan_kk/v_permohonan_kk', $data);
        $this->load->view('templates/footer');
    }

    function cetak($No_surat){

        $pdf = new FPDF('l','mm','a4');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Cell(5);
        $pdf->SetFont('times','B','12');
        $pdf->Cell(0,5,'FORMULIR PERMOHONAN KARTU KELUARGA (KK)',0,1,'C');
      
        $pdf->Ln(5);
        $pdf->SetFont('times','B',10);
        $pdf->Cell(5);
        $pdf->Cell(10);
        $pdf->Cell(10,5,'PEMERINTAH PROVINSI ',0,0,'L');
        $pdf->Cell(70);
        $pdf->Cell(5,5,':',0,0,'L');
        $pdf->Cell(1,5,'JAWA TIMUR',0,1,'L');
        $pdf->Cell(5);
        $pdf->Cell(10);
        $pdf->Cell(10,5,'PEMERINTAH KABUPATEN/KOTA ',0,0,'L');
        $pdf->Cell(70);
        $pdf->Cell(5,5,':',0,0,'L');
        $pdf->Cell(1,5,'MALANG',0,1,'L');
        $pdf->Cell(5);
        $pdf->Cell(10);
        $pdf->Cell(10,5,'KECAMATAN ',0,0,'L');
        $pdf->Cell(70);
        $pdf->Cell(5,5,':',0,0,'L');
        $pdf->Cell(1,5,'WAGIR',0,1,'L');
        $pdf->Cell(5);
        $pdf->Cell(10);
        $pdf->Cell(10,5,'KELURAHAN/DESA ',0,0,'L');
        $pdf->Cell(70);
        $pdf->Cell(5,5,':',0,0,'L');
        $pdf->Cell(1,5,'GONDOWANGI',0,1,'L');

        $pdf->Ln(5);
        $pdf->Cell(5);
        $pdf->SetFont('times','B','12');
        $pdf->Cell(0,5,'JENIS PERMOHONAN = "KK BARU"',0,1,'C');
      

        $kependudukan = $this->db->get('surat')->result();

        foreach ($kependudukan as $row){
            if ($row->jenis_surat == "Surat Permohonan KK Baru" && $row->No_surat == $No_surat) {
            $this->load->model('M_permohonankk');
            $detail= $this->M_permohonankk->lihat($No_surat);
            $detail2 = $this->M_permohonankk->lihat2($No_surat);
            $detail3 = $this->M_permohonankk->cetak($No_surat);

            $pdf->Ln(5);
            $pdf->SetFont('times','',10);
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'1.  Nama Kepala Keluarga Lama ',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,$detail3->Nama_Lengkap,0,1,'L');
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'2.  Nomor KK Lama',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,$detail2->KK_Lama,0,1,'L');
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'3.   NIK Kepala Keluarga Lama ',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,$detail2->NIK_KK_Lama,0,1,'L');
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'4.  Alamat ',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,'Dusun '.$detail3->Dusun.' RT.00'.$detail3->No_RT.' RW.00'.$detail3->No_RT,0,1,'L');
            $pdf->Cell(100);
            $pdf->Cell(1,5,'Desa Gondowangi Kecamatan Wagir ',0,1,'L');
            $pdf->Cell(100);
            $pdf->Cell(1,5,'Kabupaten Malang Jawa Timur '.$detail3->Kode_pos,0,1,'L');
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'5.  Alasan Menumpang KK ',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,$detail2->Alasan,0,1,'L');

            $pdf->Ln(5);
            $pdf->Cell(15);
            $pdf->SetFont('times','B','10');
            $pdf->Cell(0,5,'DAFTAR ANGGOTA KELUARGA PEMOHON',0,1,'L');

            $pdf->Ln(1);
            $pdf->Cell(15);
            $pdf->Cell(10,6,'No',1,0,'C');
            $pdf->Cell(50,6,'Nama Lengkap',1,0,'C');
            $pdf->Cell(25,6,'Jenis Kelamin',1,0,'C');
            $pdf->Cell(40,6,'Tempat Lahir',1,0,'C');
            $pdf->Cell(35,6,'Tanggal Lahir',1,0,'C');
            $pdf->Cell(30,6,'Agama',1,0,'C');
            $pdf->Cell(30,6,'Pendidikan',1,0,'C');
            $pdf->Cell(30,6,'Jenis Pekerjaan',1,0,'C');
            $pdf->Ln(6);

            $No=1;
            $daftarkeluarga = $this->db->get('daftar_keluarga')->result();
            foreach ($daftarkeluarga as $daftar) {
                $pdf->Cell(15);
                if ($daftar->KK_Lama==$daftar->KK_Lama) {
                $pdf->SetFont('times','','10');
                $pdf->Cell(10,6,$No++,1,0,'C');
                $pdf->Cell(50,6,$daftar->nama,1,0,'C');
                $pdf->Cell(25,6,$daftar->jk,1,0,'C');
                $pdf->Cell(40,6,$daftar->tempat_lahir,1,0,'C');
                $pdf->Cell(35,6,$daftar->tanggal_lahir,1,0,'C');
                $pdf->Cell(30,6,$daftar->agama,1,0,'C');
                $pdf->Cell(30,6,$daftar->pendidikan,1,0,'C');
                $pdf->Cell(30,6,$daftar->pekerjaan,1,0,'C');
                $pdf->Ln(6);
                }
            }

            $pdf->SetFont('times','B','10');
            $pdf->Ln(10);
            $pdf->Cell(15);
            $pdf->Cell(10,6,'No',1,0,'C');
            $pdf->Cell(30,6,'Status Pernikahan',1,0,'C');
            $pdf->Cell(45,6,'Status Hub. Dalam Keluarga',1,0,'C');
            $pdf->Cell(40,6,'Kewarganegaraan',1,0,'C');
            $pdf->Cell(35,6,'No. Paspor',1,0,'C');
            $pdf->Cell(30,6,'No. KITAS/KITAP',1,0,'C');
            $pdf->Cell(30,6,'Ayah',1,0,'C');
            $pdf->Cell(30,6,'Ibu',1,0,'C');
            $pdf->Ln(6);

            $No=1;
            $daftarkeluarga = $this->db->get('daftar_keluarga')->result();
            foreach ($daftarkeluarga as $daftar) {
                $pdf->Cell(15);
                if ($daftar->KK_Lama==$daftar->KK_Lama) {
                $pdf->SetFont('times','','10');
                $pdf->Cell(10,6,$No++,1,0,'C');
                $pdf->Cell(30,6,$daftar->status_kawin,1,0,'C');
                $pdf->Cell(45,6,$daftar->shdk,1,0,'C');
                $pdf->Cell(40,6,'WNI',1,0,'C');
                $pdf->Cell(35,6,$daftar->paspor,1,0,'C');
                $pdf->Cell(30,6,$daftar->kitas,1,0,'C');
                $pdf->Cell(30,6,$daftar->ayah,1,0,'C');
                $pdf->Cell(30,6,$daftar->ibu,1,0,'C');
                $pdf->Ln(6);
                }
            }

            $pdf->Output();
            }
        }
    }

    function cetak2($No_surat){

        $pdf = new FPDF('l','mm','a4');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Cell(5);
        $pdf->SetFont('times','B','12');
        $pdf->Cell(0,5,'FORMULIR PERMOHONAN KARTU KELUARGA (KK)',0,1,'C');
      
        $pdf->Ln(5);
        $pdf->SetFont('times','B',10);
        $pdf->Cell(5);
        $pdf->Cell(10);
        $pdf->Cell(10,5,'PEMERINTAH PROVINSI ',0,0,'L');
        $pdf->Cell(70);
        $pdf->Cell(5,5,':',0,0,'L');
        $pdf->Cell(1,5,'JAWA TIMUR',0,1,'L');
        $pdf->Cell(5);
        $pdf->Cell(10);
        $pdf->Cell(10,5,'PEMERINTAH KABUPATEN/KOTA ',0,0,'L');
        $pdf->Cell(70);
        $pdf->Cell(5,5,':',0,0,'L');
        $pdf->Cell(1,5,'MALANG',0,1,'L');
        $pdf->Cell(5);
        $pdf->Cell(10);
        $pdf->Cell(10,5,'KECAMATAN ',0,0,'L');
        $pdf->Cell(70);
        $pdf->Cell(5,5,':',0,0,'L');
        $pdf->Cell(1,5,'WAGIR',0,1,'L');
        $pdf->Cell(5);
        $pdf->Cell(10);
        $pdf->Cell(10,5,'KELURAHAN/DESA ',0,0,'L');
        $pdf->Cell(70);
        $pdf->Cell(5,5,':',0,0,'L');
        $pdf->Cell(1,5,'GONDOWANGI',0,1,'L');

        $pdf->Ln(5);
        $pdf->Cell(5);
        $pdf->SetFont('times','B','12');
        $pdf->Cell(0,5,'JENIS PERMOHONAN = "MENUMPANG KK"',0,1,'C');
      

        $kependudukan = $this->db->get('surat')->result();

        foreach ($kependudukan as $row){
            if ($row->jenis_surat == "Surat Permohonan Menumpang KK" && $row->No_surat == $No_surat) {
            $this->load->model('M_permohonankk');
            $detail= $this->M_permohonankk->lihat($No_surat);
            $detail2 = $this->M_permohonankk->lihat2($No_surat);
            $detail3 = $this->M_permohonankk->cetak($No_surat);

            $pdf->Ln(5);
            $pdf->SetFont('times','',10);
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'1.  Nama Kepala Keluarga Lama ',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,$detail3->Nama_Lengkap,0,1,'L');
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'2.  Nomor KK Lama',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,$detail2->KK_Lama,0,1,'L');
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'3.   NIK Kepala Keluarga Lama ',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,$detail2->NIK_KK_Lama,0,1,'L');
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'4.  Nomor KK Yang Ditempati ',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,$detail2->KK_ditempati,0,1,'L');
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'5.  NIK Kepala Keluarga Yang Ditempati ',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,$detail2->NIK_KK_ditempati,0,1,'L');
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'6.  Alamat Keluarga Yang Ditempati ',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,'Dusun '.$detail3->Dusun.' RT.00'.$detail3->No_RT.' RW.00'.$detail3->No_RT,0,1,'L');
            $pdf->Cell(100);
            $pdf->Cell(1,5,'Desa Gondowangi Kecamatan Wagir ',0,1,'L');
            $pdf->Cell(100);
            $pdf->Cell(1,5,'Kabupaten Malang Jawa Timur '.$detail3->Kode_pos,0,1,'L');
            $pdf->Cell(5);
            $pdf->Cell(10);
            $pdf->Cell(10,5,'7.  Alasan Menumpang KK ',0,0,'L');
            $pdf->Cell(70);
            $pdf->Cell(5,5,':',0,0,'L');
            $pdf->Cell(1,5,$detail2->Alasan,0,1,'L');

            $pdf->Ln(5);
            $pdf->Cell(15);
            $pdf->SetFont('times','B','10');
            $pdf->Cell(0,5,'DAFTAR ANGGOTA KELUARGA PEMOHON',0,1,'L');

            $pdf->Ln(1);
            $pdf->Cell(15);
            $pdf->Cell(10,6,'No',1,0,'C');
            $pdf->Cell(50,6,'Nama Lengkap',1,0,'C');
            $pdf->Cell(25,6,'Jenis Kelamin',1,0,'C');
            $pdf->Cell(40,6,'Tempat Lahir',1,0,'C');
            $pdf->Cell(35,6,'Tanggal Lahir',1,0,'C');
            $pdf->Cell(30,6,'Agama',1,0,'C');
            $pdf->Cell(30,6,'Pendidikan',1,0,'C');
            $pdf->Cell(30,6,'Jenis Pekerjaan',1,0,'C');
            $pdf->Ln(6);

            $No=1;
            $daftarkeluarga = $this->db->get('daftar_keluarga')->result();
            foreach ($daftarkeluarga as $daftar) {
                $pdf->Cell(15);
                if ($daftar->KK_Lama==$daftar->KK_Lama) {
                $pdf->SetFont('times','','10');
                $pdf->Cell(10,6,$No++,1,0,'C');
                $pdf->Cell(50,6,$daftar->nama,1,0,'C');
                $pdf->Cell(25,6,$daftar->jk,1,0,'C');
                $pdf->Cell(40,6,$daftar->tempat_lahir,1,0,'C');
                $pdf->Cell(35,6,$daftar->tanggal_lahir,1,0,'C');
                $pdf->Cell(30,6,$daftar->agama,1,0,'C');
                $pdf->Cell(30,6,$daftar->pendidikan,1,0,'C');
                $pdf->Cell(30,6,$daftar->pekerjaan,1,0,'C');
                $pdf->Ln(6);
                }
            }

            $pdf->SetFont('times','B','10');
            $pdf->Ln(10);
            $pdf->Cell(15);
            $pdf->Cell(10,6,'No',1,0,'C');
            $pdf->Cell(30,6,'Status Pernikahan',1,0,'C');
            $pdf->Cell(45,6,'Status Hub. Dalam Keluarga',1,0,'C');
            $pdf->Cell(40,6,'Kewarganegaraan',1,0,'C');
            $pdf->Cell(35,6,'No. Paspor',1,0,'C');
            $pdf->Cell(30,6,'No. KITAS/KITAP',1,0,'C');
            $pdf->Cell(30,6,'Ayah',1,0,'C');
            $pdf->Cell(30,6,'Ibu',1,0,'C');
            $pdf->Ln(6);

            $No=1;
            $daftarkeluarga = $this->db->get('daftar_keluarga')->result();
            foreach ($daftarkeluarga as $daftar) {
                $pdf->Cell(15);
                if ($daftar->KK_Lama==$daftar->KK_Lama) {
                $pdf->SetFont('times','','10');
                $pdf->Cell(10,6,$No++,1,0,'C');
                $pdf->Cell(30,6,$daftar->status_kawin,1,0,'C');
                $pdf->Cell(45,6,$daftar->shdk,1,0,'C');
                $pdf->Cell(40,6,'WNI',1,0,'C');
                $pdf->Cell(35,6,$daftar->paspor,1,0,'C');
                $pdf->Cell(30,6,$daftar->kitas,1,0,'C');
                $pdf->Cell(30,6,$daftar->ayah,1,0,'C');
                $pdf->Cell(30,6,$daftar->ibu,1,0,'C');
                $pdf->Ln(6);
                }
            }

            $pdf->Output();
            }
        }
    }

    public function lihat_data($No_surat)
    {
        $this->load->model('M_permohonankk');
        $data['detail'] = $this->M_permohonankk->lihat($No_surat);
        $data['detail2'] = $this->M_permohonankk->lihat2($No_surat);
        if ($data['detail2']->jenis_surat == 'Surat Permohonan KK Baru') {
            $this->load->view('templates/header10');
            $this->load->view('permohonan_kk/v_lihatpermohonan_kk', $data);
            $this->load->view('templates/footer');
        } elseif ($data['detail2']->jenis_surat == 'Surat Permohonan Menumpang KK') {
            $this->load->view('templates/header10');
            $this->load->view('permohonan_kk/v_lihatpermohonan_kk_menumpang', $data);
            $this->load->view('templates/footer');
        }
    }
    public function btn_tambah_menumpang()
    {
        $this->load->view('templates/header10');
        $this->load->view('permohonan_kk/v_tambahpermohonan_kk_menumpang');
        $this->load->view('templates/footer');
    }
    public function btn_tambah_kk()
    {
        $this->load->view('templates/header10');
        $this->load->view('permohonan_kk/v_tambahpermohonan_kk_baru');
        $this->load->view('templates/footer');
    }

    public function tambah_data()
    {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $status_kawin = $_POST['status_kawin'];
        $shdk = $_POST['shdk'];
        $paspor = $_POST['paspor'];
        $kitas = $_POST['kitas'];
        $ayah = $_POST['ayah'];
        $ibu = $_POST['ibu'];
        $KK_Lama = $this->input->post('KK_Lama');
        $NIK_KK_Lama = $this->input->post('NIK_KK_Lama');
        $Alasan = $this->input->post('Alasan');
        $jenis_surat = $this->input->post('jenis_surat');


        $data = array();
        $index = 0;
        foreach ($nama as $datanama) {
            array_push($data, array(
                'KK_Lama' => $KK_Lama,
                'nama' => $datanama,
                'jk' => $jk[$index],
                'tempat_lahir' => $tempat_lahir[$index],
                'tanggal_lahir' => $tanggal_lahir[$index],
                'agama' => $agama[$index],
                'pendidikan' => $pendidikan[$index],
                'pekerjaan' => $pekerjaan[$index],
                'status_kawin' => $status_kawin[$index],
                'shdk' => $shdk[$index],
                'paspor' => $paspor[$index],
                'kitas' => $kitas[$index],
                'ayah' => $ayah[$index],
                'ibu' => $ibu[$index],
            ));
            $index++;
        }
        $data2 = array(

            'KK_Lama' => $KK_Lama,
            'NIK_KK_Lama' => $NIK_KK_Lama,
            'Alasan' => $Alasan,
            'jenis_surat' => $jenis_surat,

        );
        $this->load->model('M_permohonankk');
        $this->M_permohonankk->tambah($data2, 'surat');
        $this->M_permohonankk->save_batch($data);

        redirect('Surat_PermohonanKK/index');
    }
    public function tambah_data_menumpang()
    {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $status_kawin = $_POST['status_kawin'];
        $shdk = $_POST['shdk'];
        $paspor = $_POST['paspor'];
        $kitas = $_POST['kitas'];
        $ayah = $_POST['ayah'];
        $ibu = $_POST['ibu'];
        $KK_Lama = $this->input->post('KK_Lama');
        $NIK_KK_Lama = $this->input->post('NIK_KK_Lama');
        $KK_ditempati = $this->input->post('KK_ditempati');
        $NIK_KK_ditempati = $this->input->post('NIK_KK_ditempati');
        $Alasan = $this->input->post('Alasan');
        $jenis_surat = $this->input->post('jenis_surat');


        $data = array();
        $index = 0;
        foreach ($nama as $datanama) {
            array_push($data, array(
                'KK_Lama' => $KK_Lama,
                'nama' => $datanama,
                'jk' => $jk[$index],
                'tempat_lahir' => $tempat_lahir[$index],
                'tanggal_lahir' => $tanggal_lahir[$index],
                'agama' => $agama[$index],
                'pendidikan' => $pendidikan[$index],
                'pekerjaan' => $pekerjaan[$index],
                'status_kawin' => $status_kawin[$index],
                'shdk' => $shdk[$index],
                'paspor' => $paspor[$index],
                'kitas' => $kitas[$index],
                'ayah' => $ayah[$index],
                'ibu' => $ibu[$index],
            ));
            $index++;
        }
        $data2 = array(

            'KK_Lama' => $KK_Lama,
            'NIK_KK_Lama' => $NIK_KK_Lama,
            'Alasan' => $Alasan,
            'KK_ditempati' => $KK_ditempati,
            'NIK_KK_ditempati' => $NIK_KK_ditempati,
            'jenis_surat' => $jenis_surat,

        );
        $this->load->model('M_permohonankk');
        $this->M_permohonankk->tambah($data2, 'surat');
        $this->M_permohonankk->save_batch($data);

        redirect('Surat_PermohonanKK/index');
    }
    public function hapus_data($No_surat)
    {
        $where = array('No_surat' => $No_surat);
        $this->load->model('M_permohonankk');
        $this->M_permohonankk->hapus($where, 'surat');
        redirect('Surat_PermohonanKK/index');
    }
    public function sunting_data($No_surat)
    {
        $this->load->model('M_permohonankk');

        $data['kependudukan2'] = $this->M_permohonankk->sunting2($No_surat);
        $data['kependudukan'] = $this->M_permohonankk->sunting($No_surat);
        if ($data['kependudukan2']->jenis_surat == 'Surat Permohonan KK Baru') {
            $this->load->view('templates/header10');
            $this->load->view('permohonan_kk/v_suntingpermohonan_kk', $data);
            $this->load->view('templates/footer');
        } elseif ($data['kependudukan2']->jenis_surat == 'Surat Permohonan Menumpang KK') {
            $this->load->view('templates/header10');
            $this->load->view('permohonan_kk/v_suntingpermohonan_kk_menumpang', $data);
            $this->load->view('templates/footer');
        }
    }
    public function update_data()
    {
        $No_surat = $_POST['No_surat'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $status_kawin = $_POST['status_kawin'];
        $shdk = $_POST['shdk'];
        $paspor = $_POST['paspor'];
        $kitas = $_POST['kitas'];
        $ayah = $_POST['ayah'];
        $ibu = $_POST['ibu'];
        $KK_Lama = $this->input->post('KK_Lama');
        $NIK_KK_Lama = $this->input->post('NIK_KK_Lama');
        $Alasan = $this->input->post('Alasan');
        $jenis_surat = $this->input->post('jenis_surat');
        $No_surat = $this->input->post('No_surat');


        $data = array();
        $index = 0;
        foreach ($nama as $datanama) {
            array_push($data, array(
                'KK_Lama' => $KK_Lama,
                'nama' => $datanama,
                'jk' => $jk[$index],
                'tempat_lahir' => $tempat_lahir[$index],
                'tanggal_lahir' => $tanggal_lahir[$index],
                'agama' => $agama[$index],
                'pendidikan' => $pendidikan[$index],
                'pekerjaan' => $pekerjaan[$index],
                'status_kawin' => $status_kawin[$index],
                'shdk' => $shdk[$index],
                'paspor' => $paspor[$index],
                'kitas' => $kitas[$index],
                'ayah' => $ayah[$index],
                'ibu' => $ibu[$index],
            ));
            $index++;
        }
        $data2 = array(
            'No_surat' => $No_surat,
            'KK_Lama' => $KK_Lama,
            'NIK_KK_Lama' => $NIK_KK_Lama,
            'jenis_surat' => $jenis_surat,
            'Alasan' => $Alasan

        );
        $this->load->model('M_permohonankk');

        $where2 = array('No_surat' => $No_surat);
        $where = array('KK_Lama' => $KK_Lama);
        //        $this->M_permohonankk->update2($data2);
        $this->M_permohonankk->update2($where2, $data2, 'surat');
        $this->M_permohonankk->update($data);

        redirect('Surat_PermohonanKK/index');
    }
    public function update_data_menumpang()
    {
        $No_surat = $_POST['No_surat'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $status_kawin = $_POST['status_kawin'];
        $shdk = $_POST['shdk'];
        $paspor = $_POST['paspor'];
        $kitas = $_POST['kitas'];
        $ayah = $_POST['ayah'];
        $ibu = $_POST['ibu'];
        $KK_Lama = $this->input->post('KK_Lama');
        $NIK_KK_Lama = $this->input->post('NIK_KK_Lama');
        $KK_ditempati = $this->input->post('KK_ditempati');
        $NIK_KK_ditempati = $this->input->post('NIK_KK_ditempati');
        $Alasan = $this->input->post('Alasan');
        $jenis_surat = $this->input->post('jenis_surat');
        $No_surat = $this->input->post('No_surat');


        $data = array();
        $index = 0;
        foreach ($nama as $datanama) {
            array_push($data, array(
                'KK_Lama' => $KK_Lama,
                'nama' => $datanama,
                'jk' => $jk[$index],
                'tempat_lahir' => $tempat_lahir[$index],
                'tanggal_lahir' => $tanggal_lahir[$index],
                'agama' => $agama[$index],
                'pendidikan' => $pendidikan[$index],
                'pekerjaan' => $pekerjaan[$index],
                'status_kawin' => $status_kawin[$index],
                'shdk' => $shdk[$index],
                'paspor' => $paspor[$index],
                'kitas' => $kitas[$index],
                'ayah' => $ayah[$index],
                'ibu' => $ibu[$index],
            ));
            $index++;
        }
        $data2 = array(

            'No_surat' => $No_surat,
            'KK_Lama' => $KK_Lama,
            'NIK_KK_Lama' => $NIK_KK_Lama,
            'jenis_surat' => $jenis_surat,
            'KK_ditempati' => $KK_ditempati,
            'NIK_KK_ditempati' => $NIK_KK_ditempati,
            'Alasan' => $Alasan

        );
        $this->load->model('M_permohonankk');

        $where2 = array('No_surat' => $No_surat);
        // $where = array('KK_Lama' => $KK_Lama);
        $this->M_permohonankk->update($data);
        $this->M_permohonankk->update2($where2, $data2, 'surat');

        redirect('Surat_PermohonanKK/index');
    }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->load->model('M_permohonankk');
        $data['kependudukan'] = $this->M_permohonankk->get_keyword($keyword);
        $this->load->view('templates/header10');
        $this->load->view('permohonan_kk/v_permohonan_kk', $data);
        $this->load->view('templates/footer');
    }
    public function save()
    {
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $status_kawin = $_POST['status_kawin'];
        $shdk = $_POST['shdk'];
        $paspor = $_POST['paspor'];
        $kitas = $_POST['kitas'];
        $ayah = $_POST['ayah'];
        $ibu = $_POST['ibu'];
        $KK_Lama = $this->input->post('KK_Lama');
        $NIK_KK_Lama = $this->input->post('NIK_KK_Lama');
        $jenis_surat = $this->input->post('jenis_surat');


        $data = array();
        $index = 0;
        foreach ($nama as $datanama) {
            array_push($data, array(
                'KK_Lama' => $KK_Lama,
                'nama' => $datanama,
                'jk' => $jk[$index],
                'tempat_lahir' => $tempat_lahir[$index],
                'tanggal_lahir' => $tanggal_lahir[$index],
                'agama' => $agama[$index],
                'pendidikan' => $pendidikan[$index],
                'pekerjaan' => $pekerjaan[$index],
                'status_kawin' => $status_kawin[$index],
                'shdk' => $shdk[$index],
                'paspor' => $paspor[$index],
                'kitas' => $kitas[$index],
                'ayah' => $ayah[$index],
                'ibu' => $ibu[$index],
            ));
            $index++;
        }
        $data2 = array(

            'KK_Lama' => $KK_Lama,
            'NIK_KK_Lama' => $NIK_KK_Lama,
            'jenis_surat' => $jenis_surat,

        );
        $this->load->model('M_permohonankk');
        $this->M_permohonankk->tambah($data2, 'surat');
        $this->M_permohonankk->save_batch($data);

        redirect('Surat_PermohonanKK/index');
    }
}
