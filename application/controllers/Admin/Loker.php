<?php


defined('BASEPATH') OR exit('No direct script access allowed');

// Load library phpspreadsheet
require('./excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
// End load library phpspreadsheet

class Loker extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            $this->session->set_flashdata('denied', 'Anda harus Login dahulu!');
            redirect($url);
        }
        $this->load->model('m_loker');
        $this->load->model('m_lamaran');
        
    }

    public function index()
    {
        $data['stat'] = $this->m_loker->Show_loker();
        $data['data'] = $this->m_loker->Show_loker();
        $this->load->view('admin/v_loker', $data);
    }

    function tambah(){
        $this->load->view('admin/v_loker_add');
    }

    function add_loker(){
      $judul = $this->input->post('judul');
      $start_date = $this->input->post('mulai');
      $posisi = $this->input->post('posisi');
      //$syarat = implode(",", $this->input->post('syarat'));
      $status = $this->input->post('status');
      $detail = $this->input->post('detail');

        $this->m_loker->add_loker($judul,$start_date,$posisi,$status,$detail);
        $this->session->set_flashdata('msg', 'Data Berhasil disimpan.');
        redirect('Admin/Loker');
    }

    function editLoker(){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $start_date = $this->input->post('mulai');
        $posisi = $this->input->post('posisi');
        // $status = $this->input->post('status');
        $detail = $this->input->post('detail');

        $this->m_loker->edit_loker($judul,$start_date,$posisi,$detail,$id);
        $this->session->set_flashdata('msg', 'Data Berhasil diUbah.');
        redirect('Admin/Loker');
    }
    
    function nonAktif(){
        $id = $this->input->post('id');
        $status = "Nonaktif";
        
        $this->m_loker->nonAktif($status, $id);
        $this->session->set_flashdata('msg', 'Data Berhasil diPerbarui');
        redirect('Admin/Loker');
    }

    function del_loker()
    {
        $id = $this->input->post('id');
        $this->m_loker->del_loker($id);
        $this->session->set_flashdata('msg', 'Data Berhasil dihapus');
        redirect('Admin/Loker');
    }

    function getEdit(){
        $id = $_GET['id'];
        $data['edit'] = $this->m_loker->getLoker($id);
        $this->load->view('admin/v_loker_edit', $data);
        
    }
    
    function getLoker(){
        // $data['apply'] = $this->m_applicant->getData();
        $data['loker'] = $this->m_loker->getLoker($_GET['id']);
        $this->load->view('apply/v_lap_pelamar', $data);
    }
    public function export(){
        $data = $this->m_lamaran->getData($_GET['id']);

        $spreadsheet = new Spreadsheet();
        $bold = [
            'font'=>[
                'bold'=>true,
            ],
        ];
        $border = [
            'borders'=>[
                'allBorder'=>[
                    'borderStyle'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
        $spreadsheet->getActiveSheet()->getStyle('A1:N1')->applyFromArray($bold);

        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);

        $spreadsheet->getActiveSheet()->getStyle('H')->getNumberFormat()
        ->setFormatCode('###000');
        $spreadsheet->getActiveSheet()->getStyle('I')->getNumberFormat()
        ->setFormatCode('###000');

        $sheet = $spreadsheet->getActiveSheet();
        $sheet  
        ->setCellValue('A1', 'NO')
        ->setCellValue('B1', 'NAMA LENGKAP')
        ->setCellValue('C1', 'TEMPAT LAHIR')
        ->setCellValue('D1', 'TANGGAL LAHIR')
        ->setCellValue('E1', 'TINGGI BADAN')
        ->setCellValue('F1', 'BERAT BADAN')
        ->setCellValue('G1', 'ALAMAT LENGKAP')
        ->setCellValue('H1', 'NOMOR KK')
        ->setCellValue('I1', 'NOMOR NIK')
        ->setCellValue('J1', 'JURUSAN')
        ->setCellValue('K1', 'ASAL SEKOLAH')
        ->setCellValue('L1', 'BKK PENGIRIM')
        ->setCellValue('M1', 'NOMOR HP')
        ->setCellValue('N1', 'EMAIL')
        ;

        $i = 2; $no = 1; foreach($data->result_array() as $data){
        $sheet = $spreadsheet->getActiveSheet();
        $sheet   
            ->setCellValue('A'.$i, $no)
            ->setCellValue('B' . $i, $data['lamaran_nama'])
            ->setCellValue('C' . $i, $data['lamaran_tempat'])
            ->setCellValue('D' . $i, $data['lamaran_lahir'])
            ->setCellValue('E' . $i, $data['lamaran_tb'])
            ->setCellValue('F' . $i, $data['lamaran_bb'])
            ->setCellValue('G' . $i, $data['lamaran_alamat'])
            ->setCellValue('H' . $i, $data['lamaran_kk'])
            ->setCellValue('I' . $i, $data['lamaran_nik'])
            ->setCellValue('J' . $i, $data['lamaran_jurusan'])
            ->setCellValue('K' . $i, $data['lamaran_sekolah'])
            ->setCellValue('L' . $i, $data['lamaran_bkk'])
            ->setCellValue('M' . $i, $data['lamaran_hp'])
            ->setCellValue('N' . $i, $data['lamaran_email'])
            ;
        $i++;
        $no++;

        $filename = $data['lamaran_loker_nama'];
            $spreadsheet->getActiveSheet()->getStyle('A1:N2')->applyFromArray($border);
        }
        $writer = new Xlsx($spreadsheet);

        

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        
    }

}

/* End of file Loker.php */



?>
