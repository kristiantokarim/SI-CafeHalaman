<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MenuController extends CI_Controller {
	public function fetchAllMenu()
	{
		$data = $this->menumodel->getAllMenu();
    echo "<h1>FROM CONTROLLER</h1>";
	}
}
?>
