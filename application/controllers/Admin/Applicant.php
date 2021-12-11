<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            redirect($url);
        }
        
        $this->load->model('m_applicant');
        $this->load->model('m_kelas');
        $this->load->model('m_jurusan');
        $this->load->model('m_setting');
    }
    function index(){
        $site = $this->m_setting->get_setting()->row_array();
        $title = $site['site_judul'];
        //$data['data']=$this->m_applicant->get_applicant();
        $data['jurusan']=$this->m_jurusan->get_jurusan();
        $data['kelas']=$this->m_kelas->get_kelas();

        $this->load->view('apply/v_member',$data);
    }
    function del_applicant(){

    }
    function count_appli(){

    }
    function get_kelas(){
        $jur_id = $this->input->post('id',TRUE);
        $data = $this->m_applicant->get_kelas($jur_id)->result();
        echo json_encode($data);
    }
    
}

/* End of file Applicant.php */

?>