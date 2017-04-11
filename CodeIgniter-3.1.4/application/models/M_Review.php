<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Review extends CI_Model {
	public function insertReview($id, $isi, $nama, $rating, $id_prod)
	{
		$id_pengg = $this->db->select('id_pengguna')->from('pengguna')->where('ip_address',$id)->get();
		$date = date('Y-m-d');
		$date = strtotime(str_replace('-', '/', $date));
		$data = array(
			'id_pengguna' => $id_pengg->result()[0]->id_pengguna,
			'isi_review' => $isi,
			'nama_reviewer' => $nama,
			'created_time' => $date
		);
		$this->db->insert('review', $data);
		$insert_id = $this->db->insert_id();
		$data_fnb = array(
			'id_produk' => $id_prod,
			'id_review' => $insert_id,
			'rating' => $rating
		);
		$this->db->insert('review_fnb', $data_fnb);
	}

	public function getCountReview($id_prod) {
		$rev = $this->db->select('*')->from('review_fnb')->join('review','review_fnb.id_review = review.id_review')->where('id_produk',$id_prod)->get();
		return $rev->result();
	}
}