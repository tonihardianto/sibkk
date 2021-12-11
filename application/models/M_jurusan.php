<?php

class M_jurusan extends CI_Model{
  function get_jurusan(){
    $res = $this->db->query("select * from tb_jurusan");
    return $res;
  }
  function update_jurusan() {
    // code...
  }
  function del_jurusan() {
    // code...
  }
}
