<?php defined('BASEPATH')OR exit('akses ga ada');

class M_pembelian extends CI_Model{
	public function GetAll(){
		$data = $this -> db -> get('pembelian_suku_cadang');
		return $data -> result_array();
	}

	public function GetGedung(){
		// $data = $this -> db -> get('tb_gedung');
		// $this->db->order_by('nama_gedung', 'ASC');
		// return $data -> result_array();
	}

	public function insert($data){
		$r = $this -> db -> insert('pembelian_suku_cadang', $data);
		return $r;
	}

	public function update($IDSC, $dataSukucadang){
		$this->db->where ('IDSC', $IDSC);
		$r = $this->db->update('pembelian_suku_cadang', $dataSukucadang);
		return $r; 
	}

}