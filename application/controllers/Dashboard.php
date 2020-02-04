<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();		
		// $this->load->model('M_detail', 'detail');
	}

	public function index(){
		$this->load->view('backend/template/header');
		// $this->load->view('backend/index');
		$this->load->view('backend/template/footer');
	}

	public function form(){
		$this->load->view('backend/template/header');
		$this->load->view('backend/form');
		$this->load->view('backend/template/footer');
	}
}
