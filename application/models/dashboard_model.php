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
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_CLOSEDTICKET FROM TICKET WHERE STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%'";
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
	public function getStatsClosedall()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_CLOSEDTICKETALL FROM TICKET WHERE STATUS = 'CLOSED'";
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
	public function getStatsmea()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_MEA FROM TICKET WHERE STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND (WORKZONE = 'MGE' OR WORKZONE = 'MTY')";
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
	public function getStatskbm()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_KBM FROM TICKET WHERE STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND (WORKZONE = 'KBM' OR WORKZONE = 'GOM' OR WORKZONE = 'KAK' OR WORKZONE = 'KTW')";
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
	public function getStatstem()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_TEM FROM TICKET WHERE STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND (WORKZONE = 'TEM' OR WORKZONE = 'PRN')";
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
	public function getStatsmun()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_MUN FROM TICKET WHERE STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND (WORKZONE = 'MUN' OR WORKZONE = 'SWT')";
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
	public function getStatspwr()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_PWR FROM TICKET WHERE STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND (WORKZONE = 'PWJ' OR WORKZONE = 'KTA')";
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
	public function getStatswos()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_WOS FROM TICKET WHERE STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND WORKZONE = 'WOS'";
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
	public function getStatsmeaopen()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_MEA_OPEN FROM TICKET WHERE STATUS = 'OPEN' AND (WORKZONE = 'MGE' OR WORKZONE = 'MTY')";
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
	public function getStatsmunopen()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_MUN_OPEN FROM TICKET WHERE STATUS = 'OPEN' AND (WORKZONE = 'MUN' OR WORKZONE = 'SWT')";
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
	public function getStatstemopen()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_TEM_OPEN FROM TICKET WHERE STATUS = 'OPEN' AND (WORKZONE = 'TEM' OR WORKZONE = 'PRN')";
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
	public function getStatspwropen()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_PWR_OPEN FROM TICKET WHERE STATUS = 'OPEN' AND (WORKZONE = 'PWJ' OR WORKZONE = 'KTA')";
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
	public function getStatskbmopen()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_KBM_OPEN FROM TICKET WHERE STATUS = 'OPEN' AND (WORKZONE = 'KBM' OR WORKZONE = 'KAK' OR WORKZONE = 'GOM' OR WORKZONE = 'KTW')";
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
	public function getStatswosopen()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_WOS_OPEN FROM TICKET WHERE STATUS = 'OPEN' AND WORKZONE = 'WOS'";
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
	public function getStatsmeapending()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_MEA_PENDING FROM TICKET WHERE STATUS = 'PENDING' AND (WORKZONE = 'MGE' OR WORKZONE = 'MTY')";
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
	public function getStatsmunpending()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_MUN_PENDING FROM TICKET WHERE STATUS = 'PENDING' AND (WORKZONE = 'MUN' OR WORKZONE = 'SWT')";
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
	public function getStatstempending()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_TEM_PENDING FROM TICKET WHERE STATUS = 'PENDING' AND (WORKZONE = 'TEM' OR WORKZONE = 'PRN')";
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
	public function getStatspwrpending()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_PWR_PENDING FROM TICKET WHERE STATUS = 'PENDING' AND (WORKZONE = 'PWJ' OR WORKZONE = 'KTA')";
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
	public function getStatskbmpending()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_KBM_PENDING FROM TICKET WHERE STATUS = 'PENDING' AND (WORKZONE = 'KBM' OR WORKZONE = 'KAK' OR WORKZONE = 'GOM' OR WORKZONE = 'KTW')";
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
	public function getStatswospending()
    {
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT COUNT(ID_INCIDENT) as JML_WOS_PENDING FROM TICKET WHERE STATUS = 'PENDING' AND WORKZONE = 'WOS'";
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