<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kamar_mandi extends CI_model {
	
	public function getall($where){
		$this->db->select('*');
		$this->db->from('tb_kamar_mandi');
		$this->db->join('tb_kost', 'tb_kost.id_kost = tb_kamar_mandi.id_kost');
		$this->db->where($where);
		return $this->db->get();
	}

	public function getselect($kondisi1,$kondisi2){
		return $this->db->query("
			SELECT * FROM tb_kost INNER JOIN tb_pemilik ON tb_kost.`id_pemilik` = tb_pemilik.`id_pemilik`
			WHERE `tb_pemilik`.`id_pemilik` = '$kondisi1'
			AND `tb_kost`.`id_kost` NOT IN ($kondisi2)
		");
	}

	public function cek($where){
		$this->db->select('*');
		$this->db->from('tb_kost');
		$this->db->join('tb_pemilik', 'tb_kost.id_pemilik = tb_pemilik.id_pemilik');
		$this->db->join('tb_kamar_mandi', 'tb_kost.id_kost = tb_kamar_mandi.id_kost');
		$this->db->where($where);
		return $this->db->get();
	}

	public function simpan($data){
		$this->db->insert('tb_kamar_mandi', $data);
	}

	public function getwhere($where){
		$this->db->select('*');
		$this->db->from('tb_kamar_mandi');
		$this->db->where($where);
		return $this->db->get();
	}

	public function edit($data, $where){
		$this->db->where($where);
		$this->db->update('tb_kamar_mandi', $data);
	}

	public function hapus($where){
		$this->db->where($where);
		$this->db->delete('tb_kamar_mandi');
	}

}
