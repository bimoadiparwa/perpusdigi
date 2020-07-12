<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') !== 'adminlogin')
		{
			
			redirect('auth/admin','refresh');
			
		}
	}
	public function index()
	{
		$data['sub_title'] = 'Dashboard';
		$data['title'] = 'Dashboard';
		$data['content_view'] = 'dashboard/v_dashboard';
		$this->template->template_admin($data);
	}
}
