<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengembalian extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	function laporan()
	{
		$this->db->select('*');
		$this->db->from('pengembalian');
		$this->db->join('peminjaman','peminjaman.id_peminjaman = pengembalian.id_peminjaman','inner')->where('peminjaman.status = "Sudah Dikembalikan"');
		return $this->db->get();
	}
	function tampil(){
		//$this->db->query('SELECT * FROM pengembalian INNER JOIN peminjaman ON pengembalian.id_peminjaman = peminjaman.id_peminjaman');

		$this->db->select('*');
		$this->db->from('pengembalian');
		$this->db->join('peminjaman','pengembalian.id_peminjaman = peminjaman.id_peminjaman','inner')->where('peminjaman.status = "Sudah Dikembalikan"');
		return $this->db->get();
	}
	function get_peminjaman($where,$table)
	{
		$this->db->select('*');
		  $this->db->from($table);
		  $this->db->join('buku','buku.buku_id = peminjaman.buku_id');
		  $this->db->join('penulis','penulis.pen_id = peminjaman.pen_id');
		  $this->db->join('penerbit','penerbit.penerbit_id = peminjaman.penerbit_id');
		  $this->db->join('kategori','kategori.kat_id = peminjaman.kat_id')->where('id_peminjaman',implode($where));
		return $this->db->get();
}
function insert_pengembalian($params)
	  {
		return $this->db->insert('pengembalian',$params);
	  }

	  public function UpdateStatus($id_peminjaman, $data)
    {
        $this->db->where("id_peminjaman", $id_peminjaman);
        $this->db->update('peminjaman', $data);
        
    }
}

/* End of file Mod_pengembalian.php */
