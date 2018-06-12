<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$this->load->view('theme/header');
		$this->load->view('theme/menu');
		$this->load->view('theme/slider');
		$this->load->view('theme/home_content');
		$this->load->view('theme/footer');
	}
}
