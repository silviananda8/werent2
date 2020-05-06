<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_rental extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_rental');
    }

    function index(){

        $id_user = $this->session->userdata('ID_USER');
        $data['rental'] = $this->m_rental->rental($id_user)->result();
        

        $this->load->view('rental/header', $data);
        $this->load->view('rental/dashboardRental', $data);
        $this->load->view('rental/footer');
    }

    function editDetail(){
        $id_user = $this->session->userdata('ID_USER');
        $data['rental'] = $this->m_rental->rental($id_user)->result();

        $this->load->view('rental/header', $data);
        $this->load->view('rental/edit-detail-Rental', $data);
        $this->load->view('rental/footer');
    }

    function prosesEditDetail(){
        $id = $this->input->post('id_rental');
		$data = array(
			'NAMA_RENTAL'	            => $this->input->post('nama_rental'),
            'ALAMAT_RENTAL'	            => $this->input->post('alamat_rental'),
            'JAM_BUKA'	                => $this->input->post('jam_buka'),
            'JAM_TUTUP'	                => $this->input->post('jam_tutup'),
            'LAMA_PEMESANAN_MINIMUM'    => $this->input->post('lama_pemesanan_minimum'),
            'PERSYARATAN_JARAK_WAKTU_PEMESANAN'	=> $this->input->post('lama_pemesanan_maksimum'),
            'PERSYARATAN_PENYEWA'	        => $this->input->post('aturan_pemesanan'),
            'KEBIJAKAN_PEMBATALAN'	    => $this->input->post('kebijakan_pembatalan'),
            'DESKRIPSI_RENTAL'	        => $this->input->post('deskripsi_rental') 
		);

        $this->m_rental->updateRental($data, $id);
        redirect('c_rental/index');
    }

    function tambahKendaraan(){
        $this->load->view('rental/header', $data);
        $this->load->view('rental/tambah-kendaraan');
        $this->load->view('rental/footer');
    }

}