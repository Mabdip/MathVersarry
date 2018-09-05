<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sppsm extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'spss';
		$this->data['primary_key'] = 'nama';
	}


}

/* End of file sppsm.php */
/* Location: ./application/models/sppsm.php */