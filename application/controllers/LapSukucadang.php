<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class LapSukucadang extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('m_aplikasi2');
	}

	public function index()
	{
		$this->load->view('atribut/header');
		$this->load->view('v_lapsukucadang');
		$this->load->view('atribut/footer');
	}

}

?>