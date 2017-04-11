<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends CI_Controller {
  function index() {
    $data = array();
    $data['categories'] = $this->delivmodel->getAllCategory();
    $categ =  $data['categories'];
    $data['numcateg'] = $this->delivmodel->getNumCategory();
    $numcat = $data['numcateg'];
    //
    // foreach ($categ as $cat) {
    //   $data['categ'.$cat->id_kategori'.'] = $this->delivmodel->getMenuByCategory($cat->id_kategori);
    // }

    $data['menus'] = $this->delivmodel->getAllMenu();
    $data['member'] = $this->delivmodel->getAllMember();
    $this->load->view('orderfood', $data);
  }
}
?>
