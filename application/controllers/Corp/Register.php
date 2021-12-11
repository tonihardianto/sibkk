<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_corp');
        // load library
        $this->load->library('upload');
    }
    function index(){

        $this->load->view('corp/v_register');
    }

    function register(){
        $string = "abcdefghijklmnopqrstuvwxyz0123456789";

        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');

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
        <div class='text-center'>
        <h2>Thankyou for Registering.</h2>
        <h4>BKK KARYA SAGA</h4>
        </div>
        <div class='container'>
            <div class='card-body text-center'>
                <p>Hai, <b> $nama</b></p>
                <p><b>Berikut ini adalah informasi login anda :</b></p>
            <br>
                <p>Email : </p>
                <b> $email</b>
            <br>
                <p>Password : </p>
                <b> $password</b>
            <br>
                <p>Nomor Telepon : </p>
                <b> $telepon</b>
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
            $this->m_corp->daftar($nama,$email,$password,$telepon);
            $this->session->set_flashdata('msg', 'Silahkan login!.');
            $url = base_url().'Corp/Login';
            redirect($url);
        }else{
            $this->session->set_flashdata('msg', 'Pendaftaran Gagal!!');
            redirect('Corp/Register');
            
        }

    }
    
}

/* End of file Applicant.php */

?>