<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
	function cek_anggota($email, $pass){
			exit(var_dump($email,$pass));
						//$this->db->get_where('anggota', array('email' => $e , 'password' => $p ));
						//return $this->db->get('anggota');
	}
	function tambah_anggota($params,$table)
	{
		$this->db->get('anggota');
		$this->db->insert($table,$params);
	}
	
}
