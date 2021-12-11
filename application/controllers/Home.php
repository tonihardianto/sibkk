<?php
 defined('BASEPATH') OR exit('No direct script allowed');

class Home extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_loker');
        $this->load->model('m_setting');
        $this->load->model('m_corp');
        
        
    }
    function index(){
        $data['corp'] = $this->m_corp->getData();
        $data['home'] = $this->m_setting->get_setting();
        $data['loker']=$this->m_loker->getData();
        $this->load->view('v_index',$data);
    }
  }
