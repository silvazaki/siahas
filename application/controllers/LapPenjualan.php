<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class LapPenjualan extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penjualan');
	}

	public function index()
	{
		$data = $this->m_penjualan->GetAll();
		$this->load->view('atribut/header');
		$this->load->view('v_lappenjualan', array('data' => $data));
		$this->load->view('atribut/footer');
	}

}

?>