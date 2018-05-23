<?php defined('BASEPATH')OR exit('akses ga ada');

class M_pegawai extends CI_Model{
	public function GetAll(){
		$data = $this -> db -> get('pegawai');
		return $data -> result_array();
	}

	public function insert($data){
		$r = $this -> db -> insert('pegawai', $data);
		return $r;
	}

	public function update($IDPEG, $data){
		$this->db->where ('IDPEG', $IDPEG);
		$r = $this->db->update('pegawai', $data);
		return $r; 
	}

}