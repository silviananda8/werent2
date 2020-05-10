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
        $data['kota'] = $this->m_rental->getKota($id_user)->result();
        

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
            'ID_KOTA'	            => $this->input->post('id_kota'),
            'JAM_BUKA'	                => $this->input->post('jam_buka'),
            'JAM_TUTUP'	                => $this->input->post('jam_tutup'),
            'LAMA_PEMESANAN_MINIMUM'    => $this->input->post('lama_pemesanan_minimum'),
            'PERSYARATAN_JARAK_WAKTU_PEMESANAN'	=> $this->input->post('lama_pemesanan_maksimum'),
            'PERSYARATAN_PENYEWA'	        => $this->input->post('aturan_pemesanan'),
            'KEBIJAKAN_PEMBATALAN'	    => $this->input->post('kebijakan_pembatalan'),
            'DESKRIPSI_RENTAL'	        => $this->input->post('deskripsi_rental'),
            'PENGANTARAN'	            => $this->input->post('pengantaran'),
            'PENGEMBALIAN'	            => $this->input->post('pengembalian'),
            'FOTO_RENTAL'               => $foto
		);

        $this->m_rental->updateRental($data, $id);
        redirect('rental/c_session/auth');
        // redirect('rental/c_rental/index');
    }

    function daftarRental(){
        $this->load->view('templates/header_after_login');
        $this->load->view('rental/pendaftaranRental');
        $this->load->view('templates/footer');
    }

    function tambahRental(){
        $id_user = $this->session->userdata('ID_USER');
        $this->m_rental->tambahPemilik($id_user);

        $ID_PEMILIK = $this->m_rental->getIdPemilik($id_user)->result();//mengambil ID_PEMILIK dari tabel pemilik 
		foreach($ID_PEMILIK as $id); //mengubah menjadi string
        $id_pemilik=$id->ID_PEMILIK;
        
        // insert foto
        $foto   = $_FILES['foto'];
        if($foto=''){}else{
            $config['upload_path']      = './assets/uploads/rental/image-profil/';
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
            'ID_PEMILIK'                => $id_pemilik,
            'ID_KOTA'                   => $this->input->post('id_kota'),
            'NAMA_RENTAL'	            => $this->input->post('nama_rental'),
            'DESKRIPSI_RENTAL'	        => $this->input->post('deskripsi_rental'),
            'ALAMAT_RENTAL'	            => $this->input->post('alamat_rental'),
            'PERSYARATAN_PENYEWA'	    => $this->input->post('persyaratan_penyewa'),
            'KEBIJAKAN_PEMBATALAN'	    => $this->input->post('kebijakan_pembatalan'),
            'PENGANTARAN'	            => $this->input->post('pengantaran'),
            'PENGEMBALIAN'	            => $this->input->post('pengembalian'),
            'FOTO_RENTAL'               => $foto
		);

        $this->m_rental->tambahRental($data);
        redirect('rental/c_session/auth');

    }

    function search(){
        $postData = $this->input->post();

		$data = $this->m_rental->searchKota($postData);

		echo json_encode($data);
    }
}