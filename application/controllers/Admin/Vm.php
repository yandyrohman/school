<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vm extends CI_Controller {

	private function preData($data, $id = false) {
		$dataStore = [
			'value' => $data['value'],
			'type' => $data['type'],
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		];

		return $dataStore;
	}

	public function index($type = 'visi') {
		$datas = $this->db->get_where('vm', [
			'type' => $type
		])->result();
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/vm/index',
			'datas' => $datas,
			'msg' => $msg,
			'type' => $type
		]);
	}

  public function create($type) {
    $this->load->view('admin/app', [
			'view' => 'admin/vm/form',
			'type' => $type
		]);
  }

	public function store() {
		$data = $this->input->post();
		$dataStore = $this->preData($data);
		$this->db->insert('vm', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/vm/index/'.$dataStore['type']));
	}

	public function delete($id, $type) {
		$this->db->where('id', $id);
		$this->db->delete('vm');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/vm/index/'.$type));
	}

}

