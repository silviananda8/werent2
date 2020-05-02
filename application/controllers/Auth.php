<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->database();
    }
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('auth/index');
		$this->load->view('templates/footer');
	}

	public function listKendaraan()
	{
		$this->load->view('templates/header');
		$this->load->view('auth/listKendaraan');
		$this->load->view('templates/footer');
	}

	public function detailKendaraan()
	{
		$this->load->view('templates/header');
		$this->load->view('tambahan/bar-panduan');
		$this->load->view('tambahan/filter-pencarian');
		$this->load->view('auth/detailKendaraan');
		$this->load->view('templates/footer');
	}

	public function persyaratanPenyewa()
	{
		$this->load->view('templates/header');
		$this->load->view('tambahan/bar-panduan');
		$this->load->view('tambahan/filter-pencarian');
		$this->load->view('auth/persyaratan-penyewa');
		$this->load->view('templates/footer');
	}

	function pembayaran(){
		$this->load->view('templates/header');
		$this->load->view('tambahan/bar-panduan');
		$this->load->view('tambahan/filter-pencarian');
		$this->load->view('auth/pembayaran.php');
		$this->load->view('templates/footer');
	}

	function konfirmasi(){
		$this->load->view('templates/header');
		$this->load->view('auth/konfirmasi.php');
		$this->load->view('templates/footer');
	}
	public function artikel()
	{
		$this->load->view('templates/header');
		$this->load->view('auth/artikel');
		$this->load->view('templates/footer');
	}

	//halaman admin
	public function home_admin()
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
