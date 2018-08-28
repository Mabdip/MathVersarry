<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['title']   = "About";
        $this->data['content'] = 'homepage/about';
        $this->template('homepage',$this->data); 
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */