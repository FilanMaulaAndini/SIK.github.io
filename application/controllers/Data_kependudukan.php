<?php

class Data_kependudukan extends CI_Controller
{
    public function index()
    {
        $this->load->library('pagination');
        $this->load->model('M_penduduk');
        $config['base_url'] = site_url('Data_kependudukan/index'); //site url
        $config['total_rows'] = $this->db->count_all('data_penduduk'); //total row
        $config['per_page'] = 10;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
    

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-right"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['kependudukan'] = $this->M_penduduk->tampil_data($config["per_page"], $data['page']);

        $data['pagination'] = $this->pagination->create_links();

        $this->load->view('templates/header');
        $this->load->view('v_datakependudukan', $data);
        $this->load->view('templates/footer');
    }

    public function btn_tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('v_tambahdatakependudukan');
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $this->load->library('form_validation');
        $this->load->library('session');

        $this->form_validation->set_rules('No_KK', 'KK', 'required|exact_length[16]');
        $this->form_validation->set_rules(
            'NIK',
            'KK',
            'required|exact_length[16]|is_unique[data_penduduk.NIK]',
            array(
                'exact_length' => 'NIK harus terdiri dari 16 angka',
                'is_unique' => "NIK sudah terdaftar"
            )
        );

        if ($this->form_validation->run() == TRUE) {
            $No_KK = $this->input->post('No_KK');
            $NIK = $this->input->post('NIK');
            $Nama_Lengkap = $this->input->post('Nama_Lengkap');
            $Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
            $Tempat_Lahir = $this->input->post('Tempat_Lahir');
            $Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
            $Agama = $this->input->post('Agama');
            $No_Telp = $this->input->post('No_Telp');
            $Pendidikan = $this->input->post('Pendidikan');
            $Pekerjaan = $this->input->post('Pekerjaan');
            $Gol_darah = $this->input->post('Gol_darah');
            $SHDK = $this->input->post('SHDK');
            $Status_keberadaan = $this->input->post('Status_keberadaan');
            $Status_kawin = $this->input->post('Status_kawin');
            $Tanggal_kawin = $this->input->post('Tanggal_kawin');
            $No_RT = $this->input->post('No_RT');
            $No_RW = $this->input->post('No_RW');
            $Kode_pos = $this->input->post('Kode_pos');
            $Dusun = $this->input->post('Dusun');
            $Luas_lantai = $this->input->post('Luas_lantai');
            $Jenis_lantai = $this->input->post('Jenis_lantai');
            $Jenis_dinding = $this->input->post('Jenis_dinding');
            $Fasilitas_buang_air = $this->input->post('Fasilitas_buang_air');
            $Sumber_penerangan = $this->input->post('Sumber_penerangan');
            $Sumber_air_minum = $this->input->post('Sumber_air_minum');
            $BB_memasak = $this->input->post('BB_memasak');
            $Satu_pakaian_pertahun = $this->input->post('Satu_pakaian_pertahun');
            $Satudua_kali_makan = $this->input->post('Satudua_kali_makan');
            $Bayar_pengobatan = $this->input->post('Bayar_pengobatan');
            $Sumber_penghasilan_Kepala_RT = $this->input->post('Sumber_penghasilan_Kepala_RT');
            $Pendidikan_tertinggi_Kepala_RT = $this->input->post('Pendidikan_tertinggi_Kepala_RT');
            $TabunganBarang_Jual = $this->input->post('TabunganBarang_Jual');


            $data = array(

                'No_KK' => $No_KK,
                'NIK' => $NIK,
                'Nama_Lengkap' => $Nama_Lengkap,
                'Jenis_Kelamin' => $Jenis_Kelamin,
                'No_RT' => $No_RT,
                'No_RW' => $No_RW,
                'Tempat_Lahir' => $Tempat_Lahir,
                'Tanggal_Lahir' => $Tanggal_Lahir,
                'Agama' => $Agama,
                'Pendidikan' => $Pendidikan,
                'Pekerjaan' => $Pekerjaan,
                'Gol_darah' => $Gol_darah,
                'SHDK' => $SHDK,
                'Status_keberadaan' => $Status_keberadaan,
                'Status_kawin' => $Status_kawin,
                'Tanggal_kawin' => $Tanggal_kawin,
                'No_Telp' => $No_Telp,
                'Kode_pos' => $Kode_pos,
                'Dusun' => $Dusun

            );
            $data2 = array(

                'NIK' => $NIK,
                'Luas_lantai' => $Luas_lantai,
                'Jenis_lantai' => $Jenis_lantai,
                'Jenis_dinding' => $Jenis_dinding,
                'Fasilitas_buang_air' => $Fasilitas_buang_air,
                'Sumber_penerangan' => $Sumber_penerangan,
                'Sumber_air_minum' => $Sumber_air_minum,
                'BB_memasak' => $BB_memasak,
                'Satu_pakaian_pertahun' => $Satu_pakaian_pertahun,
                'Satudua_kali_makan' => $Satudua_kali_makan,
                'Bayar_pengobatan' => $Bayar_pengobatan,
                'Sumber_penghasilan_Kepala_RT' => $Sumber_penghasilan_Kepala_RT,
                'Pendidikan_tertinggi_Kepala_RT' => $Pendidikan_tertinggi_Kepala_RT,
                'TabunganBarang_Jual' => $TabunganBarang_Jual

            );

            $this->load->model('M_penduduk');
            $this->M_penduduk->tambah($data, 'data_penduduk');
            $this->M_penduduk->tambah($data2, 'kategori_miskin');
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert"><i class="fa fa-check"></i>Data Berhasil Ditambahkan</div>');

            redirect('Data_kependudukan/index');
        } else {
            $this->load->view('templates/header');
            $this->load->view('v_tambahdatakependudukan');
            $this->load->view('templates/footer');
        }
    }
    public function hapus_data($NIK)
    {
        $this->load->library('session');
        $where = array('NIK' => $NIK);
        $this->load->model('M_penduduk');
        $this->M_penduduk->hapus($where, 'data_penduduk');
        $this->session->set_flashdata('hapus', '<div class="alert alert-success" role="alert"> <i class="fa fa-check"></i>Data Berhasil Dihapus</div>');
        redirect('Data_kependudukan/index');
    }
    public function update_data()
    {
        $No_KK = $this->input->post('No_KK');
        $NIK = $this->input->post('NIK');
        $Nama_Lengkap = $this->input->post('Nama_Lengkap');
        $Jenis_Kelamin = $this->input->post('Jenis_Kelamin');
        $Tempat_Lahir = $this->input->post('Tempat_Lahir');
        $Tanggal_Lahir = $this->input->post('Tanggal_Lahir');
        $Agama = $this->input->post('Agama');
        $No_Telp = $this->input->post('No_Telp');
        $Pendidikan = $this->input->post('Pendidikan');
        $Pekerjaan = $this->input->post('Pekerjaan');
        $Gol_darah = $this->input->post('Gol_darah');
        $SHDK = $this->input->post('SHDK');
        $Status_keberadaan = $this->input->post('Status_keberadaan');
        $Status_kawin = $this->input->post('Status_kawin');
        $Tanggal_kawin = $this->input->post('Tanggal_kawin');
        $No_RT = $this->input->post('No_RT');
        $No_RW = $this->input->post('No_RW');
        $Kode_pos = $this->input->post('Kode_pos');
        $Dusun = $this->input->post('Dusun');
        $Luas_lantai = $this->input->post('Luas_lantai');
        $Jenis_lantai = $this->input->post('Jenis_lantai');
        $Jenis_dinding = $this->input->post('Jenis_dinding');
        $Fasilitas_buang_air = $this->input->post('Fasilitas_buang_air');
        $Sumber_penerangan = $this->input->post('Sumber_penerangan');
        $Sumber_air_minum = $this->input->post('Sumber_air_minum');
        $BB_memasak = $this->input->post('BB_memasak');
        $Satu_pakaian_pertahun = $this->input->post('Satu_pakaian_pertahun');
        $Satudua_kali_makan = $this->input->post('Satudua_kali_makan');
        $Bayar_pengobatan = $this->input->post('Bayar_pengobatan');
        $Sumber_penghasilan_Kepala_RT = $this->input->post('Sumber_penghasilan_Kepala_RT');
        $Pendidikan_tertinggi_Kepala_RT = $this->input->post('Pendidikan_tertinggi_Kepala_RT');
        $TabunganBarang_Jual = $this->input->post('TabunganBarang_Jual');


        $data = array(

            'No_KK' => $No_KK,
            'Nama_Lengkap' => $Nama_Lengkap,
            'NIK' => $NIK,
            'Jenis_Kelamin' => $Jenis_Kelamin,
            'No_RT' => $No_RT,
            'No_RW' => $No_RW,
            'Tempat_Lahir' => $Tempat_Lahir,
            'Tanggal_Lahir' => $Tanggal_Lahir,
            'Agama' => $Agama,
            'Pendidikan' => $Pendidikan,
            'Pekerjaan' => $Pekerjaan,
            'Gol_darah' => $Gol_darah,
            'SHDK' => $SHDK,
            'Status_keberadaan' => $Status_keberadaan,
            'Status_kawin' => $Status_kawin,
            'Tanggal_kawin' => $Tanggal_kawin,
            'No_Telp' => $No_Telp,
            'Kode_pos' => $Kode_pos,
            'Dusun' => $Dusun

        );
        $data2 = array(

            'NIK' => $NIK,
            'Luas_lantai' => $Luas_lantai,
            'Jenis_lantai' => $Jenis_lantai,
            'Jenis_dinding' => $Jenis_dinding,
            'Fasilitas_buang_air' => $Fasilitas_buang_air,
            'Sumber_penerangan' => $Sumber_penerangan,
            'Sumber_air_minum' => $Sumber_air_minum,
            'BB_memasak' => $BB_memasak,
            'Satu_pakaian_pertahun' => $Satu_pakaian_pertahun,
            'Satudua_kali_makan' => $Satudua_kali_makan,
            'Bayar_pengobatan' => $Bayar_pengobatan,
            'Sumber_penghasilan_Kepala_RT' => $Sumber_penghasilan_Kepala_RT,
            'Pendidikan_tertinggi_Kepala_RT' => $Pendidikan_tertinggi_Kepala_RT,
            'TabunganBarang_Jual' => $TabunganBarang_Jual

        );
        $where = array('NIK' => $NIK);
        $this->load->model('M_penduduk');
        $this->M_penduduk->update($where, $data, 'data_penduduk');
        $this->M_penduduk->update($where, $data2, 'kategori_miskin');
        //        $this->load->view('v_datakependudukan', $data);
        redirect('Data_kependudukan/index');
    }
    public function sunting_data($NIK)
    {
        // $where = array('NIK' => $NIK);
        $this->load->model('M_penduduk');
        $data['data_penduduk'] = $this->M_penduduk->sunting($NIK);

        $this->load->view('templates/header');
        $this->load->view('v_suntingdatakependudukan', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_data($NIK)
    {
        // $data['kependudukan'] = $this->M_penduduk->tampil_data();

        $this->load->model('M_penduduk');
        //        $detail = $this->M_penduduk->detail($NIK);
        $data['detail'] = $this->M_penduduk->lihat($NIK);
        $this->load->view('templates/header');
        $this->load->view('v_lihatdatakependudukan', $data);
        $this->load->view('templates/footer');
    }
    public function search()
    {
        $this->load->library('pagination');
        // $this->load->model('M_penduduk');

        $data['pagination'] = $this->pagination->create_links();

        $keyword = $this->input->post('keyword');
        $this->load->model('M_penduduk');
        $data['kependudukan'] = $this->M_penduduk->get_keyword($keyword)->result();
        // $data['kependudukan2'] = $this->M_penduduk->get_keyword($keyword);
        $this->load->view('templates/header');
        $this->load->view('v_datakependudukan', $data);
        $this->load->view('templates/footer');
    }
}
