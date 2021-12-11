<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_lamaran extends CI_Model {

    function getData($id){
        $res = $this->db->query("SELECT * FROM tb_lamaran WHERE lamaran_loker_id='$id'");
        return $res;
    }

}

/* End of file M_lamaran.php */


?>