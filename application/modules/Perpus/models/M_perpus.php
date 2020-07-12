<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perpus extends CI_Model {
	//PEMINJAMAN
	function id_pinjam()
	{
		$this->db->select('RIGHT(peminjaman.id_peminjaman,5) as kode', FALSE);
		$this->db->order_by('id_peminjaman','DESC');    
		$this->db->limit(1);    
		$query = $this->db->get('peminjaman');      //cek dulu apakah ada sudah ada kode di tabel.    
		if($query->num_rows() <> 0){      
		 //jika kode ternyata sudah ada.      
		 $data = $query->row();      
		 $kode = intval($data->kode) + 1;    
		}
		else {      
		 //jika kode belum ada      
		 $kode = 1;     
		}
		$tgl=date('dmY');
		$kodemax = str_pad($kode, 6, "0", STR_PAD_LEFT); // angka 5 menunjukkan jumlah digit angka 0
		$kodejadi = "PIN-".$tgl.$kodemax;    // hasilnya abc-00001 dst. yg dinamis itu 00001, 00002 dst. xxx statis. bebas silahkan dirubah di "ab-" jumlahnya 8 digit perpaduan huruf dan angka. saya rubah size tabel id_costumer ke 8.
		return $kodejadi;  
	}
	
	  function cek_pinjam($kode) {
		$this->db->where('buku_id',implode($this->input->post('buku_id')));
		$this->db->where('ang_id',$this->session->userdata('ang_id'));
        return $this->db->get('peminjaman');
	  }
	//Buku
  function tampil_buku()
	  {
		  $this->db->select('*');
		  $this->db->from('buku');
		  $this->db->join('penulis','penulis.pen_id = buku.buku_penulis');
		  $this->db->join('penerbit','penerbit.penerbit_id = buku.buku_penerbit');
		  $this->db->join('kategori','kategori.kat_id = buku.buku_kategori');

		  return $this->db->get();
	  }
	  
	 //Keranjang
	  function tambah_item($params,$table)
	  {
		$this->db->insert($table,$params);
		
	  }
	  function item_keranjang()
	  {
		  $this->db->select('*');
		  $this->db->from('tmp');
		  $this->db->join('buku','buku.buku_id = tmp.buku_id');
		  $this->db->join('penulis','penulis.pen_id = tmp.pen_id');
		  $this->db->join('penerbit','penerbit.penerbit_id = tmp.penerbit_id');
		  $this->db->join('kategori','kategori.kat_id = tmp.kat_id')->where('tmp.ang_id',$this->session->userdata('ang_id'));
		  return $this->db->get();
	}
	function get_tmp()
	{
		return $this->db->get('tmp');
	}
	function cek_tmp($kode)
	{
		
		$this->db->where('buku_id',$kode);
		$this->db->where('ang_id',$this->session->userdata('ang_id'));
        return $this->db->get('tmp');
		
	}
	function maxtmp()
	{
		return $this->db->count_all('tmp');
		
	}
	  function ambil($buku_id)
	{
		return $this->db->get_where('tmp',array('buku_id'=>$buku_id))->row_array();
	}
	function hapus($buku_id)
	{
		return $this->db->delete('tmp',array('buku_id'=>$buku_id));
	}
	function hapus_semua()
	{
		$this->db->delete('tmp', array('ang_id' => $this->session->userdata('ang_id')));
	}
}
