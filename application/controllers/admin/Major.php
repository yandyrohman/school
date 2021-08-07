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

		if (!empty($_FILES['photo']['name'])) {
			$dataStore['photo'] = time().'.jpg';
		}

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

		if (isset($dataStore['photo'])) {
			$this->upload('photo', $dataStore['photo']);
		}

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah jurusan</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/major/index'));
	}

	public function delete($id) {	
		$this->isLogin();	
		$this->deleteFile($id);

		$this->db->where('id', $id);
		$this->db->delete('major');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus jurusan</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/major/index'));
	}

	private function upload($name, $filename, $id = false) {
		if ($id) {
			$data = $this->getDataById($id);
			unlink('./img/major/'.$data->photo);
		}
		
		$this->load->library('upload', [
			'upload_path' => './img/major/',
			'allowed_types' => 'gif|jpg|png',
			'file_name' => $filename
		]);
		$this->upload->do_upload($name);
	}

	private function deleteFile($id) {
		$data = $this->getDataById($id);
		$filename = $data->photo;
		unlink('./img/major/'.$data->photo);
	}

	private function getDataById($id) {
		$data = $this->db->get_where('major', [
			'id' => $id
		])->result(); 
		return $data[0];
	}

}

