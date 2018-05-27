<?php

class M_login extends CI_Model{
	function cek_login($data){
		$q=$this->db->query("select * from pengguna where idpengguna=? and password=?",
		array($data['idpeg'],$data['password'])
			// return $q;
	);
		// return $this->db->get_where($table,$where);
		return $q;
	}
}
