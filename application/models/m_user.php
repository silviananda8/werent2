<?php

class m_user extends CI_Model{

    function getProfil($id_user){
        $this->db->where('ID_USER',$id_user);
        $query = $this->db->get('user');
        return $query;
    }

    function updateProfil($data, $id_user){
        $this->db->where('ID_USER', $id_user);
		$this->db->update('user', $data);
    }

    function getPesanan($id_user){
        $this->db->select('pesanan.*, mobil.*, rental.*');
        $this->db->from('pesanan, penyewa, user, mobil, rental');
        $this->db->where('pesanan.ID_Mobil = mobil.ID_MOBIL');
        $this->db->where('mobil.ID_RENTAL = rental.ID_RENTAL');
        $this->db->where('pesanan.ID_PENYEWA = penyewa.ID_PENYEWA');
        $this->db->where('penyewa.ID_USER = user.ID_USER');
        $this->db->where('user.ID_USER',$id_user);
        $query = $this->db->get();
        return $query;
    }

    function getDetailPesanan($id_user,$id_mobil){
        $this->db->select('pesanan.*, mobil.*, rental.*');
        $this->db->from('pesanan, penyewa, user, mobil, rental');
        $this->db->where('pesanan.ID_Mobil = mobil.ID_MOBIL');
        $this->db->where('mobil.ID_RENTAL = rental.ID_RENTAL');
        $this->db->where('pesanan.ID_PENYEWA = penyewa.ID_PENYEWA');
        $this->db->where('penyewa.ID_USER = user.ID_USER');
        $this->db->where('user.ID_USER',$id_user);
        $this->db->where('mobil.ID_MOBIL',$id_mobil);
        $query = $this->db->get();
        return $query;
    }

    function deletePesanan($kode_pesanan){
        $this->db->where('KODE_PEMESANAN', $kode_pesanan);
		$this->db->delete('pesanan');
    }
}