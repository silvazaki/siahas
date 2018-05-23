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
		$this->load->model('m_layanan');
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
		$no_telpon = $this -> input -> post('no_telpon');

		$data = $this->m_layanan->GetAllPelanggan();
		$max = count($data);

		$id_pelanggan = $max;

		$dataPelanggan = array(
			'IDPELANGGAN' => $id_pelanggan,
			'NAMAPELANGGAN' => $nama_plg,
			'ALAMATPELANGGAN' => $alamat_plg,
			'DAERAHPELANGGAN' => $daerah_plg,
			'NOTELPPELANGGAN' => $no_telpon
			);

		$r = $this -> m_layanan -> insert('pelanggan', $dataPelanggan);
		// print_r($dataPelanggan);
		// Data Kendaraan
		$no_mesin = $this -> input -> post('no_mesin');
		$no_kerangka = $this -> input -> post('no_kerangka');
		$no_pol = $this -> input -> post('no_pol');
		$tipe_kdr = $this -> input -> post('tipe_kdr');
		$tahun = $this -> input -> post('tahun');
		$km = $this -> input -> post('km');
		$kon_awal = $this -> input -> post('kon_awal');
		$kon_bensin = $this -> input -> post('kon_bensin');
		$cat_lain = $this -> input -> post('cat_lain');

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

		$id_layanan = "Layanan".$max;

		$data = array(
			'IDLAYANAN' => $id_layanan,
			'NOMESIN' => $no_mesin,
			'NOKERANGKA' => $no_kerangka,
			'NOPOL' => $no_pol,
			'TIPE' => $tipe_kdr,
			'TAHUN' => $tahun,
			'KM' => $km,
			'KONDISIAWAL' => $kon_awal,
			'KONDISIBENSIN' => $kon_bensin,
			'CATATANLAIN' => $cat_lain,
			
			//Layanan
			'TANGGALSERVICE' => $tgl_service,
			'IDPEG' => $nama_peg,
			'KELUHANKONSUMEN' => $keluhan_kon,
			'ANALISASA' => $analisa_sa,
			'WAKTUDATANG' => $tgl_datang." ".$jam_datang,
			'WAKTUMULAISERVICE' => $tgl_mulai." ".$jam_mulai,
			'WAKTUSELESAISERVICE' => $tgl_selesai." ".$jam_selesai,
			'WAKTUPENGECEKAN' => $tgl_cek." ".$jam_cek,
			'JENISPENGECEKAN' => $jenis_cek,
			'BIAYAKERJA' => $biaya_kerja,
			'BIAYASUKUCADANG' => $biaya_sc,
			'NOURUT' => $no_urut
			);

		$r = $this -> m_layanan -> insert('layanan', $data);
		
		redirect('Layanan');
	}

}

?>