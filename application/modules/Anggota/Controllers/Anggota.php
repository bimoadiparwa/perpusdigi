<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_anggota','a');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('file');
	}
	public function index()
	{
		$data['anggota'] = $this->a->semua_anggota()->result_array();
		$data['modal_title'] = 'Tambah anggota';
		$data['ang_id'] = $this->a->ang_id();
		$data['sub_title'] = 'Data anggota';
		$data['title'] = 'Manajemen anggota';
		$data['content_view'] = 'anggota/data_anggota';
		$this->template->template_admin($data);
	}
	function hapus($ang_id)
    {
        $anggota = $this->a->ambil($ang_id);

        // cek anggota ada atau tidak
        if(isset($anggota['ang_id']))	
        {
            $this->a->hapus($ang_id);
            redirect('anggota');
        }
        else
            show_error('anggota yang ingin dihapus tidak ada.');
	}
	function ubah($ang_id)
	{
		$where = array('ang_id' => $ang_id);
		$data['anggota'] = $this->a->edit_data($where,'anggota');
		$data['sub_title'] = 'Ubah Data anggota';
		$data['title'] = 'Manajemen anggota';
        $data['content_view'] = 'anggota/ubah';
		
		$this->template->template_admin($data);
	}
	function update($ang_id = NULL)
	{
		$params = array(
			'ang_id'			=> $this->input->post('ang_id'),
			'ang_nama'			=> $this->input->post('ang_nama'),
			'ang_alamat'		=> $this->input->post('ang_alamat'),
			'ang_telp'			=> $this->input->post('ang_telp'),
		);
		$where = array('ang_id'=>$ang_id);
		$this->a->update_data($where,$params,'anggota');
		
		redirect('anggota','refresh');
		
	}
}
