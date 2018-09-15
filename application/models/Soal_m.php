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
		$sql = $this->db->get($this->data['table_name']);
		return $sql->result();
	}

	public function selectSoal($id)
	{
		$this->db->where($this->data['primary_key'], $id);
		$q = $this->db->get($this->data['table_name']);
		return $q->row();
	}

}

/* End of file Soal_m.php */
/* Location: ./application/models/Soal_m.php */