<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends MY_Model {

	public function cek($username,$password)
   	{
   		$query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
   	}
    
    
}

/* End of file M_data.php */
/* Location: ./application/models/M_data.php */