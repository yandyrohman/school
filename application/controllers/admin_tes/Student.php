<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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
			'student_number' => $data['student_number'],
			'national_student_number' => $data['national_student_number'],
			'class_id' => $data['class_id'],
			'name' => $data['name'],
			'gender' => $data['gender'],
			'dad_name' => $data['dad_name'],
			'mom_name' => $data['mom_name'],
			'birth_date' => $data['birth_date'],
			'birth_place' => $data['birth_place'],
			'religion' => $data['religion'],
			'address' => $data['address'],
			'village' => $data['village'],
			'district' => $data['district'],
			'city' => $data['city'],
			'province' => $data['province'],
			'phone' => $data['phone'],
			'email' => $data['email']
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
		$this->isLogin();
		$this->session->set_userdata(['page' => 'student']);

		$this->db->select('student.*, class.name as class_name');
		$this->db->from('student');
		$this->db->join('class', 'student.class_id = class.id', 'left');
		
		if (isset($_GET['class_id'])) {
			$this->db->where('class_id', $_GET['class_id']);
		}

		if (isset($_GET['q'])) {
			$this->db->like('student.name', $_GET['q']);
			$datas = $this->db->get()->result();
		} else {
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			} else {
				$page = 1;
			}
			$limit = 5;
			$offset = ($page - 1) * $limit;
			$this->db->limit($limit, $offset);
			$datas = $this->db->get()->result();
		}
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/student/index',
			'datas' => $datas,
			'msg' => $msg,
			'page' => $page ?? false,
			'q' => $_GET['q'] ?? '',
			'classs' => $this->db->get('class')->result(),
			'class_id' => $_GET['class_id'] ?? ''
		]);
	}

	public function create() {
		$this->isLogin();
		$classes = $this->db->get('class')->result();
		$this->load->view('admin/app', [
			'view' => 'admin/student/form',
			'classes' => $classes
		]);
	}

	public function store() {
		$this->isLogin();
		$data = $this->input->post();
		$dataStore = $this->preData($data);
		$this->db->insert('student', $dataStore);

		if (isset($dataStore['photo'])) {
			$this->upload('photo', $dataStore['photo']);
		}

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/student/index'));
	}

	public function edit($id) {
		$this->isLogin();
		$classes = $this->db->get('class')->result();
		$data = $this->db->get_where('student', [
			'id' => $id
		])->row();
		if ($data) {
			$this->load->view('admin/app', [
				'view' => 'admin/student/form',
				'classes' => $classes,
				'data' => $data
			]);
		} else {
			$msg = '<div class="alert alert-danger">Data tidak ditemukan</div>';
			$this->session->set_flashdata('msg', $msg);
			return redirect(base_url('admin/student/index'));
		}
	}

	public function update($id) {
		$this->isLogin();
		$data = $this->input->post();
		$dataStore = $this->preData($data, $id);

		if (isset($dataStore['photo'])) {
			$this->upload('photo', $dataStore['photo'], $id);
		}

		$this->db->where('id', $id);
		$this->db->update('student', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil ubah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/student/index'));
	}

	public function delete($id) {
		$this->isLogin();
		$this->deleteFile($id);
		
		$this->db->where('id', $id);
		$this->db->delete('student');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/student/index'));
	}

	public function show($id) {
		$this->isLogin();
		$data = $this->getDataById($id);
		$this->load->view('admin/app', [
			'view' => 'admin/student/show',
			'data' => $data
		]);
	}

	private function upload($name, $filename, $id = false) {
		if ($id) {
			$data = $this->getDataById($id);
			unlink('./img/student/'.$data->photo);
		}
		
		$this->load->library('upload', [
			'upload_path' => './img/student/',
			'allowed_types' => 'gif|jpg|png',
			'file_name' => $filename
		]);
		$this->upload->do_upload($name);
	}

	private function deleteFile($id) {
		$data = $this->getDataById($id);
		$filename = $data->photo;
		unlink('./img/student/'.$data->photo);
	}

	private function getDataById($id) {
		$this->db->select('student.*, class.name as class_name');
		$this->db->from('student');
		$this->db->join('class', 'student.class_id = class.id', 'left');

		$this->db->where('student.id', $id);
		$data = $this->db->get()->result(); 
		return $data[0];
	}

	public function upgradeForm() {
		$msg = $this->session->flashdata('msg');
		$datas = $this->db->order_by('id', 'desc')->get('class')->result();
		$this->load->view('admin/app', [
			'view' => 'admin/student/upgrade',
			'datas' => $datas,
			'msg' => $msg
		]);
	}

	public function upgrade() {

		// cek if duplicate upgrade class
		$upgradeExist = [];
		$duplicate = false;
		foreach($_POST as $before => $after) {
			if (isset($upgradeExist[$after])) {
				$duplicate = true;
			}
			$upgradeExist[$after] = true;
		}
		if ($duplicate) {
			$msg = '<div class="alert alert-danger">Tidak boleh memilih kelas naik yang sama.</div>';
			$this->session->set_flashdata('msg', $msg);
			return redirect(base_url('admin/student/upgradeform'));
		}

		// print_r($_POST);
		// return;

		// update class in student
		foreach($_POST as $before => $after) {
			$this->db->where('class_id', $before);
			$this->db->update('student', [
				'class_id' => $after
			]);
		}

		// back
		$msg = '<div class="alert alert-success">Kelas berhasil dinaikan</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/student/index'));
	}

}

