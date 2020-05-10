<?php
class m_rental extends CI_Model  {

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

    //update detail rental
    function updateRental($data, $id){
        $this->db->where('ID_RENTAL', $id);
		$this->db->update('rental', $data);
    }

    function tambahPemilik($data){
        // $this->db->insert('pemilik', $data);
        $sql=$this->db->query("INSERT INTO `pemilik`(`ID_USER`) VALUES ('$data')");
        return $sql;
    }

    function getIdPemilik($ID_USER){
        $this->db->select('pemilik.ID_PEMILIK');
        $this->db->from('pemilik');
        $this->db->where('ID_USER',$ID_USER);
        $query = $this->db->get();
        return $query;
    }

    function tambahRental($data){
        $this->db->insert('rental',$data);
    }

    function getKota($id_user){
        $this->db->select('kab_kota.kota');
        $this->db->from('kab_kota, rental, pemilik, user');
        $this->db->where('kab_kota.id_kab = rental.ID_KOTA');
        $this->db->where('rental.ID_PEMILIK = pemilik.ID_PEMILIK');
        $this->db->where('pemilik.ID_USER = user.ID_USER');
        $this->db->where('user.ID_USER',$id_user);
        $query = $this->db->get();
        return $query;
    }

    function searchKota($postData){
        $response = array();

        $this->db->select('*');
        if($postData['search'] ){
            $this->db->where("kota like '%".$postData['search']."%' ");
            $this->db->limit(5);
            
            $records = $this->db->get('kab_kota')->result();
      
            foreach($records as $row ){
                $response[] = array(
                  "value"=>$row->id_kab,
                  "label"=>$row->kota
                );
            }
       
          }


        return $response;
    }

}