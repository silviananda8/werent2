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

    function getMobil($id_user){
        $this->db->select('pesanan.*, mobil.*, rental.*');
        $this->db->from('pesanan, user, mobil, rental');
        $this->db->where('pesanan.ID_Mobil = mobil.ID_MOBIL');
        $this->db->where('mobil.ID_RENTAL = rental.ID_RENTAL');
        $this->db->where('pesanan.ID_USER = user.ID_USER');
        $this->db->where('user.ID_USER',$id_user);
        $query = $this->db->get();
        return $query;
    }

    function getMotor($id_user){
        $this->db->select('pesanan.*, motor.*, rental.*');
        $this->db->from('pesanan, user, motor, rental');
        $this->db->where('pesanan.ID_MOTOR = motor.ID_MOTOR');
        $this->db->where('motor.ID_RENTAL = rental.ID_RENTAL');
        $this->db->where('pesanan.ID_USER = user.ID_USER');
        $this->db->where('user.ID_USER',$id_user);
        $query = $this->db->get();
        return $query;
    }

    function getDetailMobil($id_user,$id_pesan){
        $this->db->select('pesanan.*, mobil.*, rental.*');
        $this->db->from('pesanan, user, mobil, rental');
        $this->db->where('pesanan.ID_Mobil = mobil.ID_MOBIL');
        $this->db->where('mobil.ID_RENTAL = rental.ID_RENTAL');
        $this->db->where('pesanan.ID_USER = user.ID_USER');
        $this->db->where('user.ID_USER',$id_user);
        $this->db->where('pesanan.ID_PESAN',$id_pesan);
        $query = $this->db->get();
        return $query;
    }

    function getDetailMotor($id_user,$id_pesan){
        $this->db->select('pesanan.*, motor.*, rental.*');
        $this->db->from('pesanan, user, motor, rental');
        $this->db->where('pesanan.ID_MOTOR = motor.ID_MOTOR');
        $this->db->where('motor.ID_RENTAL = rental.ID_RENTAL');
        $this->db->where('pesanan.ID_USER = user.ID_USER');
        $this->db->where('user.ID_USER',$id_user);
        $this->db->where('pesanan.ID_PESAN',$id_pesan);
        $query = $this->db->get();
        return $query;
    }

    function deletePesanan($kode_pesanan){
        $this->db->where('KODE_PEMESANAN', $kode_pesanan);
		$this->db->delete('pesanan');
    }
}