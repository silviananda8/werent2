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
        $data['kd']     = 2;

        $this->load->view('rental/header', $data);
        $this->load->view('rental/motor-daftar');
        $this->load->view('rental/footer', $data);
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
			'TRANSISI'	            => $this->input->post('transisi'),
			'KAPASITAS'	            => $this->input->post('kapasitas'),
            'PINTU'	                => $this->input->post('pintu'),
            'JENIS_KENDARAAN'	    => $this->input->post('jenis_kendaraan'),
            'PENDINGIN_UDARA'	    => $this->input->post('pendingin_udara'),
            'FOTO'                  => $foto
		);

        $this->m_motor->tambahMotor($data);
        redirect('rental/c_motor/daftarKendaraan');
    }

    function prosesEditDetail(){
        $id = $this->input->post('id_motor');

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
			'TRANSISI'	            => $this->input->post('transisi'),
			'KAPASITAS'	            => $this->input->post('kapasitas'),
            'PINTU'	                => $this->input->post('pintu'),
            'JENIS_KENDARAAN'	    => $this->input->post('jenis_kendaraan'),
            'PENDINGIN_UDARA'	    => $this->input->post('pendingin_udara'),
            'FOTO'                  => $foto
		);

        $this->m_motor->updateMotor($data, $id);
        redirect('rental/c_motor/daftarKendaraan');
    }

    function ambilId($id){
        $id_rental      = $this->session->userdata('ID_RENTAL');
        $data = $this->m_motor->ambilId($id,$id_rental)->result();

        echo json_encode($data);
    }
}