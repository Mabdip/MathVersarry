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

}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */