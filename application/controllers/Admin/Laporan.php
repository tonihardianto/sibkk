<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            redirect($url);
        }

        $this->load->model('m_laporan');
    }

    public function index()
    {
        echo "Oops... Something wrong ! ";
    }
    
    function agenda(){
        $data['data'] = $this->m_laporan->lapAgenda();
        $this->load->view('laporan/v_lap_agenda', $data);
    }

    function pelamar(){
        $data['data'] = $this->m_laporan->lapPelamar();
        $this->load->view('laporan/v_lap_pelamar', $data);
    }

    function riwayat(){
        $data['data'] = $this->m_laporan->getRiwayat();
        $this->load->view('laporan/v_lap_history', $data);
    }

    function alumni(){
        $data['data'] = $this->m_laporan->lapAlumni();
        $this->load->view('laporan/v_lap_alumni', $data);
    }
}

/* End of file Laporan.php */


?>