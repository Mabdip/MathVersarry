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

	public function data_rank()
	{
		$this->load->model('rankm');
		         
            $data = [
                'nisn'              => $this->post('nisn'),
                'nama'         	    => $this->post('nama'),
                'asal_sekolah'      => $this->post('asal'),
                'tempat_lahir'      => $this->post('tempat'),
                'tgl_lahir'         => $this->post('tanggal'),
                'jk'                => $this->post('jk'),
                'no_hp'             => $this->post('nohp'),
                'bukti'             => $this->post('bukti')
            ];
            $this->rankm->insert($data);
            $this->msg('Register telah Sukses');
            redirect('register/rank','refresh');
            exit();
        
                        
        $this->data['title']    = 'Rank';
        $this->data['content']  = 'register/data_rank';
        $this->template('homepage',$this->data);

	}

	public function akustik()
	{
		$this->data['title']   = "Register";
        $this->data['content'] = 'homepage/akustik';
        $this->template('homepage',$this->data); 
	}

	public function data_akustik()
	{
		$this->load->model('akustikm');
		         
            $data = [
                'nisn'              => $this->post('nisn'),
                'nama'         	    => $this->post('nama'),
                'asal_sekolah'      => $this->post('asal'),
                'tempat_lahir'      => $this->post('tempat'),
                'tanggal_lahir'     => $this->post('tanggal'),
                'jenis_kelamin'     => $this->post('jk'),
                'no_hp'             => $this->post('nohp'),
                'bukti'             => $this->post('bukti')
            ];
            $this->akustikm->insert($data);
            $this->msg('Register telah Sukses');
            redirect('register/rank','refresh');
            exit();
        
                        
        $this->data['title']    = 'Rank';
        $this->data['content']  = 'register/data_rank';
        $this->template('homepage',$this->data);

	}

	public function spss()
	{
		$this->data['title']   = "Register";
        $this->data['content'] = 'homepage/spss';
        $this->template('homepage',$this->data); 
	}

		public function data_spss()
	{
		$this->load->model('sppsm');
		         
            $data = [
                'nama'         	    => $this->post('nama'),
                'fakultas'      	=> $this->post('fk'),
                'jurusan'           => $this->post('jurusan'),
                'angkatan'          => $this->post('angkatan'),
                'no_hp'             => $this->post('nohp'),
                'jadwal'            => $this->post('jadwal')
               
            ];
            $this->sppsm->insert($data);
            $this->msg('Selamat anda telah terdaftar di website ini.');
            redirect('register/rank','refresh');
            exit();
        
                        
        $this->data['title']    = 'SPSS';
        $this->data['content']  = 'register/data_spss';
        $this->template('homepage',$this->data);

	}
}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */