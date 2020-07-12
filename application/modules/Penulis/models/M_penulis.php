<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penulis extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
		}
		public function pen_id()   {
			$this->db->select('RIGHT(penulis.pen_id,5) as kode', FALSE);
			$this->db->order_by('pen_id','DESC');    
			$this->db->limit(1);    
			$query = $this->db->get('penulis');      //cek dulu apakah ada sudah ada kode di tabel.    
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
			$kodejadi = "PEN-".$tgl.$kodemax;    // hasilnya abc-00001 dst. yg dinamis itu 00001, 00002 dst. xxx statis. bebas silahkan dirubah di "ab-" jumlahnya 8 digit perpaduan huruf dan angka. saya rubah size tabel id_costumer ke 8.
			return $kodejadi;  
	  }
	  function semua_penulis()
	  {
		  return $this->db->get('penulis');
	  }
	  function tambah_penulis($params)
	  {
		return $this->db->insert('penulis',$params);
	  }
	
	function ambil($pen_id)
	{
		return $this->db->get_where('penulis',array('pen_id'=>$pen_id))->row_array();
	}
	function hapus_penulis($pen_id)
    {
        return $this->db->delete('penulis',array('pen_id'=>$buku_id));
	}
	function hapus($pen_id)
	{
		return $this->db->delete('penulis',array('pen_id'=>$pen_id));
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
