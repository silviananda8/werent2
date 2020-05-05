<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_rental extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('m_rental');
    }

    function index(){
        $this->load->view('rental/header');
        $this->load->view('rental/dashboardRental');
        $this->load->view('rental/footer');
    }

    function editDetail(){
        $this->load->view('rental/header');
        $this->load->view('rental/edit-detail-Rental');
        $this->load->view('rental/footer');
    }

    function tambahKendaraan(){
        $this->load->view('rental/header');
        $this->load->view('rental/tambah-kendaraan');
        $this->load->view('rental/footer');
    }

}