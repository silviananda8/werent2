<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {
function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_user');
    }

    function akunPenyewa($kode){
        $id_user = $this->session->userdata('ID_USER');
        $data['profil'] = $this->m_user->getProfil($id_user)->result();
        $data['mobil'] = $this->m_user->getMobil($id_user)->result();
        $data['motor'] = $this->m_user->getMotor($id_user)->result();

		$data['kode']=$kode;
		$this->load->view('templates/header_after_login');
		$this->load->view('auth/akunPenyewa',$data);
		$this->load->view('templates/footer');
    }

    function editProfil(){
        $id_user = $this->session->userdata('ID_USER');

        $data= array(
            'NAMA' => $this->input->post('nama'),
            'EMAIL' => $this->input->post('email'),
            'PASSWORD' => $this->input->post('password'),
            'KOTA' => $this->input->post('kota'),
            'TELEPON_SELULER' => $this->input->post('nomer_telepon'),
            'TANGGAL_LAHIR' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin')
        );

        $this->m_user->updateProfil($data, $id_user);

        $pesan = $this->session->set_flashdata('msg','Data anda berhasil diperbarui');
        redirect('c_user/akunPenyewa/'.$kode=1,$pesan);
    }

    function detailMobil($id_pesan){
        $id_user = $this->session->userdata('ID_USER');
        
        $data['detail'] = $this->m_user->getDetailMobil($id_user,$id_pesan)->result();

        $this->load->view('templates/header_after_login',$data);
		$this->load->view('auth/detailBooking');
		$this->load->view('templates/footer');
    }

    function detailMotor($id_pesan){
        $id_user = $this->session->userdata('ID_USER');
        
        $data['detail'] = $this->m_user->getDetailMotor($id_user,$id_pesan)->result();

        $this->load->view('templates/header_after_login',$data);
		$this->load->view('auth/detailBooking');
		$this->load->view('templates/footer');
    }

    function deletePesanan($kode_pemesanan){
        $this->m_user->deletePesanan($kode_pemesanan);
        $pesan = $this->session->set_flashdata('msg','Pesanan berhasil dihapus');
        redirect('c_user/akunPenyewa/'.$kode=2,$pesan);
    }

}