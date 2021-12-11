<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Corp/Login';
            redirect($url);
        }

        $this->load->model('m_alumni');
    }

    public function index()
    {
        $data['del'] = $this->m_alumni->getData();
        $data['data'] = $this->m_alumni->getData();
        $this->load->view('corp/v_siswa',$data);
    }

    function addSiswa(){
        $co = $this->session->userdata('name');
        $nama = $this->input->post('fullname');
        $jurusan = $this->input->post('jurusan');
        $sekolah = $this->input->post('sekolah');
        $posisi = $this->input->post('posisi');
        $masuk = $this->input->post('tgl_masuk');

        $this->m_alumni->addAlumni($nama,$jurusan,$sekolah,$posisi,$co,$masuk);
        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Corp/Siswa');
    }

    function editSiswa(){
        $id = $this->input->post('id');
        $nama = $this->input->post('fullname');
        $jurusan = $this->input->post('jurusan');
        $sekolah = $this->input->post('sekolah');
        $posisi = $this->input->post('posisi');
        $masuk = $this->input->post('tgl_masuk');

        $this->m_alumni->editAlumni($nama, $jurusan, $sekolah, $posisi, $masuk, $id);
        $this->session->set_flashdata('msg', 'Data Berhasil diUbah.');
        redirect('Corp/Siswa');
    }

    function delAlumni(){
        $id = $this->input->post('id');

        $this->m_alumni->delAlumni($id);
        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Corp/Siswa');
    }

    function getEdit(){
        $id = $_GET['id'];
        $data['data'] = $this->m_alumni->getEdit($id);
        $this->load->view('corp/v_siswaEdit', $data);
        
    }

}

/* End of file Siswa.php */


?>