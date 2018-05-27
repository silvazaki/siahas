<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_login');

	}

	function index(){
		// $this->load->view('atribut/header');
		$this->load->view('v_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// 'PASSSWORD' => md5($password)
		$data = array(
			'idpeg' => $username,
			'password' => $password
			);
		$cek = $this->M_login->cek_login($data)->num_rows();
		$dataUser = $this->M_login->cek_login($data)->row();

		print_r($dataUser);
		if($cek > 0){
			$data_session = array(
				// 'idpeg' => $cek['IDPEG'],
				// 'idpeg' => $dataUser['IDPEG'],
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			redirect(base_url("home"));
		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
