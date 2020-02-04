<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamar_mandi extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_kamar_mandi', 'kamar_mandi');
		$session = $this->session->userdata('login');
	}

	public function index(){
		$where = array('id_pemilik' => $this->session->login['id']);
		$data['data'] = $this->kamar_mandi->getall($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/kamar_mandi/index', $data);
		$this->load->view('backend/template/footer');
	}

	public function tambah(){
		$where = array('tb_kost.id_pemilik' => $this->session->login['id']);
		$not = array();
		if ($this->kamar_mandi->cek($where)->row_array() > 0) {
			foreach ($this->kamar_mandi->cek($where)->result() as $key) {
				$not[] = $key->id_kost;
			}
		}else{
			$not[] = 0;
		}
		$kondisi1 = $this->session->login['id'];
		$kondisi2 = implode(",",$not);
		$data['data'] = $this->kamar_mandi->getselect($kondisi1,$kondisi2)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/kamar_mandi/tambah', $data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_simpan(){
		
		$data = array(
				'kamar_mandi_dalam' => $this->input->post('kamar_mandi_dalam'), 
				'shower' => $this->input->post('shower'), 
				'kloset_duduk' => $this->input->post('kloset_duduk'), 
				'ember_mandi' => $this->input->post('ember_mandi'), 
				'air_panas' => $this->input->post('air_panas'),
				'id_kost' => $this->input->post('id_kost')
		);
		if (is_null($this->input->post('id_kost'))) {
			echo "Tidak Boleh Kosong";
		}else{
			$this->kamar_mandi->simpan($data);
			redirect(base_url('kamar_mandi/index'));
		}
	}

	public function edit($id){
		$where = array('id_kamar_mandi' => $id);
		$data['data'] = $this->kamar_mandi->getwhere($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/kamar_mandi/edit',$data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_edit(){
		$data = array(
				'kamar_mandi_dalam' => $this->input->post('kamar_mandi_dalam'), 
				'shower' => $this->input->post('shower'), 
				'kloset_duduk' => $this->input->post('kloset_duduk'), 
				'ember_mandi' => $this->input->post('ember_mandi'), 
				'air_panas' => $this->input->post('air_panas')
		);
		$where = array('id_kamar_mandi' => $this->input->post('id_kamar_mandi'));
		$this->kamar_mandi->edit($data, $where);
		redirect(base_url('kamar_mandi/index'));
	}

	public function hapus($id){
		$where = array('id_kamar_mandi' => $id);
		$this->kamar_mandi->hapus($where);
		redirect(base_url('kamar_mandi/index'));
	}

}
