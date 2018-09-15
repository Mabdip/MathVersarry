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
		// echo '<pre>';
		// var_dump($data['data']); 
		// echo '</pre>'; exit();
		$this->load->view('homepage/ujian', $data);

	}

	public function validasi_jawaban()
	{
		if(isset($_POST)) {
			$benar=0;
			$kosong=0;
			$salah=0;			
			$jawaban = $this->input->post('pilihan[]');
			foreach ($jawaban as $key => $value) {
				$kunci = $this->soal_m->selectSoal($key);
				if($value==$kunci->jawaban) {
					$benar++;
				} else if($value==null) {
					$kosong++;
				} else {
					$salah++;
				}
			}
			
		}
		

	}
	 

	

}

/* End of file Ujian.php */
/* Location: ./application/controllers/Ujian.php */