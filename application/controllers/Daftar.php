<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/daftar');
		$this->load->view('user/footer');
	}
}
