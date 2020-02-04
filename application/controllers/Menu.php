<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct() {
		parent::__construct();

		$method = $this->router->fetch_method();

		if ($method != 'register') {
			if (!$this->session->has_userdata('username')) {
				redirect(base_url('/login'));
			}
		}

		$this->load->model('Mahasiswa');
		$this->load->model('User');
	}

	function index() {
		$data = [
			'page' => 'dashboard.php',
			'title' => 'Dashboard'
		];

		if ($this->session->userdata('level') == 'mahasiswa') {
			$data['data'] = $this->Mahasiswa->getWhere(['npm' => $this->session->userdata('username')]);
			$data['data'] = $data['data']['data'][0];

			return $this->load->view('profile', $data);
		}

		return $this->load->view('index', $data);
	}

	function mahasiswa() {
		$mahasiswa = $this->Mahasiswa->getAll();
		$data = [
			'page' => 'mahasiswa.php',
			'title' => 'Kelola Data Mahasiswa',
			'mahasiswa' => $mahasiswa
		];

		return $this->load->view('index', $data);
	}

	function insertMahasiswa() {
		$data = [
			'npm' => $this->input->post('npm'),
			'nama_mahasiswa' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'hobi' => $this->input->post('hobi'),
			'pendidikan' => $this->input->post('pendidikan')
		];
		$insert = $this->Mahasiswa->insert($data);

		if ($insert == 'success') {
			$this->session->set_flashdata('success', 'Data mahasiswa berhasil disimpan.');

			redirect(base_url('menu/mahasiswa'));
		} else {
			$this->session->set_flashdata('failed', 'Data mahasiswa gagal disimpan.');

			redirect(base_url('menu/mahasiswa'));
		}
	}

	function detailMahasiswa() {
		$data = [
			'page' => 'mahasiswa-detail.php',
			'title' => 'Detail Mahasiswa'
		];
		$data['data'] = $this->Mahasiswa->getWhere(['npm' => $this->uri->segment('3')]);
		$data['data'] = $data['data']['data'][0];

		return $this->load->view('index', $data);
	}

	function deleteMahasiswa() {
		$data = ['npm' => $this->uri->segment(3)];
		$delete = $this->Mahasiswa->delete($data);

		if ($delete == 'success') {
			$this->session->set_flashdata('success', 'Data mahasiswa berhasil dihapus.');

			redirect(base_url('menu/mahasiswa'));
		} else {
			$this->session->set_flashdata('failed', 'Data mahasiswa gagal disimpan.');

			redirect(base_url('menu/mahasiswa'));
		}
	}

	function editMahasiswa() {
		$data = [
			'page' => 'mahasiswa-edit.php',
			'title' => 'Edit Mahasiswa'
		];
		$data['data'] = $this->Mahasiswa->getWhere(['npm' => $this->uri->segment('3')]);
		$data['data'] = $data['data']['data'][0];

		return $this->load->view('index', $data);
	}

	function updateMahasiswa() {
		$where = ['npm' => $this->uri->segment(3)];
		$data = [
			'npm' => $this->input->post('npm'),
			'nama_mahasiswa' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'hobi' => $this->input->post('hobi'),
			'pendidikan' => $this->input->post('pendidikan')
		];
		$update = $this->Mahasiswa->update($data, $where);

		if ($update == 'success') {
			$this->session->set_flashdata('success', 'Data mahasiswa berhasil diubah.');

			redirect(base_url('menu/mahasiswa'));
		} else {
			$this->session->set_flashdata('failed', 'Data mahasiswa gagal diubah.');

			redirect(base_url('menu/editMahasiswa/' . $this->uri->segment(3)));
		}
	}

	function register() {
		$data = [
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'user_type' => 'mahasiswa'
		];
		$check = $this->Mahasiswa->getWhere(['npm' => $data['username']]);

		if ($check['result'] == 'success') {
			$register = $this->User->insert($data);

			if ($register == 'success') {
				$this->session->set_flashdata('success', 'Registrasi berhasil, silakan login dengan username anda.');

				redirect(base_url('login'));
			} else {
				$this->session->set_flashdata('failed', 'Registrasi gagal.');

				redirect(base_url('login'));
			}
		} else {
			$this->session->set_flashdata('failed', 'NPM yang anda masukkan tidak terdaftar.');

			redirect(base_url('login'));
		}
	}

	function logout() {
		$this->session->sess_destroy();

		redirect(base_url());
	}

	function tes() {
		return $this->load->view('profile');
	}
}