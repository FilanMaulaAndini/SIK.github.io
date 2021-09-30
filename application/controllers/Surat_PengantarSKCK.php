<?php

class Surat_PengantarSKCK extends CI_Controller
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
        $this->load->model('M_pengantarSKCK');
        $data['kependudukan'] = $this->M_pengantarSKCK->tampil_data();
        //view
        $this->load->view('templates/header4');
        $this->load->view('pengantar_skck/v_pengantarskck', $data);
        $this->load->view('templates/footer');
    }
    public function lihat_data($No_surat)
    {
        $this->load->model('M_pengantarSKCK');
        $data['detail'] = $this->M_pengantarSKCK->lihat($No_surat);
        $this->load->view('templates/header4');
        $this->load->view('pengantar_skck/v_lihatpengantarskck', $data);
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
        $pdf->Cell(0, 5, 'SURAT PENGANTAR SKCK', 0, 1, 'C');
        $pdf->SetFont('times', '', '12');
        $pdf->Cell(0, 5, 'Nomor: .................................................', 0, 1, 'C');

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
        $pdf->Cell(1, 5, 'Kabupaten Malang Jawa Timur', 0, 1, 'L');

        $kependudukan = $this->db->get('surat')->result();

        foreach ($kependudukan as $row) {
            if ($row->jenis_surat == "Surat Pengantar SKCK" && $row->No_surat == $No_surat) {
                $this->load->model('M_pengantarSKCK');
                $detail = $this->M_pengantarSKCK->lihat($No_surat);

                $pdf->SetFont('times', '', '12');
                $pdf->Cell(10);
                $pdf->Cell(0, 15, 'Dengan ini menerangkan bahwa:', 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->SetFont('times', '', 12);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'a.   NIK', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 8, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 8, $detail->NIK, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'b.   Nama Lengkap', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 8, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 8, $detail->Nama_Lengkap, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'c.   Tempat/Tanggal Lahir', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 8, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 8, $detail->Tempat_Lahir . ', ' . $detail->Tanggal_Lahir, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'd.   Jenis Kelamin', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 8, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 8, $detail->Jenis_Kelamin, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'e.   Agama ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 8, ':', 0, 0, 'L');
                $pdf->Cell(1, 8, $detail->Agama, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'f.   Status Kawin ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 8, ':', 0, 0, 'L');
                $pdf->Cell(1, 8, $detail->Status_kawin, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'g.   Pekerjaan ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 8, ':', 0, 0, 'L');
                $pdf->Cell(1, 8, $detail->Pekerjaan, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, 'h.   Alamat ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 8, ':', 0, 0, 'L');
                $pdf->Cell(1, 8, 'Dusun ' . $detail->Dusun . ' RT.00' . $detail->No_RT . ' RW.00' . $detail->No_RT, 0, 1, 'L');
                $pdf->Cell(75);
                $pdf->Cell(1, 8, 'Desa Gondowangi Kecamatan Wagir ', 0, 1, 'L');
                $pdf->Cell(75);
                $pdf->Cell(1, 8, 'Kabupaten Malang Jawa Timur ' . $detail->Kode_pos, 0, 1, 'L');

                $pdf->Ln(5);
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(20);
                $pdf->Cell(20, 6, 'Orang tersebut diatas, adalah', 0, 0, 'L');
                $pdf->SetFont('times', 'B', '12');
                $pdf->Cell(30);
                $pdf->Cell(10, 6, 'benar-benar warga kami dan berkelakukan baik di', 0, 1, 'L');
                $pdf->Cell(10);
                $pdf->Cell(10, 6, 'masyarakat.', 0, 0, 'L');
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(14);
                $pdf->Cell(5, 6, 'Surat ini dibuat untuk keperluan ', 0, 0, 'L');
                $pdf->SetFont('times', 'B', '12');
                $pdf->Cell(51);
                $pdf->Cell(0, 6, 'pengurusan SKCK.', 0, 1, 'L');

                $pdf->Ln(3);
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(20);
                $pdf->Cell(0, 6, 'Demikian surat  pengantar ini  dibuat agar dapat  digunakan sebagaimana  mestinya.', 0, 1, 'L');

                $date = date('d M Y');

                $pdf->Ln(15);
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
        $this->load->view('templates/header4');
        $this->load->view('pengantar_skck/v_tambahpengantarskck');
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
            $jenis_surat = $this->input->post('jenis_surat');

            $data2 = array(

                'NIK_pemohon' => $NIK_pemohon,
                'jenis_surat' => $jenis_surat,

            );
            $where = array('NIK_pemohon' => $NIK_pemohon);
            $this->load->model('M_pengantarskck');
            $this->M_pengantarskck->tambah($data2, 'surat');
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i>Data Berhasil Ditambahkan</div>');
            redirect('Surat_PengantarSKCK/index');
        } else {
            $this->load->view('templates/header4');
            $this->load->view('pengantar_skck/v_tambahpengantarskck');
            $this->load->view('templates/footer');
        }
    }
    public function cek_NIK($str)
    {
        $this->load->model('M_pengantarskck');
        $result = $this->M_pengantarskck->check_database($str);
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
        $this->load->model('M_pengantarskck');
        $this->M_pengantarskck->hapus($where, 'surat');
        $this->session->set_flashdata('hapus', '<div class="alert alert-success"><i class="fa fa-check"></i>Data Berhasil Dihapus</div>');

        redirect('Surat_PengantarSKCK/index');
    }
    public function sunting_data($No_surat)
    {
        $where = array('No_surat' => $No_surat);
        $this->load->model('M_pengantarskck');
        $data['surat'] = $this->M_pengantarskck->sunting($where, 'surat')->row();

        $this->load->view('templates/header4');
        $this->load->view('pengantar_skck/v_suntingpengantarskck', $data);
        $this->load->view('templates/footer');
    }
    public function update_data()
    {
        $No_surat = $this->input->post('No_surat');
        $NIK_pemohon = $this->input->post('NIK_pemohon');

        $data = array(
            'No_surat' => $No_surat,
            'NIK_pemohon' => $NIK_pemohon,

        );
        $where = array('No_surat' => $No_surat);
        $this->load->model('M_pengantarskck');
        $this->M_pengantarskck->update($where, $data, 'surat');
        redirect('Surat_PengantarSKCK/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->load->model('M_pengantarskck');
        $data['kependudukan'] = $this->M_ketjandaduda->get_keyword($keyword);
        $data['kependudukan2'] = $this->M_ketjandaduda->get_keyword($keyword);
        $this->load->view('templates/header4');
        $this->load->view('pengantar_skck/v_pengantarskck', $data);
        $this->load->view('templates/footer');
    }
}
