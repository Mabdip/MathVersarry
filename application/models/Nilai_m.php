<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_m extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'nilai';
		$this->data['primary_key'] = 'id_nilai';
	}

}

/* End of file Nilai_m.php */
/* Location: ./application/models/Nilai_m.php */