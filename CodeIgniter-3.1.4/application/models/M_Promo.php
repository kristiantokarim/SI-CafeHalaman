<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Promo extends CI_Model {
	public function getPromo()
	{
		$query = $this->db->get('promo', 5);
	    return $query->result();
	}
}