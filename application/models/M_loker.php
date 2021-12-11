<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_loker extends CI_Model {

    function Show_loker(){
        $res = $this->db->query("SELECT * FROM tb_loker");
        return $res;
    }
    
    function getData(){
        $res = $this->db->query("SELECT * FROM tb_loker where loker_status='aktif'");
        return $res;
    }

    function getLoker($id){
        $res = $this->db->query("SELECT * FROM tb_loker WHERE loker_id='$id'");
        return $res;
    }


    function add_loker($judul,$startdate,$posisi,$status,$detail){
        $res = $this->db->query("INSERT INTO tb_loker(loker_judul, loker_tgl_buka, loker_posisi, loker_status, loker_detail)
         VALUES('$judul','$startdate','$posisi','$status','$detail') ");
        return $res;
    }

    function edit_loker($judul,$start_date,$posisi,$detail,$id){
        $res = $this->db->query("UPDATE tb_loker SET loker_judul='$judul', loker_tgl_buka='$start_date', loker_posisi='$posisi',
        loker_detail='$detail' WHERE loker_id='$id'");
        return $res;
    }
    
    function nonAktif($status,$id){
        $res = $this->db->query("UPDATE tb_loker SET loker_status='$status' WHERE loker_id='$id'");
        return $res;
    }

    function del_loker($id){
        $res = $this->db->query("DELETE FROM tb_loker WHERE loker_id='$id'");
        return $res;
    }



}

/* End of file M_loker.php */


?>