<?php
class MLogin extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function GoLogin($username, $password)
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		// $this->db->where('hak_akses', $hak_akses);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			$row = $query->row();
			$this->load->library('session');
			$this->session->set_userdata('id', $row->id);
			$this->session->set_userdata('username', $row->username);
			// $this->session->set_userdata('nama', $row->nama);
			// $this->session->set_userdata('hak_akses', $row->hak_akses);
			return $row->id;
		} else {
			return false;
		}
	}
}
