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
			'events' 		=> $this->limitData($events, 4),
			'faces' 		=> $faces,
			'about' 		=> $about,
			'vm' 			=> $vm,
			'staffs'		=> $this->limitData($staff, 3),
			'count_people'	=> $countPeople,
			'achievments'	=> $this->limitData($achievment, 4),
			'gallerys'		=> $this->limitData($gallery, 4),
			'extras'		=> $this->limitData($extra, 4),
			'facilitys'		=> $this->limitData($facility, 2),
			'newses'		=> $this->limitData($news, 4),
			'majors'		=> $major,
			'profile'		=> $profile
		]);
	}

	private function limitData($datas, $limit) {
		$output = [];
		foreach($datas as $index => $data) {
			if ($index < $limit) {
				array_push($output, $data);
			}
		}
		return $output;
	}

	private function dataEvent() {
		$data = $this->db->where('is_active', 1)->order_by('created_at', 'desc')->get('event');
		$output = $data->result(); 
		
		# viewable string
		foreach($output as $item) {
			$item->view = strip_tags($item->text);
			$item->view = limit_string($item->view, 30);
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
		$staff = $this->db->order_by('position', 'asc')->get('staff');
		return $staff->result();
	}

	private function countPeople() {
		return [
			'staff' => $this->db->count_all('staff'),
			'students'	=> $this->db->count_all('student')
		];
	}

	private function dataAchievment() {
		$result = $this->db->order_by('created_at', 'desc')->get('achievment');
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
		$result = $this->db->order_by('created_at', 'desc')->get('news');
		return $result->result();
	}

	private function dataGallery() {
		$gallerys = $this->db->order_by('created_at', 'desc')->get('gallery');
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
