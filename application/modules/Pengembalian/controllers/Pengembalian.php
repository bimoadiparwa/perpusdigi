<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengembalian','kem');
		$this->load->model('peminjaman/M_peminjaman','pin');
		$this->load->model('buku/M_buku','b');
		$this->load->model('penerbit/M_penerbit','pub');
		$this->load->model('penulis/M_penulis','pen');
		$this->load->model('kategori/M_kategori','k');
		$this->load->helper('form');
		$this->load->helper('url');
		
	}
	function laporan()
	{
		$data['kembali'] = $this->kem->laporan()->result_array();
		//$data['pengembalian'] = $this->kem->tampil()->result_array();
		$data['sub_title'] = 'Laporan Pengembalian Buku';
		$data['title'] = 'Laporan Pengembalian buku';
		$data['content_view'] = 'pengembalian/data_pengembalian';
		$this->template->template_admin($data);
		
	}
	function form($id_peminjaman = NULL)
	{
		$where = array('id_peminjaman' => $id_peminjaman);
		$data['peminjaman'] = $this->pin->edit_data($where,'peminjaman');
		$data['pengembalian'] = $this->kem->tampil()->result_array();
		$data['kategori'] = $this->k->semua_kategori()->result_array();
		$data['penerbit'] = $this->pub->semua_penerbit()->result_array();
		$data['penulis'] = $this->pen->semua_penulis()->result_array();
		$data['sub_title'] = 'Pengembalian Buku';
		$data['title'] = 'Pengembalian buku';
        $data['content_view'] = 'pengembalian/form_pengembalian';
		
		$this->template->template_admin($data);
	}
	function simpan()
	{
		$params = array(
			'id_peminjaman' => $this->input->post('id_peminjaman'),
			'pet_id' => $this->input->post('pet_id'),
			'tgl_kembali' => $this->input->post('tgl_kembali'),
			'denda' => $this->input->post('denda'),
			'nominal' => $this->input->post('nominal')
		);
		$this->kem->insert_pengembalian($params,'pengembalian');
		$id_peminjaman = $this->input->post('id_peminjaman');
		$data = array('status' => 'Sudah Dikembalikan');
		$this->kem->updatestatus($id_peminjaman,$data);
	
		redirect('dashboard');
	}
}
