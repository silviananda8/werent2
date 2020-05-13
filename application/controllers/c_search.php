<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_search extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('grafik_m');
    }
    public function SearchMobil()
    {
            $kota    = $this->input->post('kota',TRUE);
            $TANGGAL_PENGAMBILAN    = $this->input->post('TANGGAL_PENGAMBILAN',TRUE);
            $TANGGAL_PENGEMBALIAN    = $this->input->post('TANGGAL_PENGEMBALIAN',TRUE);
            $validate = $this->grafik_m->show_mobil($kota,$ambil,$kembali);
            if($validate->num_rows() > 0){
                $data       = $validate->row_array();
                $nama       = $data['kota'];
                $sesdata    = array(
                    'kota'                  => $kota,
                    'TANGGAL_PENGAMBILAN' => $TANGGAL_PENGAMBILAN,
                    'TANGGAL_PENGEMBALIAN' => $TANGGAL_PENGEMBALIAN
                );
                $this->session->set_userdata($sesdata);
                if($kota === ''){
                     redirect('Auth/index');
                }
                else{
                    redirect('Auth/listKendaraan');
                }
            }else{
                redirect('Auth/listKendaraan');
            }
        }

    public function SearchMotor()
    {
            $kota    = $this->input->post('kota',TRUE);
            $TANGGAL_PENGAMBILAN    = $this->input->post('TANGGAL_PENGAMBILAN',TRUE);
            $TANGGAL_PENGEMBALIAN    = $this->input->post('TANGGAL_PENGEMBALIAN',TRUE);
            $validate = $this->grafik_m->show_motor($kota,$ambil,$kembali);
            if($validate->num_rows() > 0){
                $data       = $validate->row_array();
                $nama       = $data['kota'];
                $sesdata    = array(
                    'kota'                  => $kota,
                    'TANGGAL_PENGAMBILAN' => $TANGGAL_PENGAMBILAN,
                    'TANGGAL_PENGEMBALIAN' => $TANGGAL_PENGEMBALIAN
                );
                $this->session->set_userdata($sesdata);
                if($kota === ''){
                     redirect('Auth/index');
                }
                else{
                    redirect('Auth/listmotor');
                }
            }else{
                redirect('Auth/listmotor');
            }
        } 

    public function FilterMobil()
    {
        $kota=$this->session->userdata('kota');
        $TANGGAL_PENGAMBILAN=$this->session->userdata('TANGGAL_PENGAMBILAN');
        $TANGGAL_PENGEMBALIAN=$this->session->userdata('TANGGAL_PENGEMBALIAN');
        $TRANSISI= $this->input->post('TRANSISI');
        $KAPASITAS= $this->input->post('KAPASITAS');
        var_dump($kota);
        $data['data']=$this->grafik_m->filter($kota,$TANGGAL_PENGAMBILAN,$TANGGAL_PENGEMBALIAN,$TRANSISI,$KAPASITAS)->result();
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

    public function FilterMotor()
    {
        $kota=$this->session->userdata('kota');
        $TANGGAL_PENGAMBILAN=$this->session->userdata('TANGGAL_PENGAMBILAN');
        $TANGGAL_PENGEMBALIAN=$this->session->userdata('TANGGAL_PENGEMBALIAN');
        $TRANSISI= $this->input->post('TRANSISI');
        $KAPASITAS= $this->input->post('KAPASITAS');
        $data['data']=$this->grafik_m->filterMotor($kota,$TANGGAL_PENGAMBILAN,$TANGGAL_PENGEMBALIAN,$TRANSISI,$KAPASITAS)->result();
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
}
