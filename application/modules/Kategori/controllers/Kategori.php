<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_kategori','k');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('file');
	}
	function index()
	{
		$data['kategori'] = $this->k->semua_kategori()->result_array();
		$data['modal_title'] = 'Tambah Kategori';
		$data['kat_id'] = $this->k->kat_id();
		$data['sub_title'] = 'Data Kategori';
		$data['title'] = 'Manajemen Kategori';
		$data['content_view'] = 'kategori/data_kategori';
		$this->template->template_admin($data);
	}
	function tambah()
		{
			$params = array(
				'kat_id'			=> $this->input->post('kat_id'),
				'kat_nama'			=> $this->input->post('kat_nama')
			);
			$this->k->tambah_kategori($params,'kategori');
			redirect('kategori');
		}
	function hapus($kat_id)
    {
        $kategori = $this->k->ambil($kat_id);

        // cek kategori ada atau tidak
        if(isset($kategori['kat_id']))	
        {
            $this->k->hapus($kat_id);
            redirect('kategori');
        }
        else
            show_error('kategori yang ingin dihapus tidak ada.');
	}
	function ubah($kat_id)
	{
		$where = array('kat_id' => $kat_id);
		$data['kategori'] = $this->k->edit_data($where,'kategori');
		$data['sub_title'] = 'Ubah Data kategori';
		$data['title'] = 'Manajemen kategori';
        $data['content_view'] = 'kategori/ubah';
		
		$this->template->template_admin($data);
	}
	function update($kat_id = NULL)
	{
		$params = array(
			'kat_id'			=> $this->input->post('kat_id'),
			'kat_nama'			=> $this->input->post('kat_nama')
		);
		$where = array('kat_id'=>$kat_id);
		$this->k->update_data($where,$params,'kategori');
		
		redirect('kategori','refresh');
		
	}
}
