<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuModel extends CI_Model {
	public function getAllMenu()
	{
		$data = $this->db->get('produk');
    return $data->result();
	}
}
?>
