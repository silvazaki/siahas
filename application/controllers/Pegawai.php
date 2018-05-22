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
		$this->load->model('m_pegawai');
	}

	public function index()
	{
		$data = $this->m_pegawai->GetAll();

		$this->load->view('atribut/header');
		$this->load->view('v_pegawai', array('data' => $data));
		$this->load->view('atribut/footer');
	}

	public function tambah(){
		// Data Suku Pegawai 
		$id_peg = $this -> input -> post('id_peg');
		$nama_peg = $this -> input -> post('nama_peg');
		$alamat_peg = $this -> input -> post('alamat_peg');
		$email = $this -> input -> post('email');
		$jabatan = $this -> input -> post('jabatan');
		$subjabatan = $this -> input -> post('subjabatan');
		$dokumen_peg = $this -> input -> post('dokumen_peg');
		
		$dataPelanggan = array(
			'id_peg' => $id_peg,
			'nama_peg' => $nama_peg,
			'alamat_peg' => $alamat_peg,
			'nama_peg' => $nama_peg,
			'email' => $email,
			'jabatan' => $jabatan,
			'subjabatan' => $subjabatan,
			'dokumen_peg' => $dokumen_peg
			);

		// $result = $this -> m_gedung -> insertGedung($data);
	}

}

?>