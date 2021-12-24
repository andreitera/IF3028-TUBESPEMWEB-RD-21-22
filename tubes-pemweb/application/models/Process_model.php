<?php


class Process_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get_posts()
	{
		$this->load->database();
		$query = $this->db->get('daftarlapor');
		return $query->result();
	}

	public function get_postsById($id)
	{
		$this->load->database();
		$query = $this->db->get_where('daftarlapor', array('id' => $id));
		if ($query->result() == null) {
			return [null];
		} else {
			return $query->result();
		}
	}

	public function update_post($id, $laporan, $aspek, $waktu, $file)
	{
		$this->load->database();
		$data = array(
			'laporan' => $laporan,
			'aspek' => $aspek,
			'waktu' => $waktu,
			'file' => $file
		);
		$this->db->where('id', $id);
		$this->db->update('daftarlapor', $data);
	}

	public function insert_post($id, $laporan, $aspek, $waktu, $file)
	{
		$this->load->database();
		$data = array(
            'id' => $id,
			'laporan' => $laporan,
			'aspek' => $aspek,
			'waktu' => $waktu,
			'file' => $file
		);
		$this->db->insert('daftarlapor', $data);
	}

	public function delete_post($id)
	{
		$this->load->database();
		$this->db->delete('daftarlapor', array('id' => $id));
	}
	
	public function get_laporan_keyword($keyword){
		$this->load->database();
		$this->db->select('*');
		$this->db->from('daftarlapor');
		$this->db->like('laporan',$keyword);
		return $this->db->get()->result();
	}

}

