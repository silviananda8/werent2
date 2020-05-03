<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('grafik_m');
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
		$data['data']=$this->grafik_m->show_card_artikel()->result();
		$data['coba']=$this->grafik_m->show_card_artikel_trending()->result();
		$this->load->view('templates/header');
		$this->load->view('auth/artikel',$data);
		$this->load->view('templates/footer');
	}
	function read_artikel($id){
       	$data['data']=$this->grafik_m->detail_artikel($id)->result();
       	$this->load->view('templates/header');
		$this->load->view('auth/read_artikel',$data);
		$this->load->view('templates/footer');
    }

	//halaman admin
	public function home_admin()
	{
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
