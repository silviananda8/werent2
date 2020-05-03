<?php
class grafik_m  extends CI_Model  {
	function load_data()
	{
		$this->db->order_by('id_keuangan','asc');
		$query=$this->db->get('keuntungan');
		return $query->result_array();
	}

	function show_card_artikel(){
        $sql=$this->db->query("SELECT * FROM artikel ORDER BY tanggal DESC");
        return $sql;
    }
    function detail_artikel($id){
        $sql=$this->db->query("SELECT * FROM artikel WHERE id='$id'");
        return $sql;
    }
     function show_card_artikel_trending(){
        $sql=$this->db->query("SELECT * FROM artikel ORDER BY tanggal DESC LIMIT 3");
        return $sql;
    }
}
?>