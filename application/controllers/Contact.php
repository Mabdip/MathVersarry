<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function index()
	{
		$this->data['title'] = "Contact Us";
		$this->data['content'] = 'homepage/contact';
		$this->template('homepage', $this->data);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */