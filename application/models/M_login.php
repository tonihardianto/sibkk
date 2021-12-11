<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    function get_akses($user,$pass){
        $res = $this->db->query("SELECT * FROM tb_user WHERE user_username='$user' AND user_password='$pass' LIMIT 1");
        return $res;
    }
    function auth_siswa($nik,$password){
        $res = $this->db->query("SELECT * FROM tb_pelamar WHERE lamar_nik='$nik' AND lamar_password='$password'");
        return $res;
    }
    function get_user(){
        $res = $this->db->query("Select * from tb_pelamar");
        return $res;
    }

    function auth_corp($email, $password){
        $res = $this->db->query("SELECT * FROM tb_company WHERE co_email='$email' AND co_password='$password'");
        return $res;
    }

}

/* End of file M_login.php */

?>