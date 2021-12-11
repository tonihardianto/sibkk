<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_agenda extends CI_Model {

    function getData(){
        $res = $this->db->query("Select evt_id, evt_name, evt_tempat, evt_time, DATE_FORMAT(evt_date, '%d %M %Y') AS evt_date, evt_main from tb_agenda");
        return $res;
    }

    function getDataJson(){
        $res = $this->db->query("select * from tb_agenda");
        return $res;
    }

    function addAgenda($judul, $tempat, $waktu, $tanggal, $isi){
        $res = $this->db->query("insert into tb_agenda(evt_name,evt_tempat,evt_time,evt_date,evt_main)
        values('$judul','$tempat','$waktu','$tanggal','$isi')");
        return $res;
    }

    function editAgenda($judul, $tempat, $waktu, $tanggal, $isi, $id){
        $res = $this->db->query(" update tb_agenda set evt_name='$judul',evt_tempat='$tempat',evt_time='$waktu',
        evt_date='$tanggal',evt_main='$isi' where evt_id='$id' ");
        return $res;
    }

    function delAgenda($id){
        $res = $this->db->query("delete from tb_agenda where evt_id='$id'");
        return $res;
    }
    
    function getEdit($id){
        $res = $this->db->query("select * from tb_agenda where evt_id='$id'");
        return $res;
    }

}

/* End of file Agenda.php */


?>