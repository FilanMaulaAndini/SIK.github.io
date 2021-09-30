<?php

class Surat_PermohonanAktaKelahiran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->library('session');
    }
    public function index()
    {
        //model
        $this->load->model('M_permohonanaktakelahiran');
        $data['kependudukan'] = $this->M_permohonanaktakelahiran->tampil_data();
        //view
        $this->load->view('templates/header11');
        $this->load->view('permohonan_akta_kelahiran/v_permohonan_akta_kelahiran', $data);
        $this->load->view('templates/footer');
    }
    public function lihat_data($No_surat)
    {
        // $data['kependudukan'] = $this->M_penduduk->tampil_data();

        $this->load->model('M_permohonanaktakelahiran');
        //        $detail = $this->M_penduduk->detail($NIK);
        $data['detail'] = $this->M_permohonanaktakelahiran->lihat($No_surat);
        $this->load->view('templates/header11');
        $this->load->view('permohonan_akta_kelahiran/v_lihatpermohonan_akta_kelahiran', $data);
        $this->load->view('templates/footer');
    }
    function cetak($No_surat)
    {

        $pdf = new FPDF('p', 'mm', 'a4');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Image('assets/assets/img/brand/logomlg.png', 25, 10, 20, 25);
        $pdf->Cell(25);
        $pdf->SetFont('times', 'B', '12');
        $pdf->Cell(0, 5, 'PEMERINTAH KABUPATEN MALANG', 0, 1, 'C');
        $pdf->Cell(25);
        $pdf->Cell(0, 5, 'KECAMATAN WAGIR', 0, 1, 'C');
        $pdf->Cell(25);
        $pdf->SetFont('times', 'B', '15');
        $pdf->Cell(0, 5, 'DESA GONDOWANGI', 0, 1, 'C');
        $pdf->Cell(25);
        $pdf->SetFont('times', '', '10');
        $pdf->Cell(0, 5, 'Alamat: Jalan Raya Gondowangi No. 15 Kecamatan Wagir Kode Pos: 65158', 0, 1, 'C');
        $pdf->Cell(25);
        $pdf->Cell(0, 2, 'Website: http://desa-gondowangi.malangkab.go.id/', 0, 1, 'C');

        $pdf->SetLineWidth(1);
        $pdf->Line(20, 38, 190, 38);
        $pdf->SetLineWidth(0);
        $pdf->Line(20, 39, 190, 39);

        $pdf->SetFont('times', 'U', '15');
        $pdf->Cell(0, 12, '', 0, 1, 'C');
        $pdf->Cell(0, 5, 'SURAT PERMOHONAN AKTA KELAHIRAN', 0, 1, 'C');
        $pdf->SetFont('times', '', '12');
        $pdf->Cell(0, 5, 'Nomor: ......................................................', 0, 1, 'C');

        $pdf->SetFont('times', '', '12');
        $pdf->Cell(0, 5, '', 0, 1, 'C');
        $pdf->Cell(10);
        $pdf->Cell(0, 15, 'Yang bertanda tangan dibawah ini: ', 0, 1, 'L');
        $pdf->Cell(15);
        $pdf->SetFont('times', '', 12);
        $pdf->Cell(10);
        $pdf->Cell(10, 8, 'Nama ', 0, 0, 'L');
        $pdf->Cell(35);
        $pdf->Cell(5, 8, ':', 0, 0, 'L');
        $pdf->Cell(1, 8, 'X', 0, 1, 'L');
        $pdf->Cell(15);
        $pdf->Cell(10);
        $pdf->Cell(10, 8, 'Jabatan ', 0, 0, 'L');
        $pdf->Cell(35);
        $pdf->Cell(5, 8, ':', 0, 0, 'L');
        $pdf->Cell(1, 8, 'Kepala Desa Gondowangi Kecamatan Wagir', 0, 1, 'L');
        $pdf->Cell(75);
        $pdf->Cell(1, 5, 'Kabupaten Malang', 0, 1, 'L');

        $kependudukan = $this->db->get('surat')->result();
        foreach ($kependudukan as $row) {
            if ($row->jenis_surat == "Surat Permohonan Akta Kelahiran" && $row->No_surat == $No_surat) {
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(10);
                $pdf->Cell(0, 15, 'Dengan ini menerangkan bahwa telah lahir seorang anak ' . $row->Jenis_kelamin . ':', 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->SetFont('times', '', 12);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'a.   Nama Lengkap', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 8, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 8, $row->Nama_lahir, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'b.   Jam Kelahiran', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 8, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 8, $row->Jam_lahir, 0, 0, 'L');
                $pdf->Cell(15);
                $pdf->Cell(1, 8, 'WIB', 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'c.   Hari Lahir', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 8, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 8, $row->Hari_lahir, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'd.   Tempat/Tanggal Lahir', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 8, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 8, $row->Tempat_lahir . ', ' . $row->Tanggal_lahir, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'e.   Jenis Kelamin', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 8, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 8, $row->Jenis_kelamin, 0, 1, 'L');

                $pdf->SetFont('times', '', '12');
                $pdf->Cell(10);
                $pdf->Cell(0, 15, 'Adalah anak dari: ', 0, 1, 'L');
                $pdf->SetFont('times', '', 12);
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'a.   Nama Ibu Kandung ', 0, 0, 'L');
                $pdf->Cell(35);
                $pdf->Cell(5, 8, ':', 0, 0, 'L');
                $pdf->Cell(1, 8, $row->Nama_ibu, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'b.   Nama Ayah Kandung ', 0, 0, 'L');
                $pdf->Cell(35);
                $pdf->Cell(5, 8, ':', 0, 0, 'L');
                $pdf->Cell(1, 8, $row->Nama_ayah, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'c.   Anak ke- ', 0, 0, 'L');
                $pdf->Cell(35);
                $pdf->Cell(5, 8, ':', 0, 0, 'L');
                $pdf->Cell(1, 8, $row->Anak_ke, 0, 1, 'L');

                $pdf->Cell(10);
                $pdf->Cell(0, 15, 'Demikian surat permohonan ini dibuat agar dapat digunakan sebagaimana mestinya.', 0, 1, 'L');

                $date = date('d M Y');

                $pdf->Ln(25);
                $pdf->Cell(120);
                $pdf->Cell(0, 5, 'Gondowangi, ' . $date, 0, 1, 'L');
                $pdf->Cell(120);
                $pdf->Cell(0, 5, 'Kepala Desa Gondowangi', 0, 1, 'L');

                $pdf->Ln(20);
                $pdf->Cell(120);
                $pdf->SetFont('Times', 'B', 12);
                $pdf->Cell(0, 5, 'NAMA KEPALA DESA', 0, 1, 'L');
                $pdf->SetFont('Times', '', 12);
                $pdf->Cell(120);
                $pdf->Cell(0, 5, 'NIP.197308172002121002,', 0, 1, 'L');

                $pdf->Output();
            }
        }
    }
    public function btn_tambah()
    {
        $this->load->view('templates/header11');
        $this->load->view('permohonan_akta_kelahiran/v_tambahpermohonan_akta_kelahiran');
        $this->load->view('templates/footer');
    }

    public function tambah_data()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules(
            'NIK_pemohon',
            'NIK',
            'exact_length[16]|callback_cek_NIK',
            array(
                'exact_length' => 'NIK harus terdiri dari 16 angka'
            )
        );
        if ($this->form_validation->run() == TRUE) {
            $NIK_pemohon = $this->input->post('NIK_pemohon');
            $Nama_lahir = $this->input->post('Nama_lahir');
            $Jam_lahir = $this->input->post('Jam_lahir');
            $Tempat_lahir = $this->input->post('Tempat_lahir');
            $Tanggal_lahir = $this->input->post('Tanggal_lahir');
            $Hari_lahir = $this->input->post('Hari_lahir');
            $Jenis_kelamin = $this->input->post('Jenis_kelamin');
            $Anak_ke = $this->input->post('Anak_ke');
            $Nama_ayah = $this->input->post('Nama_ayah');
            $Nama_ibu = $this->input->post('Nama_ibu');
            $jenis_surat = $this->input->post('jenis_surat');

            $data2 = array(

                'NIK_pemohon' => $NIK_pemohon,
                'Nama_lahir' => $Nama_lahir,
                'Tempat_lahir' => $Tempat_lahir,
                'Tanggal_lahir' => $Tanggal_lahir,
                'Jam_lahir' => $Jam_lahir,
                'Hari_lahir' => $Hari_lahir,
                'jenis_surat' => $jenis_surat,
                'Jenis_kelamin' => $Jenis_kelamin,
                'Anak_ke' => $Anak_ke,
                'Nama_ayah' => $Nama_ayah,
                'Nama_ibu' => $Nama_ibu

            );
            $where = array('NIK_pemohon' => $NIK_pemohon);
            $this->load->model('M_permohonanaktakelahiran');
            $this->M_permohonanaktakelahiran->tambah($data2, 'surat');
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i>Data Berhasil Ditambahkan</div>');
            redirect('Surat_PermohonanAktaKelahiran/index');
        } else {
            $this->load->view('templates/header11');
            $this->load->view('permohonan_akta_kelahiran/v_tambahpermohonan_akta_kelahiran');
            $this->load->view('templates/footer');
            }
    }
    public function cek_NIK($str)
    {
        $this->load->model('M_permohonanaktakelahiran');
        $result = $this->M_permohonanaktakelahiran->check_database($str);
        if ($result == false) {
            $this->form_validation->set_message('cek_NIK', 'NIK tidak terdaftar');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function hapus_data($No_surat)
    {
        $where = array('No_surat' => $No_surat);
        $this->load->model('M_permohonanaktakelahiran');
        $this->M_permohonanaktakelahiran->hapus($where, 'surat');
        $this->session->set_flashdata('hapus', '<div class="alert alert-success"><i class="fa fa-check"></i>Data Berhasil Dihapus</div>');

        redirect('Surat_PermohonanAktaKelahiran/index');
    }
    public function sunting_data($No_surat)
    {
        $where = array('No_surat' => $No_surat);
        $this->load->model('M_permohonanaktakelahiran');
        $data['surat'] = $this->M_permohonanaktakelahiran->sunting($where, 'surat')->row();

        $this->load->view('templates/header11');
        $this->load->view('permohonan_akta_kelahiran/v_suntingpermohonanaktakelahiran', $data);
        $this->load->view('templates/footer');
    }
    public function update_data()
    {
        $No_surat = $this->input->post('No_surat');
        $NIK_pemohon = $this->input->post('NIK_pemohon');
        $Nama_lahir = $this->input->post('Nama_lahir');
        $Jam_lahir = $this->input->post('Jam_lahir');
        $Tempat_lahir = $this->input->post('Tempat_lahir');
        $Tanggal_lahir = $this->input->post('Tanggal_lahir');
        $Hari_lahir = $this->input->post('Hari_lahir');
        $Jenis_kelamin = $this->input->post('Jenis_kelamin');
        $Anak_ke = $this->input->post('Anak_ke');
        $Nama_ayah = $this->input->post('Nama_ayah');
        $Nama_ibu = $this->input->post('Nama_ibu');

        $data = array(
            'No_surat' => $No_surat,
            'NIK_pemohon' => $NIK_pemohon,
            'Nama_lahir' => $Nama_lahir,
            'Tempat_lahir' => $Tempat_lahir,
            'Tanggal_lahir' => $Tanggal_lahir,
            'Jam_lahir' => $Jam_lahir,
            'Hari_lahir' => $Hari_lahir,
            'Jenis_kelamin' => $Jenis_kelamin,
            'Anak_ke' => $Anak_ke,
            'Nama_ayah' => $Nama_ayah,
            'Nama_ibu' => $Nama_ibu

        );
        $where = array('No_surat' => $No_surat);
        $this->load->model('M_permohonanaktakelahiran');
        $this->M_permohonanaktakelahiran->update($where, $data, 'surat');
        redirect('Surat_PermohonanAktaKelahiran/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->load->model('M_permohonanaktakelahiran');
        $data['kependudukan'] = $this->M_permohonanaktakelahiran->get_keyword($keyword);
        $data['kependudukan2'] = $this->M_permohonanaktakelahiran->get_keyword($keyword);
        $this->load->view('templates/header11');
        $this->load->view('permohonan_akta_kelahiran/v_permohonanaktakelahiran', $data);
        $this->load->view('templates/footer');
    }
}
