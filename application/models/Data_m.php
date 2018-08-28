<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_m extends MY_Model {

	public function __construct()
	{
		parent::__construct();
	}
	public function insert_user($data)
	{
		$this->insert('seminar',$data);
	}

}

/* End of file Data_m.php */
/* Location: ./application/models/Data_m.php */