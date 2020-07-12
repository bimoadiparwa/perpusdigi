<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller {
	function __construct()
	{
		parent::__construct();
	}
	public function template_admin($data = null)
	{
		$this->load->view('Template/v_admin',$data);
	}
	public function template_anggota($data = null)
	{
		$this->load->view('Template/v_anggota',$data);
	}
}
