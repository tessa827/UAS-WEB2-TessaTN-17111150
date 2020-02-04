<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();

		$this->load->model('User');
		$this->load->model('Mahasiswa');

		if ($this->session->has_userdata('username')) {
			redirect(base_url());
		}
	}

	function index() {
		return $this->load->view('login');
	}

	function proceed() {
		$data = [
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password'))
		];
		$authCheck = $this->User->auth($data);

		if ($authCheck['result'] == 'success') {
			$userData = $authCheck['data'];
			$sessionData = [
				'username' => $userData['username'],
				'level' => $userData['user_type']
			];
			$this->session->set_userdata($sessionData);

			redirect(base_url());
		} else {
			$this->session->set_flashdata('failed', 'Login gagal, silakan periksa kembali username dan password anda.');

			redirect(base_url('login'));
		}
	}
}