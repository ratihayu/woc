<?php

class Akun extends CI_Model
{
	public function login($username, $password)
	{

		$result = $this->db->get_where('akun',
			array
			(
				'username' => $username,
				'password' => $password
			)
		);

		if ($result->num_rows() > 0)
		{
			return TRUE;
		}

		else
		{
			return FALSE;
		}

	}

	public function get_name($username){
		$q = $this->db->get_where('akun', array('username' => $username));
		return $q->row()->NAMA_LENGKAP;
	}

	public function get_otoritas($username){
		$q = $this->db->get_where('akun', array('username' => $username));
		return $q->row()->OTORITAS;
	}
	
	public function tambahUser($username, $data){
		$result = $this->db->get_where('akun',
			array
			(
				'username' => $username
			)
		);

		if ($result->num_rows() > 0)
		{
			return FALSE;
		}
		else
		{
			$this->db->insert('akun', $data); 
			return TRUE;
		}
	}

	public function getListUser()
 	{	
 		$query = $this->db->get('akun');

		if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        else{
        	return false;	
        }
 	}

    public function edit($id) {
    	$query = $this->db->get_where('akun', array('id_akun' => $id));
    	if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        }
        else 
        {
            return FALSE;
        }
    }

    public function delete($id)
	{
		$this->db->delete('akun', array('id_akun' => $id));
	}

    public function update($id, $username, $data){
    	$q = $this->db->get_where('akun', array('id_akun' => $id));
		$user =  $q->row()->USERNAME;
		$result = $this->db->get_where('akun', array('username' => $username));

		if ($result->num_rows() > 0){
			if ($username != $user){
				return FALSE;
			}
		}
		$this->db->where('id_akun', $id);
		$this->db->update('akun', $data); 
		return TRUE;
			
	}
}