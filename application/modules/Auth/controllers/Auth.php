<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_auth','a');
		$this->load->model('anggota/M_anggota','ang');
		$this->load->model('petugas/M_petugas','pet');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->helper('file');
	}
	function index()
	{
		$this->load->view('login_anggota');
	}
	function login_anggota()
	{
		$email = $this->input->post('email');
		$pass  = md5($this->input->post('password'));

		$cek = $this->ang->cek_login($email, $pass);

		if($cek->num_rows() > 0)
		{
			foreach ($cek->result() as $atr) {
					$sess['ang_id']				= $atr->ang_id;
					$sess['ang_nama'] 			= $atr->ang_nama;
					$sess['ang_lahir'] 			= $atr->ang_lahir;
					$sess['ang_jk'] 			= $atr->ang_jk;
					$sess['ang_alamat'] 		= $atr->ang_alamat;
					$sess['ang_telp'] 			= $atr->ang_telp;
					$sess['email'] 				= $atr->email;
					$sess['status'] 			= 'anggotalogin';

				$this->session->set_userdata($sess);
				
				
				redirect('perpus','refresh');
				
			}
		}
		else
		{
			
			redirect('auth','refresh');
			
		}
	}
	function daftar_anggota()
	{
		$data['ang_id'] = $this->ang->ang_id();
		$data['title'] = 'Pendaftaran Anggota';
		$data['form']  = 'Daftar Anggota';
		$this->load->view('form_anggota',$data);
	}
	function daftar()
	{
		
				//Create Data Array
				$params = array(

					'ang_id'      => $this->input->post('ang_id'),
					'ang_nama'    => $this->input->post('ang_nama'),
					'ang_lahir'     => $this->input->post('ang_lahir'),
					'ang_alamat'      => $this->input->post('ang_alamat'),
					'ang_telp'      => $this->input->post('ang_telp'),
					'password'      => md5($this->input->post('password')),
					'email'         => $this->input->post('email')
				);
				//Table Insert
				$this->a->tambah_anggota($params,'anggota');
			
				//Create Message
				$this->session->set_flashdata('Data Tersimpan', 'Anggota telah terdaftar');
	
				//Redirect to pages
				redirect('auth');
	}
	function logout()
	{
		session_destroy();
		
		redirect('perpus','refresh');
		
	}
	function admin()
	{
		$this->load->view('login_admin');
	}
	function login_admin()
	{
		$email = $this->input->post('email',TRUE);
		$pass  = md5($this->input->post('password',TRUE));

		$cek = $this->pet->cek_admin($email, $pass);

		if($cek->num_rows() > 0)
		{
			foreach ($cek->result() as $atr) {
					$sess['pet_id']				= $atr->pet_id;
					$sess['pet_nama'] 			= $atr->pet_nama;
					$sess['pet_lahir'] 			= $atr->pet_lahir;
					$sess['pet_jk'] 			= $atr->pet_jk;
					$sess['pet_alamat'] 		= $atr->pet_alamat;
					$sess['pet_telp']	 		= $atr->pet_telp;
					$sess['email'] 				= $atr->email;
					$sess['role'] 				= $atr->role;
					$sess['status']	 			= 'adminlogin';

				$this->session->set_userdata($sess);
					redirect('dashboard','refresh');
			}
		}
		else
		{
			
			redirect('auth/admin','refresh');
			
		}
	}
}
