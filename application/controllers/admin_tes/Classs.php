<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classs extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(['form', 'url']);
	}

	private function isLogin() {
		if(!isset($_SESSION['has_login'])) {
			return redirect(base_url('login'));
		}
	}

	private function preData($data, $id = false) {
		$dataStore = [
			'major_id' => $data['major_id'],
			'name' => $data['name'],
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		];

		return $dataStore;
	}

	public function index() {
		$this->isLogin();
		$this->session->set_userdata(['page' => 'class']);

		$datas = $this->db->where([
			'major_id !=' => 0
		])->get('class')->result();
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/class/index',
			'datas' => $datas,
			'msg' => $msg
		]);
	}

	private function createNonClass() {
		$exist = $this->db->get_where('class', [
			'major_id' => 0
		])->result();
		if (count($exist) == 0) {
			$this->db->insert('class', [
				'major_id' => 0,
				'name' => 'Alumni',
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			]);
		}
	}

	public function create() {
		$this->isLogin();
		$this->createNonClass();
		$majors = $this->db->get('major')->result();
		$this->load->view('admin/app', [
			'view' => 'admin/class/form',
			'majors' => $majors
		]);
	}

	public function store() {
		$this->isLogin();
		$data = $this->input->post();
		$dataStore = $this->preData($data);
		$this->db->insert('class', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah kelas</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/classs/index'));
	}

	public function delete($id) {
		$this->isLogin();
		$this->db->where('id', $id);
		$this->db->delete('class');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus kelas</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/classs/index'));
	}

}

