<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_Model {
	
	public function buku_id()   {
		$this->db->select('RIGHT(buku.buku_id,5) as kode', FALSE);
		$this->db->order_by('buku_id','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('buku');      //cek dulu apakah ada sudah ada kode di tabel.    
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
		$kodejadi = "BUK-".$tgl.$kodemax;    // hasilnya abc-00001 dst. yg dinamis itu 00001, 00002 dst. xxx statis. bebas silahkan dirubah di "ab-" jumlahnya 8 digit perpaduan huruf dan angka. saya rubah size tabel id_costumer ke 8.
		return $kodejadi;  
  }
	
  public function isbn()   {
	$this->db->select('RIGHT(buku.buku_isbn,5) as kode', FALSE);
	$this->db->order_by('buku_isbn','DESC');    
	$this->db->limit(1);    
	$query = $this->db->get('buku');      //cek dulu apakah ada sudah ada kode di tabel.    
	if($query->num_rows() <> 0){      
	 //jika kode ternyata sudah ada.      
	 $data = $query->row();      
	 $kode = intval($data->kode) + 1;    
	}
	else {      
	 //jika kode belum ada      
	 $kode = 1;     
	}
	$tgl=date('dY');
	$kodemax = str_pad($kode, 6, "0", STR_PAD_LEFT); // angka 5 menunjukkan jumlah digit angka 0
	$kodejadi = $tgl.$kodemax;    // hasilnya abc-00001 dst. yg dinamis itu 00001, 00002 dst. xxx statis. bebas silahkan dirubah di "ab-" jumlahnya 8 digit perpaduan huruf dan angka. saya rubah size tabel id_costumer ke 8.
	return $kodejadi;  
}
  function totalBuku() {
	$this->db->from('buku');
	return $this->db->count_all_results();
}
  function lihatbukulimit($limit, $start) {
	$this->db->order_by('buku_id', 'ASC');
	$this->db->limit($limit, $start);
	return $this->db->get('buku');
}
  function semua_buku()
	  {
		  $this->db->select('*');
		  $this->db->from('buku');
		  $this->db->join('penulis','penulis.pen_id = buku.buku_penulis');
		  $this->db->join('penerbit','penerbit.penerbit_id = buku.buku_penerbit');
		  $this->db->join('kategori','kategori.kat_id = buku.buku_kategori');

		  return $this->db->get();
	  }

	  function lihat_buku()
	  {
		  $this->db->select('*');
		  $this->db->from('buku');
		  $this->db->join('penulis','penulis.pen_id = buku.buku_penulis');
		  $this->db->join('penerbit','penerbit.penerbit_id = buku.buku_penerbit');
		  $this->db->join('kategori','kategori.kat_id = buku.buku_kategori');
		  $this->db->order_by('buku_id','DESC');
		  return $this->db->get();
	  }
	  function tambah_buku($params,$table)
	  {
		$this->db->insert($table,$params);
	}
	function get_buku($buku_id)
    {
        return $this->db->get_where('buku',array('buku_id'=>$buku_id))->row_array();
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
	function ambil($buku_id)
	{
		return $this->db->get_where('buku',array('buku_id'=>$buku_id))->row_array();
	}
	function hapus($buku_id)
	{
		return $this->db->delete('buku',array('buku_id'=>$buku_id));
	}
	function detail_buku($buku_id)
	  {
		  $this->db->select('*');
		  $this->db->from('buku');
		  $this->db->join('penulis','penulis.pen_id = buku.buku_penulis','left');
		  $this->db->join('penerbit','penerbit.penerbit_id = buku.buku_penerbit','left');
		  $this->db->join('kategori','kategori.kat_id = buku.buku_kategori','left');
		  $this->db->where('buku.buku_id',$buku_id);

		  return $this->db->get()->row_array();
	  }
}
