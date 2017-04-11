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

	public function getUserId($ip) {
		$id_pengg = $this->db->select('id_pengguna')->from('pengguna')->where('ip_address',$ip)->get();
		return $id_pengg->result()[0]->id_pengguna;
	}
}
?>
