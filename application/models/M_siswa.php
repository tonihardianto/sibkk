<?php

class M_siswa extends CI_Model{

  function get_siswa(){
    $res = $this->db->query("select * from tb_siswa");
    return $res;
  }
  function save_siswa($nik,$nokk,$name,$place,$date,$gender,$agama,$jurusan,$kelas,$alamat,$stat) {
    $res = $this->db->query("insert into tb_siswa(siswa_nik, siswa_no_kk, siswa_nama, siswa_tempat_lahir, siswa_tgl_lahir, siswa_jenis_kelamin,
    siswa_agama, siswa_jur_id, siswa_kelas_id, siswa_alamat, siswa_status, siswa_history) values('$nik','$nokk','$name','$place','$date','$gender',
    '$agama','$jurusan','$kelas','$alamat','$stat','null')");
    return $res;
  }
  function update_siswa($id,$nik,$nokk,$name,$place,$date,$gender,$agama,$jurusan,$kelas,$alamat,$stat) {
    $res = $this->db->query("update tb_siswa set siswa_nik='$nik', siswa_no_kk='$nokk', siswa_nama='$name', siswa_tempat_lahir='$place',
    siswa_tgl_lahir='$date', siswa_jenis_kelamin='$gender', siswa_agama='$agama', siswa_jur_id='$jurusan', siswa_kelas_id='$kelas',
    siswa_alamat='$alamat', siswa_status='$stat' where siswa_id='$id' ");
    return $res;
  }
  function del_siswa($id) {
    $res = $this->db->query("delete from tb_siswa where siswa_id='$id'");
    return $res;
  }
  function get_kelas($jur_id){
    $res = $this->db->get_where('tb_kelas', array('kelas_jur_id' =>$jur_id));
    return $res;
  }
  public function get_edit($id){
    $res = $this->db->query("select * from tb_siswa where siswa_id='$id'");
    return $res;
  }
  function count_siswa() {
    $res = $this->db->get('tb_siswa');
		if($res->num_rows()>0)
     {
       return $res->num_rows();
     }
     else
     {
       return 0;
     }
  }
}
