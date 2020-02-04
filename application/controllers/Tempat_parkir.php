<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempat_parkir extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_tempat_parkir', 'tempat_parkir');
		$session = $this->session->userdata('login');
	}

	public function index(){
		$where = array('id_pemilik' => $this->session->login['id']);
		$data['data'] = $this->tempat_parkir->getall($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/tempat_parkir/index', $data);
		$this->load->view('backend/template/footer');
	}

	public function tambah(){
		$where = array('tb_kost.id_pemilik' => $this->session->login['id']);
		$not = array();
		if ($this->tempat_parkir->cek($where)->row_array() > 0) {
			foreach ($this->tempat_parkir->cek($where)->result() as $key) {
				$not[] = $key->id_kost;
			}
		}else{
			$not[] = 0;
		}
		$kondisi1 = $this->session->login['id'];
		$kondisi2 = implode(",",$not);
		$data['data'] = $this->tempat_parkir->getselect($kondisi1,$kondisi2)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/tempat_parkir/tambah', $data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_simpan(){
		
		$data = array(
				'mobil' => $this->input->post('mobil'), 
				'motor' => $this->input->post('motor'), 
				'sepeda' => $this->input->post('sepeda'),
				'id_kost' => $this->input->post('id_kost')
		);
		if (is_null($this->input->post('id_kost'))) {
			echo "Tidak Boleh Kosong";
		}else{
			$this->tempat_parkir->simpan($data);
			redirect(base_url('tempat_parkir/index'));
		}
	}

	public function edit($id){
		$where = array('id_parkir' => $id);
		$data['data'] = $this->tempat_parkir->getwhere($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/tempat_parkir/edit',$data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_edit(){
		$data = array(
				'mobil' => $this->input->post('mobil'), 
				'motor' => $this->input->post('motor'), 
				'sepeda' => $this->input->post('sepeda')
		);
		$where = array('id_parkir' => $this->input->post('id_parkir'));
		$this->tempat_parkir->edit($data, $where);
		redirect(base_url('tempat_parkir/index'));
	}

	public function hapus($id){
		$where = array('id_parkir' => $id);
		$this->tempat_parkir->hapus($where);
		redirect(base_url('tempat_parkir/index'));
	}

}
