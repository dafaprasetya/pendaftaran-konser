<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		$this->load->model('modelkonser');
		if ($this->session->userdata('role') == 'admin') {
			return TRUE;
		}
		else {
			redirect('auth');
		}
    }
	public function index()
	{
        // $data['judul'] = "ADMIN";
		$konser = $this->db->get('konser');
		$data = array(
			'judul' => 'ADMIN',
			'konser' => $konser,
		);
		
		$this->load->view('admin/index', $data);
	}
	public function terdaftar()
	{
        // $data['judul'] = "ADMIN";
		$daftar = $this->db->get('daftar');
		// $query = $this->db->get_where('konser', $daftar->result()->konserid);
		$data = array(
			'judul' => 'ADMIN',
			'terdaftar' => $daftar,
		);
		
		$this->load->view('admin/terdaftar', $data);
	}
	public function hapuskonser($id) {
		$this->modelkonser->deletekonser($id);
		redirect('admin');
	}
	public function editkonser($id) {
		$detail = $this->db->get_where('konser', array('id'=>$id));
		$data = array(
            'konser' => $detail->row(),
        );
		$this->load->view('admin/editkonser', $data);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->form_validation->set_rules('nama','nama','required');
			$this->form_validation->set_rules('tanggal','tanggal','required');
			$this->form_validation->set_rules('lokasi','lokasi','required');
			$this->form_validation->set_rules('platinum','platinum','required');
			$this->form_validation->set_rules('qt_platinum','qt_platinum','required');
			$this->form_validation->set_rules('silver','silver','required');
			$this->form_validation->set_rules('qt_silver','qt_silver','required');
			$this->form_validation->set_rules('bronze','bronze','required');
			$this->form_validation->set_rules('qt_bronze','qt_bronze','required');
			$this->form_validation->set_rules('keterangan','keterangan','required');
			if ($this->form_validation->run()) {
				$nama = $this->input->post('nama');
				$tanggal = $this->input->post('tanggal');
				$lokasi = $this->input->post('lokasi');
				$platinum = $this->input->post('platinum');
				$qt_platinum = $this->input->post('qt_platinum');
				$silver = $this->input->post('silver');
				$qt_silver = $this->input->post('qt_silver');
				$bronze = $this->input->post('bronze');
				$qt_bronze = $this->input->post('qt_bronze');
				$keterangan = $this->input->post('keterangan');
				$config['upload_path'] = APPPATH.'../assets/gambarkonser';
				$config['allowed_types'] = 'jpg|png';
				$config['file_name'] = $this->input->post('nama').rand(0,1000);
				$this->load->library('upload', $config);
				$this->upload->do_upload('gambar');
				$gambar = 'assets/gambarkonser/'.$this->upload->data()['file_name'];
				$this->modelkonser->updatekonser($nama, $tanggal,$lokasi, $platinum, $qt_platinum, $silver, $qt_silver, $bronze, $qt_bronze, $keterangan, $gambar, $id);
				redirect('admin');
			}
		}
		
	}
    public function tambahkonser() {
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->form_validation->set_rules('nama','nama','required');
			$this->form_validation->set_rules('tanggal','tanggal','required');
			$this->form_validation->set_rules('lokasi','lokasi','required');
			$this->form_validation->set_rules('platinum','platinum','required');
			$this->form_validation->set_rules('qt_platinum','qt_platinum','required');
			$this->form_validation->set_rules('silver','silver','required');
			$this->form_validation->set_rules('qt_silver','qt_silver','required');
			$this->form_validation->set_rules('bronze','bronze','required');
			$this->form_validation->set_rules('qt_bronze','qt_bronze','required');
			$this->form_validation->set_rules('keterangan','keterangan','required');
			if ($this->form_validation->run()) {
				$nama = $this->input->post('nama');
				$tanggal = $this->input->post('tanggal');
				$lokasi = $this->input->post('lokasi');
				$platinum = $this->input->post('platinum');
				$qt_platinum = $this->input->post('qt_platinum');
				$silver = $this->input->post('silver');
				$qt_silver = $this->input->post('qt_silver');
				$bronze = $this->input->post('bronze');
				$qt_bronze = $this->input->post('qt_bronze');
				$keterangan = $this->input->post('keterangan');
				$config['upload_path'] = APPPATH.'../assets/gambarkonser';
				$config['allowed_types'] = 'jpg|png';
				$config['file_name'] = $this->input->post('nama').rand(0,1000);
				$this->load->library('upload', $config);
				$this->upload->do_upload('gambar');
				$gambar = 'assets/gambarkonser/'.$this->upload->data()['file_name'];
				$this->modelkonser->tambahkonser($nama, $tanggal,$lokasi, $platinum, $qt_platinum, $silver, $qt_silver, $bronze, $qt_bronze, $keterangan, $gambar);
				redirect('admin');
			}
			else {
				redirect('admin/tambahkonser');
			}
		}
        $this->load->view('admin/tambahkonser');
    }

}
