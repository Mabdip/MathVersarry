<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoOlim extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		
		$this->data['title'] = "Olimpiade";
		$this->data['content'] = 'homepage/infoOlimp';
		$this->template('homepage', $this->data);
	
	}

}

/* End of file InfoOlim.php */
/* Location: ./application/controllers/InfoOlim.php */