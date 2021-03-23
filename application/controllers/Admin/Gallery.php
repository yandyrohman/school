<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(['form', 'url']);
	}

	private function preData($data, $id = false) {
		$dataStore = [
			'title' => $data['title'],
			'text' => $data['text'],
			'count' => 0
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
		$datas = $this->db->get('gallery')->result();
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/gallery/index',
			'datas' => $datas,
			'msg' => $msg
		]);
	}

  public function create() {
		$this->load->view('admin/app', [
			'view' => 'admin/gallery/form'
		]);
  }

	public function store() {
		$data = $this->input->post();
		$dataStore = $this->preData($data);
		$this->db->insert('gallery', $dataStore);

		if (isset($dataStore['photo'])) {
			$this->upload('photo', $dataStore['photo']);
		}

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/gallery/index'));
	}

	public function edit($id) {
		$data = $this->db->get_where('gallery', [
			'id' => $id
		])->row();

		$photos = $this->db->get_where('photo', [
			'gallery_id' => $id
		])->result();
		
		if ($data) {
			$this->load->view('admin/app', [
				'view' => 'admin/gallery/form',
				'data' => $data,
				'photos' => $photos
			]);
		} else {
			$msg = '<div class="alert alert-danger">Data tidak ditemukan</div>';
			$this->session->set_flashdata('msg', $msg);
			return redirect(base_url('admin/gallery/index'));
		}
	}

	public function update($id) {
		$data = $this->input->post();
		$dataStore = $this->preData($data, $id);

		if (isset($dataStore['photo'])) {
			$this->upload('photo', $dataStore['photo'], $id);
		}

		$this->db->where('id', $id);
		$this->db->update('gallery', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil ubah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/gallery/index'));
	}

	public function delete($id) {
		$photos = $this->getPhotosByGalleryId($id);
		foreach($photos as $photo) {
			$this->remove($id, $photo->id, 0, $redirect = false);
		}

		$this->db->where('id', $id);
		$this->db->delete('gallery');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus galeri</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/gallery/index'));
	}

	public function add($id) {
		$filename = time().'.jpg';
		$count = $this->input->post('count');
		$this->upload('photo', $filename);
		$this->db->insert('photo', [
			'gallery_id' => $id,
			'photo' => $filename,
			'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
		]);
		$this->updateCount($id, $count + 1);
		return redirect(base_url('admin/gallery/edit/'.$id));
	}

	private function updateCount($id, $count) {
		$this->db->where('id', $id);
		$this->db->update('gallery', [
			'count' => $count
		]);
	}

	public function remove($gallery_id, $id, $count, $redirect = true) {
		$photo = $this->getPhotoById($id);
		unlink('./img/gallery/'.$photo->photo);
		
		$this->db->where('id', $id);
		$this->db->delete('photo');
		
		$this->updateCount($gallery_id, $count - 1);

		if ($redirect) {
			return redirect(base_url('admin/gallery/edit/'.$gallery_id));
		}
	}

	private function upload($name, $filename) {
		$this->load->library('upload', [
			'upload_path' => './img/gallery/',
			'allowed_types' => 'gif|jpg|png',
			'file_name' => $filename
		]);
		$this->upload->do_upload($name);
	}

	private function deleteFile($id) {
		$data = $this->getDataById($id);
		$filename = $data->photo;
		unlink('./img/gallery/'.$data->photo);
	}

	private function getDataById($id) {
		$data = $this->db->get_where('gallery', [
			'id' => $id
		])->result(); 
		return $data[0];
	}

	private function getPhotoById($id) {
		$data = $this->db->get_where('photo', [
			'id' => $id
		])->result(); 
		return $data[0];
	}

	private function getPhotosByGalleryId($id) {
		$data = $this->db->get_where('photo', [
			'gallery_id' => $id
		])->result(); 
		return $data;
	}

}

