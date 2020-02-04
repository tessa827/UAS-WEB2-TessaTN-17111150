<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Model {
	function __construct() {
		parent::__construct();

		$this->load->database();
	}

	function getAll() {
		$get = $this->db->get('mahasiswa');

		return $get->result();
	}

	function insert($data) {
		$insert = $this->db->insert('mahasiswa', $data);

		if ($insert) {
			return 'success';
		} else {
			return 'failed';
		}
	}

	function update($data, $where) {
		$this->db->where($where);
		$update = $this->db->update('mahasiswa', $data);

		if ($update) {
			return 'success';
		} else {
			return 'failed';
		}
	}

	function delete($data) {
		$delete = $this->db->delete('mahasiswa', $data);

		if ($delete) {
			return 'success';
		} else {
			return 'failed';
		}
	}

	function getWhere($data) {
		$get = $this->db->get_where('mahasiswa', $data);

		if ($get->num_rows() > 0) {
			return array('result' => 'success', 'data' => $get->result_array());
		} else {
			return array('result' => 'failed', 'data' => null);
		}
	}
}