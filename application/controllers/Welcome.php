<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index() {
		$events = $this->dataEvent();
		$faces = $this->dataFace();
		$about = $this->dataAbout();
		$vm = $this->dataVm();
		$staff = $this->dataStaff();
		$countPeople = $this->countPeople();
		$achievment = $this->dataAchievment();
		$gallery = $this->dataGallery();
		$extra = $this->dataExtra();
		$facility = $this->dataFacility();
		$news = $this->dataNews();
		$major = $this->dataMajor();
		$profile = $this->dataProfile();

		$this->load->view('home', [
			'events' 		=> $events,
			'faces' 		=> $faces,
			'about' 		=> $about,
			'vm' 			=> $vm,
			'staffs'		=> $staff,
			'count_people'	=> $countPeople,
			'achievments'	=> $achievment,
			'gallerys'		=> $gallery,
			'extras'		=> $extra,
			'facilitys'		=> $facility,
			'newses'		=> $news,
			'majors'		=> $major,
			'profile'		=> $profile
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
		return count($data->result()) != 0 ? $data->result()[0] : [];
	}

	private function dataVm() {
		$visi = $this->db->get_where('vm', ['type' => 'visi'])->result();
		$misi = $this->db->get_where('vm', ['type' => 'misi'])->result();
		return [
			'visi' => count($visi) != 0 ? $visi : [],
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

	private function countPeople() {
		return [
			'staff' => $this->db->count_all('staff'),
			'students'	=> $this->db->count_all('student')
		];
	}

	private function dataAchievment() {
		$result = $this->db->get('achievment');
		return $result->result();
	}

	private function dataExtra() {
		$result = $this->db->get('extra');
		return $result->result();
	}

	private function dataFacility() {
		$result = $this->db->get('facility');
		return $result->result();
	}

	private function dataNews() {
		$result = $this->db->get('news');
		return $result->result();
	}

	private function dataGallery() {
		$gallerys = $this->db->get('gallery');
		if (count($gallerys->result()) != 0) {
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
		} else {
			return [];
		}
	}

	private function dataMajor() {
		$result = $this->db->get('major');
		return $result->result();
	}

	private function dataProfile() {
		$result = $this->db->get('profile');
		return count($result->result()) != 0 ? $result->result()[0] : [];
	}
}
