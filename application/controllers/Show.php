<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_show', 'show');
	}
	public function index(){
		$kata = $this->input->post('cari');
		$data['data'] = $this->show->get($kata)->result();
		$this->load->view('template/header');
		$this->load->view('vshow', $data);
		$this->load->view('template/footer');
	}
}
