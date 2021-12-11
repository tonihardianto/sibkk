<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->library('upload');
        
        $this->load->model('m_login');
        $this->load->model('m_applicant');
        
    }
    function index()
    {
        //$data['user'] = $this->m_login->get_user();
        $this->load->view('v_login');
    }
    function auth(){
        $nik=htmlspecialchars($this->input->post('nik',true),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',true),ENT_QUOTES);
        $nik=$nik;
        $password=$password;
        
        $cek_akses=$this->m_login->auth_siswa($nik,$password);
        $u['lamar'] = $this->m_applicant->get_user($nik);

        if ($cek_akses->num_rows() > 0) {
            $data = $cek_akses->row();
            $params = array(
                'user_nik' => $data->lamar_nik,
                'user_nama' => $data->lamar_nama
            );
            $this->session->set_userdata($params);

            //$this->session->set_userdata('ses_nik',$data['lamar_nik']);
            //echo  $data->lamar_nik;
            redirect('Applicant/Dashboard');
            
            // redirect('applicant/dashboard',$u);
        }else{
            //$url = base_url();
            echo $this->session->set_flashdata('fail','Nomor NIK atau password salah!');
            redirect('Applicant/Login');
         }
    }
    function logout(){
        $this->session->sess_destroy();
        $url=base_url();
        redirect($url);
    }
    function upload_data()
    {
        $config['upload_path'] = './asset/__files/';
        $config['allowed_types'] = 'pdf';
        $config['encrypt_name'] = TRUE;

        //$this->load->library('upload', $config);
        //    $this->upload->initialize($config);

        $this->upload->initialize($config);
        if (!empty($_FILES['opsional']['name'])) {

            if ($this->upload->do_upload('opsional')) {

                $nik = $this->input->post('nik');
                $gbr = $this->upload->data();
                $file = $gbr['file_name'];
                $this->m_applicant->save_file($file);

                echo "Berhasil";
                // $this->session->set_flashdata('fail', 'Berkas berhasil diupload.');
                // redirect('applicant/dashboard');

            }
        } else {
            echo "Upload Gagal";
            //$this->session->set_flashdata('fail', 'Berkas gagal di upload!');
            //redirect('applicant/dashboard');

        }
    }

}

/* End of file Login.php */
