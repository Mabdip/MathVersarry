<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal_m extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'soal';
		$this->data['primary_key'] = 'id_soal';
	}
  
	public function getSoal()
	{
		$sql = 'SELECT * FROM soal';
		$a 	= $this->db->query($sql);
		return $a->row();
	}

}

/* End of file Soal_m.php */
/* Location: ./application/models/Soal_m.php */