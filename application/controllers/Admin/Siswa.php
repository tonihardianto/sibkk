<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('loggedin') != true) {
      $url = base_url().'Admin/Login';
      $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');
      redirect($url);
  }
    $this->load->model('m_siswa');
    $this->load->model('m_kelas');
    $this->load->model('m_jurusan');
  }

  function index()
  {
    $data['content']=$this->m_siswa->get_siswa();
    $data['kls']=$this->m_kelas->get_kelas();
    $data['kls2'] = $this->m_kelas->get_kelas();
    $data['jurusan']=$this->m_jurusan->get_jurusan();
    $data['jurusan2'] = $this->m_jurusan->get_jurusan();
    $data['jurusan3'] = $this->m_jurusan->get_jurusan();
    $this->load->view('admin/v_siswa',$data);
  }
  function add_siswa() {
    $nik = $this->input->post('nik');
    $nokk = $this->input->post('nokk');
    $name = $this->input->post('fullname');
    $place = $this->input->post('tempat_lahir');
    $date = $this->input->post('tanggal_lahir');
    $gender = $this->input->post('gender');
    $agama = $this->input->post('agama');
    $kelas = $this->input->post('kelas');
    $jurusan = $this->input->post('jurusan');
    $alamat = $this->input->post('alamat');
    $stat = $this->input->post('status');

    $this->m_siswa->save_siswa($nik,$nokk,$name,$place,$date,$gender,$agama,$jurusan,$kelas,$alamat,$stat);
    $this->session->set_flashdata('msg','Data Berhasil disimpan.');
    redirect('Admin/Siswa');
  }

  function update_siswa() {
    $id = $this->input->post('id');
    $nik = $this->input->post('nik');
    $nokk = $this->input->post('nokk');
    $name = $this->input->post('fullname');
    $place = $this->input->post('tempat_lahir');
    $date = $this->input->post('tanggal_lahir');
    $gender = $this->input->post('gender');
    $agama = $this->input->post('agama');
    $jurusan = $this->input->post('jurusan1');
    $kelas = $this->input->post('kelas1');
    $alamat = $this->input->post('alamat');
    $stat = $this->input->post('status');

    $this->m_siswa->update_siswa($id,$nik,$nokk,$name,$place,$date,$gender,$agama,$jurusan,$kelas,$alamat,$stat);
    $this->session->set_flashdata('msg', 'Data Berhasil <b>Diperbarui</b>.');
    redirect('Admin/Siswa');
    ;
  }

  function del_siswa() {
    $id = $this->input->post('id');
    $this->m_siswa->del_siswa($id);
    $this->session->set_flashdata('msg','Data Berhasil dihapus');
    redirect('Admin/Siswa');
  }
  
  function get_kelas(){
    $jur_id = $this->input->post('id',TRUE);
    $data = $this->m_siswa->get_kelas($jur_id)->result();
    echo json_encode($data);
  }
  public function get_edit(){
    //$id = $this->uri->segment(3);
    $data['kls1'] = $this->m_kelas->get_kelas();
    $data['jurusan1'] = $this->m_jurusan->get_jurusan();

    
    $data['siswa'] = $this->m_siswa->get_edit($_GET['Id']);
    $this->load->view('admin/v_siswa_edit', $data);
    //redirect('admin/siswa_edit');
  }
  function daftar(){
    $this->load->view('apply/v_member');
  }

}
