<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_login');
 
	}
 
	function index(){
		$this->load->view('template/headerlogin');
		$this->load->view('login');
		$this->load->view('template/footer');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'email' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_login->cek_login("tb_pemilik",$where)->num_rows();
		if($cek > 0){
			$data = $this->M_login->cek_login("tb_pemilik",$where)->row_array();
			// print_r($data);
			$id = $data["id_pemilik"];
			$nama = $data["nama_pemilik"];
			$data_session = array(
				'nama' => $nama,
				'status' => "login",
				'id' => $id
				);
			$this->session->set_userdata('login',$data_session);
			// print_r($this->session->userdata('login'));
			redirect(base_url("kost"));
		}else{
			$data_session = array(
				'message'=>'<script>$("body").toast({title:"Proses Gagal!",message:"Proses Gagal Dilakukan!",showProgress:"bottom",classProgress:"red"});</script>',
				'status'=>''
				);
			$this->session->set_userdata('login',$data_session);
			redirect(base_url("login"));
		}
	}
 
	function logout(){
		$data_session = array(
			'nama' => "",
			'status' => "",
			'id' => ""
			);
		$this->session->unset_userdata($data_session);
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

	function register(){
		$this->load->view('template/headerlogin');
		$this->load->view('register');
		$this->load->view('template/footer');
	}
	function aksiregister(){
		$data = array(
				'nama_pemilik' => $this->input->post('nama_pemilik'), 
				'kontak_pemilik' => $this->input->post('kontak_pemilik'), 
				'email' => $this->input->post('email'), 
				'password' => md5($this->input->post('password'))	
		);
		$this->M_login->simpan($data);
		
		$data_session = array(
				'message'=>'<script>$("body").toast({title:"Berhasil!",message:"Proses Berhasil Dilakukan!",showProgress:"bottom",classProgress:"green"});</script>',
				'status'=>''
				);
			$this->session->set_userdata('login',$data_session);
			redirect(base_url('login'));
	}
}