<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model {
	function __construct()
		{
			parent::__construct();
		}
	function cek_admin($email, $pass){
		$this->db->where('email',$email);
		$this->db->where('password',$pass);
		$result = $this->db->get('petugas',1);
		return $result;
	}
	public function pet_id()   {
		$this->db->select('RIGHT(petugas.pet_id,5) as kode', FALSE);
		$this->db->order_by('pet_id','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('petugas');      //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
		 //jika kode ternyata sudah ada.      
		 $data = $query->row();      
		 $kode = intval($data->kode) + 1;    
		}
		else {      
		 //jika kode belum ada      
		 $kode = 1;    
		}
		$tgl=date('Y');
		$kodemax = str_pad($kode, 6, "0", STR_PAD_LEFT); // angka 5 menunjukkan jumlah digit angka 0
		$kodejadi = "PET-".$tgl.$kodemax;    // hasilnya abc-00001 dst. yg dinamis itu 00001, 00002 dst. xxx statis. bebas silahkan dirubah di "ab-" jumlahnya 8 digit perpaduan huruf dan angka. saya rubah size tabel id_costumer ke 8.
		return $kodejadi;  
  }
  function semua_petugas()
  {
	  return $this->db->get('petugas');
  }
  function tambah_petugas($params)
  {
	return $this->db->insert('petugas',$params);
  }

function ambil($pet_id)
{
	return $this->db->get_where('petugas',array('pet_id'=>$pet_id))->row_array();
}
function hapus_petugas($pet_id)
{
	return $this->db->delete('petugas',array('pet_id'=>$buku_id));
}
function hapus($pet_id)
{
	return $this->db->delete('petugas',array('pet_id'=>$pet_id));
}
function edit_data($where,$table)
{
  return $this->db->get_where($table,$where)->row_array();
}
function update_data($where,$data,$table)
{
	$this->db->where($where);
	return $this->db->update($table,$data);
}
}
