<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_m');
	}
	public function index()
	{
		$this->data['title'] = "Seminar";
		$this->data['content'] = 'homepage/infoSeminar';
		$this->template('homepage', $this->data);
	}

	
}

/* End of file Regis.php */
/* Location: ./application/controllers/Regis.php */