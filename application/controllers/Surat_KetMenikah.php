<?php

class Surat_KetMenikah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('M_ketmenikah');
        $this->load->library('session');
    }
    public function index()
    {
        //model
        $this->load->model('M_ketmenikah');
        $data['kependudukan'] = $this->M_ketmenikah->tampil_data();
        $data['kependudukan2'] = $this->M_ketmenikah->tampil_data2();

        $this->load->view('templates/header3');
        $this->load->view('keterangan_menikah/v_ketmenikah', $data);
        $this->load->view('templates/footer');
    }
    public function lihat_data($No_surat)
    {
        // $data['kependudukan'] = $this->M_penduduk->tampil_data();

        $this->load->model('M_ketmenikah');
        //        $detail = $this->M_penduduk->detail($NIK);
        $data['detail'] = $this->M_ketmenikah->lihat($No_surat);
        $data['detail2'] = $this->M_ketmenikah->lihat2($No_surat);
        $this->load->view('templates/header3');
        $this->load->view('keterangan_menikah/v_lihatketmenikah', $data);
        // $this->load->view('keterangan_menikah/v_lihatketmenikah2', $data2);
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
        $pdf->Cell(0, 5, 'SURAT KETERANGAN MENIKAH', 0, 1, 'C');
        $pdf->SetFont('times', '', '12');
        $pdf->Cell(0, 5, 'Nomor: .....................................................', 0, 1, 'C');

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
            if ($row->jenis_surat == "Surat Keterangan Menikah" && $row->No_surat == $No_surat) {
                $this->load->model('M_ketmenikah');
                $detail = $this->M_ketmenikah->lihat($No_surat);
                $detail2 = $this->M_ketmenikah->lihat2($No_surat);

                $pdf->SetFont('times', '', '12');
                $pdf->Cell(10);
                $pdf->Cell(0, 10, 'Dengan ini menerangkan bahwa:', 0, 1, 'L');
                $pdf->SetFont('times', 'B', 12);
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, '1.  DATA SUAMI', 0, 1, 'L');
                $pdf->SetFont('times', '', 12);
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'NIK', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail->NIK, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Nama Lengkap', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail->Nama_Lengkap, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Tempat/Tanggal Lahir', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail->Tempat_Lahir . ', ' . $detail->Tanggal_Lahir, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Agama ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, $detail->Agama, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Status Kawin ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, $detail->Status_kawin, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Pekerjaan ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, $detail->Pekerjaan, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Alamat ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, 'Dusun ' . $detail->Dusun . ' RT.00' . $detail->No_RT . ' RW.00' . $detail->No_RT, 0, 1, 'L');
                $pdf->Cell(81);
                $pdf->Cell(1, 5, 'Desa Gondowangi Kecamatan Wagir ', 0, 1, 'L');
                $pdf->Cell(81);
                $pdf->Cell(1, 5, 'Kabupaten Malang Jawa Timur ' . $detail->Kode_pos, 0, 1, 'L');

                $pdf->SetFont('times', 'B', 12);
                $pdf->Cell(15);
                $pdf->Cell(5);
                $pdf->Cell(10, 8, '2.  DATA ISTRI', 0, 1, 'L');
                $pdf->SetFont('times', '', 12);
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'NIK', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail2->NIK, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Nama Lengkap', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail2->Nama_Lengkap, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Tempat/Tanggal Lahir', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(2, 5, ':', 0, 0, 'L');
                $pdf->Cell(3);
                $pdf->Cell(1, 5, $detail2->Tempat_Lahir . ', ' . $detail2->Tanggal_Lahir, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Agama ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, $detail2->Agama, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Status Kawin ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, $detail2->Status_kawin, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Pekerjaan ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, $detail2->Pekerjaan, 0, 1, 'L');
                $pdf->Cell(15);
                $pdf->Cell(11);
                $pdf->Cell(10, 5, 'Alamat ', 0, 0, 'L');
                $pdf->Cell(40);
                $pdf->Cell(5, 5, ':', 0, 0, 'L');
                $pdf->Cell(1, 5, 'Dusun ' . $detail2->Dusun . ' RT.00' . $detail2->No_RT . ' RW.00' . $detail2->No_RT, 0, 1, 'L');
                $pdf->Cell(81);
                $pdf->Cell(1, 5, 'Desa Gondowangi Kecamatan Wagir ', 0, 1, 'L');
                $pdf->Cell(81);
                $pdf->Cell(1, 5, 'Kabupaten Malang Jawa Timur ' . $detail2->Kode_pos, 0, 1, 'L');

                $pdf->Ln(5);
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(15);
                $pdf->Cell(20, 6, 'Orang tersebut diatas, adalah', 0, 0, 'L');
                $pdf->SetFont('times', 'B', '12');
                $pdf->Cell(30);
                $pdf->Cell(10, 6, 'benar telah menikah secara agama', 0, 0, 'L');
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(54);
                $pdf->Cell(10, 6, 'pada tanggal ' . $detail2->Tanggal_menikah, 0, 1, 'L');
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(10);
                $pdf->Cell(10, 6, 'yang dilakukan oleh Pemuka Agama/Penghulu setempat.', 0, 0, 'L');

                $pdf->Ln(7);
                $pdf->SetFont('times', '', '12');
                $pdf->Cell(15);
                $pdf->Cell(0, 6, 'Demikian surat keterangan menikah dibuat agar dapat digunakan sebagaimana mestinya.', 0, 1, 'L');

                $date = date('d M Y');

                $pdf->Ln(10);
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
    public function tambah_data()
    {
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->form_validation->set_rules(
            'NIK_suami',
            'NIK suami',
            'exact_length[16]|callback_cek_NIK',
            array(
                'exact_length' => 'NIK harus terdiri dari 16 angka'
            )
        );
        $this->form_validation->set_rules(
            'NIK_istri',
            'NIK istri',
            'exact_length[16]|callback_cek_NIK',
            array(
                'exact_length' => 'NIK harus terdiri dari 16 angka'
            )
        );

        if ($this->form_validation->run() == TRUE) {

            $NIK_suami = $this->input->post('NIK_suami');
            $NIK_istri = $this->input->post('NIK_istri');
            $jenis_surat = 'Surat Keterangan Menikah';
            $Tanggal_menikah = $this->input->post('Tanggal_menikah');

            $data = array(
                'NIK_suami' => $NIK_suami,
                'NIK_istri' => $NIK_istri,
                'jenis_surat' =>   $jenis_surat,
                'Tanggal_menikah' => $Tanggal_menikah,
            );

            $this->load->model('M_ketmenikah');
            $this->M_ketmenikah->tambah($data, 'surat');
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i>Data Berhasil Ditambahkan</div>');
            redirect('Surat_KetMenikah/index');
        } else {
            $this->load->view('templates/header3');
            $this->load->view('keterangan_menikah/v_tambahketmenikah');
            $this->load->view('templates/footer');
        }
    }
    public function cek_NIK($str)
    {
        $result = $this->M_ketmenikah->check_database($str);
        //call to model function fo check string match in databse and return result
        if ($result == false) {
            $this->form_validation->set_message('cek_NIK', 'NIK tidak terdaftar');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function btn_tambah()
    {
        $this->load->view('templates/header3');
        $this->load->view('keterangan_menikah/v_tambahketmenikah');
        $this->load->view('templates/footer');
    }
    public function hapus_data($No_surat)
    {
        $where = array('No_surat' => $No_surat);
        $this->load->model('M_ketmenikah');
        $this->M_ketmenikah->hapus($where, 'surat');
        $this->session->set_flashdata('hapus', '<div class="alert alert-success"><i class="fa fa-check"></i>Data Berhasil Dihapus</div>');
        redirect('Surat_KetMenikah/index');
    }
    public function sunting_data($No_surat)
    {
        $where = array('No_surat' => $No_surat);
        $this->load->model('M_ketmenikah');
        $data['kependudukan'] = $this->M_ketmenikah->sunting($where, 'surat')->result();
        $this->load->view('templates/header3');
        $this->load->view('keterangan_menikah/v_suntingketmenikah', $data);
        $this->load->view('templates/footer');
    }
    public function update_data()
    {
        $NIK_suami = $this->input->post('NIK_suami');
        $NIK_istri = $this->input->post('NIK_istri');
        $jenis_surat = $this->input->post('jenis_surat');
        $No_surat = $this->input->post('No_surat');
        $Tanggal_menikah = $this->input->post('Tanggal_menikah');
        $data = array(

            'No_surat' => $No_surat,
            'NIK_suami' => $NIK_suami,
            'jenis_surat' => $jenis_surat,
            'NIK_istri' => $NIK_istri,
            'Tanggal_menikah' => $Tanggal_menikah,
        );

        $where = array('No_surat' => $No_surat);
        $this->load->model('M_ketmenikah');
        $this->M_ketmenikah->update($where, $data, 'surat');

        redirect('Surat_KetMenikah/index');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->load->model('M_ketmenikah');
        $data['kependudukan'] = $this->M_ketmenikah->get_keyword($keyword);
        $data['kependudukan2'] = $this->M_ketmenikah->get_keyword2($keyword);
        $this->load->view('templates/header3');
        $this->load->view('keterangan_menikah/v_ketmenikah', $data);
        $this->load->view('templates/footer');
    }
}
