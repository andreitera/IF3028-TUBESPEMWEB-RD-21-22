<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapor extends CI_Model {
	public function getLapor(){
		$this->db->select('*');
		$this->db->from('lapor');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	public function insert_data($data){
		$this->db->insert('lapor', $data);
	}
}
?>
