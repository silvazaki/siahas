<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class Pegawai extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('m_aplikasi2');
	}

	public function index()
	{
		$this->load->view('atribut/header');
		$this->load->view('v_pegawai');
		$this->load->view('atribut/footer');
	}

}

?>