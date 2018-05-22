<?php defined('BASEPATH')OR exit('akses ga ada');

class M_sukucadang extends CI_Model{
	public function GetAll(){
		$data = $this -> db -> get('suku_cadang');
		return $data -> result_array();
	}

	public function GetGedung(){
		// $data = $this -> db -> get('tb_gedung');
		// $this->db->order_by('nama_gedung', 'ASC');
		// return $data -> result_array();
	}

	public function insert($data){
		$r = $this -> db -> insert('suku_cadang', $data);
		return $r;
	}

	public function update($IDSC, $dataSukucadang){
		$this->db->where ('IDSC', $IDSC);
		$r = $this->db->update('suku_cadang', $dataSukucadang);
		return $r; 
	}

}