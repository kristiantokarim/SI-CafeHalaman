<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()	{
		$this->load->model('M_Promo');
		$data['promo'] = $this->M_Promo->getPromo();
		$this->load->view('welcome_message',$data);
	}

	public function menu(){
		$this->load->model('M_Menu');
		$data['menus'] = $this->M_Menu->getAllMenu();
		$data['categories'] = $this->M_Menu->getAllKategori();
		$this->load->view('menu', $data);
	}

	public function descMenu($id) {
		$this->load->model('M_Menu');
		$data['menu_desc'] = $this->M_Menu->getMenuDetails($id);
		$this->load->view('menu-desc',$data);
	}

	public function reservation() {
		$this->load->model('M_Menu');
		$data['categories'] = $this->M_Menu->getAllKategori();
		$data['menus'] = $this->M_Menu->getAllMenu();
		$this->load->view('reservation',$data);	
	}

	public function register() {
		$this->load->view('register');
	}

	public function comments() {
		$email_data = $this->input->post('email');
		$phone_data = $this->input->post('phone');
		$message_data = $this->input->post('message');
		$rating_data = $this->input->post('rating');
		echo $email_data.'\n';
		echo $phone_data.'\n';
		echo $message_data.'\n';
		echo $rating_data.'\n';
	}
}
