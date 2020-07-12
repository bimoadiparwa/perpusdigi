<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_history extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	
	public function tampil()
	{
		
		$this->db->select('*');
		$this->db->from('peminjaman');
		$this->db->join('anggota','anggota.ang_id = peminjaman.ang_id','left');
		$this->db->join('buku','buku.buku_id = peminjaman.buku_id','left');
		$this->db->join('penulis','penulis.pen_id = peminjaman.pen_id','left');
		$this->db->join('penerbit','penerbit.penerbit_id = peminjaman.penerbit_id','left');
		$this->db->join('kategori','kategori.kat_id = peminjaman.kat_id','left');
		$this->db->join('petugas','petugas.pet_id = peminjaman.pet_id','left')->where('anggota.ang_id ',$this->session->userdata('ang_id'));
		return $this->db->get();
	}
	function tampil_kembali()
	{
		$this->db->get('pengembalian');
	}
}

/* End of file ModelName.php */
