<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
		}
		public function kat_id()   {
			$this->db->select('RIGHT(kategori.kat_id,5) as kode', FALSE);
			$this->db->order_by('kat_id','DESC');    
			$this->db->limit(1);    
			$query = $this->db->get('kategori');      //cek dulu apakah ada sudah ada kode di tabel.    
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
			$kodejadi = "KAT-".$tgl.$kodemax;    // hasilnya abc-00001 dst. yg dinamis itu 00001, 00002 dst. xxx statis. bebas silahkan dirubah di "ab-" jumlahnya 8 digit perpaduan huruf dan angka. saya rubah size tabel id_costumer ke 8.
			return $kodejadi;  
	  }
	  function semua_kategori()
	  {
		  return $this->db->get('kategori');
	  }
	  function tambah_kategori($params)
	  {
		return $this->db->insert('kategori',$params);
	  }
	 
	function ambil($kat_id)
	{
		return $this->db->get_where('kategori',array('kat_id'=>$kat_id))->row_array();
	}
	
	function hapus($kat_id)
	{
		return $this->db->delete('kategori',array('kat_id'=>$kat_id));
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
