<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function index()
	{
	
        $this->data['title']   = "Register";
        $this->data['content'] = 'homepage/register';
        $this->template('homepage',$this->data); 
    
	}
	public function rank()
	{
	
        $this->data['title']   = "Register";
        $this->data['content'] = 'homepage/rank';
        $this->template('homepage',$this->data); 
    
	}
}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */