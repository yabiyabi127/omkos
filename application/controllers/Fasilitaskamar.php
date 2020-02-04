<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fasilitaskamar extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_fasilitaskamar', 'fasilitaskamar');
		$session = $this->session->userdata('login');
	}

	public function index(){
		$where = array('id_pemilik' => $this->session->login['id']);
		$data['data'] = $this->fasilitaskamar->getall($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/fasilitaskamar/index', $data);
		$this->load->view('backend/template/footer');
	}

	public function tambah(){
		$where = array('tb_kost.id_pemilik' => $this->session->login['id']);
		$not = array();
		if ($this->fasilitaskamar->cek($where)->row_array() > 0) {
			foreach ($this->fasilitaskamar->cek($where)->result() as $key) {
				$not[] = $key->id_kost;
			}
		}else{
			$not[] = 0;
		}
		$kondisi1 = $this->session->login['id'];
		$kondisi2 = implode(",",$not);
		$data['data'] = $this->fasilitaskamar->getselect($kondisi1,$kondisi2)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/fasilitaskamar/tambah',$data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_simpan(){
		$lk = $this->input->post('panjang')." Meter X ".$this->input->post('lebar')." Meter";
		$data = array(
				'bed' => $this->input->post('bed'), 
				'meja_belajar' => $this->input->post('meja_belajar'), 
				'tv' => $this->input->post('tv'), 
				'ac' => $this->input->post('ac'), 
				'wifi' => $this->input->post('wifi'), 
				'pasutri' => $this->input->post('pasutri'), 
				'almari' => $this->input->post('almari'),
				'luas_kamar' => $lk,
				'id_kost' => $this->input->post('id_kost')
		);
		if (is_null($this->input->post('id_kost'))) {
			echo "Tidak Boleh Kosong";
		}else{
			$this->fasilitaskamar->simpan($data);
			redirect(base_url('fasilitaskamar/index'));
		}
	}

	public function edit($id){
		$where = array('id_fasilitas_kamar' => $id);
		$data['data'] = $this->fasilitaskamar->getwhere($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/fasilitaskamar/edit',$data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_edit(){
		$data = array(
				'bed' => $this->input->post('bed'), 
				'meja_belajar' => $this->input->post('meja_belajar'), 
				'tv' => $this->input->post('tv'), 
				'ac' => $this->input->post('ac'), 
				'wifi' => $this->input->post('wifi'), 
				'pasutri' => $this->input->post('pasutri'), 
				'almari' => $this->input->post('almari'),
				'luas_kamar' => $this->input->post('luas_kamar'),
				'id_fasilitas_kamar' => $this->input->post('id_fasilitas_kamar')
		);
		$where = array('id_fasilitas_kamar' => $this->input->post('id_fasilitas_kamar'));
		$this->fasilitaskamar->edit($data, $where);
		redirect(base_url('fasilitaskamar/index'));
	}

	public function hapus($id){
		$where = array('id_fasilitas_kamar' => $id);
		$this->fasilitaskamar->hapus($where);
		redirect(base_url('fasilitaskamar/index'));
	}

}
