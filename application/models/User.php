<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	function __construct() {
		parent::__construct();

		$this->load->database();
	}

	function auth($data) {
		$check = $this->db->get_where('user', $data);

		if ($check->num_rows() > 0) {
			$data = ['result' => 'success', 'data' => $check->row_array()];
		} else {
			$data = ['result' => 'failed', 'data' => null];
		}

		return $data;
	}

	function insert($data) {
		$insert = $this->db->insert('User', $data);

		if ($insert) {
			return 'success';
		} else {
			return 'failed';
		}
	}
}