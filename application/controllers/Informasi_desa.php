<?php

class Informasi_desa extends CI_Controller
{
    public function index()
    {
        $this->load->model('M_informasidesa');
        $data['kependudukan'] = $this->M_informasidesa->tampil_data();

        $this->load->view('templates/header14');
        $this->load->view('infodesa/v_infodesa', $data);
        $this->load->view('templates/footer');
    }
    public function btn_tambah()
    {
        $this->load->view('templates/header14');
        $this->load->view('infodesa/v_tambah');
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $Judul = $this->input->post('Judul');
        $Isi = $this->input->post('Isi');
        $data = array(

            'Judul' => $Judul,
            'Isi' => $Isi

        );
        $this->load->model('M_informasidesa');
        $this->M_informasidesa->tambah($data, 'informasi_desa');
        $this->load->view('infodesa/v_infodesa', $data);
        redirect('Informasi_desa/index');
    }
    public function hapus_data($id_info)
    {
        $where = array('id_info' => $id_info);
        $this->load->model('M_informasidesa');
        $this->M_informasidesa->hapus($where, 'informasi_desa');
        redirect('Informasi_desa/index');
    }

    public function sunting_data($id_info)
    {
        $where = array('id_info' => $id_info);
        $this->load->model('M_informasidesa');
        $data['info'] = $this->M_informasidesa->sunting($where, 'informasi_desa')->row();

        $this->load->view('templates/header14');
        $this->load->view('infodesa/v_sunting', $data);
        $this->load->view('templates/footer');
    }

    public function update_data()
    {
        $Judul = $this->input->post('Judul');
        $Isi = $this->input->post('Isi');
        $id_info = $this->input->post('id_info');

        $data = array(

            'Judul' => $Judul,
            'Isi' => $Isi

        );
        $where = array('id_info' => $id_info);
        $this->load->model('M_informasidesa');
        $this->M_informasidesa->update($where, $data, 'informasi_desa');
        redirect('Informasi_desa/index');
    }
    public function lihat_data($id_info)
    {
        // $data['kependudukan'] = $this->M_penduduk->tampil_data();

        $this->load->model('M_informasidesa');
        //        $detail = $this->M_penduduk->detail($NIK);
        $data['detail'] = $this->M_informasidesa->lihat($id_info);
        $this->load->view('templates/header14');
        $this->load->view('infodesa/v_lihat', $data);
        $this->load->view('templates/footer');
    }
    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->load->model('M_informasidesa');
        $data['kependudukan'] = $this->M_informasidesa->get_keyword($keyword);
        $this->load->view('templates/header14');
        $this->load->view('infodesa/v_infodesa', $data);
        $this->load->view('templates/footer');
    }

}
