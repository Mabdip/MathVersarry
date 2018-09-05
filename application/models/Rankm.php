<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankm extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'rank1';
		$this->data['primary_key'] = 'nisn';
	}

}

/* End of file rankm.php */
/* Location: ./application/models/rankm.php */