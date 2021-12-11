<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'Corp/Login';
            redirect($url);
        }

        $this->load->model('m_alumni');
        
    }

    public function index()
    {
        $data['alumni'] = $this->m_alumni->getData();
        $data['data'] = $this->m_alumni->getData();
        $this->load->view('corp/v_index',$data);
        
    }

}

/* End of file Dashboard.php */
