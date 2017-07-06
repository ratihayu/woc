<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticket extends CI_Controller {
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
    
    public function index()
    {
        $this->load->model('ticket_model');
        $data['list'] = $this->ticket_model->getListTicket();
        $this->header();
        $this->load->view('ticket/home_ticket',$data);
        $this->load->view('design/footer');
    }

    public function showAllTicket($status){
      $this->load->model('Ticket_model');
      if($status == '1'){
        $data['list'] = $this->Ticket_model->showUnclosedTicket();
        $data['subjudul'] = 'Unclosed Ticket';
      }
      else if($status == '2'){
        $data['list'] = $this->Ticket_model->showClosedTicket();
        $data['subjudul'] = 'Closed Ticket';
      }
      else if($status == '3'){
        $data['list'] = $this->Ticket_model->showPendingTicket();
        $data['subjudul'] = 'Pending Ticket';
      }
      else{
        $data['list'] = $this->Ticket_model->showAllTicket();
        $data['subjudul'] = 'Daftar Semua Ticket';
      }
      
      $this->header();
      $this->load->view('ticket/show_ticket', $data);
      $this->load->view('design/footer');
    }

    public function editTicket($id){
      $ref = $this->input->get('ref');
      $this->load->model('Ticket_model');
            
      $data['ticket'] = $this->Ticket_model->edit($id);
      $data['ref_uri'] = $ref;

      $this->header();
      $this->load->view('Ticket/edit_ticket', $data);
      $this->load->view('design/footer');
    }

    public function updateTicket(){
      $ref = $this->input->post('ref');
      $id = $this->input->post('id');
      $status = $this->input->post('status');
      $tech = $this->input->post('tech');
      $ketclosed = $this->input->post('ketclosed');
      $ketpending = $this->input->post('ketpending');
      $data = array(
            'nama' => $this->session->userdata('nama_lengkap'),
            'username' => $this->session->userdata('username'),
            'otoritas' => $this->session->userdata('otoritas'),
            'id_akun' => $this->session->userdata('id_akun')
        );
      $hd = $data['id_akun'];
        
      $this->load->model('Ticket_model');
      if ($status == "CLOSED") {
        $tglclosed = date('Y-m-d H:i:s');

        if($this->Ticket_model->updateClosedByHD($id, $status, $ketclosed, $ketpending, $hd, $tglclosed)){
          echo '<script language="javascript">';
          echo 'alert("Status ticket berhasil diupdate");';
          echo 'window.location.href = "' . site_url('Ticket/showAllTicket/4') . '";';
          echo '</script>';
        }
        else{
          echo '<script language="javascript">';
          echo 'alert("Gagal mengupdate status ticket");';
          echo 'window.history.back();';
          echo '</script>';
        }
      }
      else{
        if($this->Ticket_model->updateByHD($id, $status, $tech, $ketclosed, $ketpending, $hd)){
          echo '<script language="javascript">';
          echo 'alert("Data ticket berhasil diupdate");'; 
          echo 'window.location.href = "' . site_url('Ticket/showAllTicket/4') . '";';
          echo '</script>';
        }
        else{
          echo '<script language="javascript">';
          echo 'alert("Gagal mengupdate status ticket");';
          echo 'window.history.back();';
          echo '</script>';
        }
      }

    }

    public function uploadTicket()
    {
      // to convert alpha to number
      function alpha2num($a) {
          $l = strlen($a);
          $n = 0;
          for($i = 0; $i < $l; $i++)
              $n = $n*26 + ord($a[$i]) - 0x40;

          return $n-1;
      }

      // to convert number back to alpha
      function num2alpha($n)
      {
          for($r = ""; $n >= 0; $n = intval($n / 26) - 1)
          $r = chr($n%26 + 0x41) . $r;
          return $r;
      }

      function get_range($start_column, $end_column)
      {
          $s = alpha2num($start_column); // get start number
          $e = alpha2num($end_column); // get end num

          $columns = array();

          // loop from start to end and change back the number to alpha to be stored in array
          for($i=$s; $i<=$e; $i++)
              $columns[] = num2alpha($i);

          return $columns;
      }

      // usage
      // $columns = get_range('Z', 'BA'));

        if ($_FILES['userFile']['type'] == 'application/vnd.ms-excel' && substr($_FILES['userFile']['name'], -3, 3) == 'xls')
        {
            $jumlah = 0;
            $target_Path = "files/";
            $target_Path = $target_Path.basename( $_FILES['userFile']['name'] );          
            move_uploaded_file( $_FILES['userFile']['tmp_name'], $target_Path );
            $file = getcwd() . '\files\\' . $_FILES['userFile']['name'];
            $this->load->library('excel');
            $objPHPExcel = PHPExcel_IOFactory::load($file);
            $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
            $flag = 0;
            $count = 0;
            foreach ($cell_collection as $cell) {

                $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
                $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();

                if (in_array($column,get_range('A','AM')) && $row!= 1 && $row != $flag) 
                {
                  $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
                  if ($column == 'A' && $data_value == null) {
                      $flag = $row;
                  }
                  else
                  {
                    $excel[$count] = $data_value; 
                    if ($count < 39) 
                    {
                        $count = $count + 1;
                        if ($column == 'AM'){
                        $this->load->model('Ticket_model');
                        if($this->Ticket_model->checkPrimary($excel[0])){
                          if($this->Ticket_model->addTicketByFile($excel[0],str_replace("'", "", $excel[1]),$excel[2],$excel[16],$excel[20],$excel[14],$excel[21],$excel[30],$excel[31],$excel[38],$excel[36],$excel[33],$excel[12],$excel[17])){
                            $jumlah = $jumlah + 1;
                          }
                        }
                        $count = 0;
                        }
                      }
                    }
                  }
                }
              unlink($file);
              echo '<script language="javascript">';
              echo 'alert("Berhasil menambahkan ' . $jumlah . ' data");';
              echo 'window.location.href = "' . site_url('Ticket/showAllTicket/4') . '";';
              echo '</script>'; 
            }
        else
        {
            echo '<script language="javascript">';
            echo 'alert("Gagal upload file, pastikan anda telah mengupload file bertipe .xls");';
            echo 'window.location.href = "' . site_url('Ticket/') . '";';
            echo '</script>';
        }
    }


    public function header()
    {
      $data = array(
            'nama' => $this->session->userdata('nama_lengkap'),
            'username' => $this->session->userdata('username'),
            'otoritas' => $this->session->userdata('otoritas'),
            'id_akun' => $this->session->userdata('id_akun')
        );
        $this->load->view('design/header', $data);
    }
}
