<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
        parent::__construct();

        $this->load->database();
    }
	public function index()
	{
		$this->load->model('grafik_m');
		$data['labelnya'] = $this->grafik_m->load_data();
		$this->load->view('SbAdmin/index',$data);
	}
	public function tabel()
	{
		$this->load->view('SbAdmin/grocery');
	}

	public function keuangan()
	{

		$this->load->view('SbAdmin/keuangan');
	}
}
