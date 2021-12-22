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

	public function index(){
		$this->load->database();
		$jumlah_data = $this->M_lapor->jumlah_data();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/welcome/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;
		$config['full_tag_open'] = '<div class="pagination">';
    	$config['full_tag_close'] = '</div>';
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$this->db->order_by("id", "desc");
		$data['lapor'] = $this->M_lapor->data($config['per_page'],$from);
		
		$this->load->view('welcome_message',$data);
	}



	public function cari(){
			$keyword = $this->input->get('keyword');
			$data['lapor']=$this->M_lapor->cari_keyword($keyword);
			$data['keyword'] = $keyword;
			$this->load->view('cari',$data);
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
	
	public function edit_laporan($id){
		$data_lapor = $this->M_lapor->get_lapor($id);
		$data = array('data_lapor' => $data_lapor);
		$this->load->view('edit_laporan', $data);
	}

	public function aksi_delete($id){
		$this->M_lapor->delete_data($id);
		redirect(base_url());
	}
	
	public function tambah_aksi(){
	
		$isi = $this->input->post('isi');
		$aspek = $this->input->post('aspek');
		$file = $_FILES['file'];
		if ($file=''){}else{
			$config['upload_path'] = './files';
			$config['allowed_types'] = 'jpeg|jpg|png|gif|doc|docx|xls|xlxs|ppt|pptx|pdf';
			$this->load->library('upload');
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('file')){
				echo "Upload Gagal"; die();  
			}else{
				$file=$this->upload->data('file_name');
			}
		}
		$data= array(
			'isi' => $isi,
			'file' => $file,
			'aspek' => $aspek,
			
		);
		$this->M_lapor->insert_data($data);
		redirect('Welcome/index');
	}

	public function edit_aksi(){
		$id = $this->input->post('id');
		$isi = $this->input->post('isi');
		$aspek = $this->input->post('aspek');
		$file = $_FILES['file'];
		if ($file=''){}else{
			$config['upload_path'] = './files';
			$config['allowed_types'] = 'jpg|png|gif|doc|docx|xls|xlxs|ppt|pptx|pdf';
			$this->load->library('upload');
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('file')){
					$data= array(
					'isi' => $isi,
					'aspek' => $aspek,
					
					);
			}else{
				$file=$this->upload->data('file_name');
					$data= array(
					'isi' => $isi,
					'file' => $file,
					'aspek' => $aspek,
					
					);
			}
		}
		$this->M_lapor->edit_data($data, $id);
		redirect (base_url('Welcome/detail_laporan/'.$id));
	}

}
