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
        $sql=$this->db->query("SELECT *,DATE_FORMAT(tanggal, '%m/%d/%Y') as last_update FROM artikel ORDER BY tanggal DESC LIMIT 3");
        return $sql;
    }

    function show_mobil(){
        $sql=$this->db->query("SELECT * FROM rental JOIN mobil WHERE mobil.ID_RENTAL = rental.ID_RENTAL");
        return $sql;
    }

    function detail_mobil($id){
        $sql=$this->db->query("SELECT *,TIME_FORMAT(JAM_BUKA,'%h %i') as buka,TIME_FORMAT(JAM_TUTUP,'%h %i') as tutup FROM rental JOIN mobil WHERE ID_MOBIL='$id' AND mobil.ID_RENTAL = rental.ID_RENTAL");
        return $sql;
    }

    function show_motor(){
        $sql=$this->db->query("SELECT * FROM rental JOIN motor WHERE motor.ID_RENTAL = rental.ID_RENTAL");
        return $sql;
    }

    function detail_motor($id){
        $sql=$this->db->query("SELECT *,TIME_FORMAT(JAM_BUKA,'%h %i') as buka,TIME_FORMAT(JAM_TUTUP,'%h %i') as tutup FROM rental JOIN motor WHERE ID_MOTOR='$id' AND motor.ID_RENTAL = rental.ID_RENTAL");
        return $sql;
    }

    function register($email,$password,$nama){
        $sql=$this->db->query("INSERT INTO `user`(`EMAIL`, `PASSWORD`, `NAMA`,`KETERANGAN_USER`) VALUES ('$email','$password','$nama','user')");
        return $sql;
    }
}
?>