<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Menu extends CI_Model {
	public function getAllMenu()
	{
		$query = $this->db->select('id_produk,nama_produk,harga,gambar_produk,nama_kategori')->from('produk')->join('kategori_produk','produk.id_kategori = kategori_produk.id_kategori')->get();
	    return $query->result();
	}

	public function getAllKategori()
	{
		$query = $this->db->get('kategori_produk');
	    return $query->result();
	}

	public function getMenuDetails($id)
	{
		$query = $this->db->select('*')->from('produk')->where('id_produk = '.$id)->get();
	    return $query->result();
	}
}