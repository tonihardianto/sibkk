<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('m_applicant');
        $this->load->model('m_kelas');
        $this->load->model('m_jurusan');
        // load library
        $this->load->library('upload');
    }
    function index(){
        //$data['data']=$this->m_applicant->get_applicant();
        $data['jurusan']=$this->m_jurusan->get_jurusan();
        $data['kelas']=$this->m_kelas->get_kelas();
        

        $this->load->view('apply/v_register',$data);
    }
    function daftar(){
        //$file = $this->input->post('');

        $config['upload_path'] = './asset/__files/'; //path folder
        $config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = false; //Enkripsi nama yang terupload

        $this->upload->initialize($config);

            $this->upload->do_upload('berkas');
            $gbr = $this->upload->data();
            $fileuser = $gbr['file_name'];

            $this->upload->do_upload('berkas1');
            $doc1 = $this->upload->data();
            $file1 = $doc1['file_name'];

            $this->upload->do_upload('berkas2');
            $doc2 = $this->upload->data();
            $file2 = $doc2['file_name'];

            $this->m_applicant->save_file($fileuser, $file1, $file2);
            $this->session->set_flashdata('msg', 'Data Berhasil <b>diperbarui</b>.');
            redirect('applicant/register');

            //echo "Image yang diupload kosong";
            // $this->session->set_flashdata('msg', 'Data Gagal <b>diperbarui</b>.');
            // redirect('applicant/register');
    }
    function add_applicant(){
        $string = "abcdefghijklmnopqrstuvwxyz0123456789";

        $password = random_string('alnum',8);
        $nik = $this->input->post('nik');
        $kk = $this->input->post('kk');
        $nama = $this->input->post('nama');
        $tempat = $this->input->post('tempat');
        $tanggal = $this->input->post('tgl_lahir');
        $tb = $this->input->post('tb');
        $bb = $this->input->post('bb');
        $jk = $this->input->post('jk');
        $agama = $this->input->post('agama');
        $jurusan = $this->input->post('jurusan');
        $sekolah = $this->input->post('sekolah');
        $alamat = $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $email = $this->input->post('email');
        $bkk = $this->input->post('bkk');

        $email_from = "no_reply@bkksagakarya.com";
        $email_to = $email;

        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://mail.bkksagakarya.com',
            'smtp_port' => 465,
            'smtp_user' => 'no_reply@bkksagakarya.com',
            'smtp_pass' => 'hardyanto28',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );

        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        
        $this->email->from($email_from, 'no-reply-verification');
        $this->email->to($email_to);
        $this->email->subject('INFORMASI AKSES LOGIN BKK KARYA SAGA');

        $message =  "

        <!DOCTYPE html>
        <html lang='en'>
        <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <style type='text/css'>
            .text-danger {
            color: red;
            }
            .text-center {
            text-align: center;
            }
            .jumbotron {
            background-color: grey;
            }   
        </style>
        </head>
        <body>
        <div class='jumbotron text-center'>
        <h2>Thankyou for Registering.</h2>
        <h4>BKK KARYA SAGA</h4>
        </div>
        <div class='container'>
            <div class='card-body text-center'>
                <p>Hai, <b> $nama</b></p>
                <p><b>Berikut ini adalah informasi login anda :</b></p>
            <br>
                <p>Nomor NIK : </p>
                <b> $nik</b>
            <br>
                <p>Nomor Password : </p>
                <b> $password</b>
            <br>
                <p class='text-center text-danger'><b>Pastikan anda menyimpan informasi login ini dan jangan beritahu siapapun.<br> Anda bisa mengganti password setelah anda login.</b></p>
                <br>
                <b>© BKK KARYA SAGA </b>
            </div> 
        </div>
        </body>
        </html>
        ";

        $this->email->message($message);

        if ($this->email->send()) {
           // $this->session->set_flashdata('msg', 'Email konfirmasi telah dikirim');
            $this->m_applicant->save_appli($password, $nik, $kk, $nama, $tempat, $tanggal, $tb, $bb, $jk, $agama, $jurusan, $sekolah, $alamat, $telepon, $email, $bkk);
            $this->session->set_flashdata('msg', 'Silahkan Cek Email Untuk Informasi Login Anda!.');
            $url = base_url().'Applicant/Login';
            redirect($url);
        }else{
            $this->session->set_flashdata('msg', 'Email Gagal!!');
            redirect('Applicant/Register');
            
        }

        // $this->m_applicant->save_appli($password, $nik, $kk, $nama, $tempat, $tanggal, $tb, $bb, $jk, $agama, $jurusan, $kelas, $sekolah, $alamat, $telepon, $email, $bkk);
        // $this->session->set_flashdata('msg', 'Silahkan Cek Email Untuk Informasi Login Anda!.');
        // $url = base_url().'applicant/login';
        // redirect($url);
    }
    function update_applicant(){

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