<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReservationModel extends CI_Model {
	public function getAllMenu()
	{
		$data = $this->db->get('reservasi');
    return $data->result();
	}
}
?>
