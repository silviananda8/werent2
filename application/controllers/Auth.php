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

	function konfirmasiBooking(){
		// $data['data']=$this->grafik_m->detail_mobil($id)->result();
		$this->load->view('templates/header_after_login');
		// $this->load->view('tambahan/bar-panduan');
		// $this->load->view('tambahan/filter-pencarian');
		$this->load->view('auth/konfirmasiBooking');
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
	public function register(){
		$nama = $this->input->post('Nama',TRUE);
        $email = $this->input->post('Email',TRUE);
        $password = $this->input->post('password',TRUE);
		$this->grafik_m->register($email,$password,$nama);
		
		$ID_USER = $this->grafik_m->getIdUser($email,$password)->result();//mengambil ID_USER dari tabel user 
		$this->register_pemilik($ID_USER);//lempar ke fungsi register_pemilik
	}

	function register_pemilik($ID_USER){
		foreach($ID_USER as $id); //mengubah menjadi string
		$data=$id->ID_USER; //inisialisasi variabel data berisi ID_USER
		$this->grafik_m->tambahPemilik($data); //lempar ke model yang berisi inset ke tabel pemilik

		$ID_PEMILIK = $this->grafik_m->getIdPemilik($data)->result();//mengambil ID_PEMILIK dari tabel pemilik 
		$this->register_rental($ID_PEMILIK);
	}

	function register_rental($ID_PEMILIK){
		foreach($ID_PEMILIK as $id); //mengubah menjadi string
		$data=$id->ID_PEMILIK;
		$this->grafik_m->tambahRental($data);
		redirect('Auth/index');
	}
}
