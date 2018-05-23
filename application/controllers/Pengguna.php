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
		$this->load->model('m_pengguna');
	}

	public function index()
	{
		$nama = $this->m_pengguna->GetNama();
		$data = $this->m_pengguna->GetAll();

		$this->load->view('atribut/header');
		$this->load->view('v_pengguna', array('nama' => $nama, 'data' => $data));
		$this->load->view('atribut/footer');
	}

	public function tambah(){
		// Data Suku Cadang 
		$id_peg = $this -> input -> post('id_peg');
		$password = $this -> input -> post('password');
		
		$data = $this->m_pengguna->GetAll();
		$i = count($data);
		$id_pengguna = "USER".$i;

		$dataPengguna = array(
			'IDPENGGUNA' => $id_pengguna,
			'IDPEG' => $id_peg,
			'PASSWORD' => $password
			);

		$result = $this -> m_pengguna -> insert($dataPengguna);

		redirect('Pengguna');
	}

	public function ubah(){
		// Data Suku Cadang 
		$IDPENGGUNA = $this -> input -> post('IDPENGGUNA');
		$PASSWORD = $this -> input -> post('PASSWORD');
		
		$dataPengguna = array(
			'PASSWORD' => $PASSWORD
			);

		$result = $this -> m_pengguna -> update($IDPENGGUNA, $dataPengguna);

		redirect('Pengguna');	
	}
}

?>