<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class LapPembelian extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pembelian');
	}

	public function index()
	{
		$data = $this->m_pembelian->GetAll();
		$this->load->view('atribut/header');
		$this->load->view('v_lappembelian', array('data' => $data));
		$this->load->view('atribut/footer');
	}

}

?>