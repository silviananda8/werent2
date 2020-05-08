<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_rental extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('rental/m_rental');
    }

    function index(){

        $id_user = $this->session->userdata('ID_USER');
        $data['rental'] = $this->m_rental->rental($id_user)->result();
        

        $this->load->view('rental/header', $data);
        $this->load->view('rental/dashboardRental');
        $this->load->view('rental/footer');
    }

    function editDetail(){
        $id_user = $this->session->userdata('ID_USER');
        $data['rental'] = $this->m_rental->rental($id_user)->result();

        $this->load->view('rental/header', $data);
        $this->load->view('rental/edit-detail-Rental');
        $this->load->view('rental/footer');
    }

    function prosesEditDetail(){
        $id     = $this->input->post('id_rental');
        $foto   = $_FILES['foto_rental'];
        if($foto=''){}else{
            $config['upload_path']      = './assets/uploads/rental/image-profil/';
            $config['allowed_types']    = 'jpg|jpeg|gif|png';
            $config['max_size']             = 2048;

            $this->load->library('upload');
            $this->upload->initialize($config);

            if(!$this->upload->do_upload('foto_rental')){
                echo $this->upload->display_errors();die();
            }else{
                $foto = $this->upload->data('file_name');
            }
        }

		$data = array(
			'NAMA_RENTAL'	            => $this->input->post('nama_rental'),
            'ALAMAT_RENTAL'	            => $this->input->post('alamat_rental'),
            'JAM_BUKA'	                => $this->input->post('jam_buka'),
            'JAM_TUTUP'	                => $this->input->post('jam_tutup'),
            'LAMA_PEMESANAN_MINIMUM'    => $this->input->post('lama_pemesanan_minimum'),
            'PERSYARATAN_JARAK_WAKTU_PEMESANAN'	=> $this->input->post('lama_pemesanan_maksimum'),
            'PERSYARATAN_PENYEWA'	        => $this->input->post('aturan_pemesanan'),
            'KEBIJAKAN_PEMBATALAN'	    => $this->input->post('kebijakan_pembatalan'),
            'DESKRIPSI_RENTAL'	        => $this->input->post('deskripsi_rental'),
            'FOTO_RENTAL'               => $foto
		);

        $this->m_rental->updateRental($data, $id);
        redirect('rental/c_rental/index');
    }

}