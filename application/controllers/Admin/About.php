<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(['form', 'url']);
	}

	private function isLogin() {
		if(!isset($_SESSION['has_login'])) {
			return redirect(base_url('login'));
		}
	}

	private function preData($data) {
		$dataStore = [
			'title' => $data['title'],
			'text' => $data['text'],
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		];

		if($data['youtube'] != '') {
			$dataStore['youtube'] = $data['youtube'];
		}

		return $dataStore;
	}

	public function index() {
		$this->isLogin();
		$this->session->set_userdata(['page' => 'about']);

		$data = $this->db->get('about')->result();
		if (count($data) > 0) {
			$data = $data[0];
		} else {
			$data = (object)[];
    	}
    
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/about/form',
			'data' => $data,
			'msg' => $msg
		]);
	}

	public function update() {
		$this->isLogin();
		$data = $this->input->post();
		$dataStore = $this->preData($data);
		$isExist = $this->db->get('about')->result();

		if ($isExist) {
			$this->db->where('id', 1);
			$this->db->update('about', $dataStore);
		} else {
			$dataStore['id'] = 1;
			$this->db->insert('about', $dataStore);
		}

		// back
		$msg = '<div class="alert alert-success">Berhasil ubah sambutan</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/about/index'));
	}

}
