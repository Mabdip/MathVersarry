<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

		public function __construct()
    {
        parent::__construct();        
        
    }

	public function index()
	{
		$this->data['title']   = "Welcome";
        $this->data['content'] = 'admin/main';
        $this->template('admin',$this->data); 
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */