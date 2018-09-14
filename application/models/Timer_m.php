<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timer_m extends MY_Model {

	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'timer';
		$this->data['primary_key'] = 'id';
	}

public function cek_id($id)
    {
    	$this->db->where('id_timer',$id);
    	return $this->db->get($this->data['table_name'])->row();
    }

}

/* End of file timer_m.php */
/* Location: ./application/models/timer_m.php */