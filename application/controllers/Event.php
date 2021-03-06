<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function show($id) {
		$data = $this->db->get_where('event', [
			'id' => $id
		])->row();

		if ($data == null) {
			echo "halaman tidak ditemukan";
			return;
		} else {
			$this->load->view('pages/layout', [
				'title' => $data->title,
				'page' => 'event/index',
				'content' => $data->text
			]);
		}
	}

}

