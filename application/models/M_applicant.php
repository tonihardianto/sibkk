<?php

class M_applicant extends CI_Model {
    function get_appli(){
        $res = $this->db->query("select * from tb_pelamar");
        return $res;
    }
    function getData($id){
        $res = $this->db->query("SELECT * FROM tb_pelamar  WHERE lamar_nik='$id'"); 
        return $res;
    }
    function save_appli($password, $nik, $kk, $nama, $tempat, $tanggal, $tb, $bb, $jk, $agama, $jurusan, $sekolah, $alamat, $telepon, $email, $bkk){
        $res = $this->db->query("INSERT into tb_pelamar(lamar_password, lamar_nik, lamar_no_kk, lamar_nama, lamar_tempat_lahir, lamar_tgl_lahir, lamar_tb, lamar_bb,
        lamar_jk, lamar_agama, lamar_jurusan, lamar_asal_sekolah, lamar_alamat, lamar_hp, lamar_email, lamar_bkk_pengirim)
         values('$password','$nik','$kk','$nama','$tempat','$tanggal','$tb','$bb','$jk','$agama','$jurusan','$sekolah','$alamat','$telepon','$email','$bkk') ");
        return $res;
    }
    function saveLamaran($loker,$nik,$kk,$nama,$tempat,$lahir,$tb,$bb,$jk,$agama,$jurusan,$kelas,$sekolah,$alamat,$telepon,$email,$bkk,$fileuser,$company){
        $res = $this->db->query("INSERT INTO tb_lamaran(lamaran_nama,lamaran_tempat,lamaran_lahir,lamaran_tb,lamaran_bb,
        lamaran_alamat,lamaran_kk,lamaran_nik,lamaran_jurusan,lamaran_sekolah,lamaran_bkk,lamaran_hp,lamaran_email,lamaran_berkas,lamaran_loker_id,lamaran_loker_nama)
        VALUES('$nama','$tempat','$lahir','$tb','$bb','$alamat','$kk','$nik','$jurusan','$sekolah','$bkk','$telepon','$email','$fileuser','$loker','$company')");
        return $res;
    }
    
    function editMember($nik, $kk, $nama, $tempat, $tanggal, $tb, $bb,$jurusan, $sekolah, $alamat, $telepon, $email, $bkk){
        $res = $this->db->query(" update tb_pelamar set lamar_no_kk='$kk', lamar_nama='$nama', lamar_tempat_lahir='$tempat', lamar_tgl_lahir='$tanggal',
        lamar_tb='$tb', lamar_bb='$bb', lamar_jurusan='$jurusan', lamar_asal_sekolah='$sekolah', lamar_alamat='$alamat', lamar_hp='$telepon', lamar_email='$email', lamar_bkk_pengirim='$bkk'
        where lamar_nik='$nik'");
        return $res;
    }
    
    function get_kelas($jur_id){
        $res = $this->db->get_where('tb_kelas', array('kelas_jur_id' =>$jur_id));
        return $res;
    }
    function upload_file($usernik, $fileuser){
        $res = $this->db->query("UPDATE tb_pelamar SET lamar_berkas='$fileuser' WHERE lamar_nik='$usernik'");
        return $res;
    }
    function updateProfil($nik, $kk, $nama, $tempat, $tanggal, $tb, $bb, $jurusan, $sekolah, $alamat, $telepon, $email, $bkk){
        $res = $this->db->query("UPDATE tb_pelamar SET lamar_nama='$nama', lamar_tempat_lahir='$tempat', lamar_tgl_lahir='$tanggal',
        lamar_tb='$tb', lamar_bb='$bb', lamar_jurusan='$jurusan', lamar_asal_sekolah='$sekolah', lamar_alamat='$alamat',
        lamar_hp='$telepon', lamar_email='$email', lamar_bkk_pengirim='$bkk' WHERE lamar_nik='$nik'");
    }
    function get_user($nik){
        $res = $this->db->query("SELECT * FROM tb_pelamar WHERE lamar_nik='$nik'");
        return $res;
    }
    function download($nik){
        $res = $this->db->query("SELECT * FROM tb_lamaran where lamaran_nik='$nik'");
        return $res->row_array();
    }

}

/* End of file M_applicant.php */


?>