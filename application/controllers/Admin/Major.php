<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Major extends CI_Controller {

	private function isLogin() {
		if(!isset($_SESSION['has_login'])) {
			return redirect(base_url('login'));
		}
	}

	private function preData($data, $id = false) {
		$dataStore = [
			'name' => $data['name'],
			'text' => $data['text'],
      'created_at' => date('Y-m-d H:i:s'),
      'updated_at' => date('Y-m-d H:i:s')
		];

		return $dataStore;
	}

	public function index() {
		$this->isLogin();
		$this->session->set_userdata(['page' => 'major']);

		$datas = $this->db->get('major')->result();
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/major/index',
			'datas' => $datas,
			'msg' => $msg
		]);
	}

	public function create() {
		$this->isLogin();
		$this->load->view('admin/app', [
			'view' => 'admin/major/form'
		]);
	}

	public function store() {
		$this->isLogin();
		$data = $this->input->post();
		$dataStore = $this->preData($data);
		$this->db->insert('major', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah jurusan</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/major/index'));
	}

	public function delete($id) {	
		$this->isLogin();	
		$this->db->where('id', $id);
		$this->db->delete('major');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus jurusan</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/major/index'));
	}

}

