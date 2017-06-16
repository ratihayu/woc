<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bot extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    $token = "333258187:AAFxzbpduaUH3OT1jDkjeaF7L7p-LfTuj-g";
    $url="https://api.telegram.org/bot".$token_bot."/";

    
    public function index()
    {
        sendCommand("sendCommand", $token, $data);
    }

    public function sendCommand($command,$token,array $keterangan=null{
        $url.=$command."?"; 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $keterangan);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }

    public function getUpdates(){
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
            $id_incident = strtoupper($pisah[0]);
            $customer_name = $pisah[1];
            $status = strtoupper($pisah[2]);
            $keterangan = $pisah[3];

            $checkCommand = substr($message,0,2);
            if ($checkCommand != "IN") {
                $warning = "Format pesan salah, coba lagi dengan format INxxx/NAMA CUSTOMER/STATUS(PENDING ATAU CLOSED)/KETERANGAN CLOSED ATAU PENDING"
                }
            }


            if ($status == "PENDING") {
                $date = null;
                $closed_by = null;
                $hd = null;
                $keterangan = $keterangan_pending;
                $keterangan_closed = null;
            }
            else{
                $hd = "TECH";
                $closed_by = $user_id;
                $keterangan = $keterangan_closed;
                $keterangan_pending = null;
            }

            $this->load->model('Ticket_model');
            $this->Ticket_model->update($id_incident, $date, $closed_by, $hd, $status, $keterangan_closed, $keterangan_pending);
        }
    }
}