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
		$this->load->model('M_Pengguna');
		$data['promo'] = $this->M_Promo->getPromo();
		$this->M_Pengguna->getOrCreatePengguna($_SERVER['REMOTE_ADDR']);
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
		$this->load->model('M_Review');
		$data['categories'] = $this->M_Menu->getAllKategori();
		$data['menus'] = $this->M_Menu->getAllMenu();
		$data['count_menu'] = count($this->M_Menu->getAllMenu());
		$data['menu_desc'] = $this->M_Menu->getMenuDetails($id);
		$data['count_review'] = $this->M_Review->getCountReview($id);
		$this->load->view('menu-desc',$data);
	}

	public function reservation() {
		$this->load->view('reservation');	
	}

	public function register() {
		$this->load->view('register');
	}

	public function comments() {
		$email_data = $this->input->post('email');
		$phone_data = $this->input->post('phone');
		$message_data = $this->input->post('message');
		$rating_data = $this->input->post('rating');
		$id_data = $this->input->post('id_prod');
		$this->load->model('M_Review');
		$this->M_Review->insertReview($_SESSION['ip'],$message_data,$email_data,$rating_data,$id_data);
		$this->descMenu($id_data);
	}
}
