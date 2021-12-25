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
	
	public function index()
    	{
		$this->load->model('Process_model');
		$posts = $this->Process_model->get_posts();
		$data['posts'] = $posts;
		$this->load->view('home', $data);
    	}

	public function add()
	{
		$this->load->view('add_laporan');
	}

    	public function view_lapor($id)
	{   
		$this->load->model('Process_model');
		$posts = $this->Process_model->get_postsById($id);
		$data['posts'] = $posts;
		$this->load->view('view_laporan',$data);
	}

	public function create_process()
	{
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$laporan = $this->input->post('laporan');
		$aspek = $this->input->post('aspek');
			$waktu = $this->input->post('waktu');
		$file = $this->input->post('file');
		$this->load->model('Process_model');
		$this->Process_model->insert_post($id, $judul, $laporan, $aspek, $waktu, $file);
		redirect(base_url('Welcome/index/#list'), 'refresh');
	}

	public function delete($id)
	{
		$this->load->model('Process_model');
		$this->Process_model->delete_post($id);
		redirect(base_url('Welcome/index/#list'), 'refresh');
	}

    	public function update($id)
    	{
        	$this->load->model('Process_model');
        	$posts = $this->Process_model->get_postsById($id);
        	$data['posts'] = $posts;
        	$this->load->view('update_laporan', $data);
    	}

    	public function update_process($id)
    	{
        	$judul = $this->input->post('judul');
        	$laporan = $this->input->post('laporan');
        	$aspek = $this->input->post('aspek');
		$waktu = $this->input->post('waktu');
        	$file = $this->input->post('file');
        	$this->load->model('Process_model');
        	$this->Process_model->update_post($id, $judul, $laporan, $aspek, $waktu, $file);
        	redirect(base_url('Welcome/index/#list'), 'refresh');
    	}

    	public function search(){
        	$keyword = $this->input->post('keyword');
       		$data['posts']=$this->Process_model->get_laporan_keyword($keyword);
        	$this->load->view('home',$data);
    	}
}
