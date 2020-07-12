<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penerbit extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
		}
		public function penerbit_id()   {
			$this->db->select('RIGHT(penerbit.penerbit_id,5) as kode', FALSE);
			$this->db->order_by('penerbit_id','DESC');    
			$this->db->limit(1);    
			$query = $this->db->get('penerbit');      //cek dulu apakah ada sudah ada kode di tabel.    
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
			$kodejadi = "PUB-".$tgl.$kodemax;    // hasilnya abc-00001 dst. yg dinamis itu 00001, 00002 dst. xxx statis. bebas silahkan dirubah di "ab-" jumlahnya 8 digit perpaduan huruf dan angka. saya rubah size tabel id_costumer ke 8.
			return $kodejadi;  
	  }
	  function semua_penerbit()
	  {
		  return $this->db->get('penerbit');
	  }
	  function tambah_penerbit($params)
	  {
		return $this->db->insert('penerbit',$params);
	  }
	  function hapus_penerbit($penerbit_id)
    {
        return $this->db->delete('penerbit',array('penerbit_id'=>$penerbit_id));
	}
	function ambil($penerbit_id)
	{
		return $this->db->get_where('penerbit',array('penerbit_id'=>$penerbit_id))->row_array();
	}
	function hapus_buku($buku_id)
    {
        return $this->db->delete('buku',array('buku_id'=>$buku_id));
	}
	function hapus($penerbit_id)
	{
		return $this->db->delete('penerbit',array('penerbit_id'=>$penerbit_id));
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
