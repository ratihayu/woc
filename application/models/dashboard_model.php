<?php

class Dashboard_model extends CI_Model
{
	public function getStatsUnclosed()
 	{
 		$q = "SELECT COUNT(ID_INCIDENT) as JML_OPENTICKET FROM TICKET WHERE STATUS = 'OPEN'";
        $query = $this->db->query($q);

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
 	}

    public function getStatsClosed()
    {
        $q = "SELECT COUNT(ID_INCIDENT) as JML_CLOSEDTICKET FROM TICKET WHERE STATUS = 'CLOSED'";
        $query = $this->db->query($q);

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
    }
        public function getStatsPending()
    {
        $q = "SELECT COUNT(ID_INCIDENT) as JML_PENDINGTICKET FROM TICKET WHERE STATUS = 'PENDING'";
        $query = $this->db->query($q);

        if ($query->num_rows() > 0)
        {
            return $query->result_array();
        }
        else
        {
            return 0;
        }
    }
}