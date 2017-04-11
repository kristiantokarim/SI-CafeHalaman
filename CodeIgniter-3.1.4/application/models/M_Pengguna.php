<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pengguna extends CI_Model {
	public function getOrCreatePengguna($ip) {
		$ipProc = '';
		if ($ip == '::1') {
			$ipProc = '127.0.0.1';
		} else {
			$ipProc = $ip;
		}
		$pengguna = $this->db->select('count(*) as countPengguna')->from('pengguna')->where('ip_address' ,(string)$ipProc)->get()->row();
		if ($pengguna->countPengguna > 0) {
			$this->session->set_userdata('ip',$ipProc);
		} else {
			$dat = array(
				'ip_address' => $ipProc
			);
			$this->db->insert('pengguna', $dat);
			$this->session->set_userdata('ip',$ipProc);
		}
	}
}