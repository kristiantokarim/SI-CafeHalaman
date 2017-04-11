<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {
	public function fetchAllReservation()
	{
		$data = $this->reservationmodel->getAllReservation();
    echo "<h1>FROM CONTROLLER</h1>";
	}

  public function bookTable()
  {
    
  }
}
?>
