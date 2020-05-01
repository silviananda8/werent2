<?php
class grafik_m  extends CI_Model  {
	function load_data()
	{
		$this->db->order_by('id_keuangan','asc');
		$query=$this->db->get('keuntungan');
		return $query->result_array();
	}
}
?>