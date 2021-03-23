<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(['form', 'url']);
	}

	private function preData($data, $id = false) {
		$dataStore = [
			'name' => $data['name'],
			'username' => $data['username'],
			'password' => $data['password'],
			'email' => $data['email'],
			'role' => $data['role'],
		];

		if (!empty($_FILES['photo']['name'])) {
			$dataStore['photo'] = time().'.jpg';
		}

		if ($id) {
			$dataStore['updated_at'] = date('Y-m-d H:i:s');
		} else {
			$dataStore['created_at'] = date('Y-m-d H:i:s');
			$dataStore['updated_at'] = date('Y-m-d H:i:s');
		}

		return $dataStore;
	}

	public function index() {
		if (isset($_GET['q'])) {
			$datas = $this->db->get_where('users', [
				'name like' => '%'.$_GET['q'].'%'
			])->result();
		} else {
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			} else {
				$page = 1;
			}
			$limit = 5;
			$offset = ($page - 1) * $limit;
			$datas = $this->db->get('users', $limit, $offset)->result();
		}
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/users/index',
			'datas' => $datas,
			'msg' => $msg,
			'page' => $page ?? false,
			'q' => $_GET['q'] ?? ''
		]);
	}

	public function create() {
		$this->load->view('admin/app', [
			'view' => 'admin/users/form'
		]);
	}

	public function store() {
		$data = $this->input->post();

		// password validate
		if ($data['password2'] != $data['password']) {
			return redirect(base_url('admin/users/create?err_password=true'));
		}

		// username validate
		if ($this->isUsernameExist($data['username'])) {
			return redirect(base_url('admin/users/create?err_username=true'));
		}

		$dataStore = $this->preData($data);
		$this->db->insert('users', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/users/index'));
	}

	public function edit($id) {
		$data = $this->db->get_where('users', [
			'id' => $id
		])->row();
		if ($data) {
			$this->load->view('admin/app', [
				'view' => 'admin/users/form',
				'data' => $data
			]);
		} else {
			$msg = '<div class="alert alert-danger">Data tidak ditemukan</div>';
			$this->session->set_flashdata('msg', $msg);
			return redirect(base_url('admin/users/index'));
		}
	}

	public function update($id) {
		$data = $this->input->post();
		$dataStore = $this->preData($data, $id);

		$this->db->where('id', $id);
		$this->db->update('users', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil ubah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/users/index'));
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('users');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/users/index'));
	}

	public function show($id) {
		$data = $this->getDataById($id);
		$this->load->view('admin/app', [
			'view' => 'admin/users/show',
			'data' => $data
		]);
	}

	private function getDataById($id) {
		$data = $this->db->get_where('users', [
			'id' => $id
		])->result(); 
		return $data[0];
	}

	private function isUsernameExist($username) {
		$data = $this->db->get_where('users', [
			'username' => $username
		])->result(); 
		return count($data) > 0 ? true : false;
	}

}

