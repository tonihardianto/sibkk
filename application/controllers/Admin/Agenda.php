    <?php 
    
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Agenda extends CI_Controller {

        function __construct()
        {
            parent::__construct();
            if ($this->session->userdata('loggedin') != true) {
                $url = base_url() . 'Admin/Login';
                redirect($url);
            }
            $this->load->model('m_agenda');
            $this->load->model('m_setting');
        }

    
        public function index()
        {
            
            $site = $this->m_setting->get_setting()->row_array();
            $data['title'] = $site['site_judul'];
            $data['del'] = $this->m_agenda->getData();
            $data['edit'] = $this->m_agenda->getData();
            $data['data'] = $this->m_agenda->getData();
            $this->load->view('admin/v_agenda', $data);
            
        }

        function seeCalender(){
            $this->load->view('admin/v_acalender');
        }
        
        function getEdit(){
            $data['data'] = $this->m_agenda->getEdit($_GET['id']);
            $this->load->view('admin/v_agenda_edit',$data);
        }

        function addAgenda(){
            $judul = $this->input->post('judul');
            $tempat = $this->input->post('tempat');
            $tanggal = $this->input->post('tanggal');
            $waktu = $this->input->post('jam');
            $isi = $this->input->post('detail');
            
            $this->m_agenda->addAgenda($judul,$tempat,$waktu, $tanggal,$isi);
            $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
            redirect('Admin/Agenda');
        }

        function editAgenda(){
            $id = $this->input->post('id');
            $judul = $this->input->post('judul');
            $tempat = $this->input->post('tempat');
            $tanggal = $this->input->post('tanggal');
            $waktu = $this->input->post('jam');
            $isi = $this->input->post('detail');

            $this->m_agenda->editAgenda($judul, $tempat, $waktu, $tanggal, $isi, $id);
            $this->session->set_flashdata('msg', 'Data Berhasil diUbah.');
            redirect('Admin/Agenda');
        }

        function delAgenda(){
            $id = $this->input->post('id');

            $this->m_agenda->delAgenda($id);
            $this->session->set_flashdata('msg', 'Data Berhasil diHapus.');
            redirect('Admin/Agenda');
        }

        function getData(){
            $json = array();
            $data['item'] = $this->m_agenda->getDataJson();

            foreach($data['item']->result_array() as $i){
                $json[] = array(
                    'backgroundColor' => '#40A3ED',
                    'borderColor'     => '#40A3ED',
                    'title'           => $i['evt_name'],
                    'start'           => $i['evt_date'],
                    'allDay'          => true,

                );
            }
            echo json_encode($json);
        }
    
    }
    
    /* End of file Agenda.php */
    
    
    
    ?>