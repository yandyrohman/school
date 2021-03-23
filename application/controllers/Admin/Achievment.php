<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Achievment extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(['form', 'url']);
	}

	private function preData($data, $id = false) {
		$dataStore = [
			'title' => $data['title'],
			'rank' => $data['rank'],
			'year' => $data['year'],
			'location' => $data['location'],
			'story' => $data['story']
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
		$datas = $this->db->get('achievment')->result();
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/achievment/index',
			'datas' => $datas,
			'msg' => $msg
		]);
	}

	public function create() {
		$this->load->view('admin/app', [
			'view' => 'admin/achievment/form'
		]);
	}

	public function store() {
		$data = $this->input->post();
		$dataStore = $this->preData($data);
		$this->db->insert('achievment', $dataStore);

		if (isset($dataStore['photo'])) {
			$this->upload('photo', $dataStore['photo']);
		}

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/achievment/index'));
	}

	public function edit($id) {
		$data = $this->db->get_where('achievment', [
			'id' => $id
		])->row();
		if ($data) {
			$this->load->view('admin/app', [
				'view' => 'admin/achievment/form',
				'data' => $data
			]);
		} else {
			$msg = '<div class="alert alert-danger">Data tidak ditemukan</div>';
			$this->session->set_flashdata('msg', $msg);
			return redirect(base_url('admin/achievment/index'));
		}
	}

	public function update($id) {
		$data = $this->input->post();
		$dataStore = $this->preData($data, $id);

		if (isset($dataStore['photo'])) {
			$this->upload('photo', $dataStore['photo'], $id);
		}

		$this->db->where('id', $id);
		$this->db->update('achievment', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil ubah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/achievment/index'));
	}

	public function delete($id) {
		$this->deleteFile($id);
		
		$this->db->where('id', $id);
		$this->db->delete('achievment');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/achievment/index'));
	}

	private function upload($name, $filename, $id = false) {
		if ($id) {
			$data = $this->getDataById($id);
			unlink('./img/achievment/'.$data->photo);
		}
		
		$this->load->library('upload', [
			'upload_path' => './img/achievment/',
			'allowed_types' => 'gif|jpg|png',
			'file_name' => $filename
		]);
		$this->upload->do_upload($name);
	}

	private function deleteFile($id) {
		$data = $this->getDataById($id);
		$filename = $data->photo;
		unlink('./img/achievment/'.$data->photo);
	}

	private function getDataById($id) {
		$data = $this->db->get_where('achievment', [
			'id' => $id
		])->result(); 
		return $data[0];
	}

}

