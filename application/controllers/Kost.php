<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_kost', 'kost');
		$session = $this->session->userdata('login');
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$where = array('id_pemilik' => $this->session->login['id']);
		$data['data'] = $this->kost->getall($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/kost/index', $data);
		$this->load->view('backend/template/footer');
	}

	public function tambah(){
		$this->load->view('backend/template/header');
		$this->load->view('backend/kost/tambah');
		$this->load->view('backend/template/footer');
	}

	public function aksi_simpan(){
		$data = array(
				'nama_kost' => $this->input->post('nama_kost'), 
				'alamat_kost' => $this->input->post('alamat_kost'), 
				'harga_kost' => $this->input->post('harga_kost'), 
				'jenis_kost' => $this->input->post('jenis_kost'), 
				'jumlah_kamar' => $this->input->post('jumlah_kamar'), 
				'kamar_tersedia' => $this->input->post('kamar_tersedia'), 
				'penghuni_kost' => $this->input->post('penghuni_kost'),
				'id_pemilik' => $this->session->login['id']
		);
		$this->kost->simpan($data);
		redirect(base_url('kost/index'));
	}

	public function edit($id){
		$where = array('id_kost' => $id);
		$data['data'] = $this->kost->getwhere($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/kost/edit', $data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_edit(){
		$data = array(
				'nama_kost' => $this->input->post('nama_kost'), 
				'alamat_kost' => $this->input->post('alamat_kost'), 
				'harga_kost' => $this->input->post('harga_kost'), 
				'jenis_kost' => $this->input->post('jenis_kost'), 
				'jumlah_kamar' => $this->input->post('jumlah_kamar'), 
				'kamar_tersedia' => $this->input->post('kamar_tersedia'), 
				'penghuni_kost' => $this->input->post('penghuni_kost')
		);
		$where = array('id_kost' => $this->input->post('id_kost'));
		$this->kost->edit($data, $where);
		redirect(base_url('kost/index'));
	}

	public function hapus($id){
		$where = array('id_kost' => $id);
		$this->kost->hapus($where);
		redirect(base_url('kost/index'));
	}


}
