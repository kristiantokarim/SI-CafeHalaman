<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DelivModel extends CI_Model {

  public function getAllCategory() {
    $data = $this->db->get('kategori_produk');
    return $data->result();
  }

  public function getNumCategory() {
    $data = $this->db->query("SELECT * FROM kategori_produk");
    return $data->num_rows();
  }

  public function getMenuByCategory($cid) {
    $data = $this->db->query("SELECT * FROM produk WHERE id_kategori = ".$cid.";");
    return $data->result();
  }

  public function getAllMenu() {
    $this->db->from('produk');
    $this->db->order_by("id_kategori", "asc");
    $query = $this->db->get();
    return $query->result();
  }

  public function getDiscountValue($id) {
    $data = $this->db
    ->select('jumlah_potongan')
    ->where('id_anggota', $id)
    ->get('anggota');
    if ($data->result() != 0) {
      return $data->result_array()[0]['id_anggota'];
    } else {
      return 0;
    }
  }

  public function getAllMember() {
    $data = $this->db->get('anggota');
    return $data;
  }
}
?>
