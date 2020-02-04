<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_detail', 'detail');
	}

	public function index(){
		redirect(base_url());
	}

	public function show($id)
	{
		$where = array('a.id_kost' => $id);
		$data['data'] = $this->detail->getDetail($where)->result();
		$this->load->view('template/header');
		$this->load->view('detail', $data);
		$this->load->view('template/footer');
	}
}
