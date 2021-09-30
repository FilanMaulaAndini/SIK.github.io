<?php
class Gantipassword extends CI_Controller
{
function __construct(){
        parent::__construct();
       $this->load->helper('string');
        $this->load->library('form_validation');
    }

public function reset_password(){
    $this->load->view('templates/headerlogin');
    $this->load->view('v_gantipassword');
   
}
public function reset_password_validation(){

 
    $password=$this->input->post('password');
    $username=$this->input->post('username');
    $user= $this->db->get_where('admin',['username'=>$username])->row_array();

   //cek username
   if($user){
       //cek password
       
   
    $data = array(

      
        'password' => md5($password),
        'username' => $username,

    );
    $where = array('username' => $username);
    $this->load->model('M_reset');
    $this->M_reset->reset_password($where, $data, 'admin');
    redirect('Data_kependudukan/index');
}
else{
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> username salah</div>');
    redirect('Gantipassword/reset_passwordd');
}
    
}
}


