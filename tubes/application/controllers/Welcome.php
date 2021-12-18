<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model('M_lapor');
	}
	public function index()
	{
		$data = $this->M_lapor->getLapor();
		$record = array('data_lapor' => $data);
		$this->load->view('welcome_message', $record);
	}
	public function buat_laporan()
	{
		$this->load->view('buat_laporan');
	}
	public function base_url()
	{
		$this->load->helper('url');
	}
	
	public function detail_laporan($id)
	{
		$data_id = $this->M_lapor->information($id);
		$DATA = array('isi_laporan' => $data_id[0]);
		$this->load->view('detail_laporan',$DATA); 
	}
	public function aksi_insert(){
		$isi = $this->input->post('isi');
		$file = $this->input->post('file');
		$aspek = $this->input->post('aspek');
		$data_insert= array(
			'isi' => $isi,
			'file' => $file,
			'aspek' => $aspek,
		);
		$this->M_lapor->insert_data($data_insert);
		redirect (base_url('Welcome'));
	}
	
	public function edit_laporan($id){
		$data_lapor = $this->M_lapor->get_lapor($id);
		$data = array('data_lapor' => $data_lapor);
		$this->load->view('edit_laporan', $data);
	}

	public function aksi_edit(){
		$id = $this->input->post('id');
		$isi = $this->input->post('isi');
		$file = $this->input->post('file');
		$aspek = $this->input->post('aspek');
		$data_edit= array(
			'isi' => $isi,
			'file' => $file,
			'aspek' => $aspek,
		);
		$this->M_lapor->edit_data($data_edit, $id);
		redirect (base_url('Welcome/detail_laporan/'.$id));
	}

	public function aksi_delete($id){
		$this->M_lapor->delete_data($id);
		redirect(base_url());
	}

}
