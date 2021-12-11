<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Applicant/Login';
            redirect($url);
        }
        $this->load->model('m_applicant');
        $this->load->model('m_kelas');
        $this->load->model('m_jurusan');
    }

    public function index(){
        $this->load->view('v_index');
    }

}

/* End of file Home.php */


?>