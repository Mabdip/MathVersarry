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

    public function contact()
    {
        $this->data['title'] = "Contact Us";
        $this->data['content'] = 'homepage/contact';
        $this->template('homepage', $this->data);
    }

    public function about()
    {
        $this->data['title']   = "About";
        $this->data['content'] = 'homepage/about';
        $this->template('homepage',$this->data); 
    }

    public function seminar()
    {
        $this->data['title'] = "Seminar";
        $this->data['content'] = 'homepage/infoSeminar';
        $this->template('homepage', $this->data);
    }

    public function olim()
    {
        $this->data['title'] = "Olimpiade";
        $this->data['content'] = 'homepage/infoOlimp';
        $this->template('homepage', $this->data);
    }

    public function spss()
    {
        $this->data['title'] = "SPSS";
        $this->data['content'] = 'homepage/infospss';
        $this->template('homepage', $this->data);
    }

    public function rank()
    {
        $this->data['title'] = "Rank";
        $this->data['content'] = 'homepage/inforank';
        $this->template('homepage', $this->data);
    }

    public function login_olim()
    {
        $this->data['title'] = "Login";
        $this->data['content'] = 'homepage/login';
        $this->template('homepage', $this->data);
    }

    public function auth()
    {
        $this->load->model('userolim_m');
        $nisn = $this->post('nisn');
        $password = $this->post('password');
        $cek_auth = $this->userolim_m->row([ 'nisn' => $nisn, 'password' => md5($password) ]);
        
        if($cek_auth)
        {
            $data_session = array(
                'nisn' => $cek_auth->nisn,
                'password' => $cek_auth->password
                );
 
            $this->session->set_userdata($data_session);
            redirect('homepage','refresh');
 
        } else {
            $this->msg('Maaf Username atau Password Anda Salah !', 'danger');
            redirect('homepage/login_olim','refresh');
            exit();
        }
    }

}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */