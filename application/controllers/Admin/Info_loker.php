<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Info_loker extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_loker');
    }


    public function index()
    {
        $data['data1'] = $this->m_loker->getData();
        $data['data'] = $this->m_loker->getData();
        $this->load->view('v_loker', $data);
    }

}

/* End of file Info_loker.php */



?>