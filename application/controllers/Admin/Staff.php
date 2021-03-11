<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(['form', 'url']);
	}

	private function preData($data, $id = false) {
    $dataStore = [
      'teacher_number' => $data['teacher_number'],
      'name' => $data['name'],
      'position' => $data['position'],
      'gender' => $data['gender'],
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
    if (isset($_GET['q'])) {
      $datas = $this->db->get_where('staff', [
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
      $datas = $this->db->get('staff', $limit, $offset)->result();
    }
		$msg = $this->session->flashdata('msg');
		$this->load->view('admin/app', [
			'view' => 'admin/staff/index',
			'datas' => $datas,
			'msg' => $msg,
      'page' => $page ?? false,
      'q' => $_GET['q'] ?? ''
		]);
	}

  public function create() {
    $this->load->view('admin/app', [
			'view' => 'admin/staff/form'
		]);
  }

	public function store() {
		$data = $this->input->post();
		$dataStore = $this->preData($data);
		$this->db->insert('staff', $dataStore);

		if (isset($dataStore['photo'])) {
			$this->upload('photo', $dataStore['photo']);
		}

		// back
		$msg = '<div class="alert alert-success">Berhasil tambah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/staff/index'));
	}

	public function edit($id) {
		$data = $this->db->get_where('staff', [
			'id' => $id
		])->row();
		if ($data) {
			$this->load->view('admin/app', [
				'view' => 'admin/staff/form',
				'data' => $data
			]);
		} else {
			$msg = '<div class="alert alert-danger">Data tidak ditemukan</div>';
			$this->session->set_flashdata('msg', $msg);
			return redirect(base_url('admin/staff/index'));
		}
	}

	public function update($id) {
		$data = $this->input->post();
		$dataStore = $this->preData($data, $id);

		if (isset($dataStore['photo'])) {
			$this->upload('photo', $dataStore['photo'], $id);
		}

		$this->db->where('id', $id);
		$this->db->update('staff', $dataStore);

		// back
		$msg = '<div class="alert alert-success">Berhasil ubah data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/staff/index'));
	}

	public function delete($id) {
		$this->deleteFile($id);
		
		$this->db->where('id', $id);
		$this->db->delete('staff');

		// back
		$msg = '<div class="alert alert-success">Berhasil hapus data</div>';
		$this->session->set_flashdata('msg', $msg);
		return redirect(base_url('admin/staff/index'));
	}

  public function show($id) {
    $data = $this->getDataById($id);
    $this->load->view('admin/app', [
      'view' => 'admin/staff/show',
      'data' => $data
    ]);
  }

	private function upload($name, $filename, $id = false) {
		if ($id) {
			$data = $this->getDataById($id);
			unlink('./img/staff/'.$data->photo);
		}
		
		$this->load->library('upload', [
			'upload_path' => './img/staff/',
			'allowed_types' => 'gif|jpg|png',
			'file_name' => $filename
		]);
		$this->upload->do_upload($name);
	}

	private function deleteFile($id) {
		$data = $this->getDataById($id);
		$filename = $data->photo;
		unlink('./img/staff/'.$data->photo);
	}

	private function getDataById($id) {
		$data = $this->db->get_where('staff', [
			'id' => $id
		])->result(); 
		return $data[0];
	}

}

