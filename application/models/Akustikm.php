<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akustikm extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'akustik';
		$this->data['primary_key'] = 'nisn';
	}


}

/* End of file Akustikm.php */
/* Location: ./application/models/Akustikm.php */