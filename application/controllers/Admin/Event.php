<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	private function preData($data, $id = false) {
		$dataStore = [
			'title' => $data['title'],
			'text' => $data['text'],
			'is_active' => $data['is_active']
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
		$datas = $this->db->get('event')->result();
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/event/index',
			'datas' => $datas,
			'msg' => $msg
		]);
	}

  public function create() {
    $this->load->view('admin/app', [
			'view' => 'admin/event/form'
		]);
  }

	public function store() {
		$data = $this->input->post();
		$dataStore = $this->preData($data);
		$this->db->insert('event', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/event/index'));
	}

	public function edit($id) {
		$data = $this->db->get_where('event', [
			'id' => $id
		])->row();
		if ($data) {
			$this->load->view('admin/app', [
				'view' => 'admin/event/form',
				'data' => $data
			]);
		} else {
			$msg = '<div class="alert alert-danger">Data tidak ditemukan</div>';
			$this->session->set_flashdata('msg', $msg);
			return redirect(base_url('admin/event/index'));
		}
	}

	public function update($id) {
		$data = $this->input->post();
		$dataStore = $this->preData($data, $id);
		$this->db->where('id', $id);
		$this->db->update('event', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil ubah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/event/index'));
	}

	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('event');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/event/index'));
	}

}

