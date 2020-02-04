<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitasumum extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_fasilitasumum', 'fasilitasumum');
		$session = $this->session->userdata('login');
	}

	public function index(){
		$where = array('tb_kost.id_pemilik' => $this->session->login['id']);
		$data['data'] = $this->fasilitasumum->getall($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/fasilitasumum/index', $data);
		$this->load->view('backend/template/footer');
	}

	public function tambah(){
		$where = array('tb_kost.id_pemilik' => $this->session->login['id']);
		$not = array();
		if ($this->fasilitasumum->cek($where)->row_array() > 0) {
			foreach ($this->fasilitasumum->cek($where)->result() as $key) {
				$not[] = $key->id_kost;
			}
		}else{
			$not[] = 0;
		}
		$kondisi1 = $this->session->login['id'];
		$kondisi2 = implode(",",$not);
		$data['data'] = $this->fasilitasumum->getselect($kondisi1,$kondisi2)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/fasilitasumum/tambah', $data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_simpan(){
		
		$data = array(
				'ruang_makan' => $this->input->post('ruang_makan'), 
				'ruang_tamu' => $this->input->post('ruang_tamu'), 
				'ruang_jemuran' => $this->input->post('ruang_jemuran'), 
				'taman' => $this->input->post('taman'), 
				'mushola' => $this->input->post('mushola'), 
				'dapur' => $this->input->post('dapur'), 
				'bawa_hewan' => $this->input->post('bawa_hewan'),
				'akses_kunci_gerbang' => $this->input->post('akses_kunci_gerbang'),
				'cctv' => $this->input->post('cctv'),
				'id_kost' => $this->input->post('id_kost')
		);
		if (is_null($this->input->post('id_kost'))) {
			echo "Tidak Boleh Kosong";
		}else{
			$this->fasilitasumum->simpan($data);
			redirect(base_url('fasilitasumum/index'));
		}
	}

	public function edit($id){
		$where = array('id_fasilitas_umum' => $id);
		$data['data'] = $this->fasilitasumum->getwhere($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/fasilitasumum/edit',$data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_edit(){
		$data = array(
				'ruang_makan' => $this->input->post('ruang_makan'), 
				'ruang_tamu' => $this->input->post('ruang_tamu'), 
				'ruang_jemuran' => $this->input->post('ruang_jemuran'), 
				'taman' => $this->input->post('taman'), 
				'mushola' => $this->input->post('mushola'), 
				'dapur' => $this->input->post('dapur'), 
				'bawa_hewan' => $this->input->post('bawa_hewan'),
				'akses_kunci_gerbang' => $this->input->post('akses_kunci_gerbang'),
				'cctv' => $this->input->post('cctv')
		);
		$where = array('id_fasilitas_umum' => $this->input->post('id_fasilitas_umum'));
		$this->fasilitasumum->edit($data, $where);
		redirect(base_url('fasilitasumum/index'));
	}

	public function hapus($id){
		$where = array('id_fasilitas_umum' => $id);
		$this->fasilitasumum->hapus($where);
		redirect(base_url('fasilitasumum/index'));
	}

}
