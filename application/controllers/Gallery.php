<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function list() {
		$datas = [];
		$gallerys = $this->db->get('gallery')->result();
		foreach ($gallerys as $key => $gallery) {
			## Get Image Gallery thumbnail
			$this->db->where('gallery_id', $gallery->id);
			$image = $this->db->get('photo')->result();

			## Final Result Value
			$datas[$key]['id'] = $gallery->id;
			$datas[$key]['title'] = $gallery->title;
			$datas[$key]['thumbnail'] = ($image) ? $image[0]->photo : 'default.jpg';
			$datas[$key]['text'] = $gallery->text;
			$datas[$key]['count'] = $gallery->count;
			$datas[$key]['created_at'] = $gallery->created_at;
			$datas[$key]['updated_at'] = $gallery->updated_at; 
		}
		
        $title = 'Semua Galeri Foto';
        $this->load->view('pages/layout', [
            'title' => $title,
            'page' => 'gallery/list',
            'content' => $datas,
            'majors' => $this->dataMajor(),
            'profile' => $this->dataProfile(),
            'extras' => $this->dataExtra()
        ]);
	}
    
    public function show($id) {
		$photos = $this->db->get_where('photo', [
			'gallery_id' => $id
		])->result();
		$gallery = $this->db->get_where('gallery', [
			'id' => $id
		])->row();

		if (count($photos) == 0) {
			echo "halaman tidak ditemukan";
			return;
		} else {
			$this->load->view('pages/layout', [
				'title' => $gallery->title,
                'sub' => 'Galeri',
                'sublink' => 'gallery/list',
				'page' => 'gallery/show',
				'photos' => $photos,
				'content' => $gallery->text,
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

