<?php

class History extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_history','h');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('file');
		if($this->session->userdata('status')!== 'anggotalogin'){
			redirect('auth/');
		}

	}
	function index()
	{
		$data['history'] = $this->h->tampil()->result_array();
		$data['title'] = 'Riwayat Transaksi';
		$data['sub_title'] = 'Riwayat Peminjaman';
		$data['content_view'] = 'history/history';
		$this->template->template_anggota($data);
	}
}
