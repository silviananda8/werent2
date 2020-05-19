<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_artikel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',(array)$output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function artikel_management()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('flexigrid');
			$crud->set_table('artikel');
			$crud->columns('judul','thumbnail','artikel','tanggal');
			$crud->set_field_upload('thumbnail','assets/uploads/thumbnail');

			$crud->set_subject('artikel');
			$output = $crud->render();

			$this->_example_output($output);
	}

	public function data_rental()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('flexigrid');
			$crud->set_table('rental');
			$output = $crud->render();

			$this->_example_output($output);
	}

	public function data_keuangan()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('flexigrid');
			$crud->set_table('keuntungan');
			$crud->columns('bulan','jumlah');
			// $crud->set_field_upload('thumbnail','assets/uploads/thumbnail');

			$crud->set_subject('keuntungan');
			$output = $crud->render();

			$this->_example_output($output);
	}
	public function user()
	{
			$crud = new grocery_CRUD();
			$crud->set_theme('flexigrid');
			$crud->set_table('user');
			$output = $crud->render();

			$this->_example_output($output);
	}

}
