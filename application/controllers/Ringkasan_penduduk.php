<?php

class Ringkasan_penduduk extends CI_Controller
{
	function index()
	{
		// $this->load->model('M_ringkasanpenduduk');
		// $data['penduduk'] = $this->M_ringkasanpenduduk->see();
		// echo json_encode($data);
		$this->load->library('pagination');
		$this->load->model('M_ringkasanpenduduk');
		$query = $this->M_ringkasanpenduduk->get_KK();
		$config['base_url'] = site_url('Ringkasan_penduduk/index');
		$config['total_rows'] = $query;
		$config['per_page'] = 10;
		$config["uri_segment"] = 3;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = 1;

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

		$data['KK'] = $this->M_ringkasanpenduduk->get_jumlahKK($config["per_page"], $data['page']);

		$data['pagination'] = $this->pagination->create_links();

		$data['penduduk'] = $this->M_ringkasanpenduduk->get_penduduk();
		$data['jk'] = $this->M_ringkasanpenduduk->get_data();
		$data['jumlahKK'] = $this->M_ringkasanpenduduk->get_KK();
		$data['agama'] = $this->M_ringkasanpenduduk->get_agama();
		$data['pekerjaan'] = $this->M_ringkasanpenduduk->get_pekerjaan();
		$data['pendidikan'] = $this->M_ringkasanpenduduk->get_pendidikan();
		$data['katmiskin'] = $this->M_ringkasanpenduduk->get_kat_miskin();
		$this->load->view('templates/header13');
		$this->load->view('ringkasan_penduduk/v_ringkasanpenduduk', $data);
		$this->load->view('templates/footer');
	}
	function lihat_KK($No_KK)
	{
		$this->load->model('M_ringkasanpenduduk');
		$data['detail'] = $this->M_ringkasanpenduduk->lihat($No_KK);
		$this->load->view('templates/header13');
		$this->load->view('ringkasan_penduduk/v_lihat', $data);
		$this->load->view('templates/footer');
	}
}
