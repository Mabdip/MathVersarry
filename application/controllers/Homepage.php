<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends MY_Controller {

	public function __construct()
    {
        parent::__construct();        
        
    }

	public function index()
	{
        $this->data['title']   = "Welcome";
        $this->data['content'] = 'homepage/awal';
        $this->template('homepage',$this->data); 
	}

}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */