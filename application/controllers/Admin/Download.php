<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	private function preData($data, $id = false) {
		$dataStore = [
			'name' => $data['name'],
			'link' => $data['link'],
			'summary' => $data['summary']
		];

		if ($id) {
			$dataStore['updated_at'] = date('Y-m-d H:i:s');
		} else {
			$dataStore['created_at'] = date('Y-m-d H:i:s');
			$dataStore['updated_at'] = date('Y-m-d H:i:s');
		}

		return $dataStore;
	}

	public function index() {
		$datas = $this->db->get('download')->result();
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/download/index',
			'datas' => $datas,
			'msg' => $msg
		]);
	}

	public function create() {
		$this->load->view('admin/app', [
			'view' => 'admin/download/form'
		]);
	}

	public function store() {
		$data = $this->input->post();
		$dataStore = $this->preData($data);
		$this->db->insert('download', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/download/index'));
	}

	public function edit($id) {
		$data = $this->db->get_where('download', [
			'id' => $id
		])->row();
		if ($data) {
			$this->load->view('admin/app', [
				'view' => 'admin/download/form',
				'data' => $data
			]);
		} else {
			$msg = '<div class="alert alert-danger">Data tidak ditemukan</div>';
			$this->session->set_flashdata('msg', $msg);
			return redirect(base_url('admin/download/index'));
		}
	}

	public function update($id) {
		$data = $this->input->post();
		$dataStore = $this->preData($data, $id);

		$this->db->where('id', $id);
		$this->db->update('download', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil ubah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/download/index'));
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('download');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/download/index'));
	}

}

