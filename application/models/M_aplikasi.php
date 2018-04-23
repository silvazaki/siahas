<?php  
/**
* 
*/
class M_aplikasi extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function simpan($data) 
	{
		$this->db->query("INSERT INTO kalkulator (angka1, angka2, operator, hasil) VALUES (?,?,?,?)",
			array($data["angka1"], $data['angka2'],	$data['pilih_hitung'], $data['hasil_hitung']));

		//menghapus variabel dari memory
		//$data=null;
		unset($data);
	}
}

?>