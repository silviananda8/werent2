<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }

   function auth(){
    $email    = $this->input->post('email',TRUE);
    $password = $this->input->post('password',TRUE);
    $validate = $this->login_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data       = $validate->row_array();
        $nama       = $data['NAMA'];
        $email      = $data['EMAIL'];
        $password   = $data['PASSWORD'];
        $id_user    = $data['ID_USER'];
        $level      = $data['KETERANGAN_USER'];
        $sesdata    = array(
            'NAMA'                  => $nama,
            'EMAIL'                 => $email,
            'PASSWORD'              => $password,
            'ID_USER'               => $id_user,
            'KETERANGAN_USER'       => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);

        if($level === 'admin'){
        	redirect('Auth/home_admin');
        }
        else{
                redirect('Auth/index');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        // kosong
        echo "password salah";
    }
  }

	function logout(){
      $this->session->sess_destroy();
      redirect('Auth/index');
  }
}
