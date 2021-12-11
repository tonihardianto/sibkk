<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }
    public function index()
    {
        $this->load->view('v_login');
    }
    function auth(){
        $username=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $user=$username;
        $pass=$password;

        $cek_akses=$this->m_login->get_akses($user,$pass);

        if ($cek_akses->num_rows > 0) {
            $this->session->set_userdata('masuk',TRUE);
        }
    }

}

/* End of file Login.php */


?>