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
		$this->load->model('nilai_m');
		$data['data'] = $this->soal_m->getSoal();
		$this->data['nilai'] = $this->nilai_m->get();
		// echo '<pre>';
		// var_dump($data['data']); 
		// echo '</pre>'; exit();
		$this->load->view('homepage/ujian', $data);

	}

	public function validasi_jawaban()
	{
		$this->load->model('nilai_m');
		if(isset($_POST)) {			
			$benar=0;
			$kosong=0;
			$salah=0;			
			$jawaban = $this->input->post('pilihan[]');
			foreach ($jawaban as $key => $value) {
				$kunci = $this->soal_m->selectSoal($key);
				if($value==$kunci->jawaban) {
					$benar++;
					$benar *= 5;
				} else if($value==null) {
					$kosong++;
				} else {
					$salah++;
				}
			}

			$point = $benar*2+$salah*-1;
			$hasil = [
                'nisn'    		=> $this->session->userdata('nisn'),
                'benar'     	=> $benar,
                'salah'    	 	=> $salah,
                'kosong'     	=> $kosong,
                'point'     	=> $point,
                'tanggal'       => date(d-m-Y)
            ];            
            $this->nilai_m->insert($hasil);
			
		}
		

	}
	 

	

}

/* End of file Ujian.php */
/* Location: ./application/controllers/Ujian.php */