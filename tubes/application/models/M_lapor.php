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
	public function information($id) { 
	$q = $this->db->select('*')->from('lapor')->where('id',$id)->get(); 
	return $q->result(); 
	}

	public function edit_data($data, $id){
		$this->db->where('id', $id);
		$this->db->update('lapor', $data);
	}

	public function get_lapor($id){
		$this->db->where('id', $id);
		$query = $this->db->get('lapor');
		return $query->row(); 
	}

	public function delete_data($id){
		$this->db->where('id', $id);
		$this->db->delete('lapor');
	}

}
?>
