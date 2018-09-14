<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

		public function __construct()
    {
        parent::__construct();     
        if($this->session->userdata('level') != "admin")   {
        	redirect("login",'refresh');
        }
        
    }

	public function index()
	{
		$this->data['title']   = "Welcome";
        $this->data['content'] = 'admin/main';
        $this->template('admin',$this->data); 
	}

    public function isi_soal()
    {
        $this->load->model('soal_m');

        if($this->post('submit'))
        {
            $data = [
                'id_soal'       => $this->post('id_soal'),
                'pertanyaan'    => $this->post('pertanyaan'),
                'pilihan_a'     => $this->post('pilihan_a'),
                'pilihan_b'     => $this->post('pilihan_b'),
                'pilihan_c'     => $this->post('pilihan_c'),
                'pilihan_d'     => $this->post('pilihan_d'),
                'jawaban'       => $this->post('jawaban')
            ];
            $this->soal_m->insert($data);
            $this->msg('Isi Soal telah sukses');
            redirect('admin/isi_soal','refresh');
            exit();
        }
        $this->data['title']   = 'Isi Soal';
        $this->data['content'] = 'admin/isi_soal';
        $this->template('admin',$this->data);
    }

    public function data_soal()
    {
        $this->load->model('soal_m');

        $del = $this->uri->segment(3);
        if(isset($del) && $del=='delete') 
        {
            $id = $this->uri->segment(4);
            $this->soal_m->delete($id);
            $this->msg('Delete data Sukses');
            redirect('admin/data_soal','refresh');
            exit();
        }


        if($this->post('submit'))
        {            
            $data = [
                'id_soal'       => $this->post('id_soal'),
                'pertanyaan'    => $this->post('pertanyaan'),
                'pilihan_a'     => $this->post('pilihan_a'),
                'pilihan_b'     => $this->post('pilihan_b'),
                'pilihan_c'     => $this->post('pilihan_c'),
                'pilihan_d'     => $this->post('pilihan_d'),
                'jawaban'       => $this->post('jawaban')
            ];
            $this->soal_m->insert($data);
            $this->msg('Tambah Data Sukses');
            redirect('admin/data_soal','refresh');
            exit();
        }
        
        $this->data['soal']  = $this->soal_m->get();
        $this->data['title']    = 'Data Soal';
        $this->data['content']  = 'admin/data_soal';
        $this->template('admin',$this->data);
    }

    public function edit_soal()
    {
        $this->load->model('soal_m');

        $id = $this->uri->segment(3);
        if(!isset($id))
        {
            redirect('admin/data_soal','refresh');
            exit();
        }

        if($this->post('edit'))
        {
            $data = [                   
                'id_soal'       => $this->post('id_soal'),
                'pertanyaan'    => $this->post('pertanyaan'),
                'pilihan_a'     => $this->post('pilihan_a'),
                'pilihan_b'     => $this->post('pilihan_b'),
                'pilihan_c'     => $this->post('pilihan_c'),
                'pilihan_d'     => $this->post('pilihan_d'),
                'jawaban'       => $this->post('jawaban')
            ];
            $this->soal_m->update($id,$data);
            $this->msg('Edit Data Sukses');
            redirect('admin/data_soal','refresh');
            exit();
        }
        
        $this->data['soal']= $this->soal_m->cek_nim($id);
        $this->data['title']    = 'Edit Data Mahasiswa';
        $this->data['content']  = 'admin/edit-mahasiswa';
        $this->template('admin',$this->data);
    }
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */