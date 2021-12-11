<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class Pelamar extends CI_Controller {

     public function __construct(){
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');
            redirect($url);
        }
        $this->load->helper('download');
        
        $this->load->model('m_applicant');
        $this->load->model('m_kelas');
        $this->load->model('m_jurusan');
        $this->load->model('m_history');
        
    }

    public function index(){
        $data['edit'] = $this->m_applicant->get_appli();
        $data['data'] = $this->m_applicant->get_appli();
        $data['jur1'] = $this->m_jurusan->get_jurusan();
        $dada['kel1'] = $this->m_kelas->get_kelas();
        $this->load->view('admin/v_pelamar', $data);
    }
    
    function editMember(){
        $nik = $this->input->post('nik');
        $kk = $this->input->post('kk');
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $tanggal = $this->input->post('tgl_lahir');
        $tb = $this->input->post('tb');
        $bb = $this->input->post('bb');
        // $jk = $this->input->post('jk');
        // $agama = $this->input->post('agama');
        $jurusan = $this->input->post('jurusan');
        $sekolah = $this->input->post('sekolah');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $bkk = $this->input->post('bkk');
        
        $this->m_applicant->editMember($nik, $kk, $nama, $tempat, $tanggal, $tb, $bb,$jurusan, $sekolah, $alamat, $telepon, $email, $bkk);
        $this->session->set_flashdata('msg', 'Data Berhasil <b>Diperbarui</b>.');
        redirect('Admin/Pelamar');
    }
    
    function getEdit(){
        $data['data']=$this->m_applicant->getData($_GET['nik']);
        $this->load->view('admin/v_pelamar_edit',$data);
    }
    
    public function download(){
        //$nik =  $this->session->userdata('user_nik');
        $nik = $_GET['nik'];
        $datauser = $this->m_applicant->get_appli();
        $filedata = $this->m_applicant->download($nik);
        $q = $filedata;
        $file = $q['lamaran_berkas'];
        $path = './asset/__files/' . $file;
        $data = file_get_contents($path);
        $name = $file;
        force_download($name, $data);
    }
    function detail(){
        $nik = $_GET['nik'];
        $data['data'] = $this->m_history->getData($nik);
        $this->load->view('admin/v_history', $data);
        

    }

}

/* End of file Pelamar.php */


?>