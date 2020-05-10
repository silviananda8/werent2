<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_session extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('rental/m_session');
    }

    function auth(){
        $id_user        = $this->session->userdata('ID_USER');

        $data  = $this->m_session->rental($id_user)->result();
        foreach ($data as $dta);
        $id = $dta->ID_RENTAL;

        if($id == FALSE){ //kalo datanya nggak ada di database dilempar ke form register rental
            redirect('rental/c_rental/daftarRental');
        }else{
            $validate   = $this->m_session->rental($id_user);
            if($validate->num_rows() > 0){
                $data           = $validate->row_array();
                $nama           = $data['NAMA_RENTAL'];
                $foto_rental    = $data['FOTO_RENTAL'];
                $id_rental      = $data['ID_RENTAL'];
                
                $sesdata        = array(
                    'NAMA_RENTAL'   => $nama,
                    'ID_RENTAL'     => $id_rental,
                    'FOTO_RENTAL'   => $foto_rental,
                    'logged_in'     => TRUE
                );
                $this->session->set_userdata($sesdata);
                redirect('rental/c_rental/index');
            }
        }
    }

}