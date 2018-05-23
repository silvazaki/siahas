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
		$IDPEG = $this -> input -> post('id_peg');
		$NAMAPEG = $this -> input -> post('nama_peg');
		$ALAMATPEG = $this -> input -> post('alamat_peg');
		$NOTLP = $this -> input -> post('no_telp');
		$EMAIL = $this -> input -> post('email');
		$JABATANPEG = $this -> input -> post('jabatan');
		$SUBJABATANPEG = $this -> input -> post('subjabatan');
		$DOKUMENPEG = $this -> input -> post('dokumen_peg');

		$data = $this->m_pegawai->GetAll();
		$i = count($data);
		$IDPENGGUNA = "PG".$i;
		
		$dataPegawai = array(
			'IDPEG' => $IDPEG,
			'IDPENGGUNA' => $IDPENGGUNA,
			'NAMAPEG' => $NAMAPEG,
			'ALAMATPEG' => $ALAMATPEG,
			'NOTLP' => $NOTLP,
			'EMAIL' => $EMAIL,
			'JABATANPEG' => $JABATANPEG,
			'SUBJABATANPEG' => $SUBJABATANPEG,
			'DOKUMENPEG' => $DOKUMENPEG
			);

		$result = $this -> m_pegawai -> insert($dataPegawai);

		redirect('Pegawai');	
	}

	public function ubah(){
		// Data Pegawai 
		$IDPEG = $this -> input -> post('IDPEG');

		$NAMAPEG = $this -> input -> post('NAMAPEG');
		$ALAMATPEG = $this -> input -> post('ALAMATPEG');
		$NOTLP = $this -> input -> post('NOTLP');
		$EMAIL = $this -> input -> post('EMAIL');
		// $JABATANPEG = $this -> input -> post('jabatan');
		// $SUBJABATANPEG = $this -> input -> post('subjabatan');
		$DOKUMENPEG = $this -> input -> post('DOKUMENPEG');
		
		$dataPegawai = array(
			'NAMAPEG' => $NAMAPEG,
			'ALAMATPEG' => $ALAMATPEG,
			'NOTLP' => $NOTLP,
			'EMAIL' => $EMAIL,
			'DOKUMENPEG' => $DOKUMENPEG
			);

		$result = $this -> m_pegawai -> update($IDPEG, $dataPegawai);

		redirect('Pegawai');	
	}

}

?>