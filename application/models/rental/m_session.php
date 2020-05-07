<?php
class m_session extends CI_Model  {

    //read detail rental
    function rental($id_user){
        
        $this->db->select('rental.*');
        $this->db->from('rental, pemilik, user');
        $this->db->where('rental.ID_PEMILIK = pemilik.ID_PEMILIK');
        $this->db->where('pemilik.ID_USER = user.ID_USER');
        $this->db->where('user.ID_USER',$id_user);
        $query = $this->db->get();
        return $query;
    }

}