<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lsp extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user/header');
		$this->load->view('user/lsp');
		$this->load->view('user/footer');
	}
}
