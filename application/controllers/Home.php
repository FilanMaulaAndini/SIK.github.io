<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_ringkasanpenduduk');
        $data['penduduk'] = $this->M_ringkasanpenduduk->get_penduduk();
        $data['jk'] = $this->M_ringkasanpenduduk->get_data();
        $data['agama'] = $this->M_ringkasanpenduduk->get_agama();
        $data['pekerjaan'] = $this->M_ringkasanpenduduk->get_pekerjaan();
        $data['pendidikan'] = $this->M_ringkasanpenduduk->get_pendidikan();
        $this->load->view('templates/headerhome');
        $this->load->view('home/index', $data);
    }

    public function info_desa()
    {
        $this->load->model('M_informasidesa');
        $data['kependudukan'] = $this->M_informasidesa->tampil_data();

        $this->load->view('templates/headerhome');
        $this->load->view('home/informasidesa', $data);
    }

    public function lihat_info($id_info)
    {

        $this->load->model('M_informasidesa');
        $data['detail'] = $this->M_informasidesa->lihat($id_info);

        $this->load->view('templates/headerhome');
        $this->load->view('home/lihat_informasidesa', $data);
    }
    public function lihat_kategori()
    {
        $this->load->model('M_ringkasanpenduduk');
        $data['katmiskin'] = $this->M_ringkasanpenduduk->get_kat_miskin();
        $data['penduduk'] = $this->M_ringkasanpenduduk->get_penduduk();

        $this->load->view('templates/headerhome');
        $this->load->view('home/lihat_kategoripendudukmiskin', $data);
    }
    public function lihat_ringkasan()
    {
        $this->load->model('M_ringkasanpenduduk');
        $data['penduduk'] = $this->M_ringkasanpenduduk->get_penduduk();
        $data['jk'] = $this->M_ringkasanpenduduk->get_data();
        $data['agama'] = $this->M_ringkasanpenduduk->get_agama();
        $data['pekerjaan'] = $this->M_ringkasanpenduduk->get_pekerjaan();
        $data['pendidikan'] = $this->M_ringkasanpenduduk->get_pendidikan();

        $this->load->view('templates/headerhome');
        $this->load->view('home/lihat_ringkasandesa', $data);
    }
}
