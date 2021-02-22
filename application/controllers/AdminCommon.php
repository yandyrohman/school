<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminCommon extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/app', [
			'view' => 'admin/event/index'
		]);
	}

}
