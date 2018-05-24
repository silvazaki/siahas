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
		$this->load->model('m_sukucadang');
	}

	public function index()
	{
		$data = $this->m_sukucadang->GetAll();

		$this->load->view('atribut/header');
		$this->load->view('v_lapsukucadang', array('data' => $data));
		$this->load->view('atribut/footer');
	}

}

?>