<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

require('./excel/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Border;
// End load library phpspreadsheet

class Export extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('loggedin') != true) {
            $url = base_url() . 'Admin/Login';
            redirect($url);
        }

        $this->load->model('m_laporan');
    }

    public function index(){
        
    }

    public function agenda(){
        $data = $this->m_laporan->lapAgenda();
       

        $spreadsheet = new Spreadsheet();
        $bold = [
            'font' => [
                'bold' => true,
            ],
        ];
        $border = [
            'borders' => [
                'allBorder' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
        $spreadsheet->getActiveSheet()->getStyle('A1:N1')->applyFromArray($bold);

        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);

        // $spreadsheet->getActiveSheet()->getStyle('H')->getNumberFormat()
        //     ->setFormatCode('###000');
        // $spreadsheet->getActiveSheet()->getStyle('I')->getNumberFormat()
        //     ->setFormatCode('###000');

        $sheet = $spreadsheet->getActiveSheet();
        $sheet
            ->setCellValue('A1', 'NO')
            ->setCellValue('B1', 'NAMA AGENDA')
            ->setCellValue('C1', 'TEMPAT')
            ->setCellValue('D1', 'TANGGAL DAN WAKTU')
            ->setCellValue('E1', 'DETAIL');

        $i = 2;
        $no = 1;
        foreach ($data->result_array() as $data) {
             
            $sheet = $spreadsheet->getActiveSheet();
            $sheet
                ->setCellValue('A' . $i, $no)
                ->setCellValue('B' . $i, $data['evt_name'])
                ->setCellValue('C' . $i, $data['evt_tempat'])
                ->setCellValue('D' . $i, $data['evt_date'] . ', ' . $data['evt_time'])
                ->setCellValue('E' . $i, $data['evt_main']);
            $i++;
            $no++;

            $filename = $data['evt_name'];
            // $spreadsheet->getActiveSheet()->getStyle('A1:N2')->applyFromArray($border);
        }
        $writer = new Xlsx($spreadsheet);



        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function pelamar(){
        $data = $this->m_laporan->lapPelamar();
        $date = date('d M Y');

        $spreadsheet = new Spreadsheet();
        $bold = [
            'font' => [
                'bold' => true,
            ],
        ];
        $border = [
            'borders' => [
                'allBorder' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
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
            ->setCellValue('N1', 'EMAIL');

        $i = 2;
        $no = 1;
        foreach ($data->result_array() as $data) {
            $sheet = $spreadsheet->getActiveSheet();
            $sheet
                ->setCellValue('A' . $i, $no)
                ->setCellValue('B' . $i, $data['lamar_nama'])
                ->setCellValue('C' . $i, $data['lamar_tempat_lahir'])
                ->setCellValue('D' . $i, $data['lamar_tgl_lahir'])
                ->setCellValue('E' . $i, $data['lamar_tb'])
                ->setCellValue('F' . $i, $data['lamar_bb'])
                ->setCellValue('G' . $i, $data['lamar_alamat'])
                ->setCellValue('H' . $i, $data['lamar_no_kk'])
                ->setCellValue('I' . $i, $data['lamar_nik'])
                ->setCellValue('J' . $i, $data['lamar_jurusan'])
                ->setCellValue('K' . $i, $data['lamar_asal_sekolah'])
                ->setCellValue('L' . $i, $data['lamar_bkk_pengirim'])
                ->setCellValue('M' . $i, $data['lamar_hp'])
                ->setCellValue('N' . $i, $data['lamar_email']);
            $i++;
            $no++;

            // $filename = $data['lamaran_loker_nama'];
            $spreadsheet->getActiveSheet()->getStyle('A1:N2')->applyFromArray($border);
        }
        $writer = new Xlsx($spreadsheet);



        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Laporan Pelamar '.$date.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function riwayat(){
        $data = $this->m_laporan->lapRiwayat($_GET['nik']);


        $spreadsheet = new Spreadsheet();
        $bold = [
            'font' => [
                'bold' => true,
            ],
        ];
        $border = [
            'borders' => [
                'allBorder' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
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

        $spreadsheet->getActiveSheet()->getStyle('C')->getNumberFormat()
            ->setFormatCode('###000');
        // $spreadsheet->getActiveSheet()->getStyle('I')->getNumberFormat()
        //     ->setFormatCode('###000');

        $sheet = $spreadsheet->getActiveSheet();
        $sheet
            ->setCellValue('A1', 'NO')
            ->setCellValue('B1', 'NAMA LENGKAP')
            ->setCellValue('C1', 'NOMOR NIK')
            ->setCellValue('D1', 'JURUSAN')
            ->setCellValue('E1', 'ASAL SEKOLAH')
            ->setCellValue('F1', 'TELEPON')
            ->setCellValue('G1', 'PERUSAHAAN')
            ->setCellValue('H1', 'TANGGAL DAFTAR');

        $i = 2;
        $no = 1;
        foreach ($data->result_array() as $data) {

            $sheet = $spreadsheet->getActiveSheet();
            $sheet
                ->setCellValue('A' . $i, $no)
                ->setCellValue('B' . $i, $data['his_nama'])
                ->setCellValue('C' . $i, $data['his_nik'])
                ->setCellValue('D' . $i, $data['his_jurusan'])
                ->setCellValue('E' . $i, $data['his_sekolah'])
                ->setCellValue('F' . $i, $data['his_telepon'])
                ->setCellValue('G' . $i, $data['his_company'])
                ->setCellValue('H' . $i, $data['his_date']);
            $i++;
            $no++;

            $filename = $data['his_nama'].'-'.$data['his_nik'];
            // $spreadsheet->getActiveSheet()->getStyle('A1:N2')->applyFromArray($border);
        }
        $writer = new Xlsx($spreadsheet);



        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

    public function alumni()
    {
        $data = $this->m_laporan->lapAlumni();
        $date = date('d/m/Y');


        $spreadsheet = new Spreadsheet();
        $bold = [
            'font' => [
                'bold' => true,
            ],
        ];
        $border = [
            'borders' => [
                'allBorder' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
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
        

        // $spreadsheet->getActiveSheet()->getStyle('C')->getNumberFormat()
        //     ->setFormatCode('###000');
        // $spreadsheet->getActiveSheet()->getStyle('I')->getNumberFormat()
        //     ->setFormatCode('###000');

        $sheet = $spreadsheet->getActiveSheet();
        $sheet
            ->setCellValue('A1', 'NO')
            ->setCellValue('B1', 'NAMA LENGKAP')
            ->setCellValue('C1', 'JURUSAN')
            ->setCellValue('D1', 'ASAL SEKOLAH')
            ->setCellValue('E1', 'POSISI')
            ->setCellValue('F1', 'PERUSAHAAN')
            ->setCellValue('G1', 'MULAI KERJA');

        $i = 2;
        $no = 1;
        foreach ($data->result_array() as $data) {

            $sheet = $spreadsheet->getActiveSheet();
            $sheet
                ->setCellValue('A' . $i, $no)
                ->setCellValue('B' . $i, $data['alumni_nama'])
                ->setCellValue('C' . $i, $data['alumni_jurusan'])
                ->setCellValue('D' . $i, $data['alumni_sekolah'])
                ->setCellValue('E' . $i, $data['alumni_posisi'])
                ->setCellValue('F' . $i, $data['alumni_corp'])
                ->setCellValue('G' . $i, $data['alumni_masuk']);
            $i++;
            $no++;

            $filename = 'Laporan Alumni-'.$date;
            // $spreadsheet->getActiveSheet()->getStyle('A1:N2')->applyFromArray($border);
        }
        $writer = new Xlsx($spreadsheet);



        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
    }

}

/* End of file Export.php */


?>