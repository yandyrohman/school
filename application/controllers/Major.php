<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Major extends CI_Controller {
    
    public function show($id) {
		$data = $this->db->get_where('major', [
			'id' => $id
		])->row();

		if ($data == null) {
			echo "halaman tidak ditemukan.";
			return;
		} else {
			$this->load->view('pages/layout', [
				'title' => $data->name,
				'page' => 'major/show',
				'photo' => $data->photo,
				'content' => $data->text,
				'majors' => $this->dataMajor(),
				'profile' => $this->dataProfile(),
				'extras' => $this->dataExtra()
			]);
		}
	}

	private function dataExtra() {
		$result = $this->db->get('extra');
		return $result->result();
	}

	private function dataMajor() {
		$result = $this->db->get('major');
		return $result->result();
	}

	private function dataProfile() {
		$result = $this->db->get('profile');
		if (count($result->result()) != 0) {
			$output = $result->result()[0];
			$output->facebook = !preg_match('/http/', $output->facebook) ? 'https://'.$output->facebook : $output->facebook;
			$output->youtube = !preg_match('/http/', $output->youtube) ? 'https://'.$output->youtube : $output->youtube;
			$output->instagram = !preg_match('/http/', $output->instagram) ? 'https://'.$output->instagram : $output->instagram;
			$output->twitter = !preg_match('/http/', $output->twitter) ? 'https://'.$output->twitter : $output->twitter;
			return $output;
		} else {
			return [];
		}
	}

}

