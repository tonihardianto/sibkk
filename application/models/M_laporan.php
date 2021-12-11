<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

    function lapAgenda(){
        $res = $this->db->query(" SELECT evt_id, evt_name, evt_tempat, evt_time, DATE_FORMAT(evt_date,'%d/%m/%Y') AS evt_date, evt_main FROM tb_agenda ");
        return $res;
    }

    function lapPelamar(){
        $res = $this->db->query(" SELECT * from tb_pelamar ");
        return $res;
    }

    function getRiwayat(){
        $res = $this->db->query(" SELECT * from tb_pelamar");
        return $res;
    }

    function lapRiwayat($nik){
        $res = $this->db->query(" SELECT his_nama, his_nik, his_jurusan, his_sekolah, his_telepon, his_company, DATE_FORMAT(his_date, '%d %M %Y') as his_date 
        from tb_history where his_nik='$nik' ");
        return $res;
    }

    function lapAlumni() {
        $res = $this->db->query(" SELECT alumni_id, alumni_nama, alumni_jurusan, alumni_sekolah, alumni_posisi,alumni_corp, DATE_FORMAT(alumni_masuk, '%d/%m/%Y') as alumni_masuk from tb_alumni");
        return $res;
    }

}

/* End of file M_laporan.php */


?>