<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $ref = $this->input->get('ref');
        if($this->session->userdata('login') == TRUE)
        {
            redirect('dashboard');
        }
        $data['error'] = FALSE;
        $data['ref'] = '';
        if($ref != '' || !empty($ref))
        {
            $data['ref'] = $ref;
        }
        $this->load->view('access/login', $data);         
    }

    function reLogin()
    {
        $ref = $this->input->get('ref');
        if($this->session->userdata('login') == TRUE)
        {
            redirect('dashboard');
        }
        $data['error'] = TRUE;
        $data['ref'] = '';
        if($ref != '' || !empty($ref))
        {
            $data['ref'] = $ref;
        }
        $this->load->view('access/login', $data);
    }

    function doLogin()
    {
        $ref = $this->input->post('ref');
        if($this->session->userdata('login') == TRUE)
        {
            redirect('dashboard');
        }
        $username = $this->input->post('username');
        $password = $this->input->post('password');
            
        $this->load->model('akun');  
        $auth = $this->akun->login($username, md5($password));
            
        if($auth)
        {
            $nama = $this->akun->get_name($username);
            $otoritas = $this->akun->get_otoritas($username);
            $id_akun = $this->akun->get_id($username);
            $data = array('username' => $username, 'login' => TRUE, 'nama_lengkap' => $nama, 'otoritas' => $otoritas, 'id_akun' => $id_akun);
            $this->session->set_userdata($data);
            if($ref != '' || !empty($ref))
            {
                redirect($ref);
            }
            else
            {
                redirect('dashboard');
            }
        }
        else
        {
              echo '<script language="javascript">';
              echo 'window.location.href = "reLogin?ref='.$ref.'";';
              echo '</script>';
        }
    }
    
    function doLogout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}