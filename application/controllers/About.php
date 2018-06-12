<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$data['title']='About Us';
		$data['pagetitle']= 'ABOUT US';
		$this->load->view('theme/header_page',$data);
		
		$this->load->view('about',$data);
		
		$this->load->view('theme/footer');
	}
}
