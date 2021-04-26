<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {
		$events = $this->dataEvent();
		$faces = $this->dataFace();
		$about = $this->dataAbout();
		$vm = $this->dataVm();
		$staff = $this->dataStaff();
		$count_data = [
			'staff'		=> $this->count_data('staff'),
			'students'	=> $this->count_data('student')
		];
		$achievment = $this->get_result('achievment');
		$gallery = $this->dataGallery();
		$extra = $this->get_result('extra');
		$facility = $this->get_result('facility');
		$news = $this->get_result('news');
		// echo "<pre>";
		// return print_r($gallery);
		$this->load->view('home', [
			'events' 		=> $events,
			'faces' 		=> $faces,
			'about' 		=> $about,
			'vm' 			=> $vm,
			'staffs'		=> $staff,
			'count_data'	=> $count_data,
			'achievments'	=> $achievment,
			'gallerys'		=> $gallery,
			'extras'		=> $extra,
			'facilitys'		=> $facility,
			'news_data'		=> $news
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

	private function dataStaff() {
		$this->db->select("*,
			CASE 
				WHEN position = 'a' THEN 'Kepala Sekolah'
				WHEN position = 'b' THEN 'Wakil Kepala Sekolah' 
				WHEN position = 'c' THEN 'Kepala Jurusan'
				WHEN position = 'd' THEN 'Guru'
				WHEN position = 'e' THEN 'Staff TU'
				WHEN position = 'f' THEN 'Satpam'
			END AS position
		", FALSE);
		$staff = $this->db->get('staff');

		return $staff->result();
	}

	private function count_data($table) {
		$result = $this->db->count_all($table);

		return $result;
	}

	private function get_result($table) {
		$result = $this->db->get($table);

		return $result->result();
	}

	private function dataGallery() {
		$gallerys = $this->db->get('gallery');

		foreach ($gallerys->result() as $key => $gallery) {
			## Get Image Gallery thumbnail
			$this->db->where('gallery_id', $gallery->id);
			$image = $this->db->get('photo')->result();

			## Final Result Value
			$result[$key]['id'] = $gallery->id;
			$result[$key]['title'] = $gallery->title;
			$result[$key]['thumbnail'] = ($image) ? $image[0]->photo : 'default.jpg';
			$result[$key]['text'] = $gallery->text;
			$result[$key]['count'] = $gallery->count;
			$result[$key]['created_at'] = $gallery->created_at;
			$result[$key]['updated_at'] = $gallery->updated_at; 
		}

		return $result;
	}
}
