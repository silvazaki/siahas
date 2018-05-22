<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class Layanan extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('m_aplikasi2');
	}

	public function index()
	{
		$this->load->view('atribut/header');
		$this->load->view('v_layanan');
		$this->load->view('atribut/footer');
	}

	public function tambah(){
		// Data Pelanggan 
		$nama_plg = $this -> input -> post('nama_plg');
		$alamat_plg = $this -> input -> post('alamat_plg');
		$daerah_plg = $this -> input -> post('daerah_plg');
		$tipe_kendaraan = $this -> input -> post('tipe_kendaraan');

		$dataPelanggan = array(
			'nama_plg' => $nama_plg,
			'alamat_plg' => $alamat_plg,
			'daerah_plg' => $daerah_plg,
			'tipe_kendaraan' => $tipe_kendaraan
			);

		// Data Kendaraan
		$no_mesin = $this -> input -> post('no_mesin');
		$no_pol = $this -> input -> post('no_pol');
		$tipe_kdr = $this -> input -> post('tipe_kdr');
		$tahun = $this -> input -> post('tahun');
		$km = $this -> input -> post('km');
		$kon_awal = $this -> input -> post('kon_awal');
		$kon_bensin = $this -> input -> post('kon_bensin');
		$cat_lain = $this -> input -> post('cat_lain');

		$dataKendaraan = array(
			'no_mesin' => $no_mesin,
			'no_pol' => $no_pol,
			'tipe_kdr' => $tipe_kdr,
			'tahun' => $tahun,
			'km' => $km,
			'kon_awal' => $kon_awal,
			'kon_bensin' => $kon_bensin,
			'cat_lain' => $cat_lain
			);

		// Data Layanan
		$tgl_service = $this -> input -> post('tgl_service');
		$nama_peg = $this -> input -> post('nama_peg');
		$keluhan_kon = $this -> input -> post('keluhan_kon');
		$analisa_sa = $this -> input -> post('analisa_sa');
		$tgl_datang = $this -> input -> post('tgl_datang');
		$jam_datang = $this -> input -> post('jam_datang');
		$tgl_mulai = $this -> input -> post('tgl_mulai');
		$jam_mulai = $this -> input -> post('jam_mulai');
		$tgl_selesai = $this -> input -> post('tgl_selesai');
		$jam_selesai = $this -> input -> post('jam_selesai');
		$tgl_cek = $this -> input -> post('tgl_cek');
		$jam_cek = $this -> input -> post('jam_cek');
		$jenis_cek = $this -> input -> post('jenis_cek');
		$biaya_kerja = $this -> input -> post('biaya_kerja');
		$biaya_sc = $this -> input -> post('biaya_sc');
		$biaya_Total = $this -> input -> post('biaya_Total');
		$no_urut = $this -> input -> post('no_urut');

		$dataLayanan = array(
			'tgl_service' => $tgl_service,
			'nama_peg' => $nama_peg,
			'keluhan_kon' => $keluhan_kon,
			'analisa_sa' => $analisa_sa,
			'tgl_datang' => $tgl_datang,
			'jam_datang' => $jam_datang,
			'tgl_mulai' => $tgl_mulai,
			'jam_mulai' => $jam_mulai,
			'tgl_selesai' => $tgl_selesai,
			'jam_selesai' => $jam_selesai,
			'tgl_cek' => $tgl_cek,
			'jam_cek' => $jam_cek,
			'jenis_cek' => $jenis_cek,
			'biaya_kerja' => $biaya_kerja,
			'biaya_sc' => $biaya_sc,
			'biaya_Total' => $biaya_Total,
			'no_urut' => $no_urut
			);

		// $result = $this -> m_gedung -> insertGedung($data);
	}

}

?>