<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(['form', 'url']);
	}

	private function preData($data, $id = false) {
		$dataStore = [
			'nama' => $data['nama'],
			'address' => $data['address'],
			'phone' => $data['phone'],
			'wa' => $data['wa'],
			'email' => $data['email'],
			'schedule' => $data['schedule'],
			'facebook' => $data['facebook'],
			'youtube' => $data['youtube'],
			'instagram' => $data['instagram'],
			'twitter' => $data['twitter'],
			'text' => $data['text'],
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		];

		return $dataStore;
	}

	public function index() {
		$this->session->set_userdata(['page' => 'profile']);

		$data = $this->db->get('profile')->result();
    if (count($data) > 0) {
      $data = $data[0];
    } else {
      $data = (object)[];
    }
    
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/profile/form',
			'data' => $data,
			'msg' => $msg
		]);
	}

	public function update() {
		$data = $this->input->post();
		$dataStore = $this->preData($data, $id);
		$this->db->where('id', 1);
		$this->db->update('profile', $dataStore);
		$this->upload('logo');

		// back
		$msg = '<div class="alert alert-success">Berhasil ubah profile</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/profile/index'));
	}

	private function upload($name) {
		unlink('./img/logo.png');
		$this->load->library('upload', [
			'upload_path' => './img/',
			'allowed_types' => 'gif|jpg|png',
			'file_name' => 'logo.png'
		]);
		$this->upload->do_upload($name);
	}

}

