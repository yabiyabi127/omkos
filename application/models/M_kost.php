<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kost extends CI_model {
	public function getall($where){
		$this->db->select('*');
		$this->db->from('tb_kost');
		$this->db->where($where);
		return $this->db->get();
	}
	public function simpan($data){
		$this->db->insert('tb_kost', $data);
	}

	public function getwhere($where){
		$this->db->select('*');
		$this->db->from('tb_kost');
		$this->db->where($where);
		return $this->db->get();
	}

	public function edit($data, $where){
		$this->db->where($where);
		$this->db->update('tb_kost', $data);
	}

	public function hapus($where){
		$this->db->where($where);
		$this->db->delete('tb_kost');
	}
}
