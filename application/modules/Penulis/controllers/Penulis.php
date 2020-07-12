<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penulis extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_penulis','pen');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('file');
		if($this->session->userdata('status')!== 'adminlogin'){
			redirect('auth/admin');
		}
	}
	public function index()
	{
		$data['penulis'] = $this->pen->semua_penulis()->result_array();
		$data['modal_title'] = 'Tambah penulis';
		$data['pen_id'] = $this->pen->pen_id();
		$data['sub_title'] = 'Data penulis';
		$data['title'] = 'Manajemen penulis';
		$data['content_view'] = 'penulis/data_penulis';
		$this->template->template_admin($data);
	}
	function tambah()
		{
			$params = array(
				'pen_id'			=> $this->input->post('pen_id'),
				'pen_lahir'			=> $this->input->post('pen_lahir'),
				'pen_jk'			=> $this->input->post('pen_jk'),
				'pen_nama'			=> $this->input->post('pen_nama'),
				'pen_alamat'		=> $this->input->post('pen_alamat'),
				'pen_telp'			=> $this->input->post('pen_telp'),
			);
			$this->pen->tambah_penulis($params,'penulis');
			redirect('penulis');
		}
	function hapus($pen_id)
    {
        $penulis = $this->pen->ambil($pen_id);

        // cek penulis ada atau tidak
        if(isset($penulis['pen_id']))	
        {
            $this->pen->hapus($pen_id);
            redirect('penulis');
        }
        else
            show_error('penulis yang ingin dihapus tidak ada.');
	}
	function ubah($pen_id)
	{
		$where = array('pen_id' => $pen_id);
		$data['penulis'] = $this->pen->edit_data($where,'penulis');
		$data['sub_title'] = 'Ubah Data penulis';
		$data['title'] = 'Manajemen penulis';
        $data['content_view'] = 'penulis/ubah';
		
		$this->template->template_admin($data);
	}
	function update($pen_id = NULL)
	{
		$params = array(
			'pen_id'			=> $this->input->post('pen_id'),
			'pen_lahir'			=> $this->input->post('pen_lahir'),
			'pen_jk'			=> $this->input->post('pen_jk'),
			'pen_nama'			=> $this->input->post('pen_nama'),
			'pen_alamat'		=> $this->input->post('pen_alamat'),
			'pen_telp'			=> $this->input->post('pen_telp'),
		);
		$where = array('pen_id'=>$pen_id);
		$this->pen->update_data($where,$params,'penulis');
		
		redirect('penulis','refresh');
		
	}
}
