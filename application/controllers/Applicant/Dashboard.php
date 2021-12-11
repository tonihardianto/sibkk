<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('user_nik')!=true || $this->session->userdata('user_nama') != true) {
            $url = base_url().'Applicant/Login';
            redirect($url);
        }

        $this->load->library('upload');
        $this->load->helper('download');
        
        $this->load->model('m_agenda');
        $this->load->model('m_applicant');
        $this->load->model('m_kelas');
        $this->load->model('m_jurusan');
        $this->load->model('m_loker');
        $this->load->model('m_info');
        $this->load->model('m_history');
        
    }

    public function index(){
        $nik = $this->session->userdata('user_nik');
        $data['history'] = $this->m_history->getData($nik);
        $data['agd'] = $this->m_agenda->getData();
        $data['info'] = $this->m_info->get_info();
        $data['loker'] = $this->m_loker->getData();
        $data['data1'] = $this->m_loker->getData();
        $data['data'] = $this->m_applicant->get_user($nik);
        $this->load->view('apply/v_index',$data);
    }
    function test(){
        $string = "abcdefghijklmnopqrstuvwxyz0123456789";

        $password = random_string('alnum', 8);

        echo $password;
    }

    function daftar(){
        
        $p=$this->session->userdata('user_nik');
        
        $config['upload_path'] = './asset/__files/'; //path folder
        $config['allowed_types'] = 'zip|rar'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true; //Enkripsi nama yang terupload

        $this->upload->initialize($config);
        $usernik = $this->session->userdata('user_nik');
        

        $this->upload->do_upload('berkas');
        $gbr = $this->upload->data();
        $fileuser = $gbr['file_name'];

        $this->m_applicant->upload_file($usernik,$fileuser);
        $this->session->set_flashdata('msg', 'Data Berhasil <b>diperbarui</b>.');
        redirect('applicant/dashboard');

    }
    public function download(){
        $nik =  $this->session->userdata('user_nik');
        
        $filedata = $this->m_applicant->download($nik);
        $file['other'] = 'asset/__files'.$filedata['lamar_other'];
        $file['foto'] = 'asset/__files'.$filedata['lamar_foto'];
        force_download($file, NULL);
    }
    public function profil(){
        $config['upload_path'] = './asset/__files/'; //path folder
        $config['allowed_types'] = 'png|jpg|jpeg'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = true; //Enkripsi nama yang terupload

        $this->upload->initialize($config);
        $usernik = $this->session->userdata('user_nik');


        $this->upload->do_upload('berkas');
        $gbr = $this->upload->data();
        $fileuser = $gbr['file_name'];

        $this->m_applicant->upload_file($usernik, $fileuser);
        $this->session->set_flashdata('msg', 'Data Berhasil <b>diperbarui</b>.');
        redirect('applicant/dashboard');

    }
    function pelamar(){
        $date=date('Y-m-d');

        $company = $this->input->post('loker');
        $loker = $this->input->post('idloker');
        $nik = $this->input->post('nik');
        $kk = $this->input->post('kk');
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $lahir = $this->input->post('tgl_lahir');
        $tb = $this->input->post('tb');
        $bb = $this->input->post('bb');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $jurusan = $this->input->post('jurusan');
        $kelas = $this->input->post('kelas');
        $sekolah = $this->input->post('sekolah');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $bkk = $this->input->post('bkk');

        // Config File
        $config['upload_path'] = './asset/__files/'; 
        $config['allowed_types'] = 'zip|rar'; 
        $config['encrypt_name'] = FALSE; 

        $this->upload->initialize($config);

        $this->upload->do_upload('berkas');
        $gbr = $this->upload->data();
        $fileuser = $gbr['file_name'];

        $this->m_applicant->saveLamaran($loker,$nik,$kk,$nama,$tempat,$lahir,$tb,$bb,$jk,$agama,$jurusan,$kelas,
        $sekolah,$alamat,$telepon,$email,$bkk,$fileuser,$company);
        $this->m_history->addHistory($nik,$nama,$jurusan,$telepon,$sekolah,$company,$date);

        $this->session->set_flashdata('msg', 'Lamaran Berhasil <b>Diajukan</b>.');
        redirect('Applicant/Dashboard');
    }

    function detLoker()
    {
        $id = $this->session->userdata('user_nik');

        $data['apply'] = $this->m_applicant->getData($id);
        $data['loker'] = $this->m_loker->getLoker($_GET['id']);
        $this->load->view('apply/v_daftar', $data);
    }

}

/* End of file Dashboard.php */
