<?php defined('BASEPATH')OR exit('akses ga ada');

class M_pengguna extends CI_Model{
	public function GetAll(){
		$sql = "SELECT pengguna.IDPENGGUNA, pegawai.NAMAPEG, pengguna.PASSWORD, pengguna.SESITERAKHIR FROM pengguna, pegawai WHERE pengguna.IDPEG=pegawai.IDPEG;";
		$data = $this->db->query($sql);
		return $data -> result_array();
	}

	public function GetNama(){
		$sql = "SELECT pegawai.IDPEG, pegawai.NAMAPEG FROM pegawai WHERE NOT EXISTS (SELECT pengguna.IDPEG FROM pengguna);";
		$data = $this->db->query($sql);
		return $data -> result_array();
	}

	public function insert($data){
		$r = $this -> db -> insert('pengguna', $data);
		return $r;
	}

	public function update($ID, $data){
		$this->db->where ('IDPENGGUNA', $ID);
		$r = $this->db->update('pengguna', $data);
		return $r; 
	}

}