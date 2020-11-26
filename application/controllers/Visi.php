<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visi extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/visi');
		$this->load->view('user/footer');
	}
}
