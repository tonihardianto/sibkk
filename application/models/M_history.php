<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_history extends CI_Model {

    function getData($nik){
        $res = $this->db->query("SELECT * FROM tb_history WHERE his_nik='$nik'");
        return $res;
    }
    function addHistory($nik, $nama, $jurusan, $telepon,$sekolah, $company, $date){
        $res = $this->db->query("INSERT INTO tb_history(his_nik,his_nama,his_jurusan,his_telepon,his_sekolah,his_company,his_date)
        VALUES('$nik','$nama','$jurusan','$telepon','$sekolah','$company','$date')");
        return $res;
    }

}

/* End of file M_history.php */



?>