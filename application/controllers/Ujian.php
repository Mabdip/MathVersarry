<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	
		if(!isset($_SESSION)) 
        { 
            session_start();
            
        }
        $this->load->model('soal_m');

	}

		public function index()
		{
			
			$data['data'] = $this->soal_m->getSoal();
    		$this->load->view('homepage/ujian', $data);

		}
	

	

}

/* End of file Ujian.php */
/* Location: ./application/controllers/Ujian.php */