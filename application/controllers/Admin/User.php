<?php
/**
 *
 */
 defined('BASEPATH') OR exit('No direct script allowed');

class User extends CI_Controller
{

  function __construct()
  {
    parent:: __construct();
    if ($this->session->userdata('loggedin') != true) {
      $url = base_url().'Admin/Login';
      $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');
      
      redirect($url);
  }
  $this->load->library('upload');
  
    $this->load->model('m_user');
  }
  function index(){
      $data['content']=$this->m_user->get_user();
      $this->load->view('admin/v_user',$data);
  }
  function add_user(){
          $username = $this->input->post('username');
          $password = $this->input->post('userpass');
          $fullname = $this->input->post('fullname');
          $address = $this->input->post('address');
          $phone = $this->input->post('phone');
          $email = $this->input->post('email');
          $level=$this->input->post('level');

          $this->m_user->save_user($username, $password, $fullname, $address, $phone, $email, $level);
          $this->session->set_flashdata('msg','Data Berhasil disimpan.');
          redirect('Admin/User');
    }
  function edit_user(){
    $id = $this->input->post('id');
    $user = $this->input->post('username');
    $pass = $this->input->post('userpass');
    $name = $this->input->post('fullname');
    $address = $this->input->post('address');
    $phone = $this->input->post('phone');
    $mail = $this->input->post('email');
    $level=$this->input->post('level');

    $this->m_user->edit_user($id, $user, $pass, $name, $address, $phone, $mail, $level);
    $this->session->set_flashdata('msg', 'Data Berhasil <b>diperbarui</b>.');
    redirect('Admin/User');

  }
  function del_user(){
    $id = $this->input->post('id');
    $this->m_user->del_user($id);
    $this->session->set_flashdata('msg','Data Berhasil dihapus');
    redirect('Admin/User');
  }

}
?>
