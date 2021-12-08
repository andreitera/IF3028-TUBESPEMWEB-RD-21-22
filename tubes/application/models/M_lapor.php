<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_lapor extends CI_Model {
	public function getLapor(){
		$this->db->select('*');
		$this->db->from('lapor');
		$query = $this->db->get();
		return $query->result();
	}
}
?>