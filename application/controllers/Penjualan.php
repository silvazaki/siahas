<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class Penjualan extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_penjualan');
	}

	public function index()
	{
		$nama = $this->m_penjualan->GetNama();
		$data = $this->m_penjualan->GetAll();

		$this->load->view('atribut/header');
		$this->load->view('v_penjualan', array('data' => $data, 'nama' => $nama));
		$this->load->view('atribut/footer');
	}
	public function tambah(){
		// Data Suku Cadang 
		$id_pj = $this -> input -> post('id_pj');
		$jenis_kendaraan = $this -> input -> post('jenis_kendaraan');
		$tanggal = $this -> input -> post('tgl_jual');
		$jumlah_jual = $this-> input -> post('jumlah_jual');
		
		$data = $this->m_penjualan->GetAll();
		$i = count($data);
		$id_pj = "PJ".$i;

		$dataPenjualan = array(
			'IDPENJUALAN' => $id_pj,
			'JENIS_TIPEKENDARAAN' => $jenis_kendaraan,
			'TGLPENJUALAN' => $tanggal,
			'STOKJUAL' => $jumlah_jual
			);

		$result = $this -> m_penjualan -> insert($dataPenjualan);

		redirect('Penjualan');
	}

	public function ubah(){
		// Data Suku Cadang 
		$IDPENJUALAN = $this->input -> post('IDPENJUALAN');
		$JENIS_TIPEKENDARAAN = $this -> input -> post('JENIS_TIPEKENDARAAN');
		$TGLPENJUALAN = $this->  input->post('TGLPENJUALAN');
		$STOKJUAL = $this->input -> post('STOKJUAL');
		

		$dataPengguna = array(
			'JENIS_TIPEKENDARAAN' => $JENIS_TIPEKENDARAAN,
			'TGLPENJUALAN' => $TGLPENJUALAN,
			'STOKJUAL' => $STOKJUAL
			);
		
		$result = $this -> m_penjualan -> update($IDPENJUALAN, $dataPengguna);

		print_r($result);
		// redirect('Penjualan');	
	}

}

?>