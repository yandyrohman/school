<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
        $msg = $this->session->flashdata('msg');
        $this->load->view('login', [
            'msg' => $msg
        ]);
    }

    public function attempt() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $isExist = $this->db->get_where('users', [
			'username' => $username,
			'password' => $password
		])->row();
        if ($isExist) {
            $this->session->set_userdata([
                'has_login' => true,
                'user_id' => $isExist->id
            ]);
            return redirect(base_url('admin/event'));
        } else {
            $msg = '<div class="alert alert-danger">Username atau password salah!</div>';
			$this->session->set_flashdata('msg', $msg);
			return redirect(base_url('login'));
        }
    }

    public function logout() {
        $this->session->unset_userdata(['has_login', 'user_id']);
        return redirect(base_url('/'));
    }

}
