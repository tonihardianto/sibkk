<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url().'Admin/Login';
            redirect($url);
        }
        $this->load->model('m_applicant');
        $this->load->model('m_count');
        $this->load->model('m_setting');
        
    }

    public function index()
    {
        //include site information
        $site = $this->m_setting->get_setting()->row_array();
        $data['title'] = $site['site_judul'];

        $data['appli'] = $this->m_applicant->get_appli();
        $data['user']=$this->m_count->user();
        $data['siswa'] = $this->m_count->siswa();
        $data['pelamar'] = $this->m_count->pelamar();
        $data['loker'] = $this->m_count->loker();
        $this->load->view('admin/v_index',$data);
        
    }

}

/* End of file Dashboard.php */


?>