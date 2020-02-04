<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_detail extends CI_model {
	function getDetail($where){
		$this->db->select('*');
		$this->db->from('tb_kost AS a');
		$this->db->join('tb_parkir as b', 'a.id_kost = b.id_kost');
		$this->db->join('tb_pemilik as c', 'a.id_pemilik = c.id_pemilik');
		$this->db->join('tb_fasilitas_kamar as d', 'a.id_kost = d.id_kost', 'left');
		$this->db->join('tb_fasilitas_umum as e', 'a.id_kost = e.id_kost', 'left');
		$this->db->join('tb_gambar_detail as f', 'a.id_kost = f.id_kost', 'left');
		$this->db->join('tb_kamar_mandi as g', 'a.id_kost = g.id_kost', 'left');
		$this->db->where($where);
		return $this->db->get();
	}
}
