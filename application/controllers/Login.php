<?php
class Login extends CI_Controller
{

    function index()
    {
        $this->load->view('templates/headerlogin');
        $this->load->view('v_login');
    }
    function aksi_login()
    {
        $this->load->model('M_login');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => $password
        );
        $validasi = $this->M_login->validasi_login("admin", $where)->num_rows();
        if ($validasi > 0) {
            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);

            redirect('Data_kependudukan/index');
        } else {
            $this->session->set_flashdata('pesan_error', '<div class="alert alert-danger" role="alert"> username dan password salah</div>');
            redirect('Login/index');
        }
    }

    function logout()
    {

        session_destroy();
        redirect('home/index');
    }
}
