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
        $this->data['content'] = 'login/login';
        $this->template('login',$this->data);   
    }

    public function aksi_login()
    {
        $this->load->model('loginm');
        $username = $this->post('username');
        $password = $this->post('password');
        $cek_auth = $this->loginm->row([ 'username' => $username, 'password' => md5($password) ]);
        
        if($cek_auth)
        {
            $data_session = array(
                'username' => $cek_auth->username,
                'password' => $cek_auth->password,
                'level'     => $cek_auth->level
                );
 
            $this->session->set_userdata($data_session);
            if($cek_auth->level == 'admin' && $cek_auth > 0) 
            {
                redirect('admin','refresh');    
            } 
            
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