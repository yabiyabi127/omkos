<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_galery', 'galery');
		$session = $this->session->userdata('login');
		$this->load->helper(array('form', 'url'));
	}
	public function index(){
		$where = array('id_pemilik' => $this->session->login['id']);
		$data['data'] = $this->galery->getall($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/galery/index', $data);
		$this->load->view('backend/template/footer');
	}
	public function tambah(){
		$where = array('tb_kost.id_pemilik' => $this->session->login['id']);
		$not = array();
		if ($this->galery->cek($where)->row_array() > 0) {
			foreach ($this->galery->cek($where)->result() as $key) {
				$not[] = $key->id_kost;
			}
		}else{
			$not[] = 0;
		}
		$kondisi1 = $this->session->login['id'];
		$kondisi2 = implode(",",$not);
		$data['data'] = $this->galery->getselect($kondisi1,$kondisi2)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/galery/tambah', $data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_tambah(){

		$config['upload_path']          = 'asset/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);
		// script upload file pertama
		$this->upload->do_upload('gambar_1');
		$file1 = $this->upload->data();
		// script uplaod file kedua
		$this->upload->do_upload('gambar_2');
		$file2 = $this->upload->data();
		// script upload file tiga
		$this->upload->do_upload('gambar_3');
		$file3 = $this->upload->data();
		// script uplaod file empat
		$this->upload->do_upload('gambar_4');
		$file4 = $this->upload->data();
	
		$this->load->library('upload', $config);

		$newdata = array(
			'gambar_1' => $file1['file_name'],
			'gambar_2' => $file2['file_name'],
			'gambar_3' => $file3['file_name'],
			'gambar_4' => $file4['file_name'],
			'id_kost' => $this->input->post('id_kost')
		);
		$this->galery->simpan($newdata);
		redirect(base_url('galery/index'));
	}

	public function edit($id){
		$where = array('id_gambar_detail' => $id);
		$data['data'] = $this->galery->getwhere($where)->result();
		$this->load->view('backend/template/header');
		$this->load->view('backend/galery/edit', $data);
		$this->load->view('backend/template/footer');
	}

	public function aksi_edit(){
		$config['upload_path']          = 'asset/upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 10000;

		$this->load->library('upload', $config);
		// script upload file pertama
		$this->upload->do_upload('gambar_1');
		$file1 = $this->upload->data();
		// script uplaod file kedua
		$this->upload->do_upload('gambar_2');
		$file2 = $this->upload->data();
		// script upload file tiga
		$this->upload->do_upload('gambar_3');
		$file3 = $this->upload->data();
		// script uplaod file empat
		$this->upload->do_upload('gambar_4');
		$file4 = $this->upload->data();
	
		$this->load->library('upload', $config);

		$newdata = array(
			'gambar_1' => $file1['file_name'],
			'gambar_2' => $file2['file_name'],
			'gambar_3' => $file3['file_name'],
			'gambar_4' => $file4['file_name']
		);
		$where = array('id_gambar_detail' => $this->input->post('id_gambar_detail'));
		$this->galery->edit($newdata, $where);
		redirect(base_url('galery/index'));
	}

	public function hapus($id){
		$where = array('id_gambar_detail' => $id);
		$this->galery->hapus($where);
		redirect(base_url('galery/index'));
	}
}