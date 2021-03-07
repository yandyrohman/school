<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {
		$event = $this->dataEvent();
		$this->load->view('home', [
			'event' => $event
		]);
	}

	public function dataEvent() {
		$this->db->where('is_active', 1);
		
		# ambil 4 data pertama
		$data = $this->db->get('event', 4);
		$output = $data->result(); 
		
		# viewable string
		foreach($output as $item) {
			$item->view = strip_tags($item->text);
			$item->view = substr($item->view, 0, 15).' ...';
		}

		return $output;
	}

}
