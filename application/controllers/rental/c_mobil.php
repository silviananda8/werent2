<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_mobil extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('rental/m_mobil');
    }

    function tambahKendaraan(){
        
        $this->load->view('rental/header');
        $this->load->view('rental/mobil-tambah');
        $this->load->view('rental/footer');
    }

    function daftarKendaraan(){
        $id_user = $this->session->userdata('ID_USER');
        $data['data']   =   $this->m_mobil->show_mobil($id_user)->result();

        $this->load->view('rental/header', $data);
        $this->load->view('rental/mobil-daftar');
        $this->load->view('rental/footer');
    }

    function editDetailKendaraan($id){
        $data['data']   =   $this->m_mobil->getMobil($id)->result();

        $this->load->view('rental/header', $data);
        $this->load->view('rental/mobil-edit-detail');
        $this->load->view('rental/footer');
    }

    function deleteMobil($id){
        $this->m_mobil->deleteMobil($id);
        redirect('rental/c_mobil/daftarKendaraan');
    }
    
    function tambahMobil(){
        $foto   = $_FILES['foto'];
        if($foto=''){}else{
            $config['upload_path']      = './assets/uploads/kendaraan/';
            $config['allowed_types']    = 'jpg|jpeg|gif|png';
            $config['max_size']             = 2048;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if(!$this->upload->do_upload('foto')){
                echo $this->upload->display_errors();die();
            }else{
                $foto = $this->upload->data('file_name');
            }
        }

        $data = array(
			'MERK_KENDARAAN'	    => $this->input->post('merk_kendaraan'),
			'ID_RENTAL'	            => $this->input->post('id_rental'),
			'DESKRIPSI_KENDARAAN'	=> $this->input->post('deskripsi_kendaraan'),
			'HARGA_SEWA_KENDARAAN'	=> $this->input->post('harga_kendaraan'),
			'NAMA_KENDARAAN'	    => $this->input->post('nama_kendaraan'),
			'TRANSISI'	            => $this->input->post('transmisi'),
			'KAPASITAS'	            => $this->input->post('kapasitas'),
            'PINTU'	                => $this->input->post('pintu'),
            'FOTO'                  => $foto
		);

        $this->m_mobil->tambahMobil($data);
        redirect('rental/c_mobil/daftarKendaraan');
    }

    function prosesEditDetail(){
        $id = $this->input->post('id_mobil');

        $foto   = $_FILES['foto'];
        if($foto=''){}else{
            $config['upload_path']      = './assets/uploads/kendaraan/';
            $config['allowed_types']    = 'jpg|jpeg|gif|png';
            $config['max_size']             = 2048;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if(!$this->upload->do_upload('foto')){
                echo $this->upload->display_errors();die();
            }else{
                $foto = $this->upload->data('file_name');
            }
        }

		$data = array(
			'MERK_KENDARAAN'	    => $this->input->post('merk_kendaraan'),
			'DESKRIPSI_KENDARAAN'	=> $this->input->post('deskripsi_kendaraan'),
			'HARGA_SEWA_KENDARAAN'	=> $this->input->post('harga_kendaraan'),
			'NAMA_KENDARAAN'	    => $this->input->post('nama_kendaraan'),
			'TRANSISI'	            => $this->input->post('transmisi'),
			'KAPASITAS'	            => $this->input->post('kapasitas'),
            'PINTU'	                => $this->input->post('pintu'),
            'FOTO'                  => $foto,
		);

        $this->m_mobil->updateMobil($data, $id);
        redirect('rental/c_mobil/daftarKendaraan');
    }
}