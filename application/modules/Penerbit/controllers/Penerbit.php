<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penerbit extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_penerbit','pub');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('file');
	}
	public function index()
	{
		$data['penerbit'] = $this->pub->semua_penerbit()->result_array();
		$data['modal_title'] = 'Tambah Penerbit';
		$data['penerbit_id'] = $this->pub->penerbit_id();
		$data['sub_title'] = 'Data penerbit';
		$data['title'] = 'Manajemen penerbit';
		$data['content_view'] = 'penerbit/data_penerbit';
		$this->template->template_admin($data);
	}
	function tambah()
		{
			$params = array(
				'penerbit_id'			=> $this->input->post('penerbit_id'),
				'penerbit_nama'			=> $this->input->post('penerbit_nama'),
				'penerbit_alamat'		=> $this->input->post('penerbit_alamat'),
				'penerbit_telp'			=> $this->input->post('penerbit_telp'),
			);
			$this->pub->tambah_penerbit($params,'penerbit');
			redirect('penerbit');
		}
	function hapus($penerbit_id)
    {
        $penerbit = $this->pub->ambil($penerbit_id);

        // cek penerbit ada atau tidak
        if(isset($penerbit['penerbit_id']))	
        {
            $this->pub->hapus($penerbit_id);
            redirect('penerbit');
        }
        else
            show_error('penerbit yang ingin dihapus tidak ada.');
	}
	function ubah($penerbit_id)
	{
		$where = array('penerbit_id' => $penerbit_id);
		$data['penerbit'] = $this->pub->edit_data($where,'penerbit');
		$data['sub_title'] = 'Ubah Data Penerbit';
		$data['title'] = 'Manajemen Penerbit';
        $data['content_view'] = 'penerbit/ubah';
		
		$this->template->template_admin($data);
	}
	function update($penerbit_id = NULL)
	{
		$params = array(
			'penerbit_id'			=> $this->input->post('penerbit_id'),
			'penerbit_nama'			=> $this->input->post('penerbit_nama'),
			'penerbit_alamat'		=> $this->input->post('penerbit_alamat'),
			'penerbit_telp'			=> $this->input->post('penerbit_telp'),
		);
		$where = array('penerbit_id'=>$penerbit_id);
		$this->pub->update_data($where,$params,'penerbit');
		
		redirect('penerbit','refresh');
		
	}
}
