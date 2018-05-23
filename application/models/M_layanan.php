<?php defined('BASEPATH')OR exit('akses ga ada');

class M_layanan extends CI_Model{
	public function GetAll(){
		$data = $this -> db -> get('layanan');
		return $data -> result_array();
	}

	public function GetAllPelanggan(){
		$data = $this -> db -> get('pelanggan');
		return $data -> result_array();
	}
	public function GetGedung(){
		// $data = $this -> db -> get('tb_gedung');
		// $this->db->order_by('nama_gedung', 'ASC');
		// return $data -> result_array();
	}

	public function insert($tabel, $data){
		$r = $this -> db -> insert($tabel, $data);
		return $r;
	}

	public function update($IDSUPPLIER, $dataSukucadang){
		$this->db->where ('IDSUPPLIER', $IDSUPPLIER);
		$r = $this->db->update('supplier', $dataSukucadang);
		return $r; 
	}

}