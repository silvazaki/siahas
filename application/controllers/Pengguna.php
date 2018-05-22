<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class Pengguna extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('m_aplikasi2');
	}

	public function index()
	{
		$this->load->view('atribut/header');
		$this->load->view('v_pengguna');
		$this->load->view('atribut/footer');
	}

	public function tambah(){
		// Data Suku Cadang 
		$nama_peg = $this -> input -> post('nama_peg');
		$password = $this -> input -> post('password');
		
		$dataPelanggan = array(
			'nama_peg' => $nama_peg,
			'password' => $password
			);

		// $result = $this -> m_gedung -> insertGedung($data);
	}

}

?>