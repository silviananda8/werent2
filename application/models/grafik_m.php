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

    function show_mobil($kota,$TANGGAL_PENGAMBILAN,$TANGGAL_PENGEMBALIAN){
        $sql=$this->db->query("SELECT * FROM mobil join rental JOIN kab_kota on mobil.ID_RENTAL=rental.ID_RENTAL AND rental.ID_KOTA=kab_kota.id_kab WHERE kab_kota.kota LIKE '$kota%' and  NOT ID_MOBIL in (SELECT pesanan.ID_MOBIL FROM pesanan JOIN mobil join rental JOIN kab_kota ON pesanan.ID_MOBIL=mobil.ID_MOBIL and mobil.ID_RENTAL=rental.ID_RENTAL AND rental.ID_KOTA=kab_kota.id_kab WHERE TANGGAL_PENGAMBILAN>='$TANGGAL_PENGAMBILAN' AND TANGGAL_PENGEMBALIAN<='$TANGGAL_PENGEMBALIAN' AND kab_kota.kota LIKE '$kota%')");
        return $sql;
    }


    function detail_mobil($id){
        $sql=$this->db->query("SELECT *,TIME_FORMAT(JAM_BUKA,'%h %i') as buka,TIME_FORMAT(JAM_TUTUP,'%h %i') as tutup FROM rental JOIN mobil WHERE ID_MOBIL='$id' AND mobil.ID_RENTAL = rental.ID_RENTAL");
        return $sql;
    }

    function show_motor($kota,$TANGGAL_PENGAMBILAN,$TANGGAL_PENGEMBALIAN){
        $sql=$this->db->query("SELECT * FROM motor JOIN rental JOIN kab_kota ON motor.ID_RENTAL = rental.ID_RENTAL AND rental.ID_KOTA =kab_kota.id_kab WHERE    kab_kota.kota LIKE '$kota%' AND NOT ID_MOTOR IN (SELECT ID_MOTOR FROM pesanan WHERE TANGGAL_PENGAMBILAN>='$TANGGAL_PENGAMBILAN' AND TANGGAL_PENGEMBALIAN<='$TANGGAL_PENGEMBALIAN')");
        return $sql;
    }

    function detail_motor($id){
        $sql=$this->db->query("SELECT *,TIME_FORMAT(JAM_BUKA,'%h %i') as buka,TIME_FORMAT(JAM_TUTUP,'%h %i') as tutup FROM rental JOIN motor WHERE ID_MOTOR='$id' AND motor.ID_RENTAL = rental.ID_RENTAL");
        return $sql;
    }
     function pesanan($id){
        $sql=$this->db->query("SELECT *,TIME_FORMAT(JAM_BUKA,'%h %i') as buka,TIME_FORMAT(JAM_TUTUP,'%h %i') as tutup FROM rental JOIN motor WHERE ID_MOTOR='$id' AND motor.ID_RENTAL = rental.ID_RENTAL");
        return $sql;
    }

    // Start Register 
    function register($email,$password,$nama){
        $sql=$this->db->query("INSERT INTO `user`(`EMAIL`, `PASSWORD`, `NAMA`,`KETERANGAN_USER`) VALUES ('$email','$password','$nama','user')");
        return $sql;
    }

    function autocomplete($kota){
        $this->db->like('kota', $kota , 'both');
        $this->db->order_by('kota', 'ASC');
        $this->db->limit(5);
        return $this->db->get('kab_kota')->result();
    }
    //filter
    function filter($kota,$TANGGAL_PENGAMBILAN,$TANGGAL_PENGEMBALIAN,$TRANSISI,$KAPASITAS){
       $sql=$this->db->query("SELECT * FROM mobil JOIN rental JOIN kab_kota ON mobil.ID_RENTAL = rental.ID_RENTAL AND rental.ID_KOTA =kab_kota.id_kab WHERE kab_kota.kota LIKE '$kota%' AND TRANSISI = '$TRANSISI' OR KAPASITAS='$KAPASITAS'  AND NOT ID_MOBIL IN (SELECT ID_MOBIL FROM pesanan WHERE TANGGAL_PENGAMBILAN>='$TANGGAL_PENGAMBILAN' AND TANGGAL_PENGEMBALIAN<='$TANGGAL_PENGEMBALIAN')");
        return $sql;
    }

    function filterMotor($kota,$TANGGAL_PENGAMBILAN,$TANGGAL_PENGEMBALIAN,$TRANSISI,$KAPASITAS){
       $sql=$this->db->query("SELECT * FROM motor JOIN rental JOIN kab_kota ON motor.ID_RENTAL = rental.ID_RENTAL AND rental.ID_KOTA =kab_kota.id_kab WHERE kab_kota.kota LIKE '$kota%' AND TRANSISI = '$TRANSISI' OR KAPASITAS='$KAPASITAS' AND NOT ID_MOTOR IN (SELECT ID_MOTOR FROM pesanan WHERE TANGGAL_PENGAMBILAN>='$TANGGAL_PENGAMBILAN' AND TANGGAL_PENGEMBALIAN<='$TANGGAL_PENGEMBALIAN')");
        return $sql;
    }
}
?>