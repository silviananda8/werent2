<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class page extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('grafik_m');
    }
	public function landing_after_login()
	{
		$data['coba']=$this->grafik_m->show_card_artikel_trending()->result();
		$this->load->view('templates/header_after_login');
		$this->load->view('auth/index',$data);
		$this->load->view('templates/footer');
	}
}
