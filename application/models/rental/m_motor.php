<?php

class m_motor extends CI_Model{

    function show_motor($id_user){
        $this->db->select('motor.*');
        $this->db->from('motor, rental, pemilik, user');
        $this->db->where('motor.ID_RENTAL = rental.ID_RENTAL');
        $this->db->where('rental.ID_PEMILIK = pemilik.ID_PEMILIK');
        $this->db->where('pemilik.ID_USER = user.ID_USER');
        $this->db->where('user.ID_USER',$id_user);
        $query = $this->db->get();
        return $query;
    }

    public function getMotor($id){//get data by id
        $query=$this->db->query("SELECT motor.* FROM rental, motor where rental.ID_RENTAL = motor.ID_RENTAL");
        $query = $this->db->get_where('motor', array('ID_motor' => $id));
        return $query;
    }

    function deleteMotor($id){
        $this->db->where('ID_MOTOR', $id);
		$this->db->delete('motor');
    }

    function tambahMotor($data){//tambah motor
        $this->db->insert('motor', $data);
    }

    function updateMotor($data, $id){
        $this->db->where('ID_MOTOR', $id);
		$this->db->update('motor', $data);
    }

    function ambilId($id_motor, $id_rental){
        $this->db->select('*');
        $this->db->from('motor, rental, pesanan, penyewa, user');
        $this->db->where('rental.ID_RENTAL = motor.ID_RENTAL');
        $this->db->where('pesanan.ID_MOTOR = motor.ID_MOTOR');
        $this->db->where('pesanan.ID_PENYEWA = penyewa.ID_PENYEWA');
        $this->db->where('penyewa.ID_USER = user.ID_USER');
        $this->db->where('motor.ID_MOTOR',$id_motor);
        $this->db->where('rental.ID_RENTAL',$id_rental);
        $query = $this->db->get();
        return $query;
    }
}