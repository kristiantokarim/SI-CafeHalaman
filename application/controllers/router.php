<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Router extends CI_Controller {
	public function open_url($url)
	{
		$this->load->view($url);
	}
}
?>
