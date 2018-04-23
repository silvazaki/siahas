<?php  
/**
* 
*/
class M_aplikasi2 extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function simpan($data) 
	{
		$this->db->query("INSERT INTO mahasiswa (nama, tempat, tanggal, jenis, alamat) VALUES (?,?,?,?,?)",
			array($data['nama'], $data['tempat'], $data['tanggal'],	$data['jenis'], $data['alamat']));

		//menghapus variabel dari memory
		//$data=null;
		unset($data);
	}
}

?>