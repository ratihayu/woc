<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bot extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        // while(true){
            $token = "333258187:AAFxzbpduaUH3OT1jDkjeaF7L7p-LfTuj-g";
            $url="https://api.telegram.org/bot".$token."/";

            $update = file_get_contents($url."getupdates");
            $updateArray = json_decode($update, true);
            $getUpdates = $updateArray["result"];

            foreach ($getUpdates as $value => $keterangan) {
                $update_id = $keterangan["update_id"];
                $message_id = $keterangan["message"]["message_id"]; 
                $user_id = $keterangan["message"]["chat"]["id"];
                $username = $keterangan["message"]["from"]["username"];
                $first_name = $keterangan["message"]["from"]["first_name"];
                $message = $keterangan["message"]["text"]; 
                $date = $keterangan["message"]["date"];
                $pisah = explode("/",$message);
                $id_incident = isset($pisah[0]) ? strtoupper($pisah[0]) : null;
                $status = isset($pisah[1]) ? strtoupper($pisah[1]) : null;
                $keterangan = isset($pisah[2]) ? $pisah[2] : null;

                $this->load->model('Ticket_model');
                if ($this->Ticket_model->checkLog($update_id)) {
                    $this->Ticket_model->insertLog($update_id, $message_id);

                    $checkCommand = substr($message,0,2);
                    if ($checkCommand != "IN") {
                        $warning = "Format pesan salah, coba lagi dengan format INxxx/STATUS(PENDING ATAU CLOSED)/KETERANGAN CLOSED ATAU PENDING";
                        $sendWarning = file_get_contents($url."sendmessage?chat_id=".$user_id."&text=".$warning."&reply_to_message_id=".$message_id);
                        json_decode($sendWarning, TRUE);
                    }
                    else{
                        if (!($this->Ticket_model->checkCommand($id_incident))) {
                            $warning = "No Ticket tidak terdaftar.";
                            $sendWarning = file_get_contents($url."sendmessage?chat_id=".$user_id."&text=".$warning."&reply_to_message_id=".$message_id);
                            json_decode($sendWarning, TRUE);
                        }
                        else{
                            if ($status == "PENDING") {
                                $closed_date = null;
                                $closed_by = null;
                                $hd = "TECH";
                                $keterangan_pending = $keterangan;
                                $keterangan_closed = null;
                            }
                            else if($status == "CLOSED") {
                                $hd = "TECH";
                                $closed_by = $user_id;
                                $keterangan_closed = $keterangan;
                                $keterangan_pending = null;
                                $closed_date = date("Y-m-d H:i:s",$date);
                            }

                            $this->Ticket_model->update($id_incident, $closed_date, $closed_by, $hd, $status, $keterangan_closed, $keterangan_pending);
                            $notif = "Status Ticket telah diubah.";
                            $sendNotif = file_get_contents($url."sendmessage?chat_id=".$user_id."&text=".$notif."&reply_to_message_id=".$message_id);
                            json_decode($sendNotif, TRUE);

                            $this->load->model('Teknisi_model');
                            if ($this->Teknisi_model->checkTeknisi($user_id)) {
                                $this->Teknisi_model->addTeknisi($user_id,$username,$first_name);
                            }
                            else continue;
                        }
                    }
                }
                else continue;
            }
        //     sleep(5);
        // }
    }
}