<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_buku','b');
		$this->load->model('penerbit/M_penerbit','pub');
		$this->load->model('penulis/M_penulis','pen');
		$this->load->model('kategori/M_kategori','k');
		$this->load->model('perpus/M_perpus','p');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('file');
		
	}
	public function index()
	{
		$data['buku'] = $this->b->semua_buku()->result_array();
		$data['kategori'] = $this->k->semua_kategori()->result_array();
		$data['penerbit'] = $this->pub->semua_penerbit()->result_array();
		$data['penulis'] = $this->pen->semua_penulis()->result_array();
		$data['modal_title'] = 'Tambah Buku';
		$data['buku_id'] = $this->b->buku_id();
		$data['isbn'] = $this->b->isbn();
		$data['sub_title'] = 'Data Buku';
		$data['title'] = 'Manajemen Buku';
		$data['content_view'] = 'buku/data_buku';
		$this->template->template_admin($data);
	}
	function tambah()
		{ 
			$params = array(
				'buku_id'			=> $this->input->post('buku_id'),
				'buku_isbn'			=> $this->input->post('buku_isbn'),
				'buku_judul'		=> $this->input->post('buku_judul'),
				'buku_deskripsi'	=> $this->input->post('buku_deskripsi'),
				'buku_halaman'		=> $this->input->post('buku_halaman'),
				'buku_kategori'		=> $this->input->post('buku_kategori'),
				'genre'				=> $this->input->post('genre'),
				'kd_rak'			=> $this->input->post('kd_rak'),
				'buku_penulis'		=> $this->input->post('buku_penulis'),
				'buku_penerbit'		=> $this->input->post('buku_penerbit'),
				'buku_tahun'		=> $this->input->post('buku_tahun'),
				'buku_stock'		=> $this->input->post('buku_stock'),
				'buku_gambar'		=> $this->uploadGambar(),
			);
			$this->b->tambah_buku($params,'buku');
			redirect('buku');
		}
		private function uploadGambar()
		{
			$config['upload_path']          = './assets/upload/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']            = $this->input->post('buku_judul');
			$config['overwrite']			= true;
			$config['max_size']             = 2048; // 1MB

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('buku_gambar')) {
				return $this->upload->data("file_name");
			}
			
			return "default.jpg";
		}	
		function hapus($buku_id)
		{
			$buku = $this->b->ambil($buku_id);
	
			// cek buku ada atau tidak
			if(isset($buku['buku_id']))	
			{
				$this->b->hapus($buku_id);
				redirect('buku');
			}
			else
				show_error('Buku yang ingin dihapus tidak ada.');
		}
	function ubah($buku_id)
	{
		$where = array('buku_id' => $buku_id);
		$data['buku'] = $this->b->edit_data($where,'buku');
		$data['kategori'] = $this->k->semua_kategori()->result_array();
		$data['penerbit'] = $this->pub->semua_penerbit()->result_array();
		$data['penulis'] = $this->pen->semua_penulis()->result_array();
		$data['sub_title'] = 'Ubah Data buku';
		$data['title'] = 'Manajemen buku';
        $data['content_view'] = 'buku/ubah';
		
		$this->template->template_admin($data);
	}
	function update($buku_id = NULL)
	{
		$ret =  $this->db->query('SELECT buku_gambar from buku where buku_id = ?',array($buku_id))->row_array();
				unlink('./assets/upload/' . $ret['buku_gambar']);
		$old_gambar = $this->uploadGambar();
		$params = array(
			'buku_id'			=> $this->input->post('buku_id'),
			'buku_isbn'			=> $this->input->post('buku_isbn'),
			'buku_judul'		=> $this->input->post('buku_judul'),
			'buku_deskripsi'	=> $this->input->post('buku_deskripsi'),
			'buku_halaman'		=> $this->input->post('buku_halaman'),
			'buku_kategori'		=> $this->input->post('buku_kategori'),
			'genre'				=> $this->input->post('genre'),
			'kd_rak'			=> $this->input->post('kd_rak'),
			'buku_penulis'		=> $this->input->post('buku_penulis'),
			'buku_penerbit'		=> $this->input->post('buku_penerbit'),
			'buku_tahun'		=> $this->input->post('buku_tahun'),
			'buku_stock'		=> $this->input->post('buku_stock'),
			'buku_gambar'		=> $old_gambar,
		);
		$where = array('buku_id'=>$buku_id);
		$this->b->update_data($where,$params,'buku');
		
		redirect('buku','refresh');
		
	}
	public function buku()
	{
		$data['buku'] = $this->b->semua_buku()->result_array();
		$data['kategori'] = $this->k->semua_kategori()->result_array();
		$data['penerbit'] = $this->pub->semua_penerbit()->result_array();
		$data['penulis'] = $this->pen->semua_penulis()->result_array();
		$data['modal_title'] = 'Tambah Buku';
		$data['buku_id'] = $this->b->buku_id();
		$data['sub_title'] = 'Data Buku';
		$data['title'] = 'Manajemen Buku';
		$data['content_view'] = 'buku/buku';
		$this->template->template_anggota($data);
	}
	function detail($buku_id)
	{
		$data['buku'] = $this->b->detail_buku($buku_id,'buku');
		$data['title'] = 'Detail buku';
		$data['content_view'] = 'buku/detail';
		$this->template->template_anggota($data);
	}
}
