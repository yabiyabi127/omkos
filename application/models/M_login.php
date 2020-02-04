<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function update_data($data,$table){
	 	$this->db->update($table,$data);
	}

	public function simpan($data){
		$this->db->insert('tb_pemilik', $data);
	}
}