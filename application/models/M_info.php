<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_info extends CI_Model {

    function get_info(){
        $res = $this->db->query("SELECT * FROM tb_info");
        return $res;
    }

    function getDataById($id)
    {
        $res = $this->db->query("SELECT * FROM tb_info where info_id='$id'");
        return $res;
    }

    function add_info($nama, $tgl, $info){
        $res =
        $this->db->query("INSERT INTO tb_info(info_nama, info_tanggal, info_isi) VALUES ('$nama','$tgl','$info')");
        return $res;
    }

    function editInfo($nama, $tgl, $info,$id)
    {
        $res =
            $this->db->query(" update tb_info set info_nama='$nama', info_tanggal='$tgl', info_isi='$info' where info_id='$id' ");
        return $res;
    }

    function delInfo($id)
    {
        $res =
            $this->db->query(" delete from tb_info where info_id='$id' ");
        return $res;
    }

}

/* End of file M_info.php */



?>