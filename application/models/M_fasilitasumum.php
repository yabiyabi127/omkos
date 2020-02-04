<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fasilitasumum extends CI_model {
	
	public function getall($where){
		$this->db->select('*');
		$this->db->from('tb_fasilitas_umum');
		$this->db->join('tb_kost', 'tb_kost.id_kost = tb_fasilitas_umum.id_kost');
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
		$this->db->join('tb_fasilitas_umum', 'tb_kost.id_kost = tb_fasilitas_umum.id_kost');
		$this->db->where($where);
		return $this->db->get();
	}

	public function simpan($data){
		$this->db->insert('tb_fasilitas_umum', $data);
	}

	public function getwhere($where){
		$this->db->select('*');
		$this->db->from('tb_fasilitas_umum');
		$this->db->where($where);
		return $this->db->get();
	}

	public function edit($data, $where){
		$this->db->where($where);
		$this->db->update('tb_fasilitas_umum', $data);
	}

	public function hapus($where){
		$this->db->where($where);
		$this->db->delete('tb_fasilitas_umum');
	}

}
