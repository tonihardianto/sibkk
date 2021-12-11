<?php  


defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            redirect($url);
        }
        $this->load->model('m_loker');
        $this->load->model('m_info');
        
    }

    public function index()
    {
        $data['del'] = $this->m_info->get_info();
        $data['edit'] = $this->m_info->get_info();
        $data['data'] = $this->m_info->get_info();
        $this->load->view('admin/v_info', $data);
        
    }
    function add_info(){
        $nama = $this->input->post('judul');
        $tgl = $this->input->post('tanggal');
        $value = $this->input->post('detail');

        $this->m_info->add_info($nama,$tgl,$value);
        $this->session->set_flashdata('msg', 'Data Berhasil ditambahkan.');
        redirect('Admin/Info');
    }

    function editInfo()
    {
        $id  = $this->input->post('id');
        $nama = $this->input->post('judul');
        $tgl = $this->input->post('tanggal');
        $value = $this->input->post('detail');

        $this->m_info->editInfo($nama, $tgl, $value, $id);
        $this->session->set_flashdata('msg', 'Data Berhasil diUbah.');
        redirect('Admin/Info');
    }

    function delInfo(){
        $id = $this->input->post('id');

        $this->m_info->delInfo($id);
        $this->session->set_flashdata('msg', 'Data Berhasil diHapus.');
        redirect('Admin/Info');
    }

    function getEdit(){
        $id = $_GET['id'];
        $data['data'] = $this->m_info->getDataById($id);
        $this->load->view('admin/v_infoedit',$data);
    }

}

/* End of file Info.php */


?>