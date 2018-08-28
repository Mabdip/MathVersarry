<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!isset($_SESSION)) 
        { 
            session_start(); 
        }
        
    }

    public function index()
    {
        $this->data['title']   = "Login";
        $this->data['content'] = 'admin/login';
        $this->template('login',$this->data);   
    }

    public function aksi_login()
    {
        $this->load->model('user_m');
        $username = $this->post('username');
        $password = $this->post('password');
        //echo $password.'+'.$username; exit();
        //$cek_auth = $this->m_data->cek($username,$password)->num_rows();
        $cek_auth = $this->user_m->get_where([ 'username' => $username, 'password' => $password ]);
        //print_r($cek_auth); exit();
        if($cek_auth)
        {
            $data_session = array(
                'username' => $username,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
            redirect('admin','refresh');
            exit();
 
        } else {
            $this->msg('Maaf Username atau Password Anda Salah !', 'danger');
            redirect('login','refresh');
            exit();
        }

    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */