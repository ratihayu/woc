<?php

class Ticket_model extends CI_Model
{
	public function showAllTicket()
 	{	
 		$query = $this->db->get('ticket');

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

 	public function showUnclosedTicket(){
        $q = "SELECT * FROM TICKET WHERE STATUS = 'OPEN'";
        $query = $this->db->query($q);

        if ($query -> num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            return $data;
        }
        else
        {
            return false;   
        }
    }    

    public function showClosedTicket(){
        $q = "SELECT * FROM TICKET WHERE STATUS = 'CLOSED'";
        $query = $this->db->query($q);

        if ($query -> num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            return $data;
        }
        else
        {
            return false;   
        }
    }   

    public function showPendingTicket(){
        $q = "SELECT * FROM TICKET WHERE STATUS = 'PENDING'";
        $query = $this->db->query($q);

        if ($query -> num_rows() > 0)
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
            return $data;
        }
        else
        {
            return false;   
        }
    }   

    public function edit($id) {
    	$query = $this->db->get_where('ticket', array('id_incident' => $id));
    	if ($query->num_rows() > 0) 
        {
            return $query->result_array();
        }
        else 
        {
            return FALSE;
        }
    }

    public function update($id, $closed_date, $closed_by, $hd, $status, $keterangan_closed, $keterangan_pending){
    	$sql = "UPDATE TICKET SET CLOSED_DATE='$closed_date', CLOSED_BY='$closed_by', HD='$hd', STATUS='$status', KETERANGAN_CLOSED='$keterangan_closed', KETERANGAN_PENDING='$keterangan_pending'";

    	return $this->db->query($sql);
	}

    public function addTicketByFile($id_incident,$customer_name,$summary,$alpro,$report_date,$priority,$ttr_segment,$closed_date,$closed_by,$actual_solution,$keterangan_kendala,$workzone,$no_service,$datek)
    {
        $sql = "INSERT into TICKET (id_incident,customer_name,summary,alpro,report_date,priority,ttr_segment,closed_date,closed_by,actual_solution,keterangan_kendala,workzone,no_service,datek)values('$id_incident', '$customer_name', '$summary', '$alpro', '$report_date', '$priority', '$ttr_segment', '$closed_date', '$closed_by', '$actual_solution', 'keterangan_kendala', '$workzone', '$no_service','$datek')";
        return $this->db->query($sql);
    }

    public function checkPrimary($id_incident){
        $query = $this->db->get_where('TICKET', array('id_incident' => $id_incident));

        if($query->num_rows() > 0) {
            return false;
        }
        else return true;
    }
}