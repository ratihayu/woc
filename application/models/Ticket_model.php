<?php

class Ticket_model extends CI_Model
{
    public function showAllTicket()
    {   
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN";
        $query = $this->db->query($q);

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
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'OPEN'";
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
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%'";
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
	public function showClosedallTicket(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'CLOSED'";
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
public function showClosedTicketmea(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND (WORKZONE = 'MGE' OR WORKZONE = 'MTY')";
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
	public function showClosedTicketkbm(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND (WORKZONE = 'KBM' OR WORKZONE = 'GOM' OR WORKZONE = 'KAK' OR WORKZONE = 'KTW')";
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
	public function showClosedTickettem(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND (WORKZONE = 'TEM' OR WORKZONE = 'PRN')";
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
	public function showClosedTicketmun(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND (WORKZONE = 'MUN' OR WORKZONE = 'SWT')";
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
	public function showClosedTicketpwr(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND (WORKZONE = 'PWJ' OR WORKZONE = 'KTA')";
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
	public function showClosedTicketwos(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'CLOSED' AND CLOSED_DATE like '$tanggalhariini%' AND WORKZONE = 'WOS' ";
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
	public function showopenTicketmea(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'OPEN' AND (WORKZONE = 'MGE' OR WORKZONE = 'MTY') ";
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
	public function showopenTicketmun(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'OPEN' AND (WORKZONE = 'MUN' OR WORKZONE = 'SWT') ";
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
	public function showopenTickettem(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'OPEN' AND (WORKZONE = 'TEM' OR WORKZONE = 'PRN') ";
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
	public function showopenTicketpwr(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'OPEN' AND (WORKZONE = 'PWJ' OR WORKZONE = 'KTA') ";
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
	public function showopenTicketkbm(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'OPEN' AND (WORKZONE = 'KBM' OR WORKZONE = 'KAK' OR WORKZONE = 'GOM' OR WORKZONE = 'KTW') ";
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
	public function showopenTicketwos(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'OPEN' AND WORKZONE = 'WOS'";
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
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'PENDING'";
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
public function showpendingTicketmea(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'PENDING' AND (WORKZONE = 'MGE' OR WORKZONE = 'MTY') ";
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
	public function showpendingTicketmun(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'PENDING' AND (WORKZONE = 'MUN' OR WORKZONE = 'SWT') ";
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
	public function showpendingTickettem(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'PENDING' AND (WORKZONE = 'TEM' OR WORKZONE = 'PRN') ";
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
	public function showpendingTicketpwr(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'PENDING' AND (WORKZONE = 'PWJ' OR WORKZONE = 'KTA') ";
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
	public function showpendingTicketkbm(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'PENDING' AND (WORKZONE = 'KBM' OR WORKZONE = 'KAK' OR WORKZONE = 'GOM' OR WORKZONE = 'KTW') ";
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
	public function showpendingTicketwos(){
		$tanggalhariini = date("Y-m-d");
        $q = "SELECT TICKET.ID_INCIDENT,TICKET.STATUS,TICKET.RECAP_DATE,TICKET.CUSTOMER_NAME,TICKET.SUMMARY,TICKET.ALPRO,TICKET.REPORT_DATE,TICKET.PRIORITY,TICKET.TTR_SEGMENT,TICKET.FILTER,TICKET.CLOSED_DATE,TEKNISI.NAMA_TEKNISI,AKUN.NAMA_LENGKAP,TICKET.ACTUAL_SOLUTION,TICKET.KETERANGAN_KENDALA,TICKET.WORKZONE,TICKET.NO_SERVICE,TICKET.DATEK,TICKET.TECHNICIAN_ASSIGNED,TICKET.KETERANGAN_CLOSED,TICKET.KETERANGAN_PENDING FROM TICKET LEFT OUTER JOIN TEKNISI ON TICKET.CLOSED_BY = TEKNISI.USER_ID LEFT OUTER JOIN AKUN ON TICKET.HD = AKUN.ID_AKUN WHERE TICKET.STATUS = 'PENDING' AND WORKZONE = 'WOS'";
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
    	$query = $this->db->get_where('TICKET', array('id_incident' => $id));
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
    	$sql = "UPDATE TICKET SET CLOSED_DATE='$closed_date', CLOSED_BY='$closed_by', FILTER='$hd', STATUS='$status', KETERANGAN_CLOSED='$keterangan_closed', KETERANGAN_PENDING='$keterangan_pending' WHERE ID_INCIDENT='$id'";

    	return $this->db->query($sql);
	}

    public function updateByHD($id,$status,$tech,$keterangan_closed,$keterangan_pending,$hd){
        $sql = "UPDATE TICKET SET STATUS='$status', TECHNICIAN_ASSIGNED='$tech', KETERANGAN_CLOSED='$keterangan_closed', KETERANGAN_PENDING='$keterangan_pending', HD='$hd' WHERE ID_INCIDENT='$id'";

        return $this->db->query($sql);
    }

    public function updateClosedByHD($id,$status,$keterangan_closed,$keterangan_pending,$hd,$tglclosed){
        $sql = "UPDATE TICKET SET STATUS='$status', KETERANGAN_CLOSED='$keterangan_closed', KETERANGAN_PENDING='$keterangan_pending', HD='$hd', CLOSED_DATE='$tglclosed', CLOSED_BY='1' WHERE ID_INCIDENT='$id'";

        return $this->db->query($sql);
    }

    public function addTicketByFile($id_incident,$customer_name,$summary,$alpro,$report_date,$priority,$ttr_segment,$closed_date,$closed_by,$actual_solution,$keterangan_kendala,$workzone,$no_service,$datek)
    {
        $sql = "INSERT into TICKET (id_incident,customer_name,summary,alpro,report_date,priority,ttr_segment,closed_date,closed_by,actual_solution,keterangan_kendala,workzone,no_service,datek)values('$id_incident', '$customer_name', '$summary', '$alpro', STR_TO_DATE('$report_date','%d-%m-%Y %T'), '$priority', '$ttr_segment', '$closed_date', '$closed_by', '$actual_solution', '$keterangan_kendala', '$workzone', '$no_service','$datek')";
        return $this->db->query($sql);
    }

    public function checkPrimary($id_incident){
        $query = $this->db->get_where('TICKET', array('id_incident' => $id_incident));

        if($query->num_rows() > 0) {
            return false;
        }
        else return true;
    }

    public function checkCommand($id_incident){
        $query = $this->db->get_where('TICKET', array('id_incident' => $id_incident));

        if($query->num_rows() > 0) {
            return true;
        }
        else return false;
    }

    public function insertLog($id_updates,$id_messages){
        $sql = "INSERT INTO LOG (UPDATE_ID, MESSAGE_ID) VALUES ($id_updates,$id_messages)";
        return $this->db->query($sql);
    }

    public function checkLog($id_updates){
        $query = $this->db->get_where('LOG', array('UPDATE_ID' => $id_updates));

        if($query->num_rows() > 0) {
            return false;
        }
        else return true;
    }
}