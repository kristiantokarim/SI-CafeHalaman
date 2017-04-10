<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
	function __construct()	{
	    parent::__construct();
	 	$this->load->database();
	}
	 
	public function index()	{
		$this->db->select("gambarPromo");
		$this->db->from("promo");
		$this->data['promos'] = $this->db->get()->result();
		$this->load->view('index', $this->data);
	}
}