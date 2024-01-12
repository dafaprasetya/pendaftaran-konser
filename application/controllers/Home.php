<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('modelkonser');
        $this->load->model('modeldaftar');

    }
    public function index() {
        $konser = $this->db->get('konser');
        $data = array(
            'konser' => $konser,
        );
        $this->load->view('home/index',$data);
    }
    public function tiket($tiketid) {
        $this->session->unset_userdata('terdaftar');
        $tiket = $this->db->get_where('daftar', array('tiketid'=>$tiketid));
        $konser = $this->db->get_where('konser', array('id'=>$tiket->row()->konserid));
        $data = array(
            'tiket' => $tiket->row(),
            'konser' => $konser->row()
        );
        $this->load->view('home/tiket',$data);
    }
    public function konser($id) {
        $detail = $this->db->get_where('konser', array('id'=>$id));
        if ($this->session->userdata('is_login')) {
            if ($this->input->server('REQUEST_METHOD') === 'POST') {
                $this->form_validation->set_rules('nama', 'nama', 'required');
                $this->form_validation->set_rules('email', 'email', 'required');
                $this->form_validation->set_rules('no_telp', 'no_telp', 'required');
                $this->form_validation->set_rules('cat', 'cat', 'required');
                if ($this->form_validation->run()) {
                    $nama = $this->input->post('nama');
                    $nomor_telp = $this->input->post('no_telp');
                    $email = $this->input->post('email');
                    $cat = $this->input->post('cat');
                    $konserid = $detail->row()->id;
                    $harga = $detail->row()->$cat;
                    $tiketid = str_replace(' ','',strtoupper(substr($nama,0,2).substr($email,rand(1,3),rand(0,2)).substr($nomor_telp,rand(2,3),rand(1,2)).rand(1000,2000).substr($cat,0,3)));
                    $this->modeldaftar->tambahdaftar($nama, $nomor_telp, $email, $cat, $konserid, $harga, $tiketid);
                    
                    $this->session->set_userdata('terdaftar', $tiketid);
                    redirect('home');
                }else {
                    $this->session->set_flashdata('failed', 'Failed');
                    redirect('home/konser/'.$id);
                }
            }
		}
        
        $data = array(
            'konser' => $detail->row(),
        );
        $this->load->view('home/konser', $data);
    }

}