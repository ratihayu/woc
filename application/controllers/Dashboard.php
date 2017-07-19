<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller{
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
    
    public function index() {        
    	$data = array(
    		'nama' => $this->session->userdata('nama_lengkap'),
			'username' => $this->session->userdata('username'),
			'otoritas' => $this->session->userdata('otoritas')
		);

        $this->load->model('dashboard_model');
        $data['open'] = $this->dashboard_model->getStatsUnclosed();
        $data['closed'] = $this->dashboard_model->getStatsClosed();
		$data['closedall'] = $this->dashboard_model->getStatsClosedall();
        $data['pending'] = $this->dashboard_model->getStatsPending();
		 $data['closedmea'] = $this->dashboard_model->getStatsmea();
		 $data['closedkbm'] = $this->dashboard_model->getStatskbm();
		 $data['closedtem'] = $this->dashboard_model->getStatstem();
		 $data['closedmun'] = $this->dashboard_model->getStatsmun();
		  $data['closedpwr'] = $this->dashboard_model->getStatspwr();
		   $data['closedwos'] = $this->dashboard_model->getStatswos();
		   $data['openmea'] = $this->dashboard_model->getStatsmeaopen();
		   $data['openmun'] = $this->dashboard_model->getStatsmunopen();
		   $data['opentem'] = $this->dashboard_model->getStatstemopen();
		   $data['openpwr'] = $this->dashboard_model->getStatspwropen();
		   $data['openkbm'] = $this->dashboard_model->getStatskbmopen();
		   $data['openwos'] = $this->dashboard_model->getStatswosopen();
		    $data['pendingmea'] = $this->dashboard_model->getStatsmeapending();
		   $data['pendingmun'] = $this->dashboard_model->getStatsmunpending();
		   $data['pendingtem'] = $this->dashboard_model->getStatstempending();
		   $data['pendingpwr'] = $this->dashboard_model->getStatspwrpending();
		   $data['pendingkbm'] = $this->dashboard_model->getStatskbmpending();
		   $data['pendingwos'] = $this->dashboard_model->getStatswospending();
        
        $this->load->view('design/header', $data);
        $this->load->view('dashboard/home', $data);
        $this->load->view('design/footer');
    }

    public function errorPage()
    {
        $data = array(
            'nama' => $this->session->userdata('nama_lengkap'),
            'username' => $this->session->userdata('username'),
            'otoritas' => $this->session->userdata('otoritas')
        );
        $this->load->view('design/header', $data);
        $this->load->view('errors/error');
        $this->load->view('design/footer');
    }
}
