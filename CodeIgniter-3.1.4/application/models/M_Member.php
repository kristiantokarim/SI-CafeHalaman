<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Member extends CI_Model {
	public function getAllMenu()
	{
		$data = $this->db->get('anggota');
    return $data->result();
	}

  public function insertMember($data) {
    $result = $this->db->insert('anggota', $data);
    return $result;
  }
}
?>
