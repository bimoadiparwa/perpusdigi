<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_petugas','pet');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('file');
	}
	public function index()
	{
		$data['petugas'] = $this->pet->semua_petugas()->result_array();
		$data['modal_title'] = 'Tambah petugas';
		$data['pet_id'] = $this->pet->pet_id();
		$data['sub_title'] = 'Data petugas';
		$data['title'] = 'Manajemen petugas';
		$data['content_view'] = 'petugas/data_petugas';
		$this->template->template_admin($data);
	}
	function tambah()
		{
			$params = array(
				'pet_id'			=> $this->input->post('pet_id'),
				'pet_lahir'			=> $this->input->post('pet_lahir'),
				'pet_jk'			=> $this->input->post('pet_jk'),
				'pet_nama'			=> $this->input->post('pet_nama'),
				'pet_alamat'		=> $this->input->post('pet_alamat'),
				'pet_telp'			=> $this->input->post('pet_telp'),
				'email'				=> $this->input->post('email'),
				'password'			=> md5($this->input->post('password')),
				'role'			=> $this->input->post('role'),
			);
			$this->pet->tambah_petugas($params,'petugas');
			redirect('petugas');
		}
	function hapus($pet_id)
    {
        $petugas = $this->pet->ambil($pet_id);

        // cek petugas ada atau tidak
        if(isset($petugas['pet_id']))	
        {
            $this->pet->hapus($pet_id);
            redirect('petugas');
        }
        else
            show_error('petugas yang ingin dihapus tidak ada.');
	}
	function ubah($pet_id)
	{
		$where = array('pet_id' => $pet_id);
		$data['petugas'] = $this->pet->edit_data($where,'petugas');
		$data['sub_title'] = 'Ubah Data petugas';
		$data['title'] = 'Manajemen petugas';
        $data['content_view'] = 'petugas/ubah';
		
		$this->template->template_admin($data);
	}
	function update($pet_id = NULL)
	{
		$params = array(
			'pet_id'			=> $this->input->post('pet_id'),
				'pet_lahir'			=> $this->input->post('pet_lahir'),
				'pet_jk'			=> $this->input->post('pet_jk'),
				'pet_nama'			=> $this->input->post('pet_nama'),
				'pet_alamat'		=> $this->input->post('pet_alamat'),
				'pet_telp'			=> $this->input->post('pet_telp'),
				'email'				=> $this->input->post('email'),
				'password'			=> md5($this->input->post('password')),
				'role'			=> $this->input->post('role'),
		);
		$where = array('pet_id'=>$pet_id);
		$this->pet->update_data($where,$params,'petugas');
		
		redirect('petugas','refresh');
		
	}
}
