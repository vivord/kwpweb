<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$data['title']='Our Services';
		$data['pagetitle']= 'Our Services';
		$this->load->view('theme/header_page',$data);
		
		$this->load->view('service',$data);
		
		$this->load->view('theme/footer');
	}
}
