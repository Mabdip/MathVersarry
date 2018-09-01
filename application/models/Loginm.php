<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginm extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'user';
		$this->data['primary_key'] = 'username';
	}

	
	

}

/* End of file  Login.php */
/* Location: ./application/models/ Login.php */