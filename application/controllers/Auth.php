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
		$data['coba']=$this->grafik_m->show_card_artikel_trending()->result();
		if($this->session->userdata('logged_in') != TRUE){
			$this->load->view('templates/header');
			$this->load->view('tambahan/form-pencarian-dashboard1');
			$this->load->view('auth/index',$data);
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header_after_login');
			$this->load->view('tambahan/form-pencarian-dashboard1');
			$this->load->view('auth/index',$data);
			$this->load->view('templates/footer');
		}
	}

	public function index2()
	{
		$data['coba']=$this->grafik_m->show_card_artikel_trending()->result();
		if($this->session->userdata('logged_in') != TRUE){
			$this->load->view('templates/header');
			$this->load->view('tambahan/form-pencarian-dashboard2');
			$this->load->view('auth/index',$data);
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header_after_login');
			$this->load->view('tambahan/form-pencarian-dashboard2');
			$this->load->view('auth/index',$data);
			$this->load->view('templates/footer');
		}
	}

	public function listKendaraan()
	{
		$data['data']=$this->grafik_m->show_mobil()->result();
		if($this->session->userdata('logged_in') != TRUE){
			$this->load->view('templates/header');
			$this->load->view('auth/listKendaraan',$data);
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header_after_login');
			$this->load->view('auth/listKendaraan',$data);
			$this->load->view('templates/footer');
		}	
	}
	public function listmotor()
	{
		$data['data']=$this->grafik_m->show_motor()->result();
		if($this->session->userdata('logged_in') != TRUE){
			$this->load->view('templates/header');
			$this->load->view('auth/listKendaraan',$data);
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header_after_login');
			$this->load->view('auth/listKendaraan',$data);
			$this->load->view('templates/footer');
		}	
	}

	public function detailKendaraan($id)
	{
		if($this->session->userdata('logged_in') != TRUE){
			redirect(base_url("auth"));
		}
		$data['data']=$this->grafik_m->detail_mobil($id)->result();
		$this->load->view('templates/header_after_login');
		$this->load->view('tambahan/bar-panduan',$data);
		$this->load->view('tambahan/filter-pencarian');
		$this->load->view('auth/detailKendaraan',$data);
		$this->load->view('templates/footer');
	}

	public function detailmotor($id)
	{
		if($this->session->userdata('logged_in') != TRUE){
			redirect(base_url("auth"));
		}
		$data['data']=$this->grafik_m->detail_motor($id)->result();
		$this->load->view('templates/header_after_login');
		$this->load->view('tambahan/bar-panduan2',$data);
		$this->load->view('tambahan/filter-pencarian');
		$this->load->view('auth/detailKendaraan',$data);
		$this->load->view('templates/footer');
	}

	public function persyaratanPenyewa($id)
	{
		$data['data']=$this->grafik_m->detail_mobil($id)->result();
		$this->load->view('templates/header_after_login');
		$this->load->view('tambahan/bar-panduan',$data);
		$this->load->view('tambahan/filter-pencarian');
		$this->load->view('auth/persyaratan-penyewa');
		$this->load->view('templates/footer');
	}

	public function persyaratanPenyewa_motor($id)
	{
		$data['data']=$this->grafik_m->detail_motor($id)->result();
		$this->load->view('templates/header_after_login');
		$this->load->view('tambahan/bar-panduan2',$data);
		$this->load->view('tambahan/filter-pencarian');
		$this->load->view('auth/persyaratan-penyewa');
		$this->load->view('templates/footer');
	}

	function pembayaran($id){
		$data['data']=$this->grafik_m->detail_mobil($id)->result();
		$this->load->view('templates/header_after_login');
		$this->load->view('tambahan/bar-panduan',$data);
		$this->load->view('tambahan/filter-pencarian');
		$this->load->view('auth/pembayaran.php');
		$this->load->view('templates/footer');
	}

	function konfirmasi(){
		$this->load->view('templates/header_after_login');
		$this->load->view('auth/konfirmasi.php');
		$this->load->view('templates/footer');
	}
	public function artikel()
	{
		$data['data']=$this->grafik_m->show_card_artikel()->result();
		$data['coba']=$this->grafik_m->show_card_artikel_trending()->result();
		if($this->session->userdata('logged_in') != TRUE){
			$this->load->view('templates/header');
			$this->load->view('auth/artikel',$data);
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header_after_login');
			$this->load->view('auth/artikel',$data);
			$this->load->view('templates/footer');
		}
		
	}
	function read_artikel($id){
       	$data['data']=$this->grafik_m->detail_artikel($id)->result();
       	if($this->session->userdata('logged_in') != TRUE){
			$this->load->view('templates/header');
			$this->load->view('auth/read_artikel',$data);
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header_after_login');
			$this->load->view('auth/read_artikel',$data);
			$this->load->view('templates/footer');
		}
       	
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

	//Register
	public function register()
	{
		$nama = $this->input->post('Nama',TRUE);
        $email = $this->input->post('Email',TRUE);
        $password = $this->input->post('password',TRUE);
        $this->grafik_m->register($email,$password,$nama);
        redirect('Auth/index');
	}
}
