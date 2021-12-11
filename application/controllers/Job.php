<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_loker');
    }


    public function index()
    {
        $data['data'] = $this->m_loker->Show_loker();
        $this->load->view('v_loker', $data);
    }

}

/* End of file Job.php */
