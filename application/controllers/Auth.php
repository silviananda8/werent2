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
		$kota=$this->session->userdata('kota');
		$TANGGAL_PENGAMBILAN=$this->session->userdata('TANGGAL_PENGAMBILAN');
		$TANGGAL_PENGEMBALIAN=$this->session->userdata('TANGGAL_PENGEMBALIAN');
		$data['data']=$this->grafik_m->show_mobil($kota,$TANGGAL_PENGAMBILAN,$TANGGAL_PENGEMBALIAN)->result();
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
		$kota=$this->session->userdata('kota');
		$TANGGAL_PENGAMBILAN=$this->session->userdata('TANGGAL_PENGAMBILAN');
		$TANGGAL_PENGEMBALIAN=$this->session->userdata('TANGGAL_PENGEMBALIAN');
		$data['data']=$this->grafik_m->show_motor($kota,$TANGGAL_PENGAMBILAN,$TANGGAL_PENGEMBALIAN)->result();
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
		if ($id!='') {
			$data['data']=$this->grafik_m->detail_mobil($id)->result();
			$this->load->view('templates/header_after_login');
			$this->load->view('tambahan/filter-pencarian');
			$this->load->view('auth/detailKendaraan',$data);
			$this->load->view('templates/footer');
		}else{
			redirect(base_url("auth"));
		}
		
	}

	public function detailmotor($id)
	{
		if($this->session->userdata('logged_in') != TRUE){
			redirect(base_url("auth"));
		}
		$data['data']=$this->grafik_m->detail_motor($id)->result();
		$this->load->view('templates/header_after_login');
		// $this->load->view('tambahan/bar-panduan2',$data);
		$this->load->view('tambahan/filter-pencarian');
		$this->load->view('auth/detailKendaraan',$data);
		$this->load->view('templates/footer');
	}

	function konfirmasi(){//pending dulu
		$this->load->view('templates/header_after_login');
		$this->load->view('auth/konfirmasi.php');
		$this->load->view('templates/footer');
	}

	function konfirmasiBookingMobil($id){//halaman konfirmasi booking untuk mobil
		$data['data']=$this->grafik_m->detail_mobil($id)->result();
		$this->load->view('templates/header_after_login');
		$this->load->view('auth/konfirmasiBooking',$data);
		$this->load->view('templates/footer');
	}

	function pembayaranMobil($id){//halaman pembayaran untuk mobil
		$data['data']=$this->grafik_m->detail_mobil($id)->result();
		$AlamatAmbil= $this->input->post('AlamatAmbil');
		$AlamatKembali=$this->input->post('AlamatKembali');
		$SUPIR=$this->input->post('SUPIR');
		$arraydata = array(
            'AlamatAmbil'  => $AlamatAmbil,
            'AlamatKembali'     => $AlamatKembali,
            'SUPIR' => $SUPIR
        );
    	$this->session->set_userdata($arraydata);
		$this->load->view('templates/header_after_login');
		$this->load->view('auth/pembayaran',$data);
		$this->load->view('templates/footer');
	}
	function konfirmasiBookingMotor($id){//halaman konfirmasi booking untuk motor
		$data['data']=$this->grafik_m->detail_motor($id)->result();
		$this->load->view('templates/header_after_login');
		$this->load->view('auth/konfirmasiBooking',$data);
		$this->load->view('templates/footer');
	}

	function pembayaranMotor($id){//halaman pembayaran untuk motor
		$data['data']=$this->grafik_m->detail_motor($id)->result();
		$AlamatAmbil= $this->input->post('AlamatAmbil');
		$AlamatKembali=$this->input->post('AlamatKembali');
		$SUPIR=$this->input->post('SUPIR');
		$arraydata = array(
            'AlamatAmbil'  => $AlamatAmbil,
            'AlamatKembali'     => $AlamatKembali,
            'SUPIR' => $SUPIR
        );
    	$this->session->set_userdata($arraydata);
		$this->load->view('templates/header_after_login');
		$this->load->view('auth/pembayaran',$data);
		$this->load->view('templates/footer');
	}


	public function artikel(){
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

    function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->grafik_m->autocomplete($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->kota;
                echo json_encode($arr_result);
            }
        }
    }
	//halaman admin
	public function home_admin()
	{
		if($this->session->userdata('logged_in') != TRUE){
			redirect(base_url("auth"));
		}
		$data['labelnya'] = $this->grafik_m->load_data();
		$this->load->view('SbAdmin/index',$data);
	}
	public function tabel()
	{
		if($this->session->userdata('logged_in') != TRUE){
			redirect(base_url("auth"));
		}
		$this->load->view('SbAdmin/grocery');
	}

	public function keuangan()
	{
		if($this->session->userdata('logged_in') != TRUE){
			redirect(base_url("auth"));
		}
		$this->load->view('SbAdmin/keuangan');
	}

	//Register
	public function register(){
		$nama = $this->input->post('Nama',TRUE);
        $email = $this->input->post('Email',TRUE);
        $password = $this->input->post('password',TRUE);
		$this->grafik_m->register($email,$password,$nama);
		redirect('Auth/index');
	}

}
