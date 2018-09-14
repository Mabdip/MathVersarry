<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userolim_m extends MY_Model {

		public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'user_olim';
		$this->data['primary_key'] = 'nisn';
	}

}

/* End of file Userolim_m.php */
/* Location: ./application/models/Userolim_m.php */