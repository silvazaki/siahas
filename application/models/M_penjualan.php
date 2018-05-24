<?php defined('BASEPATH')OR exit('akses ga ada');

class M_penjualan extends CI_Model{
	public function GetAll(){
		$sql = "SELECT * FROM penjualan_suku_cadang";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	
	public function GetNama(){
		$sql = "SELECT IDSC, NAMASC FROM suku_cadang;";
		$data = $this->db->query($sql);
		return $data -> result_array();
	}

	public function insert($data){
		$r = $this -> db -> insert('penjualan_suku_cadang', $data);
		return $r;
	}

	public function update($IDPENJUALAN, $dataSukucadang){
		$this->db->where ('IDPENJUALAN', $IDPENJUALAN);
		$r = $this->db->update('penjualan_suku_cadang', $dataSukucadang);
		return $r; 
	}

}