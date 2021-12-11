<?php

class M_kelas extends CI_Model{

  function get_kelas() {
    $res = $this->db->query("select * from tb_kelas");
    return $res;
  }
  function update_kelas() {
    // code...
  }
  function del_kelas() {
    // code...
  }

}
