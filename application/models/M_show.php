<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_show extends CI_model {
	function get($kata){
		$this->db->select('*');
		$this->db->from('tb_kost');
		$this->db->join('tb_gambar_detail', 'tb_kost.id_kost = tb_gambar_detail.id_kost', 'left');
		$this->db->like('alamat_kost',$kata);
		return $this->db->get();
	}
}
