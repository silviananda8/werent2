<?php

class m_mobil extends CI_Model{

    function show_mobil($id_user){
        $this->db->select('mobil.*');
        $this->db->from('mobil, rental, pemilik, user');
        $this->db->where('mobil.ID_RENTAL = rental.ID_RENTAL');
        $this->db->where('rental.ID_PEMILIK = pemilik.ID_PEMILIK');
        $this->db->where('pemilik.ID_USER = user.ID_USER');
        $this->db->where('user.ID_USER',$id_user);
        $query = $this->db->get();
        return $query;
    }

    public function getMobil($id){//get data by id
        $query=$this->db->query("SELECT mobil.* FROM rental, mobil where rental.ID_RENTAL = mobil.ID_RENTAL");
        $query = $this->db->get_where('mobil', array('ID_MOBIL' => $id));
        return $query;
    }

    function deleteMobil($id){
        $this->db->where('ID_MOBIL', $id);
		$this->db->delete('mobil');
    }

    function tambahMobil($data){//tambah mobil
        $this->db->insert('mobil', $data);
    }

    function updateMobil($data, $id){
        $this->db->where('ID_MOBIL', $id);
		$this->db->update('mobil', $data);
    }

    function jumlahPesanan($id_rental,$id_mobil){
        $this->db->select('COUNT(pesanan.ID_Mobil) as jumlah');
        $this->db->from('mobil, rental, pesanan');
        $this->db->where('rental.ID_RENTAL = mobil.ID_RENTAL');
        $this->db->where('pesanan.ID_Mobil = mobil.ID_MOBIL');
        $this->db->where('mobil.ID_MOBIL',$id_mobil);
        $this->db->where('rental.ID_RENTAL',$id_rental);
        $query = $this->db->get();
        return $query;
    }

    function detailPesanan($id_mobil,$id_rental){
        $this->db->select('*');
        $this->db->from('mobil, rental, pesanan');
        $this->db->where('rental.ID_RENTAL = mobil.ID_RENTAL');
        $this->db->where('pesanan.ID_Mobil = mobil.ID_MOBIL');
        $this->db->where('mobil.ID_MOBIL',$id_mobil);
        $this->db->where('rental.ID_RENTAL',$id_rental);
        $query = $this->db->get();
        return $query;
    }
}