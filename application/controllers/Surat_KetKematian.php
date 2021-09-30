<?php

class Surat_KetKematian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }
    public function index()
    {
        //model
        $this->load->model('M_ketkematian');
        $data['kependudukan'] = $this->M_ketkematian->tampil_data();
        //view
        $this->load->view('templates/header12');
        $this->load->view('keterangan_kematian/v_ketkematian', $data);
        $this->load->view('templates/footer');
    }
    public function lihat_data($No_surat)
    {
        $this->load->model('M_ketkematian');
        //        $detail = $this->M_penduduk->detail($NIK);
        $data['detail'] = $this->M_ketkematian->lihat($No_surat);
        $this->load->view('templates/header12');
        $this->load->view('keterangan_kematian/v_lihatketkematian', $data);
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
        $pdf->Cell(0, 5, 'SURAT KETERANGAN KEMATIAN', 0, 1, 'C');
        $pdf->SetFont('times', '', '12');
        $pdf->Cell(0, 5, 'Nomor: .....................................................', 0, 1, 'C');

        $pdf->Ln(5);
        $pdf->SetFont('times', '', '12');
        $pdf->Cell(10);
        $pdf->Cell(0, 10, 'Yang bertanda tangan dibawah ini: ', 0, 1, 'L');
        $pdf->Cell(15);
        $pdf->SetFont('times', '', 12);
        $pdf->Cell(10);
        $pdf->Cell(10, 5, 'Nama ', 0, 0, 'L');
        $pdf->Cell(35);
        $pdf->Cell(5, 5, ':', 0, 0, 'L');
        $pdf->Cell(1, 5, 'X', 0, 1, 'L');
        $pdf->Cell(15);
        $pdf->Cell(10);
        $pdf->Cell(10, 5, 'Jabatan ', 0, 0, 'L');
        $pdf->Cell(35);
        $pdf->Cell(5, 5, ':', 0, 0, 'L');
        $pdf->Cell(1, 5, 'Kepala Desa Gondowangi Kecamatan Wagir', 0, 1, 'L');
        $pdf->Cell(75);
        $pdf->Cell(1, 5, 'Kabupaten Malang Jawa Timur', 0, 1, 'L');

        $kependudukan = $this->db->get('surat')->result();

        foreach ($kependudukan as $row) {
            if ($row->jenis_surat == "Surat Keterangan Kematian" && $row->No_surat == $No_surat) {
                $this->load->model('M_ketkematian');
                $detail = $this->M_ketkematian->lihat($No_surat);

                $pdf->SetFont('times', '', '12');
                $pdf->Cell(10);
                $pdf->Cell(0, 10, 'Dengan ini menerangkan bahwa:', 0, 1, 'L');
                $pdf->SetFont('times', '', 12);
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'a.   NIK', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail->NIK, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'b.   Nama Lengkap', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail->Nama_Lengkap, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'c.   Tempat/Tanggal Lahir', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail->Tempat_Lahir . ', ' . $detail->Tanggal_Lahir, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'd.   Jenis Kelamin', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail->Jenis_Kelamin, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'e.   Agama ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, $detail->Agama, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'f.   Status Kawin ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, $detail->Status_kawin, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'g.   Pekerjaan ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, $detail->Pekerjaan, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'h.   Alamat ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, 'Dusun ' . $detail->Dusun . ' RT.00' . $detail->No_RT . ' RW.00' . $detail->No_RT, 0, 1, 'L');
                $pdf->Cell(75);
                $pdf->Cell(1, 5, 'Desa Gondowangi Kecamatan Wagir ', 0, 1, 'L');
                $pdf->Cell(75);
                $pdf->Cell(1, 5, 'Kabupaten Malang Jawa Timur ' . $detail->Kode_pos, 0, 1, 'L');

                $pdf->Ln(5);
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(20);
                $pdf->Cell(20, 6, 'Orang tersebut diatas, adalah', 0, 0, 'L');
                $pdf->SetFont('times', 'B', '12');
                $pdf->Cell(30);
                $pdf->Cell(10, 6, 'benar-benar penduduk Desa Gondowangi Kecamatan', 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(10, 6, 'Wagir', 0, 0, 'L');
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(3);
                $pdf->Cell(10, 6, 'dan benar bahwa', 0, 0, 'L');
                $pdf->SetFont('times', 'B', '12');
                $pdf->Cell(20);
                $pdf->Cell(10, 6, 'telah meninggal dunia', 0, 0, 'L');
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(31);
                $pdf->Cell(10, 6, 'pada:', 0, 1, 'L');

                $pdf->Ln(5);
                $pdf->SetFont('times', '', 12);
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'a.   Hari/Tanggal', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail->Hari_mati . ' / ' . $detail->Tanggal_kematian, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'b.   Disebabkan oleh', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail->Sebab_kematian, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 5, 'c.   Di', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail->Lokasi_kematian, 0, 1, 'L');

                $pdf->Ln(5);
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(20);
                $pdf->Cell(0, 5, 'Demikian  surat  keterangan  kematian  ini  dibuat  agar  dapat digunakan sebagaimana', 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(0, 5, 'mestinya.', 0, 1, 'L');

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
        $this->load->view('templates/header12');
        $this->load->view('keterangan_kematian/v_tambahketkematian');
        $this->load->view('templates/footer');
    }

    public function tambah_data()
    {
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('M_ketkematian');
        $this->form_validation->set_rules(
            'NIK',
            'NIK',
            'exact_length[16]|callback_cek_NIK',
            array(
                'exact_length' => 'NIK harus terdiri dari 16 angka'
            )
        );

        if ($this->form_validation->run() == TRUE) {

            $NIK_pemohon = $this->input->post('NIK');
            $NIK = $this->input->post('NIK');
            $jenis_surat = $this->input->post('jenis_surat');
            $Hari_mati = $this->input->post('Hari_mati');
            $Tanggal_kematian = $this->input->post('Tanggal_kematian');
            $Sebab_kematian = $this->input->post('Sebab_kematian');
            $Lokasi_kematian = $this->input->post('Lokasi_kematian');
            $Status_keberadaan = $this->input->post('Status_keberadaan');

            $data = array(

                'NIK' => $NIK,
                'Status_keberadaan' => $Status_keberadaan,

            );

            $data2 = array(

                'NIK_pemohon' => $NIK_pemohon,
                'jenis_surat' => $jenis_surat,
                'Hari_mati' => $Hari_mati,
                'Tanggal_kematian' => $Tanggal_kematian,
                'Sebab_kematian' => $Sebab_kematian,
                'Lokasi_kematian' => $Lokasi_kematian,

            );
            $where = array('NIK' => $NIK_pemohon);
            $this->load->model('M_ketkematian');
            $this->M_ketkematian->update($where, $data, 'data_penduduk')->row;
            $this->M_ketkematian->tambah($data2, 'surat');
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i>Data Berhasil Ditambahkan</div>');
            redirect('Surat_KetKematian/index');
        } else {
            $this->load->view('templates/header12');
            $this->load->view('keterangan_kematian/v_tambahketkematian');
            $this->load->view('templates/footer');
        }
    }
    public function cek_NIK($str)
    {
        $this->load->model('M_ketkematian');
        $result = $this->M_ketkematian->check_database($str);
        //call to model function fo check string match in databse and return result
        if ($result == false) {
            $this->form_validation->set_message('cek_NIK', 'NIK tidak terdaftar');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function hapus_data($No_surat)
    {
        $this->load->library('session');

        $NIK = $this->input->post('NIK');
        $Status_keberadaan = $this->input->post('Status_keberadaan');
        $data = array(

            'NIK' => $NIK,
            'Status_keberadaan' => $Status_keberadaan,

        );

        $where = array('No_surat' => $No_surat);
        $where2 = array('NIK' => $NIK);
        $this->load->model('M_ketkematian');
        $this->M_ketkematian->hapus($where, 'surat');
        $this->M_ketkematian->update($where2, $data, 'data_penduduk')->row;
        $this->session->set_flashdata('hapus', '<div class="alert alert-success"><i class="fa fa-check"></i>Data Berhasil Dihapus</div>');

        redirect('Surat_KetKematian/index');
    }
    public function sunting_data($No_surat)
    {
        $where = array('No_surat' => $No_surat);
        $this->load->model('M_ketkematian');
        $data['surat'] = $this->M_ketkematian->sunting($where, 'surat')->row();

        $this->load->view('templates/header12');
        $this->load->view('keterangan_kematian/v_suntingketkematian', $data);
        $this->load->view('templates/footer');
    }
    public function update_data()
    {
        $No_surat = $this->input->post('No_surat');
        $NIK_pemohon = $this->input->post('NIK_pemohon');
        $Hari_mati = $this->input->post('Hari_mati');
        $Tanggal_kematian = $this->input->post('Tanggal_kematian');
        $Sebab_kematian = $this->input->post('Sebab_kematian');
        $Lokasi_kematian = $this->input->post('Lokasi_kematian');

        $data = array(

            'No_surat' => $No_surat,
            'NIK_pemohon' => $NIK_pemohon,
            'Hari_mati' => $Hari_mati,
            'Tanggal_kematian' => $Tanggal_kematian,
            'Sebab_kematian' => $Sebab_kematian,
            'Lokasi_kematian' => $Lokasi_kematian,

        );
        $where = array('No_surat' => $No_surat);
        $this->load->model('M_ketkematian');
        $this->M_ketkematian->update($where, $data, 'surat');
        redirect('Surat_KetKematian/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->load->model('M_ketkematian');
        $data['kependudukan'] = $this->M_ketkematian->get_keyword($keyword);
        $data['kependudukan2'] = $this->M_ketkematian->get_keyword($keyword);
        $this->load->view('templates/header12');
        $this->load->view('keterangan_kematian/v_ketkematian', $data);
        $this->load->view('templates/footer');
    }
}
