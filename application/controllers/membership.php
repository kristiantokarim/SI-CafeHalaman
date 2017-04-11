<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membership extends CI_Controller {
  function  __construct() {
		parent::__construct();
	}

	function index(){
		$data = array();
    echo '<script>console.log("debug1")</script>';
  if($this->input->post('submitmember') && !empty($_FILES['ktp']['name'])){
    $nama = $this->input->post('name');
    $filename = str_replace(' ', '', $nama);
			for($i = 0; $i < 3; $i++){
        echo '<script>console.log("debug2")</script>';
        if ($i == 0) {
          $_FILES['userFile']['name'] = $_FILES['ktp']['name'];
          $imgtag = 'ktp-';
  				$_FILES['userFile']['type'] = $_FILES['ktp']['type'];
  				$_FILES['userFile']['tmp_name'] = $_FILES['ktp']['tmp_name'];
  				$_FILES['userFile']['error'] = $_FILES['ktp']['error'];
  				$_FILES['userFile']['size'] = $_FILES['ktp']['size'];
        } else if ($i == 1) {
          $_FILES['userFile']['name'] = $_FILES['struk']['name'];
          $imgtag = 'struk-';
  				$_FILES['userFile']['type'] = $_FILES['struk']['type'];
  				$_FILES['userFile']['tmp_name'] = $_FILES['struk']['tmp_name'];
  				$_FILES['userFile']['error'] = $_FILES['struk']['error'];
  				$_FILES['userFile']['size'] = $_FILES['struk']['size'];
        } else {
          $_FILES['userFile']['name'] = $_FILES['payment']['name'];
          $imgtag = 'tf-';
  				$_FILES['userFile']['type'] = $_FILES['payment']['type'];
  				$_FILES['userFile']['tmp_name'] = $_FILES['payment']['tmp_name'];
  				$_FILES['userFile']['error'] = $_FILES['payment']['error'];
  				$_FILES['userFile']['size'] = $_FILES['payment']['size'];
        }

        echo '<script>console.log("debug3")</script>';
				$uploadPath = 'uploads/files/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png';
        $filesave = $imgtag.$filename;
        $config['file_name'] = $filesave;
        //echo '<script>console.log("FILENAMEEEE: '.$filename.'")</script>';
				//$config['max_size']	= '100';
				//$config['max_width'] = '1024';
				//$config['max_height'] = '768';

        echo '<script>console.log("debug4")</script>';
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('userFile')){
          echo '<script>console.log("debug5")</script>';
          $ext = $this->upload->data('file_ext');
          echo '<script>console.log("EXTENSIOONNNNNNNNN: '.$ext.'")</script>';
          if ($i == 0) {
            $ktpfile = $imgtag.$filename.$ext;
          } else if ($i == 1) {
            $strukfile = $imgtag.$filename.$ext;
          } else {
            $tffile = $imgtag.$filename.$ext;
          }
				}
			}


      $email = $this->input->post('email');
      $phone = $this->input->post('phone');
      $tab = $this->input->post('memtype');
      $discount = 0;
      $type = "undef";

      if ($tab == "#tab-0") {
        $type = "silver";
        $discount = 5;
      } else if ($tab == "#tab-1") {
        $type = "gold";
        $discount = 10;
      } else if ($tab == "#tab-2") {
        $type = "platinum";
        $discount = 15;
      }

      $insert_data = array (
        'nama_anggota' => $nama,
        'jumlah_potongan' => $discount,
        'id_pengguna' => 1,
        'jenis_anggota' => $type,
        'active' => 0
      );

			if(!empty($insert_data)){
				//Insert files data into the database
				$insert = $this->membermodel->insertMember($insert_data);
				$statusMsg = $insert?'Files uploaded successfully.':'Some problem occurred, please try again.';
        $this->sendMail($nama,$email,$phone,$type,$ktpfile,$strukfile,$tffile);
				$this->session->set_flashdata('statusMsg',$statusMsg);
			}
		}
		$this->load->view('register', $data);
	}

  public function sendMail($name,$email,$phone,$memtype,$ktp,$struk,$transfer) {
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'pbd.fan@gmail.com',
      'smtp_pass' => 'semogasukses',
      'mailtype'  => 'html',
      'charset'   => 'iso-8859-1'
    );

    echo '<script>console.log("KTPPPPP: '.$ktp.'")</script>';
    echo '<script>console.log("STRUKKKK: '.$struk.'")</script>';
    echo '<script>console.log("TFFFFFFFFFFFF: '.$transfer.'")</script>';

    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");

    // Set to, from, message, etc.
    $this->email->from('pbd.fan@gmail.com', 'PBD FAN');
    $this->email->to('arnetthaseptinez@hotmail.com');

    $this->email->subject('New Member Registered');

    $message = "Nama: ".$name."<br>";
    $message .= "E-mail: ".$email."<br>";
    $message .= "Telepon: ".$phone."<br>";
    $message .= "Jenis member: ".$memtype."<br>";

    $this->email->message($message);
    $this->email->attach('uploads/files/'.$ktp);
    $this->email->attach('uploads/files/'.$struk);
    $this->email->attach('uploads/files/'.$transfer);

    $result = $this->email->send();
  }
}
