<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('login') != TRUE)
        {
            $this->load->helper('url');
            $current_uri = base_url(uri_string());
            $encoded_url = urlencode($current_uri);
            $redirect_to = 'auth?ref='.$encoded_url;
            redirect($redirect_to);
        }
    }

    public function index(){
        // include 'excel_reader.php';
        // require_once 'excel_reader.php';
        $this->load->model('Ticket_model');

        $this->header();
        $this->load->view('ticket/upload_ticket');
        $this->load->view('design/footer');
    }

    public function UploadExcel(){
        include 'excel_reader.php';
        $target = basename($_FILES['fileexcel']['name']) ;
        move_uploaded_file($_FILES['fileexcel']['tmp_name'], $target);
     
    // // tambahkan baris berikut untuk mencegah error is not readable
        chmod($_FILES['fileexcel']['name'],0777);
        // echo "1";
        $data = new Spreadsheet_Excel_Reader($target, false);
        // echo "2";
    //    menghitung jumlah baris file xls
        $baris = $data->rowcount($sheet_index=0);
        // echo "3";
    //    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
        for ($i=2; $i<=$baris; $i++){
    //       membaca data (kolom ke-1 sd terakhir)
          $id_incident          = $data->val($i, 1);
          // $status               = $data->val($i, 2);
          // $recap_date           = $data->val($i, 3);
          $customer_name        = $data->val($i, 2);
          $summary              = $data->val($i, 3);
          $alpro                = $data->val($i, 17);
          $report_date          = $data->val($i, 21);
          $priority             = $data->val($i, 15);
          $ttr_segment          = $data->val($i, 22);
          // $filter               = $data->val($i, 2);
          $closed_date          = $data->val($i, 31);
          $closed_by            = $data->val($i, 32);
          // $hd                   = $data->val($i, 1);
          $actual_solution      = $data->val($i, 39);
          $keterangan_kendala   = $data->val($i, 37);
          $workzone             = $data->val($i, 34);
          $no_service           = $data->val($i, 12);
          $datek                = $data->val($i, 18);
          // $keterangan_closed    = $data->val($i, 3);
          // echo($report_date);
          $new_report_date  = date("Y-m-d h:i:s", strtotime($report_date));
          $new_closed_date  = date("Y-m-d h:i:s", strtotime($closed_date));
          // echo($new_report_date);
          // 07-06-2017 13:53:22
          // $new_report_date  = date_format(date_create_from_format('Y-m-d h-i-s', $report_date), 'd-m-Y h-i-s');
          // $recap_date       = date('d-m-Y h-i-s');

    //      setelah data dibaca, masukkan ke tabel sql
          $query = "INSERT into TICKET (id_incident,customer_name,summary,alpro,report_date,priority,ttr_segment,closed_date,closed_by,actual_solution,keterangan_kendala,workzone,no_service,datek)values('$id_incident','$customer_name','$summary','$alpro','$report_date','$priority','$ttr_segment','$closed_date','$closed_by','$actual_solution','keterangan_kendala','$workzone','$no_service','$datek')";
          $hasil = mysql_query($query);
        }
        
        if(!$hasil){
    //          jika import gagal
            echo '<script language="javascript">';
            echo 'alert("Gagal upload file, pastikan anda telah mengupload file bertipe .xls");';
            // echo 'window.location.href = "' . site_url('Dashboard/') . '";';
            echo '</script>';  
          }else{
    //          jika impor berhasil
              // echo "Data berhasil diimpor.";
                //    hapus file xls yang udah dibaca
            unlink($_FILES['fileexcel']['tmp_name']);
            echo '<script language="javascript">';
            echo 'alert("Berhasil menambahkan ' . $jumlah . ' data");';
            echo 'window.location.href = "' . site_url('Ticket/showAllTicket/4') . '";';
            echo '</script>';
        }
    }

    function header()
    {
      $data = array(
            'nama' => $this->session->userdata('nama_lengkap'),
            'username' => $this->session->userdata('username'),
            'otoritas' => $this->session->userdata('otoritas')
        );
        $this->load->view('design/header', $data);
    }
}