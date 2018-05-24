<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class LapLayanan extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_layanan');
	}

	public function index()
	{

		$data = $this->m_layanan->GetAll();
		$this->load->view('atribut/header');
		$this->load->view('v_laplayanan', array('data' => $data));
		$this->load->view('atribut/footer');
	}

}

?>