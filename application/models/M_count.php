<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_count extends CI_Model {

    function siswa(){
        $res = $this->db->get('tb_siswa');
		if($res->num_rows()>0){
       return $res->num_rows();
     }else{
       return 0;
     }
    }
    function pelamar(){
        $res = $this->db->get('tb_pelamar');
        if ($res->num_rows() > 0) {
            return $res->num_rows();
        } else {
            return 0;
        }
    }
    function loker(){
        $res = $this->db->get('tb_loker');
        if ($res->num_rows() > 0) {
            return $res->num_rows();
        } else {
            return 0;
        }
    }
    function user(){
        $res = $this->db->get('tb_user');
        if ($res->num_rows() > 0) {
            return $res->num_rows();
        } else {
            return 0;
        }
    }

}

/* End of file M_count.php */

?>