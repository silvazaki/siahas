<?php  
defined('BASEPATH') OR exit('No deirect script access allowed');

/**
* 
*/
class Aplikasi extends CI_Controller
{
	
	public function penjumlahan($angka1, $angka2)
	{
		$data['angka1'] = $angka1;
		$data['angka2'] = $angka2;
		$data['hasil'] = $angka1+$angka2;

		$this->load->view('v_penjumlahan', $data);
	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_aplikasi2');
	}

	public function index()
	{
		$this->load->view('v_aplikasi2');
	}

	public function kalkulator()
	{//mengecek dari form
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		$pilih_hitung = $this->input->post('pilih-hitung');
		$hasil_hitung = 0;

		//mengecek proses perhitungan yang diminta
		if ($pilih_hitung == "+") 
		{
			$hasil_hitung = $angka1 + $angka2;
		} else if ($pilih_hitung == "-") 
		{
			$hasil_hitung = $angka1 - $angka2;
		} else if ($pilih_hitung == "*") 
		{
			$hasil_hitung = $angka1 * $angka2;
		} else if ($pilih_hitung == "/") 
		{
			$hasil_hitung = $angka1 / $angka2;
		}

		//membungkus semua data perhitungan untuk ditampilkan di view
		$data['angka1'] = $angka1;
		$data['angka2'] = $angka2;
		$data['pilih_hitung'] = $pilih_hitung;
		$data['hasil_hitung'] = $hasil_hitung;
		
		//simpan ke database
		$this->m_aplikasi->simpan($data);

		//menampilkan hasil
		$this->load->view('v_aplikasi', $data);

	}

	public function mahasiswa() {
		$nama = $this->input->post('nama');
		$tempat = $this->input->post('tempat');
		$tanggal = $this->input->post('tanggal');
		$jenis = $this->input->post('jenis');
		$alamat = $this->input->post('alamat');


		//membungkus semua data perhitungan untuk ditampilkan di view
		$data['nama'] = $nama;
		$data['tempat'] = $tempat;
		$data['tanggal'] = $tanggal;
		$data['jenis'] = $jenis;
		$data['alamat'] = $alamat;

		//simpan ke database
		$this->m_aplikasi2->simpan($data);

		//menampilkan hasil
		$this->load->view('v_aplikasi2', $data);
		
	}
}

?>