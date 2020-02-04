<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('M_home', 'home');
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');
		$this->load->view('template/ajax');
	}

	public function olahlokasi()
	{	
		$limit = $this->input->post('limit');
		$start = $this->input->post('start');
		$data['data'] = $this->home->getAll($limit, $start)->result();
		$this->load->view('ajax_data',$data);
	}
}
