<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {
		$events = $this->dataEvent();
		$faces = $this->dataFace();
		$about = $this->dataAbout();
		$vm = $this->dataVm();
		// echo "<pre>";
		// return print_r($vm);
		$this->load->view('home', [
			'events' => $events,
			'faces' => $faces,
			'about' => $about,
			'vm' => $vm
		]);
	}

	private function dataEvent() {
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

	private function dataFace() {
		$data = $this->db->get('face');
		return $data->result(); 
	} 

	private function dataAbout() {
		$data = $this->db->get('about');
		return $data->result()[0];
	}

	private function dataVm() {
		$visi = $this->db->get_where('vm', ['type' => 'visi'])->result()[0];
		$misi = $this->db->get_where('vm', ['type' => 'misi'])->result();
		return [
			'visi' => $visi,
			'misi' => $misi
		];
	}

}
