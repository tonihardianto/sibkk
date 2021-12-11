<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }
    public function index()
    {
        $this->load->view('corp/v_login');
    }
    function auth(){
        $email=htmlspecialchars($this->input->post('email',true),ENT_QUOTES);
        $password=htmlspecialchars(md5($this->input->post('password',true)),ENT_QUOTES);
        // $user=$user;
        // $pass=$password;

        $cek_akses=$this->m_login->auth_corp($email,$password);

        if ($cek_akses->num_rows() > 0) {
            $data = $cek_akses->row_array();
            $this->session->set_userdata('loggedin',TRUE);
            $this->session->set_userdata('ses_id', $data['co_id']);
            $this->session->set_userdata('name',$data['co_nama']);
            redirect('Corp/Dashboard');
        }else{
            //$url = base_url();
            echo $this->session->set_flashdata('fail','Email atau password salah!');
            redirect('Corp/Login');
         }
    }
    function logout(){
        $this->session->sess_destroy();
        $url=base_url();
        redirect($url);
    }

}

/* End of file Login.php */
