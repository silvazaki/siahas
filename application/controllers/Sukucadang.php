<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class Sukucadang extends CI_Controller
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
		$this->load->view('v_sukucadang', array('data' => $data));
		$this->load->view('atribut/footer');
	}

	public function tambah(){
		$data = $this->m_sukucadang->GetAll();

		$max = count($data);
		$idsc = "SC".$max;
		// Data Suku Cadang 
		$nama_sc = $this -> input -> post('nama_sc');
		$harga_sc = $this -> input -> post('harga_sc');
		$jenis_sc = $this -> input -> post('jenis_sc');
		$tipe_kendaraan = $this -> input -> post('tipe_kendaraan');

		$dataSukucadang = array(
			'IDSC' => $idsc,
			'NAMASC' => $nama_sc,
			'HARGASC' => $harga_sc,
			'JENISSC' => $jenis_sc,
			'TIPEKENDARAAN' => $tipe_kendaraan
			);

		$result = $this -> m_sukucadang -> insert($dataSukucadang);

		redirect('Sukucadang');	
	}

	public function ubah(){
		// Data Suku Cadang 
		$IDSC = $this -> input -> post('IDSC');
		$nama_sc = $this -> input -> post('NAMASC');
		$harga_sc = $this -> input -> post('HARGASC');
		$jenis_sc = $this -> input -> post('JENISSC');
		$tipe_kendaraan = $this -> input -> post('TIPEKENDARAAN');

		$dataSukucadang = array(
			'NAMASC' => $nama_sc,
			'HARGASC' => $harga_sc,
			'JENISSC' => $jenis_sc,
			'TIPEKENDARAAN' => $tipe_kendaraan
			);

		$result = $this -> m_sukucadang -> update($IDSC, $dataSukucadang);

		redirect('Sukucadang');	
	}

}

?>