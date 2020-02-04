<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_model {
	function getAll($limit, $start){
		$this->db->select('*');
		$this->db->from('tb_kost');
		$this->db->join('tb_gambar_detail', 'tb_kost.id_kost = tb_gambar_detail.id_kost', 'left');
		$this->db->limit($limit, $start);
		return $this->db->get();
	}
}
