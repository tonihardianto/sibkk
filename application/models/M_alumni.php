<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_alumni extends CI_Model {

    function getData(){
        $res = $this->db->query("select alumni_id,alumni_nama,alumni_jurusan,alumni_sekolah,alumni_posisi,alumni_corp, DATE_FORMAT(alumni_masuk, '%d %M %Y') as alumni_masuk from tb_alumni");
        return $res;
    }

    function addAlumni($nama, $jurusan, $sekolah, $posisi,$co, $masuk){
        $res = $this->db->query("insert into tb_alumni(alumni_nama,alumni_jurusan,alumni_sekolah,alumni_posisi,alumni_corp,alumni_masuk)
         values('$nama','$jurusan','$sekolah','$posisi','$co','$masuk')");
        return $res;
    }

    function editAlumni($nama, $jurusan, $sekolah, $posisi, $masuk, $id){
        $res = $this->db->query(" update tb_alumni set alumni_nama='$nama', alumni_jurusan='$jurusan', alumni_sekolah='$sekolah',
        alumni_posisi='$posisi', alumni_masuk='$masuk' where alumni_id='$id' ");
        return $res;
    }

    function delAlumni($id)
    {
        $res = $this->db->query("delete from tb_alumni where alumni_id='$id'");
        return $res;
    }

    function getEdit($id)
    {
        $res = $this->db->query("select * from tb_alumni where alumni_id='$id'");
        return $res;
    }

}

/* End of file M_alumni.php */

?>