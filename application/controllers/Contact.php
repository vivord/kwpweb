<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$data['title']='Contact Us';
		$data['pagetitle']= 'Contact Us';
		$this->load->view('theme/header_page',$data);
		
		$this->load->view('contact',$data);
		
		$this->load->view('theme/footer');
	}
}
