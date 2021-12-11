<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_corp extends CI_Model {
    
    function daftar($nama,$email,$password,$telepon){
        $res = $this->db->query("insert into tb_company (co_nama,co_email,co_password,co_telepon) values('$nama','$email',md5('$password'),'$telepon') ");
        return $res;
    }

    function getData(){
        $res = $this->db->query("select * from tb_mitra");
        return $res;
    }

}

/* End of file M_corp.php */


?>