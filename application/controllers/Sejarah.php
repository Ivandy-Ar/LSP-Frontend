<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/sejarah');
		$this->load->view('user/footer');
	}
}