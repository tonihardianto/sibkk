<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('user_nik') != true || $this->session->userdata('user_nama') != true) {
            $url = base_url() . 'Applicant/Login';
            redirect($url);
        }
        $this->load->model('m_applicant');
    }
    public function index()
    {
        $id = $this->session->userdata('user_nik');
        $data['data']  = $this->m_applicant->getData($id);
        $this->load->view('apply/v_profile',$data);
        
    }
    function updateProfil()
    {
        $pass = $this->input->post('password');
        $nik = $this->input->post('nik');
        $kk = $this->input->post('kk');
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $tanggal = $this->input->post('tgl_lahir');
        $tb = $this->input->post('tb');
        $bb = $this->input->post('bb');
        $jurusan = $this->input->post('jurusan');
        $sekolah = $this->input->post('sekolah');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $bkk = $this->input->post('bkk');

        $this->m_applicant->updateProfil($nik,$kk,$nama,$tempat,$tanggal,$tb,$bb,$jurusan,$sekolah,$alamat,$telepon,$email,$bkk);
        $this->session->set_flashdata('msg', 'Profil Berhasil <b>Diperbarui</b>.');
        redirect('Applicant/Dashboard');
    }

}

/* End of file Profil.php */


?>