<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_peminjaman','pin');
		$this->load->model('buku/M_buku','b');
		$this->load->model('penerbit/M_penerbit','pub');
		$this->load->model('penulis/M_penulis','pen');
		$this->load->model('kategori/M_kategori','k');
		$this->load->helper('form');
		$this->load->helper('url');
	}
	public function index()
	{
		$data['pinjam'] = $this->pin->semua_peminjaman()->result_array();
		$data['sub_title'] = 'Data Peminjaman';
		$data['title'] = 'Manajemen Peminjaman';
		$data['content_view'] = 'peminjaman/data_peminjaman';
		$this->template->template_admin($data);
	}
	public function ubah($id_peminjaman)
	{
		$where = array('id_peminjaman' => $id_peminjaman);
		$data['peminjaman'] = $this->pin->edit_data($where,'peminjaman');
		$data['kategori'] = $this->k->semua_kategori()->result_array();
		$data['penerbit'] = $this->pub->semua_penerbit()->result_array();
		$data['penulis'] = $this->pen->semua_penulis()->result_array();
		$data['sub_title'] = 'Ubah Data buku';
		$data['title'] = 'Manajemen buku';
        $data['content_view'] = 'peminjaman/ubah';
		
		$this->template->template_admin($data);
	}
	function update($id_peminjaman = NULL)
	{
		$params = array(
			'id_peminjaman'		=> $this->input->post('id_peminjaman'),
			'status'			=> $this->input->post('status'),
			'pet_id'			=> $this->session->userdata('pet_id'),
		);
		$where = array('id_peminjaman'=>$id_peminjaman);
		$this->b->update_data($where,$params,'peminjaman');
		
		redirect('peminjaman','refresh');
		
	}
	function hapus($id_peminjaman)
	{
		$peminjaman = $this->pin->ambil($id_peminjaman);
	
			// cek buku ada atau tidak
			if(isset($peminjaman['id_peminjaman']))	
			{
				$this->pin->hapus($id_peminjaman);
				redirect('peminjaman');
			}
			else
				show_error('Data peminjaman yang ingin dihapus tidak ada.');
	}
	function laporan()
	{
		$data['pinjam'] = $this->pin->laporan()->result_array();
		$data['sub_title'] = 'Laporan Peminjaman';
		$data['title'] = 'Laporan Peminjaman';
		$data['content_view'] = 'peminjaman/laporan';
		$this->template->template_admin($data);
	}
}
