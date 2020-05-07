<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_motor extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('rental/m_motor');
    }

    function tambahKendaraan(){
        
        $this->load->view('rental/header');
        $this->load->view('rental/motor-tambah');
        $this->load->view('rental/footer');
    }

    function daftarKendaraan(){
        $id_user = $this->session->userdata('ID_USER');
        $data['data']   =   $this->m_motor->show_motor($id_user)->result();

        $this->load->view('rental/header', $data);
        $this->load->view('rental/motor-daftar');
        $this->load->view('rental/footer');
    }

    function editDetailKendaraan($id){
        $data['data']   =   $this->m_motor->getMotor($id)->result();

        $this->load->view('rental/header', $data);
        $this->load->view('rental/motor-edit-detail');
        $this->load->view('rental/footer');
    }

    function deleteMotor($id){
        $this->m_motor->deleteMotor($id);
        redirect('rental/c_motor/daftarKendaraan');
    }
    
    function tambahMotor(){
        $data = array(
			'MERK_KENDARAAN'	    => $this->input->post('merk_kendaraan'),
			'ID_RENTAL'	            => $this->input->post('id_rental'),
			'DESKRIPSI_KENDARAAN'	=> $this->input->post('deskripsi_kendaraan'),
			'HARGA_SEWA_KENDARAAN'	=> $this->input->post('harga_kendaraan'),
			'NAMA_KENDARAAN'	    => $this->input->post('nama_kendaraan'),
			'TRANSISI'	            => $this->input->post('transisi'),
			'KAPASITAS'	            => $this->input->post('kapasitas'),
            'PINTU'	                => $this->input->post('pintu'),
            'JENIS_KENDARAAN'	    => $this->input->post('jenis_kendaraan'),
            'PENDINGIN_UDARA'	    => $this->input->post('pendingin_udara')
		);

        $this->m_motor->tambahMotor($data);
        redirect('rental/c_motor/daftarKendaraan');
    }

    function prosesEditDetail(){
        $id = $this->input->post('id_motor');
		$data = array(
			'MERK_KENDARAAN'	    => $this->input->post('merk_kendaraan'),
			'DESKRIPSI_KENDARAAN'	=> $this->input->post('deskripsi_kendaraan'),
			'HARGA_SEWA_KENDARAAN'	=> $this->input->post('harga_kendaraan'),
			'NAMA_KENDARAAN'	    => $this->input->post('nama_kendaraan'),
			'TRANSISI'	            => $this->input->post('transisi'),
			'KAPASITAS'	            => $this->input->post('kapasitas'),
            'PINTU'	                => $this->input->post('pintu'),
            'JENIS_KENDARAAN'	    => $this->input->post('jenis_kendaraan'),
            'PENDINGIN_UDARA'	    => $this->input->post('pendingin_udara')
		);

        $this->m_motor->updateMotor($data, $id);
        redirect('rental/c_motor/daftarKendaraan');
    }
}