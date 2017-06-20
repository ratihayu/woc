<?php

class Teknisi_model extends CI_Model{
	public function checkTeknisi($user_id){
        $query = $this->db->get_where('TEKNISI', array('user_id' => $user_id));

        if($query->num_rows() > 0) {
            return false;
        }
        else return true;
    }

	public function addTeknisi($user_id,$username,$first_name){
		$sql = "INSERT INTO TEKNISI (USER_ID, USERNAME, NAMA_TEKNISI) VALUES ('$user_id','$username','$first_name')";
		return $this->db->query($sql);
	}
}