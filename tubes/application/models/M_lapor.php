<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapor extends CI_Model {
	function data($number,$offset){
		return $query = $this->db->get('lapor',$number,$offset)->result();		
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

	

	function jumlah_data(){
		return $this->db->get('lapor')->num_rows();
	}


	public function cari_keyword($keyword){
			$this->db->select('*');
			$this->db->from('lapor');
			$this->db->like('isi',$keyword);
			$this->db->or_like('aspek',$keyword);
			$this->db->or_like('file',$keyword);
			return $this->db->get()->result();
		}
		
}
?>
