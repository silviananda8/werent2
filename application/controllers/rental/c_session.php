<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_session extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('rental/m_session');
    }

    function auth(){

        $id_user    = $this->session->userdata('ID_USER');
        $validate   = $this->m_session->rental($id_user);

        if($validate->num_rows() > 0){
            $data           = $validate->row_array();
            $nama           = $data['NAMA_RENTAL'];
            $id_rental      = $data['ID_RENTAL'];
            $foto_rental    = $data['FOTO_RENTAL'];
            $sesdata        = array(
                'NAMA_RENTAL'   => $nama,
                'ID_RENTAL'     => $id_rental,
                'FOTO_RENTAL'   => $foto_rental,
                'logged_in'     => TRUE
            );
            $this->session->set_userdata($sesdata);
            redirect('rental/c_rental/index');
        }else{
            echo $this->session->set_flashdata('msg','Tidak Ada');
            // kosong
        }
    }

}