<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_peminjaman extends CI_Model {
	
		function __construct()
		{
			parent::__construct();
		}
	  function semua_peminjaman()
	  {
		$this->db->select('*');
		$this->db->from('peminjaman');
		$this->db->join('anggota','anggota.ang_id = peminjaman.ang_id','left');
		$this->db->join('buku','buku.buku_id = peminjaman.buku_id','left');
		$this->db->join('penulis','penulis.pen_id = peminjaman.pen_id','left');
		$this->db->join('penerbit','penerbit.penerbit_id = peminjaman.penerbit_id','left');
		$this->db->join('kategori','kategori.kat_id = peminjaman.kat_id','left');
		$this->db->join('petugas','petugas.pet_id = peminjaman.pet_id','left');
		return $this->db->get();
	  }
	  function edit_data($where,$table)
  {
  	return $this->db->get_where($table,$where)->row_array();
  }
  function update_data($where,$params,$table)
  {		$this->db->set($params);
		return $this->db->update($table);
	}
	function ambil($id_peminjaman)
	{
		return $this->db->get_where('peminjaman',array('id_peminjaman'=>$id_peminjaman))->row_array();
	}
	function hapus($id_peminjaman)
	{
		return $this->db->delete('peminjaman',array('id_peminjaman'=>$id_peminjaman));
	}
	function laporan()
	{
		$this->db->select('*');
		$this->db->from('peminjaman');
		$this->db->join('anggota','anggota.ang_id = peminjaman.ang_id','left');
		$this->db->join('buku','buku.buku_id = peminjaman.buku_id','left');
		$this->db->join('penulis','penulis.pen_id = peminjaman.pen_id','left');
		$this->db->join('penerbit','penerbit.penerbit_id = peminjaman.penerbit_id','left');
		$this->db->join('kategori','kategori.kat_id = peminjaman.kat_id','left');
		$this->db->join('petugas','petugas.pet_id = peminjaman.pet_id','left')->where('status = "Sedang Dipinjam"');
		return $this->db->get();
	}
}
